<html><head><meta name="viewport" content="width=device-width"><style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #fieldset style='border: 3px solid dodgerblue;'><center><font color='#000'><b>Official Refer Code :- 167782 </b></font><hr>
<font color='#FAFAD2' size='4px'></font></center></fieldset>

    box-sizing: border-box;
}input[type=submit] {
    width: 60%;
    background-color: Black;
    color: Red;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;}input[type=submit]:hover {
    background-color: green;}div {
    border-radius: 10px;
    background-color: #FAFAD2;
    padding: 30px;
}.header{color: #000000; background-color: Red; margin-bottom: 2px; padding 5px 6px; border: 1px solid #darkred;}.error {background:#FF6347; border:1px solid #FF6347; padding:2px; text-align:center; font-weight:normal; color:Red;}.success {background:#000000; border:1px solid #000000; padding:10px; text-align:center; font-weight:normal; color:#000000;}
</style></head><title></title><body style='background-color: #000000;font-family:Cursive;'><div class='header'><center><font size='10'><b>Hacker Boys</b></font></center></div>
<fieldset style='border: 3px solid Red;'><center><font color='#FF6347'><b>Official Refer Code :- 167782 </b></font><hr>
<font color='#000' size='4px'></font></center></fieldset>

<?php

if(isset($_GET['submit'])){
$pass=$_GET['pass'];



$url="omtechnoweb.com/apps/3190/api/login/";

$data="mobile_no=$no&password=$pwd&imei=$imei";

	$headers[]='Content-length: '.strlen($data).'';
	$headers[]="Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
	$headers[]='Host: liveearnapp.website';
	$headers[]="Connection: Keep-Alive";
	$headers[]="Accept-Encoding: ";
	$headers[]='User-Agent: okhttp/3.4.1';
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$response= curl_exec ($ch);
	$json=json_decode($response,true);
	curl_close ($ch);
		$uid=$json['content']['id'];
	$ref=$json['content']['username'];
	$reff=$json['content']['my_pin'];
	$bal=$json['balance'];
	$sts=$json['message'];
	
	
	if($pass == "HackerBoys"){
	echo "<center><fieldset style='border: 3px dashed #ffd700;'><font color='#bdb76b' size='3'>Status: <font color='green'>$sts </font>
<hr color='#000'>
Name: $output 
<hr color='#000'>
Balance: $bal  
<hr color='#000'>
Ref: $reff
<hr color='#000'>
UniqueID: $ud</font></div></fieldset></center>";


	echo "<center><div class='titl'><b>Select Imp Task</b></div>
	<fieldset style='border: 3px dashed #ffd700;'>
	<form method='GET' action='imp.php'>
					
	<input type='hidden' value='$uid' name='uid'>
   	<input type='hidden' value='$reff' name='reff'>
   	<input type='hidden' value='$ud' name='ud'>
	
	            <input type='submit' name='submit' value='BYPASS VIEW'>
	
	</form></fieldset></cente>";
	
		echo "<center><div class='titl'><b>Select Install Task</b></div>
	<fieldset style='border: 3px dashed #ffd700;'>
	<form method='GET' action='install.php'>
	<input type='hidden' value='$uid' name='uid'>
   	<input type='hidden' value='$reff' name='reff'>
   	<input type='hidden' value='$ud' name='ud'>
	</select>
	
	            <input type='submit' name='submit' value='BYPASS INSTALL'>
	
	</form></fieldset></cente>";
	
	

	}
	else
			{
			echo"<div class='success'><font color='red'>PLESE ENTER VALID ACCEESKEY</font></div>";
			}

}	
	
	
	?>
	
	
