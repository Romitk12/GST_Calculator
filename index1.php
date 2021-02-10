<!doctype html>
<html lang="en" class="no-js">

<head>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

  <link rel="stylesheet" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <style>
    .online_hra_calc {
  display: block;
    border: none;
    padding: 12px 0 6px 0;
    margin: 0;
    font-size: 30px;
    color: #005387;
    text-align: left;
    font-weight: 400;
    cursor: none;
    text-indent: 0;    cursor: auto;
    padding-left: 50px;
}
.hra_paragraph {
      text-align: justify;
    font-size: 18px;
    line-height: 25px;
    padding: 0px 0px 10px;
       color: #404b52;    list-style-position: inside;
       padding-left: 50px;
       padding-right: 50px;
     }
.table-wrap table {
    border-collapse: collapse;
    width: 93.5%;
    margin: 15px 0px;
  border: 1px solid #ff0;
  margin-left: 50px;


}
 .table-wrap table tr:first-child td {
    background: #f5f9fc;
    font-weight: 600;
    font-size: 18px;
    text-align: center;
}
 .table-wrap table td{
   color: #404b52;
       line-height: 18px;
    border: 1px solid #ccc;
    padding: 7px;
    width: 25%;
    vertical-align: middle;
   text-align: center;
   font-size: 18px;
}
.hra_paragraph a, .hra_paragraph a strong {
    color: #0065ff;
    text-decoration: none;
}
.navigation ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#00BFFF;
}

.navigation li {
  float: left;
}

.navigation li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 16px;
  text-decoration: none;
}

.navigation li a:hover {
  background-color:blue;
}

.top_nav {
}

.top_nav ul {
  list-style-type: none;
  margin: 0;
  padding-bottom: 0;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    padding-left:350px;
    border:green;
}

.styled-table thead tr {
    background-color:blue;
    color: #00BFFF;
    text-align: center;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.styled-table1 {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    padding-left:350px;
    border:green;
}

.styled-table1 thead tr {
    background-color:blue;
    color: #00BFFF;
    text-align: center;
}
.styled-table1 th,
.styled-table1 td {
    padding: 12px 15px;
}
.styled-table1 tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table1 tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table1 tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table1 tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}

.top_nav li {
  display: inline;
  float: right;
    padding-right:5px;
}

.w3-container{
  border-style: groove;
  height: 400px;
  width: 60%;
}

.flex_container{


  display: flex;
  flex-direction:column;
  background-color: #ffff;
  border-radius: 10px;
  border-spacing: 20px;
}

.item{

  background-color: #D3D3D3;
  padding-left: 10px;
  padding-right: 10px;
  margin-right: 25px;
  margin-left: 25px;
  border-radius: 10px;
  position: relative;top: 10px;
  margin-top: 25px
}

.slabSelect select{
      width: 300px;
      height: 50px;
      font-size: 20px;
    }

.int_box{
  width: 150px;
  height: 40px;
  display: inline-block;
  float: right;
  position: relative;right: 50px;
  position: relative;top: 20px;
  font-size: 25px;
}

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">GST INFO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">login</a>
            </div>
      </li>
      <a class="nav-link" href="MyAccount1.php">My Account<span class="sr-only">(current)</span></a>
    </ul>
    
  </div>
</nav>
  <div class="navigation">
  <ul>
  <li style="padding-left: 50px;"><a class="active" href="#home"></a></li
</ul>
</div>
<br><br>
<div class="w3-container" style = "position:relative; left:50px; display: inline-block;">
  <h2 style="text-align: center; color: #005387;">GST Calculator</h2>
  <hr>
  <form>
  <p style="float: left; font-size: 25px;">Rate:</p>
  <div class="slabSelect" style="display: inline-block;float: right;padding-right: 50px;padding-top: 18px;">
    <select name="gst_rate" id="gst_rate" onchange="myFunction(event,this)">
      <option value="">Select GST Rates</option>
      <option value="3">3%</option>
      <option value="5">5%</option>
      <option value="12">12%</option>
      <option value="28">28%</option>
      </select>
  </div>
  <br><br><br><br><br>

  <div class="slidecontainer">

  <p style="float: left; font-size: 25px;">Profit:</p>
  <input type="number" id="quantity1" name="quantity1" min="0" max="100" class="int_box" value="0" oninput="this.form.myRange1.value=this.value" onchange="myFunction(event,this)"/>
  <br><br>
  <input type="range" min="0" max="100" value="0" class="slider" id="myRange1"  name="myRange1" style="float: left; position: relative;bottom: 20px; width: 65.4%;" oninput="this.form.quantity1.value=this.value" onchange="myFunction(event,this)"/>
  <br><br><br>
  <p style="float: left;font-size: 25px;">Enter you Amount: </p>
  <input type="number" id="quantity2" name="quantity2" min="0" max="1000000" class="int_box" value="0" oninput="this.form.myRange2.value=this.value" onchange="myFunction(event,this)"/>
  <br><br>
  <input type="range" min="0" max="1000000" value="0" class="slider" id="myRange2" name="myRange2" style="float: left;position: relative;bottom: 20px; width: 50%;" oninput="this.form.quantity2.value=this.value" onchange="myFunction(event,this)"/>
  <br><br>
  </form>
