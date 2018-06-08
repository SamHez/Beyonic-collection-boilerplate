<?php
//Boiler-Plate Author: Samuel Epodoi
//Api endpoint https://app.beyonic.com/api/collectionrequests

//All strings surrounded in asteriks require data to be inputted.


require_once('*BEYONIC-LIBRARY-HERE*');//Find it here (https://github.com/beyonic/api-docs)
Beyonic::setApiKey("*API-KEY-HERE*");

//Collection Request (This can be a POST coming from your subbmitted form)
if (isset($_POST["*Submit-button-name*"])) {

	//Setting up Posted variables
	$phonenumber = $_POST["*Mobile-Money-NUMBER-To request money from*"];
	$amount = $_POST["*Amount of money to request*"];

//Beyonics Collection Request
$collection_request = Beyonic_Collection_Request::create(array(
  "phonenumber" => $phonenumber,//phone number to request money from
  "amount" => $amount,//amount of money to be sent
  "currency" => "BXC",//This is the beyonic test currency
  "metadata" => array("my_id"=>"123ASDAsd123"),
  "send_instructions" => True//Send instrucions to the mobile-money user
));

print_r($collection_request);  // Examine the returned object

}else{

echo "No data posted";
}
?>