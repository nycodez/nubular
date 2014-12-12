<h1>Income</h1>

<h2>Invoices</h2>

<select class=basicDropdown>
 <option>Actions</option>
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
 <option>New Invoice</option>
 <option>Export Current View</option>
 <option>Invoice Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Customer</th>
   <th>Status</th>
   <th>Date Due</th>
   <th>Invoice Total</th>
   <th>Open Balance</th>
  </tr>
 </thead>
 <tbody>
<?php
$contacts[] = array
(
 'name' => 'Schmoe Pizza',
 'status' => 'UNPAID',
 'dateDue' => '2014-12-25',
 'total' => '99.00',
 'open' => '9.00',
);
foreach($contacts as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox /></td>
   <td>{$v['name']}</td>
   <td>{$v['status']}</td>
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

<h2>Payments Received</h2>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Mark Inactive</option>
 <option>Duplicate</option>
</select>

<select class=basicDropdown>
 <option>Filter</option>
 <option selected>Open</option>
 <option>Unapplied Amount</option>
 <option>Overdue</option>
 <option>Paid</option>
 <option>All Active</option>
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
   <th>Date</th>
   <th>Payment #</th>
   <th>Reference #</th>
   <th>Customer</th>
   <th>Method</th>
   <th>Amount Paid</th>
   <th>Unapplied Amount</th>
  </tr>
 </thead>
 <tbody>
<?php
$payments[] = array
(
 'date' => '2014-11-29',
 'id' => '123',
 'name' => 'Poland Springs',
 'reference' => '',
 'method' => 'Check',
 'amount' => '119.00',
 'unapplied' => '20.00',
);
foreach($payments as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox /></td>
   <td>{$v['date']}</td>
   <td>{$v['id']}</td>
   <td>{$v['reference']}</td>
   <td>{$v['name']}</td>
   <td>{$v['method']}</td>
   <td>{$v['amount']}</td>
   <td>{$v['unapplied']}</td>
  </tr>
";
}
?>
 </tbody>
</table>

<br />
<br />

<h2>Estimates</h2>

<select class=basicDropdown>
 <option>Actions</option>
 <option>Convert</option>
 <option>Mark Lost</option>
 <option>Mark Inactive</option>
 <option>Duplicate</option>
</select>

<select class=basicDropdown>
 <option>Filter</option>
 <option selected>New</option>
 <option>Converted</option>
 <option>Lost</option>
 <option>All Active</option>
 <option>Inactive</option>
</select>

<select class=specialDropdown>
 <option></option>
 <option>New Estimate</option>
 <option>Export Current View</option>
 <option>Estimate Settings</option>
</select>

<table class=basicListTable>
 <thead>
  <tr>
   <th><input type=checkbox onclick="toggle(this.parent);" /></th>
   <th>Customer</th>
   <th>Salesman</th>
   <th>Status</th>
   <th>Date</th>
   <th>Amount</th>
  </tr>
 </thead>
 <tbody>
<?php
$estimates[] = array
(
 'name' => 'Bank of America',
 'salesman' => 'Pug Nugget',
 'status' => 'NEW',
 'date' => '2014-11-25',
 'amount' => '99.00',
);
foreach($estimates as $k => $v)
{
echo "
  <tr>
   <td><input type=checkbox /></td>
   <td>{$v['name']}</td>
   <td>{$v['salesman']}</td>
   <td>{$v['status']}</td>
   <td>{$v['date']}</td>
   <td>{$v['amount']}</td>
  </tr>
";
}
?>
 </tbody>
</table>

