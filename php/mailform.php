<?php

/*--------------------------------------------------------------------------
	
	Script Name : Responsive Mailform
	Author      : FIRSTSTEP - Motohiro Tani
	Author URL  : https://www.1-firststep.com
	Create Date : 2014/03/25
	Version     : 7.2.1
	Last Update : 2019/10/03
	
--------------------------------------------------------------------------*/



mb_language( 'ja' );
mb_internal_encoding( 'UTF-8' );
date_default_timezone_set( 'Asia/Tokyo' );


require_once( dirname( __FILE__ ) .'/class.mailform.php' );
$responsive_mailform = new Mailform();


$responsive_mailform->javascript_action_check();
$responsive_mailform->referer_check();


$responsive_mailform->post_check( 'default' );


$responsive_mailform->mail_set( 'send' );
$responsive_mailform->mail_set( 'thanks' );


$responsive_mailform->mail_send();
$responsive_mailform->mail_result();


?>