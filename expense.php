<h1>Expense</h1>

<h2>Unpaid Bills</h2>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Mark Paid</option>
 <option>Mark Inactive</option>
 <option>Duplicate</option>
</select>

<select class=basicDropdown>
 <option>Filter</option>
 <option selected>Unpaid</option>
 <option>Overdue</option>
 <option>Paid</option>
 <option>All Active</option>
 <option>Inactive</option>
</select>

<select class=specialDropdown>
 <option></option>
 <option>New Bill</option>
 <option>Export Current View</option>
 <option>Bill Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Vendor</th>
   <th>Date Due</th>
   <th>Bill Total</th>
   <th>Open Balance</th>
  </tr>
 </thead>
 <tbody>
<?php
$bills[] = array
(
 'date' => '2014-12-25',
 'category_id' => '9',
 'category' => 'Electric',
 'reference' => 'Oct 2014 light bill',
 'name' => 'PG&E',
 'status' => 'BILLABLE',
 'total' => '99.00',
);
foreach($bills as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox '></td>
   <td>{$v['name']}</td>
   <td>{$v['dateDue']}</td>
   <td>{$v['total']}</td>
   <td>{$v['open']}</td>
  </tr>
";
}
?>
 </tbody>
</table>

<br />
<br />

<h2>Payments Sent</h2>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Mark Inactive</option>
</select>

<select class=basicDropdown>
 <option>Filter</option>
 <option selected>All Active</option>
 <option>Inactive</option>
</select>

<select class=specialDropdown>
 <option></option>
 <option>New Payment</option>
 <option>Export Current View</option>
 <option>Payment Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Vendor</th>
   <th>Date Due</th>
   <th>Bill Total</th>
   <th>Open Balance</th>
  </tr>
 </thead>
 <tbody>
<?php
$payments[] = array
(
 'name' => 'Patriot Pools',
 'dateDue' => '2014-12-25',
 'total' => '99.00',
 'open' => '9.00',
);
foreach($payments as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox '></td>
   <td>{$v['name']}</td>
   <td>{$v['dateDue']}</td>
   <td>{$v['total']}</td>
   <td>{$v['open']}</td>
  </tr>
";
}
?>
 </tbody>
</table>

<br />
<br />

<h2>Spending</h2>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Mark Inactive</option>
 <option>Duplicate</option>
</select>

<select class=basicDropdown>
 <option>Filter</option>
 <option selected>All Active</option>
 <option>Billable</option>
 <option>Non-Billable</option>
 <option>Inactive</option>
</select>

<select class=specialDropdown>
 <option></option>
 <option>New Expense</option>
 <option>Export Current View</option>
 <option>Expense Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Date</th>
   <th>Category</th>
   <th>Reference</th>
   <th>Customer</th>
   <th>Status</th>
   <th>Amount</th>
  </tr>
 </thead>
 <tbody>
<?php
$spending[] = array
(
 'date' => '2014-12-25',
 'category_id' => '9',
 'category' => 'Food & Lodging',
 'reference' => 'Night at the Roxbury',
 'name' => '',
 'status' => 'NON-BILLABLE',
 'total' => '699.00',
);
foreach($spending as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox '></td>
   <td>{$v['date']}</td>
   <td>{$v['category']}</td>
   <td>{$v['reference']}</td>
   <td>{$v['name']}</td>
   <td>{$v['status']}</td>
   <td>{$v['total']}</td>
  </tr>
";
}
?>
 </tbody>
</table>
