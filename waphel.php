<?php
//init vars
$a = 0; #IPv4 octet 1
$b = 0; #IPv4 octet 2
$c = 0; #IPv4 octet 3
$d = 0; #IPv4 octet 4 defalt is zero
$e = 0; #Number of subnets
$AMTOFSUBNETex = 0;
$nummin = 1;
$nummax = 255;
$EnumMax = 128;
$customsubnet = "";
$ipClass = "";
$answer = "";

$a = 192;#rand ( $nummin , $nummax );
$b = 10;#rand ( $nummin , $nummax );
$c = 10;#rand ( $nummin , $nummax );
$e = 14;#rand ( $nummin , $EnumMax);
//Find how many Bytes turned on
$amtsubnet = $e;
#finds total number of requred subnets
    if ($amtsubnet == 1)
	{$AMTOFSUBNETex = 0;}#Binary 1
    if ($amtsubnet == 2)
	{$AMTOFSUBNETex = 1;}#Binary 2
    if ($amtsubnet  == 3 or $amtsubnet  == 4)
	{$AMTOFSUBNETex = 2;}#Binary 4
    if($amtsubnet  >= 5 && $amtsubnet  <= 8)
	{$AMTOFSUBNETex = 3;}#Binary 4
    if($amtsubnet  >= 9 && $amtsubnet  <=16)
	{$AMTOFSUBNETex = 4;}#Binary 4
    if ($amtsubnet  >= 17 && $amtsubnet  <= 32)
    {$AMTOFSUBNETex = 5;}#Binary 4
    if($amtsubnet  >= 33 && $amtsubnet  <= 64)
    {$AMTOFSUBNETex = 6;}#Binary 4
    if($amtsubnet  >= 65 && $amtsubnet  <= 128)
    {$AMTOFSUBNETex = 7;}#Binary 4

$AMTOFSUBNETtotal = pow(2,$AMTOFSUBNETex);

$answer = "<table><tr><td>";

$answer = "<br><br>".$answer."Amount of bytes turned on :</td><td>".$AMTOFSUBNETex."</td></tr><tr><td> About of possable subnets:</td><td>".$AMTOFSUBNETtotal."</td></tr>";
#checking IP class
  if($a <= 127)
	{$ipClass = "A";
	}
  if($a  >= 128 && $a  <=191)
	{$ipClass = "B";}
  if($a  >= 192 && $a  <=223)
	{$ipClass = "C";}
  if($a  >= 224 && $a  <=239)
	{$ipClass = "D";}
  if($a  >= 240 && $a  <=255)
	{$ipClass = "B";}
$answer = $answer."<tr><td>The Network class is:</td><td>".$ipClass."</td></tr>";




//    if ($AMTOFSUBNETex = 1) $customsubnet = "128";
//    if ($AMTOFSUBNETex = 2) $customsubnet =  "192";
//    if ($AMTOFSUBNETex = 3) $customsubnet =  "224";
//    if ($AMTOFSUBNETex = 4) $customsubnet =  "240";
//    if ($AMTOFSUBNETex = 5) $customsubnet =  "248";
//    if ($AMTOFSUBNETex = 6) $customsubnet =  "252";
//    if ($AMTOFSUBNETex = 7) $customsubnet =  "254";
//    if ($AMTOFSUBNETex = 8) $customsubnet =  "255";
//    if ($AMTOFSUBNETex = 9) $customsubnet = "255.128";
//    if ($AMTOFSUBNETex = 10)$customsubnet = "255.192";
//    if ($AMTOFSUBNETex = 11)$customsubnet = "255.224";
//    if ($AMTOFSUBNETex = 12)$customsubnet = "255.240";
//    if ($AMTOFSUBNETex = 13)$customsubnet = "255.248";
//    if ($AMTOFSUBNETex = 14)$customsubnet = "255.252";
//    if ($AMTOFSUBNETex = 15)$customsubnet = "255.254";
//    if ($AMTOFSUBNETex = 16)$customsubnet = "255.255";
//    if ($AMTOFSUBNETex = 17)$customsubnet = "255.255.128";
//    if ($AMTOFSUBNETex = 18)$customsubnet = "255.255.192";
//    if ($AMTOFSUBNETex = 19)$customsubnet = "255.255.224";
//    if ($AMTOFSUBNETex = 20)$customsubnet = "255.255.240";
//    if ($AMTOFSUBNETex = 21)$customsubnet = "255.255.248";
//    if ($AMTOFSUBNETex = 22)$customsubnet = "255.255.252";
//    if ($AMTOFSUBNETex = 23)$customsubnet = "255.255.254";
//    if ($AMTOFSUBNETex = 24)$customsubnet = "255.255.255";





$answer = $answer."<tr><td>The Custom Subnet mask is:</td><td>".$customsubnet."</td></tr>";
$answer = $answer."</table>";
?>
<html>
<style>

html   {text-align: center;
margin: auto; }
body { background-image:url(img/zxcv.jpg);
background-position:center; background-repeat:no-repeat;
text-align: center;}
table{text-align: center; background-color:white;margin:0 auto; border-color:#999;  }
tr,td{text-align: center; background-color:white;margin:0 auto;}

</style>
<table>
<tr >
<td  colspan="2"><b>Waphel_Subnetting</b></td>
</tr>
<tr >
<td ><br>Network:</td><td><br><?php echo $a,".",$b,".",$c,".",$d; ?>
</tr>
<tr >
<td >
<br>Amount <br>of<br> Subnets:
</td>
<td ><?php echo $e; ?></td>
</tr>





<tr  ><td colspan="2">
<a id="show_id" onClick="document.getElementById('spoiler_id').style.display=''; document.getElementById('show_id').style.display='none';" class="link"><img src="img/buttion.gif" width="150" height="100"></a><span id="spoiler_id" style="display: none"><a onClick="document.getElementById('spoiler_id').style.display='none'; document.getElementById('show_id').style.display='';" class="link"><img src="img/buttion.gif" width="150" height="100"><br>[Click To Hide]</a><br><?php echo $answer; ?></span>
</td></tr>
<tr align="center">
<td align="center" colspan="2">
<form action="waphel.php" method="post"><button value="New Problem">New Problem</button></form></td></tr> 
</table>

<?php include "credit.php"; ?>
</html>