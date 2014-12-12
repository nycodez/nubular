<h1>Reports</h1>
<script type="text/javascript">
function toggle(id) {
	alert(id);
}
</script>
<style>
#reportList ul {
 list-style: none;
 text-transform: capitalize;
 font: 18px Arial;
 padding: 10px;
}
#reportList > ul > li {
 font-weight: bold;
}
#reportList a:hover {
 cursor: pointer;
}
</style>
<div id=reportList>
<ul>
 <li>Accounting
  <ul>
   <li><a onclick="toggle('bankBalances')">Bank Balances</a></li>
   <li><a onclick="toggle('budgetVsActual')">Budget vs. Actual</a></li>
   <li><a onclick="toggle('collections')">Collections</a></li>
   <li><a onclick="toggle('depositDetail')">Deposit Detail</a></li>
   <li><a onclick="toggle('generalLedger')">General Ledger</a></li>
   <li><a onclick="toggle('profitLoss')">Profit & Loss</a></li>
   <li><a onclick="toggle('trialBalance')">Trial Balance</a></li>
   <li><a onclick="toggle('vendorBalanceDetail')">Vendor Balance Detail</a></li>
  </ul>
 </li>
 <li>Customers
  <ul>
   <li><a onclick="toggle('contactList')">Contact List</a></li>
  </ul>
 </li>
</ul>
</div>
