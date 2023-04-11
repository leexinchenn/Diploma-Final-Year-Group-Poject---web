<!DOCTYPE HTML>
<?php include("dataconnection.php"); ?>

<?php
$uid = $_GET["uid"]; 
$discount = $_GET["discount"];
$total = $_GET["total"];
$delivery = $_GET["delivery"];
$totPay = $_GET["totPay"];
?>

<html>
<head>
<title>Bleu Foncé</title>
<link rel="icon" href="http://localhost/fyp/header/tap2.jpg" type="image/png">
<style>
body{
background-color:#FDF5E6;
}

h1{
text-align:center; 
font-size:5.5vw;
}

.bdy{
	width:90%;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
	margin-bottom:5%;
}
label{
font-weight:bold;
line-height:0.1px;
font-size:18px;
}
					
button a:hover{
font-weight:bold;
}

#master{
display:block;
margin-left:auto;
margin-right:auto;
outline:3px solid black;
width:95px;
}

.container{
position:relative;
padding-left:40px;
cursor:pointer;
font-size:20px;
-webkit-user-select:none;
-moz-user-select:none;
-ms-user-select:none;
user-select:none;
color:#708090;
}

/* Hide the browser's default checkbox */
.container input{
position:absolute;
opacity:0;
cursor:pointer;
height:0;
width:0;
}

/* Create a custom checkbox */
.checkmark {
position:absolute;
top:0px;
left:0;
height:20px;
width:20px;
background-color:#eee;
border-radius:15px;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
background-color:#ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
background-color:#2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
content:"";
position:absolute;
display:none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
display:block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
left:6px;
top:3px;
width:3px;
height:7px;
border:solid white;
border-width:0 3px 3px 0;
-webkit-transform:rotate(45deg);
-ms-transform:rotate(45deg);
transform:rotate(45deg);
}
</style>
<script type="text/javascript"> 	
function validateForm()
{
	var d = document.getElementById("check");
	var a = document.payForm.cardnumber.value;
	var b = document.payForm.expmonth.value;
	var c = document.payForm.cvv.value;
	
	if(d.checked != true)
	{
		alert("Please agree with Bleu Fonce's T&C");
		return false;
	}
	else if(a=="" || b=="" || c=="")
	{
		alert("Please fill in all requirement");
		return false;
	}
	else
	{
		alert("PAYMENT SUCCESSFUL!");
	}
}
</script>
</head>

<body>
	<h1>Checkout Payment</h1>
	<hr/><br/><br/>
	
	<div class="bdy">
	<form name="payForm" action="DeliveryStatus.php?uid=<?php echo $uid; ?>&discount=<?php echo $discount; ?>&total=<?php echo $total; ?>&delivery=<?php echo $delivery; ?>&totPay=<?php echo $totPay; ?>&PayType=<?php echo "MASTER"; ?>&PayStatus=<?php echo "Successful"; ?>" target="_blank" onsubmit="return validateForm()" method="post">
		<img src="http://localhost/fyp/icon/masternew.png" id="master" />
		<br/><br/><br/>
		
		<label class="container">
			I agree to Bleu Fonce's Terms & Conditions, Privacy Notice.
			<input type="checkbox" id="check" />
			<span class="checkmark"></span>
		</label>
		<br/><br/><br/>
		
		<!--if payment option is ccard-->
		<div class="card">
			<label>Card Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="cardnumber" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" placeholder="0000-0000-0000-0000" size="22" />
			<br/><br/>
			
			<label>Expiry Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="month" name="expmonth" />
			<br/><br/>
				
			<label>CVV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>	
				<input type="password" name="cvv" minlength="3" maxlength="3" placeholder="xxx" />
		</div>
		<br/><br/><br/><br/>
		<input type="submit" value="Continue" style="width:100px;height:30px;background-color:#191970;color:white;font-size:15px;border-radius:5px; margin-left:auto; margin-right:auto;border-style:none;" />
	</form>
	<br/><br/>
	<div style="margin-left:44%;">
		<img src="http://localhost/fyp/icon/lock.png" width="15px" height="15px" style="float:left;padding-right:5px;">
		<p style="color:black;font-size:13px;line-height:15px; text-align:left;">SECURE PAYMENT</p>
	</div>
	</div>
</body>
</html>