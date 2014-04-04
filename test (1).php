<!-- Create by Bordin Boonsawad -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
.style2 {color: #0000FF}
-->
</style>

<SCRIPT language=JavaScript>
function check_number() {
	e_k=event.keyCode
	//if (((e_k < 48) || (e_k > 57)) && e_k != 46 ) {
	if (e_k != 13 && (e_k < 48) || (e_k > 57)) {
		event.returnValue = false;
		alert("ต้องเป็นตัวเลขเท่านั้น... \nกรุณาตรวจสอบข้อมูลของท่านอีกครั้ง...");
	}
}
</script>

</head>
<body>
<form action="test.php" method="post" id="form" name="form"  >
    <span class="style2">สร้างรูปดาวตามตัวเลข</span>
 <p>
	 <span class="style1">กรุณากรอกตัวเลข  </span>&nbsp;
	 <input name="input_numstar" type="text" id="input_numstar" size="15" onkeypress="check_number();" />
	  &nbsp;<input name="submit" type="submit" id="submit" size="15" />
  </p>
  	
  <p>&nbsp;</p>
</form>
</body>
</html>

<?php

$num = $_POST[input_numstar];

// create star top part

for ($i=$num; $i>0; $i--) {
    
		$aspace = "";
   		$star   = "";
	
    for($nb = $num - $i; $nb < $num*2 ; $nb++) { $aspace .= "&nbsp;&nbsp;"; }
    
	for($e=$i; $e < $num ; $e++) { $star .= "*"; }
    
	echo $aspace.$star."*".$star.$aspace."<br>\n";
 
	//create star body part
		if($i==1){
	
			for ($ii=0; $ii<$num-1; $ii++) {
					
					$aspace = "";
    				$star   = "";
	
    		for($nb = $num - $ii; $nb < $num; $nb++) {$aspace .= "&nbsp;&nbsp;";}
    		
			for($e=$ii; $e<$num*2; $e++) {$star .= "*";}
				
				 echo $aspace.$star."*".$star.$aspace."<br>\n";
				
	// create star bottom part
				 
				 if($ii==$num-2){
					for ($j=0; $j<=$num; $j++) {
						
						$aspace = "";
    					$star   = "";
						$str = "";
	
    				for($nb = $num - $j; $nb >0; $nb--) {$aspace .= "*";}
    		
					for($e=$j; $e>=0; $e--) {$star .= "&nbsp;&nbsp;";}
					
					for($s=$num-($num-1); $s<$num; $s++) {$str .= "&nbsp;&nbsp;";}
				
				 		echo $str.$aspace.$star."&nbsp;&nbsp;".$star.$aspace."<br>\n";
				}
			}
		}
	}
}


?>