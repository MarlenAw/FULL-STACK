<?
$cg_user = "Israeli";
$cg_password = "I!fr43s!34";
$cg_terminal_number = "0962922";


$total = 1 * 100; //	1 ILS should be sent as 100 
$currency = "ILS";
$expiry = 1212; //	mmyy
$cvv = "123";
$cardNumber = "1234123412344580";

$xml = "" . 
"<ashrait>
	<request>
		<version>1000</version>
		<language>HEB</language>
		<dateTime/>
		<command>doDeal</command>
		<requestid/>
		<doDeal>
			<terminalNumber>$cg_terminal_number</terminalNumber>
			<cardNo>$cardNumber</cardNo>
			<total>$total</total>
			<id>123456789</id>
			<transactionType>Debit</transactionType>
			<creditType>RegularCredit</creditType>
			<currency>$currency</currency>
			<transactionCode>Phone</transactionCode>
			<validation>Verify</validation>
			<cardExpiration>$expiry</cardExpiration>
			<cvv>$cvv</cvv>
			<user>Test</user>
			<customerData/>
		</doDeal>
	</request>
</ashrait>";

//	Data to send
$postData = "user=$cg_user&password=$cg_password&int_in=$xml";

//	Where to send the data
$url = "https://cguat2.creditguard.co.il/xpo/Relay";



//	Actually sending the data
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_URL, $url );
curl_setopt( $ch, CURLOPT_POST, true);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $postData );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);	//	Return response 
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt( $ch, CURLOPT_FAILONERROR, false);
curl_setopt( $ch, CURLOPT_HTTPHEADER, array("charset=utf-8") );

//	Send request and get reponse
$response = curl_exec( $ch );

//	Encode response from ISO-8859-8 (creditguard Hebrew format) to UTF-8
$encodedResponse = mb_convert_encoding($response,"ISO-8859-8","UTF-8");

//	Convert encoded response to SimpleXML object
$xmlobj = simplexml_load_string( $encodedResponse );

echo "Result is: " . $xmlobj->response->result;
echo "<br>";
echo "Message: " . $xmlobj->response->message;





?>