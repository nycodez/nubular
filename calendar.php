<h1>Events Calendar</h1>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Send Reminder Email</option>
 <option>Mark Inactive</option>
 <option>Duplicate</option>
</select>

<select class=basicDropdown>
 <option>Filter</option>
 <option selected>All Upcoming</option>
 <option>Meetings</option>
 <option>Lunches</option>
 <option>Dinners</option>
 <option>Inactive</option>
</select>

<select class=specialDropdown>
 <option></option>
 <option>New Calendar Event</option>
 <option>Export Current View</option>
 <option>Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Name</th>
   <th>Owner</th>
   <th>Customer</th>
   <th>Date</th>
   <th>Time</th>
  </tr>
 </thead>
 <tbody>
<?php
$calendar = new Calendar($conn);
$eventsCatalog = $calendar->GetCatalog();
foreach($eventsCatalog as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox '></td>
   <td><a href='/calendar/view/{$v['id']}'>{$v['name']}</a></td>
   <td>{$v['ownerName']}</td>
   <td>{$v['customerName']}</td>
   <td>{$v['eventDate']}</td>
   <td>{$v['eventTime']}</td>
  </tr>
";
}
?>
 </tbody>
</table>

