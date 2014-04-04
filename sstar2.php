<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ส่งแบบข้อสอบ</title>
<script language="javascript">
function check (){
		  if(document.form1.textsend.value=="")
	      {            alert('กรุณากรอกหมายเลข');	
                       document.form1.textsend.focus();
                         return false; 
		  }			 
		document.form1.submit();	
	}

</script>
</head>
<body bgcolor="#000000">
<center><br><br>
<form  name="form1" action="sstar2.php" method="POST" onSubmit ="JavaScript:return check();">
<font size="+2" color="#FF00FF">กรุณาป้อนตัวเลข:</font><input type="text" name="textsend">
<input type="submit" name="textsubmit" value="ส่ง">
</form>
</center>


<?php 
$star = $_POST['textsend'];

if($star!=""){
    $count="";
 echo "<br>";
 echo "<br>";
 echo"<center>";
 echo"<font size=+2 color=#00FF00>&nbsp;-------------------------- By Flimmee Io Za -----------------------------"; 
 echo "<br>";
 echo "<br>";
	for($i=1;$i<=$star;$i++)
	    {   
		  echo"<font color=#FFFF00>";   
	      echo"<center>";
		  echo $count = $count."*";
		  echo "<br>";
		  $count1=$count;
		 
		}

$str  = "$count1";
$subs = strlen($str);
$count2=substr($count1,0,$subs+8);
echo "********$count2********";
echo "<br>";

$str  = "$count1";
$subs = strlen($str);
$count2=substr($count1,0,$subs+6);
echo "*****$count2*****";
echo "<br>";

$str  = "$count1";
$subs = strlen($str);
$count2=substr($count1,0,$subs+5);
echo "***$count2***";
echo "<br>";

$str  = "$count1";
$subs = strlen($str);
$count2=substr($count1,0,$subs+4);
echo "****$count2****";
echo "<br>";

$str  = "$count1";
$subs = strlen($str);
$count2=substr($count1,0,$subs-0);
echo "$count2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$count2";
echo "<br>";

$str  = "$count1";
$subs = strlen($str);
$count2=substr($count1,0,$subs-1);
echo "$count2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$count2";
		 
$str  = "$count1";
$subs = strlen($str);
$count2=substr($count1,0,$subs-2);		 
echo "<br>";
echo "$count2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$count2";
		
$str  = "$count1";
$subs = strlen($str);
$count2=substr($count1,0,$subs-3);
echo "<br>";
echo "$count2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;$count2";	

 echo "<br>";
 echo "<br>";
 echo"<center>";
 echo"<font size=+2 color=#00FF00>----------------------------------------------------------------------"; 
 echo "<br>";
 echo "<br>";
 }
 ?>

</body>
</html>
