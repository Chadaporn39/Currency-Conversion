 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
 	<title>โปรแกรมแลกเงิน 3 สกุล</title>
 </head>
 <body>
<div class="container" align="center">
	
        <div align="center"><p>โปรแกรมแลกเปลี่ยนเงินตรา</p></div></td>
   
 <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];
  
  switch ($coin) {
 
   case 1:
    	$coin_m=0.03;
    	$sum=$money*$coin_m;
    	echo "จำนวนเงิน: ".number_format($money,2)." บาท  =  ".number_format($sum,2)." สหดอลลาร์สหรัฐอเมริกา (USD)"."<br><br>";
   break;
    
   case 2:
    	$coin_m=3.24;
    	$sum=$money*$coin_m;
    	echo "จำนวนเงิน: ".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เงินเยนของญี่ปุ่น (JPY)"."<br><br>";
   break;
   case 3:
    	$coin_m=32.55;
    	$sum=$money*$coin_m;
    	echo "จำนวนเงิน: ".number_format($money,2)." บาท  =  ".number_format($sum,2)."  เกาหลีวอน (KRW)"."<br><br>";
   break;   
     
  }
?>

	<a href="index.html"><input type="submit" value="กลับ" class="button-submit" /></a>

	</div><!-- container -->

 </body>
 </html>
