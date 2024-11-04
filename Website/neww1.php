<?php include ("connection.php");?>
<HTML>
<HEAD>
<TITLE>AVENUE: CREATE ACCOUNT
</TITLE>
<STYLE>
ul
{
margin-left:0px;
margin-top:10px;
list-style: none;
}
ul li
{
float: left;
width: 168px;
height: 40px;
background-color:#E89E00;
opacity:;
line-height: 40px;
text-align: center;
font-size: 20px;
margin-right:2px;
border-radius: 20px;
border: 4px solid gray;
}
ul li a
{
text-decoration:none;
color:#000000;
display:block;
}

ul li a:hover
{
background-color:#0EA101  ;
border-radius: 20px;
}
ul li ul li
{
display:none;
font-size: 15px;
}
ul li:hover ul li
{
display:block;
}
h1
{
color: black;
font-weight:bold;
font-size:50px;
text-align:center;
background-color:#E89E00;
}
#A
{
margin-left:500px;
margin-top:10px;
list-style: none;
}
A li
{
float: left;
width: 168px;
height: 40px;
background-color:#E89E00;
opacity:;
line-height: 40px;
text-align: center;
font-size: 20px;
margin-right:2px;
border-radius: 20px;
border: 4px solid gray;
}
A li a
{
text-decoration:none;
color:#000000;
display:block;
}

A li a:hover
{
background-color:#0EA101  ;
border-radius: 20px;
}
A li A li
{
display:none;
font-size: 15px;
}
A li:hover A li
{
display:block;
}
</STYLE>
</HEAD>
<body background="w1.jpg">
<ul>
<li><a><a href="hms.html">HOME</a></a></li>
</ul>
<h1>AVENUE: CREATE ACCOUNT</h1>

<p>
<pre>
<FORM align="center" action="#" method="post">
<b>
FIRST NAME    :<INPUT TYPE="TEXT" VALUE="" SIZE="30"  onfocus="abc(this)" ID="FN" onblur="fn()">
<BR>
LAST NAME     :<INPUT TYPE="TEXT" VALUE="" SIZE="30" onfocus="abc(this)" ID="LN" onblur="fn2()">
<BR>
ADHAAR        :<INPUT TYPE="TEXT" VALUE="" SIZE="30" onfocus="abc(this)" >
<BR>
PHONE         :<INPUT TYPE="TEXT" VALUE="+91" SIZE="30" onfocus="abc(this)">
<BR>
---------------------------------------------------------------------------------------------------
<BR>
SELECT ACCOUNT TYPE :
<SELECT name="account_type">
<option value="GUEST">GUEST</OPTION>
<option value="STAFF">STAFF</OPTION>
</SELECT>
<BR>

<li><input type="submit" name="create" value="CREATE" ></li>

</form>
<br>
<br>



<script>
function abc(x) {
    x.style.background = "#E89E00";
}
 
function fn()
{
var x = document.getElementById("FN");
x.value=x.value.toUpperCase();
}

function fn2()
{
var x = document.getElementById("LN");
x.value=x.value.toUpperCase();
}

function sdf()
{
  x.style.background = "green";
}

function proceed()
{
var x = document.getElementById("FN").value;
var y = document.getElementById("LN").value;
if(x==""||y=="")
{
alert("KINDLY FILL ALL THE DETAILS");
}else
alert("hello "+x+" "+y+" successfully created your ACCOUNT");
}

</script>
</body>
</html>
 <?php
   if(isset($_POST['create'])) 
 {
        $firstname = $_POST['firstname'];
          $lastname = $_POST['lastname'];
          $aadhar = $_POST['aadhar'];
          $phone   = $_POST['phone'];
          $account_type = $_POST['account_type'];
          
        
     
    $query = "INSERT INTO new (firstname,lastname,aadhar,phone,account_type) VALUES ('$firstname', '$lastname', '$aadhar', '$phone',$account_type)";
    
     $data = mysqli_query($conn,$query);
     if($data) {
        echo "<script>alert('Data Inserted Successfully!!')</script>";
    } else {
        echo "<script>alert('Failed to insert')</script>";
    }
      
   }
?>
