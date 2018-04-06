<?php


$xml=new DomDocument("1.0", "UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("maillist.xml");
if(!$xml){
    $mail=$xml->createElement("records");
    $xml->appendChild($mail);
}
else{
    $mail=$xml->firstChild;
}

if(isset($_POST['submit'])){
    $fullname=$_POST['name'];
    $emailAddress=$_POST['email'];
    $phnumber=$_POST['number'];
    
    $usr=$xml->createElement("user");
    $mail->appendChild($usr);
	
    $name=$xml->createElement("name", $fullname);
    $usr->appendChild($name);
	
    $email=$xml->createElement("email", $emailAddress);
    $usr->appendChild($email);
	
    $num=$xml->createElement("number", $phnumber);
    $usr->appendChild($num);
	

	
    echo"<xmp>".$xml->saveXML()."</xmp>";
    $xml->save("maillist.xml");
}





?>