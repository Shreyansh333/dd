 <html><head><meta name="viewport" content="width=device-width"><style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;}input[type=submit]:hover {
    background-color: #45a049;}div {
    background-color: #f2f2f2;
    padding: 20px;
}.header{color: #fff; background-color: #99ccff; padding 5px 6px; margin: 1px; border: 1px solid #cc99ff;}.error {background:#ffebe8; border:1px solid #dd3c10; padding:2px; text-align:center; font-weight:normal; color:maroon;}.success {background:#fff8cc; border:1px solid #ffe222; padding:10px; text-align:center; font-weight:normal; color:#000;}</style></head><title></title><body style='background-color:#eee;font-family: Cursive;'>

<?php

error_reporting(0);


echo "<meta http-equiv='refresh' content=6;' />";


$ad= $_GET['ad'];
$uid= $_GET['uid'];


$url='longtimemoney.website/electriccompany/ctsimp.php';




$data="wifi_status=0&name=$ad&impression_status=1&user_id=$uid=&";

$headers[]='Content-length: '.strlen($data).'';
$headers[]='Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[]='User-Agent: Dalvik/2.1.0 (Linux; U; Android 5.0.2; LG-D410 Build/LRX22G.A1455085511)';
$headers[]='Host: longtimemoney.website';
$headers[]='Connection: Keep-Alive';
$headers[]='Accept-Encoding: ';

	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$output= curl_exec ($ch);
	$json=json_decode($output,true);
	curl_close ($ch);
	$tot=$json['totalImpression'];
	$sus=$json['successImpression'];
$c=$json['totalInstall'];
$cl=$json['successInstall'];
$tsj=$json['balance'];
$stat=$json['message'];
$td=$json['status'];
     

echo "<hr style='border: 2px dotted dodgerblue'/><center><font color='#bdb76b' size='5px'><b>$stat</b></font><br/><font color='#bdb76b' size='4px'>Updated Balance is: $tsj</font></center><hr style='border:2px dotted dodgerblue'/>";

	echo "<fieldset style='border: 2px solid dodgerblue;'><font color='#bdb76b'>
	SUCCESSFUL        VIEWS : $sus<hr>
	TOTAL.        VIEWS   : $tot<hr>
	TOTAL INSTALL    : $c<hr>
	 SUCCESSFUL.     INSTALL   : $cl
	</font></fieldset>";
	

		
		

?>
