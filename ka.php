<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?
$ka=3;
$day=30;
$mem=60;
$i=0;
?>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td rowspan="4" align="center">รายชื่อพนักงาน</td>
    <td colspan="55" align="center" valign="middle">&lt; เดือน กันยายน 2556 &gt;</td>
  </tr>
  <tr>
    <td>วันที่</td>
    <?
    for($i=0;$i<=$day;$i++){
    ?>
    <td colspan="3" align="center"><? echo $i;?></td>
   <?
   }
   ?>
  </tr>
  <tr>
    <td>กะ</td>
    <?
    for($i=0;$i<=$day;$i++){
    ?>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <?
    }
    ?>
  </tr>
  <tr>
    <td>รวม</td>
   <?
    for($i=0;$i<=$day;$i++){
    ?>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
   <?
   }
   ?>
  </tr>
 <?
    for($i=0;$i<=$mem;$i++){
    ?>
     <tr>
    <td>นาย ก ก่อสุข</td>
    <td>&nbsp;</td>
    <?
    for($i=0;$i<=$day;$i++){
    ?>
    <td><input type="checkbox" name="checkbox" id="checkbox" /></td>
    <td><input type="checkbox" name="checkbox2" id="checkbox2" /></td>
    <td><input type="checkbox" name="checkbox3" id="checkbox3" /></td>
    <?
    }
    ?>
  </tr>
</table>
</body>
</html>