</div>
</div>
<div class="w3-container" style="position:relative; right: 50px; float: right; display: inline-block; width: 30%;">
  <div class="flex_container">
    <div class="item">
    <p style="font-size: 20px;">SGST: <span id="sgst" style="float: right;"></span><span style="float: right;">Rs.</span></p>
  </div>
    <div class="item">
    <p style="font-size: 20px;">CGST: <span id="cgst" style="float: right;"></span><span style="float: right;">Rs.</span></p>
  </div>
    <div class="item">
    <p style="font-size: 20px;">TAX: <span id="tax" style="float: right;"></span><span style="float: right;">Rs.</span></p>
  </div>
    <div class="item">
    <p style="font-size: 20px;">AMOUNT: <span id="amount" style="float: right;"></span><span style="float: right;">Rs.</span></p>
  </div>
    </div>
</div>
<h2 class="online_hra_calc">What is GST?</h2>
<p class="hra_paragraph">Goods and Services Tax (GST) is an indirect tax imposed in the supply of goods and services in India.  Replacing all the indirect taxes in India, from 1<sup>st</sup> July 2017 GST has come up as a single taxation system in the country. GST is a destination, comprehensive and multi-stage based tax imposed on every value addition.  In the budget session in the year 2017, the GST Act was passed by the Central Government which was further approved by the Parliament on March 29<sup>Th</sup>, 2017. Some of the indirect taxes that are abolished are VAT, Central Excise Duty, Octroi and Entry Tax.</p>
<p class="hra_paragraph">The goods and services tax are divided into five different tax rates i.e. 0%, 5%, 12%, 18% and 28%. Nevertheless, there are some products which are not taxed under GST such as alcoholic drinks, petroleum and electricity. The individual state government implies tax on these products based on the previous tax regime. In order to get registered under GST, the large and small organization requires having GST identification number. In case of any transaction of any kind of sales within inter-states, integrated GST is charged.  In case of any kind of sales made intra-state then central GST, as well as State GST, is imposed.</p>
<h2 class="online_hra_calc">What is the Different Tax Heads Under GST?</h2>
<p class="hra_paragraph">GST is categorized under four different heads. Let’s take a look at the different types of GST collected by Government.</p>
<ul>
<li class="hra_paragraph"><strong>Central GST</strong>: Collected by the Central Government.</li>
<li class="hra_paragraph"><strong>State GST:</strong> Collected by State Government.</li>
<li class="hra_paragraph"><strong>Union Territory GST:</strong> Collected by Union Territory Government.</li>
<li class="hra_paragraph"><strong>Integrated GST:</strong>  Collected by the Central Government for imports and inter-state transaction. </li>
</ul>
<p class="hra_paragraph">Integrated Goods and Services Tax is imposed for interstate supplies where the location of the supplier is in a different state as compared to the place of supply. An equal rate of SGST and CGST which is around half the rate of GST is applicable as IGST for intrastate supply wherein the location of supplier and place of supply is in the same state.</p>
<h2 class="online_hra_calc">What is GST calculator?</h2>
<p class="hra_paragraph">GST calculator is a simple and easy online tool which is used to calculate GST payable for a quarter or month.</p>
<h2 class="online_hra_calc">How is GST Computed?</h2>
<p class="hra_paragraph">With the integrated system of taxation, the taxpayers can now know the tax imposed at different points for different goods and services under <a href="/income-tax/gst/">GST rule</a>. For the computation of GST, the taxpayer should know the applicable GST rates to different categories. The calculation of GST can be explained by a simple example.</p>
<p class="hra_paragraph">If services or goods are sold at Rs1,000 and the applicable GST rate of 18%, then the net calculated price will be- 1000+(1,000x(18/100)=1,000+180=Rs.1,180.</p>
<p class="hra_paragraph">How to Calculating GST using the GST Calculation Tool?</p>
<p class="hra_paragraph">GST can be calculated by following two simple steps:</p>
<p class="hra_paragraph"><strong>Step1</strong>- Enter the respective details:</p>
<ul class="gst_listing">
<li class="hra_paragraph">Net price of goods and services</li>
<li class="hra_paragraph">Applicable GST rates such as 5%,12%,18% and 28%.</li>
</ul>
<p class="hra_paragraph"><strong>Step2</strong>- Click on the compute button. The GST calculator will show the tax amount for different tax heads SGST, CGST and IGST along with the gross/final price of services and goods to be billed.</p>
<h2 class="online_hra_calc">Advantages of GST Calculator</h2>
<p class="hra_paragraph">With the help of GST calculator, the taxpayers can determine the net and gross price of the product based on percentage GST rates.  With the help of GST calculator, one can compute the IGST accurately as it helps to bifurcate the rate between CGST and SGST. With the help of GST calculator, one can not only save time but can also avoid making an error while calculating the total cost of goods and services.  </p>
<h2 class="online_hra_calc">GST Calculation Formula</h2>
<p class="hra_paragraph">In order to calculate GST, an individual can use the below-mentioned formula:</p>
<h3 class="online_hra_calc">To add GST to the Base Amount,</h3>
<p class="hra_paragraph">GST Amount= (Original Cost X GST %) /100</p>
<p class="hra_paragraph">Net Price= Original Cost +GST Amount</p>
<h3 class="online_hra_calc">To remove GST from the Base Amount,</h3>
<p class="hra_paragraph">GST Amount= Original Cost-(original cost X (100/(100+GST%)))</p>
<p class="hra_paragraph">Net Price= Original cost-GST Amount</p>
<h2 class="online_hra_calc">What is Inclusive GST amount?</h2>
<p class="hra_paragraph">Goods and Services Tax inclusive amount denotes to the products total value after inclusion of GST amount in the original product value. The inclusive tax is not charged sdoes not chargerom the customer.</p>
<h2 class="online_hra_calc">What is Exclusive GST amount?</h2>
<p class="hra_paragraph">Goods and Services Tax exclusive amount denotes to product value subtracting the amount of GST from the inclusive GST product value.</p>
<h2 class="online_hra_calc">Examples for Understanding GST Calculation</h2>
<p class="hra_paragraph">Let’s take a look at a simple illustration for GST calculation:</p>
<div class="styled-table1">
<table>
<tbody>
<tr>
<td width="213">
<p><strong>Particulars </strong></p>
</td>
<td width="213">
<p><strong>Rate (%)</strong></p>
</td>
<td width="213">
<p><strong>Amount</strong></p>
</td>
</tr>
<tr>
<td width="213">
<p>Invoice Value</p>
</td>
<td rowspan="3" width="213">
<p>12%</p>
</td>
<td width="213">
<p>100,000</p>
</td>
</tr>
<tr>
<td width="213">
<p>GST</p>
</td>
<td width="213">
<p>12,000</p>
</td>
</tr>
<tr>
<td width="213">
<p>Price charged on invoice</p>
</td>
<td width="213">
<p>1,12,000</p>
</td>
</tr>
</tbody>
</table>
</div>
<h2 class="online_hra_calc">Manufacturers GST Calculation:</h2>
<div class="styled-table" style="background-image: url('gst.jpg'); background-repeat: no-repeat;  background-position: center ;background-size: 90% 110%;">
<table>
<tbody>
<tr>
<td width="160">
<p><strong>Particulars</strong></p>
</td>
<td width="160">
<p><strong>Rate (%)</strong></p>
</td>
<td width="160">
<p><strong>Amount Pre-GST</strong></p>
</td>
<td width="160">
<p><strong>Amount Under GST</strong></p>
</td>
</tr>
<tr>
<td width="160">
<p>Product Cost </p>
</td>
<td width="160">
<p>-</p>
</td>
<td width="160">
<p>2,00,000</p>
</td>
<td width="160">
<p>2,00,000</p>
</td>
</tr>
<tr>
<td width="160">
<p>Excise Duty</p>
</td>
<td width="160">
<p>12.05%</p>
</td>
<td width="160">
<p>25,000</p>
</td>
<td width="160">
<p>Nil</p>
</td>
</tr>
<tr>
<td width="160">
<p>Profit</p>
</td>
<td width="160">
<p>10%</p>
</td>
<td width="160">
<p>20,000</p>
</td>
<td width="160">
<p>20,000</p>
</td>
</tr>
<tr>
<td width="160">
<p><strong>Total</strong></p>
</td>
<td width="160">
<p><strong>-</strong></p>
</td>
<td width="160">
<p><strong>2,45,000</strong></p>
</td>
<td width="160">
<p><strong>2,20,000</strong></p>
</td>
</tr>
<tr>
<td width="160">
<p>CGST</p>
</td>
<td width="160">
<p>6%</p>
</td>
<td width="160">
<p>Nil</p>
</td>
<td width="160">
<p>13,200</p>
</td>
</tr>
<tr>
<td width="160">
<p>VAT</p>
</td>
<td width="160">
<p>12.50%</p>
</td>
<td width="160">
<p>30,625</p>
</td>
<td width="160">
<p>Nil</p>
</td>
</tr>
<tr>
<td width="160">
<p>SGST</p>
</td>
<td width="160">
<p>6%</p>
</td>
<td width="160">
<p>Nil</p>
</td>
<td width="160">
<p>13,200</p>
</td>
</tr>
<tr>
<td width="160">
<p>Final Invoice to the wholesaler</p>
</td>
<td width="160">
<p>-</p>
</td>
<td width="160">
<p>2,75, 625</p>
</td>
<td width="160">
<p>2,46,400</p>
</td>
</tr>
</tbody>
</table>
</div>
<p class="hra_paragraph">On cost of per 1000 points, the manufacturer saves Rs.146. Due to change in tax; the manufacturer can save up to 14% on the cost.</p>
<p class="hra_paragraph">This cost reduction benefit for the manufacturer is passed on the wholesalers, retailers and end-consumer.</p>
<h2 class="online_hra_calc">GST Calculation for Retailers and Wholesalers:</h2>
<div class="styled-table" style="background-image: url('gst2.jpg'); background-repeat: no-repeat; background-size: 100% 110%;">
<table >
<tbody>
<tr>
<td width="160">
<p><strong>Particulars</strong></p>
</td>
<td width="160">
<p><strong>Rate (%)</strong></p>
</td>
<td width="160">
<p><strong>Amount Pre-GST</strong></p>
</td>
<td width="160">
<p><strong>Amount Under GST</strong></p>
</td>
</tr>
<tr>
<td width="160">
<p>Product Cost </p>
</td>
<td width="160">
<p>-</p>
</td>
<td width="160">
<p>2,75,625</p>
</td>
<td width="160">
<p>2,46,400</p>
</td>
</tr>
<tr>
<td width="160">
<p>Profit</p>
</td>
<td width="160">
<p>10%</p>
</td>
<td width="160">
<p>27,563</p>
</td>
<td width="160">
<p>24,640</p>
</td>
</tr>
<tr>
<td width="160">
<p><strong>Total</strong></p>
</td>
<td width="160">
<p><strong>-</strong></p>
</td>
<td width="160">
<p><strong>3.03,188</strong></p>
</td>
<td width="160">
<p><strong>2,71,040</strong></p>
</td>
</tr>
<tr>
<td width="160">
<p>CGST</p>
</td>
<td width="160">
<p>6%</p>
</td>
<td width="160">
<p>Nil</p>
</td>
<td width="160">
<p>16,262</p>
</td>
</tr>
<tr>
<td width="160">
<p>VAT</p>
</td>
<td width="160">
<p>12.50%</p>
</td>
<td width="160">
<p>37,898</p>
</td>
<td width="160">
<p>Nil</p>
</td>
</tr>
<tr>
<td width="160">
<p>SGST</p>
</td>
<td width="160">
<p>6%</p>
</td>
<td width="160">
<p>Nil</p>
</td>
<td width="160">
<p>16,262</p>
</td>
</tr>
<tr>
<td width="160">
<p>Final Invoice to the end-consumer</p>
</td>
<td width="160">
<p>-</p>
</td>
<td width="160">
<p>3,41, 086</p>
</td>
<td width="160">
<p>3,03,565</p>
</td>
</tr>
</tbody>
</table>
</div>
<script>
function myFunction() {
  var x=0,y=0,z=0;
  x = document.getElementById("gst_rate").value;
  y = document.getElementById("quantity1").value;
  z = document.getElementById("quantity2").value;
  x=new Number(x);
  y=new Number(y);
  z=new Number(z);
  var sgst=0,cgst=0,tax=0,amt=0,profit=0;
  profit=((y*z)/100);
  amt=(z+profit);
  sgst=((x/2)*amt)/100;
  cgst=sgst;
  tax=(2*cgst);
  amt=(amt+tax);
  document.getElementById("sgst").innerHTML = sgst.toFixed(2);
  document.getElementById("cgst").innerHTML = cgst.toFixed(2);
  document.getElementById("tax").innerHTML = tax.toFixed(2);
  document.getElementById("amount").innerHTML = amt.toFixed(2);
}
</script>
</body>
</html>