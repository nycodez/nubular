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

<select class=specialDropdown>
 <option></option>
 <option>New Contact</option>
 <option>Export Current View</option>
 <option>Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Name</th>
   <th>Company</th>
   <th>Type</th>
   <th>Email</th>
   <th>Phone</th>
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
   <td>{$v['name']}</td>
   <td>{$v['companyName']}</td>
   <td>{$v['type']}</td>
   <td>{$v['email']}</td>
   <td>{$v['phone']}</td>
   <td>{$v['unpaid']}</td>
   <td>{$v['credit']}</td>
  </tr>
";
}
?>
 </tbody>
</table>

