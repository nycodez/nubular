<style>
.dashboard_main_div {
 border: solid 1px black;
 margin: 10px;
 padding: 10px;
}
#dashboard_receivables table {
 border: solid 1px #999999;
 border-radius: 5px;
 margin: 20px;
 background-color: #eeeeee;
}
#dashboard_receivables td, #dashboard_receivables  th {
 padding: 5px;
}
</style>
<h1>Dashboard<h1>

<h2>Total Receivables</h2>
<div id=dashboard_receivables class=dashboard_main_div>
	<b>Total unpaid invoices: $310.00</b>

	<table>
	<tr>
		<th>Current</th>
		<th>1-15 days</th>
		<th>16-30 days</th>
		<th>31-45 days</th>
		<th>45+ days</th>
	</tr>
	<tr>
		<td>10.00</td>
		<td>40.00</td>
		<td>51.00</td>
		<td>9.00</td>
		<td>200.00</td>
	</tr>
	</table>
</div>

<br />

<h2>Sales and Expenses</h2>
<div id=dashboard_expenses class=dashboard_main_div>
<h3>Total Sales</h3>
0.00
<h3>Total Receipts</h3>
0.00
<h3>Total Expenses</h3>
0.00
</div>
