<?php
if(isset($page[1]))
{
	if($page[1]=='view')
	{
		contactsView($page[2]);
	}
	elseif($page[1]=='settings')
	{
		contactsSettings($page[2]);
	}
}
else
{
	contactsDefault();
}

function contactsSettings()
{
	global $conn;

	$contacts = new Contacts($conn);
	$customFields = $contacts->GetAllCustomFields('entity');

	foreach($customFields as $subgroup => $v)
	{
		echo '<h3>'. $subgroup .'</h3>';

		foreach($v as $kk => $vv)
		{
			echo 'ID <input type=text value="'. $vv['key'] .'" /><br />';
			echo 'Name <input type=text value="'. $vv['name'] .'" /><br />';
			echo 'Label <input type=text value="'. $vv['label'] .'" /><br />';
			echo 'Type <select>
				<option></option>
				<option>Checkbox</option>
				<option>Radio</option>
				<option>Select</option>
				<option>Text</option>
				<option>Textarea</option>
				</select><br />';
			echo 'Options <input type=text value="'. $vv['options'] .'" /><br />';
			echo 'Maxlength <input type=text value="'. $vv['maxlength'] .'" /><br />';
			echo 'Placeholder <input type=text value="'. $vv['placeholder'] .'" /><br />';
			echo 'Default <input type=text value="'. $vv['default'] .'" /><br />';
			echo 'Required <input type=checkbox value="'. $vv['required'] .'" /><br />';
			echo '<br />';
		}
		echo '<hr />';
	}
}

function contactsView($id)
{
	global $conn;
?>
<h1>View Contact</h1>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Recalculate Balances</option>
 <option>Run Collections Report</option>
 <option>Send an Email</option>
 <option>Mark Inactive</option>
</select>

<?php
	$contacts = new Contacts($conn);
	$contactInfo = $contacts->GetInfo($id);
	echo '<div class=basicInfoTable>';
	foreach($contactInfo['custom'] as $k => $v)
	{
		echo '<div>'. showElement($v) .'</div>';
	}
	echo '</div>';
}

function contactsDefault()
{
	global $conn;
?>
<h1>Contacts</h1>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Recalculate Balances</option>
 <option>Run Collections Report</option>
 <option>Send an Email</option>
 <option>Mark Inactive</option>
</select>

<select class=basicDropdown>
 <option>Filter</option>
 <option selected>All Active</option>
 <option>Groups</option>
 <option>Customers</option>
 <option>Vendors</option>
 <option>Inactive</option>
</select>

<select class=specialDropdown  onChange="top.location.href=this.options[this.selectedIndex].value;" >
 <option></option>
 <option value="/contacts/new/">New Contact</option>
 <option value="/contacts/export/">Export Current View</option>
 <option value="/contacts/settings/">Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Name</th>
   <th>Company</th>
   <th>Type</th>
   <th>Owes</th>
   <th>Credits</th>
  </tr>
 </thead>
 <tbody>
<?php
	$contacts = new Contacts($conn);
	$contactsCatalog = $contacts->GetCatalog();
	foreach($contactsCatalog  as $k => $v)
	{
	echo "
	  <tr>
	   <td><input type=checkbox '></td>
	   <td><a href='/contacts/view/{$v['id']}'>{$v['name']}</a></td>
	   <td>{$v['companyName']}</td>
	   <td>{$v['type']}</td>
	   <td>{$v['unpaid']}</td>
	   <td>{$v['credit']}</td>
	  </tr>
	";
	}
?>
 </tbody>
</table>
<?php
}
