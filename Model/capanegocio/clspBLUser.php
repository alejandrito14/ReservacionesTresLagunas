<?php
/********************************************************
Name: clspBLUser.php
Version: 0.0.1
Autor name: Edwuard H. Cabrera Rodríguez
Modification autor name: Edwuard H. Cabrera Rodríguez
Creation date: 03/11/2015
Modification date: 16/04/2016
Description: User Principal class, Business Layer. 
********************************************************/

require_once (dirname(dirname(__FILE__)) . "/fisic-layer/clspFLMail.php");
require_once (dirname(dirname(__FILE__)) . "/data-layer/clspDLMail.php");

class clspBLUser
 {
	public function __construct() { }
	
    
    public static function addPasswordResetRequestToDataBase($vflUser)
	 {
		try{
			
                    $vflMail= new clspFLMail();
                    $vflMail->sendingUserName="Arsa (Acabados y Recubrimientos) S.A de C.V.";
                    $vflMail->subject="Solicitud de reestablecimiento de contraseña";
				    $vflMail->receiverAddress=$vflUser->emailAccount;
                    $vflMail->receiverUserName=$vflUser->name . " " . $vflUser->firstName . " " . $vflUser->lastName;
                    $vflMail->message ="<p>Recientemente ha solicitado el proceso de reestablecer su contraseña.</p>";
                    $vflMail->message.="<p>Deberá de ingresar al siguiente link para realizar dicho proceso, el cual tiene una vigencia de 24 hrs.:";
                    $vflMail->message.="    <a href='http://" . $_SERVER['HTTP_HOST'] . "/ces-arsa/frmusers-restore-password.php?idPasswordReset=" . $vflPasswordReset->idPasswordReset . "' target='_blank'>";
                    $vflMail->message.="        <strong>Reestablecer contraseña</strong>";
                    $vflMail->message.="    </a>";
                    $vflMail->message.="</p>";
				    if ( clspDLMail::sendEmail($vflMail)!=1 ){
					   $vmySql->rollbackTransaction();
					   $vmySql->closeConnection();
					   return -2;
				    }
                    
                    
			return 1;
		}
		catch (Exception $vexception){
			throw new Exception($vexception->getMessage(), $vexception->getCode());
		}
	 }
     
	public function __destruct() { }
 }
?>