<?php  
require 'config.php';
require 'saetv2.ex.class.php';

$o= new SaeTOAuthV2(WB_AKEY, WB_SKEY);

$oauth=$o->getAuthorizeURL(WB_CALLBACK_URL);
header('Location: '.$oauth);

?>