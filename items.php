<h1>Items & Services</h1>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Mark Inactive</option>
 <option>Duplicate</option>
</select>

<select class=specialDropdown>
 <option></option>
 <option>New Item or Service</option>
 <option>Export List</option>
 <option>Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Name</th>
   <th>Type</th>
   <th>Cost</th>
   <th>Percent</th>
  </tr>
 </thead>
 <tbody>
<?php
$items = new Items($conn);
$itemsServicesCatalog = $items->GetCatalog();
foreach($itemsServicesCatalog as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox '></td>
   <td>{$v['name']}</td>
   <td>{$v['type']}</td>
   <td>{$v['cost']}</td>
   <td>{$v['percent']}</td>
  </tr>
";
}
?>
 </tbody>
</table>

