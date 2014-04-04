<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>ข้อสอบ</title>
<script language="javascript">
function Fsm(){
	if(document.form1.num.value=="1"||document.form1.num.value=="2"||document.form1.num.value=="3")
	      {            alert('กรุณากรอกหมายเลขมากกว่า 3 ขึ้นไป');	
                       document.form1.num.focus();
                         return false; 
		  }			 
		  if(document.form1.num.value=="")
	      {            alert('กรุณากรอกหมายเลข');	
                       document.form1.num.focus();
                         return false; 
		  }			 
		document.form1.submit();	
	}

</script>
</head>
<style>
	
	input.example2 {
	background: ;
	border: 1px double #0099FF;
	border-radius: 4px;
	box-shadow: 0 0 5px #333;
	color: #333333;
	float: none;
	padding: 4px 15px;
	width: 80px;
	height: 18px;
	outline: none;
	 align:center;}
	input.Button {
	background: ;
	border: 1px double #BCEE46;
	border-radius: 4px;
	box-shadow: 0 0 5px #333;
	color: #333333;
	float: none;
	padding: 4px 15px;
	width: 70px;
	height: 25px;
	outline: none;
	 align:center;} 
	 
</style>
<body >
<form name="form1" action="testnum.php" method="POST" onSubmit ="JavaScript:return Fsm();">
<br><br>
&nbsp;&nbsp;  กรอกตัวเลขมากกว่า 3 ขึ้นไป  :&nbsp;
         <input type="text" name="num" class="example2">&nbsp;
          <input type="submit" value="Ok" class="Button">
<br><br><hr color="#999999" width="90%" size="1"><br>

<?php

 $getnum =$_POST['num'];
if($getnum!="")
{	
       $nump="*";	
       for($i=0;$i<=$getnum;$i++)
        {       if($i==1||$i==2)
	                    {   echo "<center>".$nump;
	                        $nump=$nump."*";
	                        echo "<br>";
						}
	              $ip= $i%5;
	            if($i>2&&$ip!=0)
                 	{       echo "<center>".$nump;
	                        $nump=$nump."**";
                         	echo "<br>";
	                 }
	            if($i>2&&$ip==0)
	               {      echo "<center>".$nump;
                          $nump=$nump."***";
	                      echo "<br>";
	               }	
	    }

	

               $ent = $nump."**********";	
               $c = strlen($ent ); //22
               $e = strlen($nump ); //12
               $ent;

              for($c;$e<=$c;$c=$c-3)
                     {			
	                     echo $ent1 = substr($ent,0,$c);
	                     echo "<br>";	
                	}

               $xx= substr($nump,0,$c);
                echo $xx = $xx."*";
                echo "<br>";	
 
                 $x=($c/3)+1;
                 $x=floor($x);
                 $mumx;
  
                 $e5=$e-2 ;
	             $e4 = $e5%2;
	 
	             if($e4=="0")
	                    {  $e5 =$e5-1; }
	             else if($e4=="1")
	                     { $e5 ; }
                   $e5;
             for($ll=0;$e5>=$ll;$ll++)
                    {  echo "*";
	              	   if($ll==$x)
                   	     { 
                    	 for($l2=0;$ll>$l2;$l2++)
	                        {   echo "&nbsp;";  }
	
                         }
	                  }
		
		     echo "<br>";
		     $x1=($c/3);
	         $x1=floor($x1); 
	         $e5 =$e5-2;
	                 for($l3=0;$e5>=$l3;$l3++)
	                     {   echo "*"; 
                             if($l3==$x1)
                                  	 {  
                                 	 for($l4=0;$x>=$l4;$l4++)
	                                       {   echo "&nbsp;&nbsp;&nbsp;";  }	
                                 	}
	                     }
                  echo "<br>";
				 $e5 =$e5;
	             $x3 =$e5/2;
	             $x3=floor($x3);
	             $x3=$x3-1;	
		         for($l6=0;$e5-1>$l6;$l6++)
	                {   echo "*"; 
	                       if($l6==$x3)
	                               { 
	                                    for($l7=0;$e5>=$l7;$l7++)
	                                           {   echo "&nbsp;&nbsp;&nbsp;";  }
	                            	}
              	}
	
	    echo "<br>";
	   $e5 =$e5-2;
	   $x6 =$e5/2;
	  $x6=floor($x6);
	  $x6=$x6-1;		
	if($e5!=0)
	{
		for($l8=0;$e5-1>$l8;$l8++)
     	 {   echo "*"; 
	             if($l8==$x6)
	               { 
	                    for($l9=0;$e5>=$l9;$l9++)
	                    {   echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  }
             	 }
	  }
	
	
	  echo "<br>";
	  $e5 =$e5-2;
	 $x7 =$e5/2;  
	  $x7=floor($x7);
	  $x7=$x7-1;		
               	if($e5!=0)
                   	{
	                 	for($ast6=0;$e5-1>$ast6;$ast6++)
	                      {   echo "*"; 
                            	 if($ast6==$x7)
	                                  {  
	                                       for($l20=0;$e5>=$l20;$l20++)
	                                                 {   echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";  }
                                     }
	                    }
	               }
	
}
}
?>
<br><br><br><br><hr color="#999999" width="30%" size="1">
<br><center> <font color="#999999" size="2"> Create by Patcharapol Poyiam  &nbsp;&nbsp; 24 March 2014
</body>
</html>