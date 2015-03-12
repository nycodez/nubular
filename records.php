<h1>Records</h1>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Reassign</option>
 <option>Mark Inactive</option>
 <option>Duplicate</option>
</select>

<select class=basicDropdown>
 <option>Filter</option>
 <option selected>Assigned to Me</option>
 <option>Open</option>
 <option>Unassigned</option>
 <option>Closed</option>
 <option>All Active</option>
 <option>Inactive</option>
</select>

<select class=specialDropdown>
 <option></option>
 <option>New Record</option>
 <option>Export List</option>
 <option>Record Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Subject</th>
   <th>Entity</th>
   <th>Status</th>
   <th>Date</th>
   <th>Created by</th>
   <th>Assigned to</th>
   <th></th>
  </tr>
 </thead>
 <tbody>
<?php
$records = new Records($conn);
$recordsCatalog = $records->GetCatalog();
foreach($recordsCatalog as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox /></td>
   <td><a href='/records/view/{$v['id']}'>{$v['name']}</a></td>
   <td>{$v['entity_name']}</td>
   <td>{$v['status']}</td>
   <td>{$v['date']}</td>
   <td>{$v['created_name']}</td>
   <td>{$v['assigned_name']}</td>
  </tr>
";
}
?>
 </tbody>
</table>

