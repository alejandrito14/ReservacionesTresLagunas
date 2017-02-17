<?php
/********************************************************
Name: clspDLMail.php
Version: 0.0.1
Autor name: Edwuard H. Cabrera Rodr�guez
Modification autor name:
Creation date: 19/12/2015
Modification date:
Description: Mail Principal class, Data Layer. 
********************************************************/

require_once (dirname(dirname(__FILE__)) . "../../Resource/phpmailer.php");
require_once (dirname(dirname(__FILE__)) . "../../Resource/smtp.php");


class clspDLMail
 {
	public function __construct() { }
	
	
	public static function sendEmail($vflMail)
	 {
		try{			
			$vmail= new PHPMailer(true);
			//Use SMTP method
			$vmail->isSMTP();
			//Set the hostname of the mail server
			$vmail->Host=$vflMail->hostName;
			//Disable SMTP debugging
			$vmail->SMTPDebug=$vflMail->smtpDebug;
			//Set the SMTP port number - likely to be 25, 465 or 587
			$vmail->Port=$vflMail->smtpPort;
			//Whether to use SMTP authentication
			$vmail->SMTPSecure=$vflMail->smtpSecure;
			//Whether to use SMTP authentication
			$vmail->SMTPAuth=$vflMail->smtpAuth;
			//Username to use for SMTP authentication
			$vmail->Username=$vflMail->userName;
			//Password to use for SMTP authentication
			$vmail->Password=$vflMail->userPassword;
			//Set charset 'utf-8'
			$vmail->CharSet=$vflMail->charSet;
			//Set who the message is to be sent from
			$vmail->setFrom($vflMail->sendingAddress, $vflMail->sendingUserName);
			//Set who the message is to be sent to
			$vmail->addAddress($vflMail->receiverAddress, $vflMail->receiverUserName);
			//Set the subject line
			$vmail->Subject=$vflMail->subject;
			//Set the message HTML
			$vmail->msgHTML($vflMail->message);
			//Send email
			
			if( is_array($vflMail->file)){
				$vtotalFile=count($vflMail->file);				
				for($vi=0;$vi<$vtotalFile;$vi++){
					if(is_file($vflMail->file[$vi]["path"]."".$vflMail->file[$vi]["name"])){						
						$vmail->addAttachment($vflMail->file[$vi]["path"]."".$vflMail->file[$vi]["name"],$vflMail->file[$vi]["name"]);
					}
					else{
						return 0;
					}
				}
			}

			$vmail->send();
			
			return 1;
		}
		catch (phpmailerException $vexception) {
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
	
	
	public function __destruct(){ }
 }
?>