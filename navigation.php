<style>

h1{
  font-size: 30px;
  color: #505050;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #505050;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #505050;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

</style>



<section>
  <!--for demo wrap-->
  <h1>Fixed Table header</h1>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th style='font-size:12px;width: 100px;'>Product ID</th>
          <th style='font-size:12px;width: 100px;'>Image</th>
          <th style='font-size:12px;width: 100px;'>Price</th>
          <th style='font-size:12px;width: 100px;'>Quantity</th>
          <th style='font-size:12px;width: 100px;'>Sub total</th>
          <th style='font-size:12px;width: 100px;'>Action<th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style='font-size:12px;width: 100px;'>AAC</td>
          <td style='font-size:12px;width: 100px;'>AUSTRALIAN COMPANY </td>
          <td style='font-size:12px;width: 100px;'>$1.38</td>
          <td style='font-size:12px;width: 100px;'>+2.01</td>
          <td style='font-size:12px;width: 100px;'>-0.36%</td>
          <td style='font-size:12px;width: 100px;'>hie</td>
        </tr>
        <tr>
          <td style='font-size:12px;width: 100px;'>AAC</td>
          <td style='font-size:12px;width: 100px;'>AUSTRALIAN COMPANY </td>
          <td style='font-size:12px;width: 100px;'>$1.38</td>
          <td style='font-size:12px;width: 100px;'>+2.01</td>
          <td style='font-size:12px;width: 100px;'>-0.36%</td>
          <td style='font-size:12px;width: 100px;'>hie</td>
        </tr>
      </tbody>
    </table>
  </div>
</section>




<div class=tbl-content>

<table  cellpadding=0 cellspacing=0 border=0> <tr align = center  style = 'background-color:#e8e9e7; font-size:15px;'>
<thead><tr>
				<th style='font-size:12px;width: 100px;'>Product ID</th>
				<th style='font-size:12px;width: 100px;>Image</th>
				<th style='font-size:12px;width: 100px;>Price</th>
				<th style='font-size:12px;width: 100px;>Quantity</th>
				<th style='font-size:12px;width: 100px;>Sub total</th>
				<th style='font-size:12px;width: 100px;>Action</th>
			</tr></thead>

<tbody><tr>

<td align = 'center'> ".$item['id']."</td>";
<td align = 'center'><img src = '".$item['image']."' height = 120 width = 120></td>";
<td align = 'center'></td>";
<td align = 'center'></td>
<td align = 'center'>".$tp."</td>";
<td align = 'center'> <a href ='Cart.php?action&id=$i'> <img src = 'remove_x.gif' height = 10 width = 10> </a> </td>";
</tr>
<tr>
