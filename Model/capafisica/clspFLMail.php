<?php
/********************************************************
Name: clspFLMail.php
Version: 0.0.1
Autor name: Edwuard H. Cabrera Rodr�guez
Modification autor name: Edwuard H. Cabrera Rodr�guez
Creation date: 18/12/2015
Modification date: 19/12/2015
Description: Mail Principal class, Fisic Layer. 
********************************************************/

class clspFLMail
 {
	public $idMail;
	public $hostName;
	public $smtpDebug;
	public $smtpPort;
	public $smtpAuth;
	public $smtpSecure;
	public $userName;
	public $userPassword;
	public $charSet;
	public $sendingAddress;
	public $sendingUserName;
	public $receiverAddress;
	public $receiverUserName;
	public $subject;
	public $message;
	public $file;
	public function __construct()
	 {
		$this->idMail=0;
		$this->hostName="smtp.gmail.com";
		$this->smtpDebug=0;
		$this->smtpPort=465;
		$this->smtpAuth=true;
		$this->smtpSecure='ssl';
		$this->userName="alelike02@gmail.com";
		$this->userPassword="karatekit";
		$this->charSet="windows-1252";
		$this->sendingAddress=$this->userName;
		$this->file=0;
	 }
	
	public function __get($vproperty)
	 {
		if( isset($vproperty) ){
			throw new Exception("Property doesn't exist: $vproperty");
		}
		else{
			return $this->vproperty;
		}
	 }
	
	public function __set($vproperty, $vvalue)
	 {
		if( isset($vproperty) ){
			throw new Exception("Property doesn't exist: $vproperty");
		}
		else{
			$this->vproperty=$vvalue;
		}
	 }
	
	public function __destruct()
	 {
		unset($this->idMail, $this->hostName, $this->smtpDebug, $this->smtpPort, $this->smtpAuth, $this->smtpSecure, $this->userName, $this->userPassword,
		$this->charSet, $this->sendingAddress, $this->sendingUserName, $this->receiverAddress, $this->receiverUserName, $this->subject, $this->message);
	 }
 }

?>