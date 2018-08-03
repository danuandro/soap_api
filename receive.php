<?php
//print_r(simplexml_load_string(trim($HTTP_RAW_POST_DATA)));
$clean_xml = str_ireplace(['SOAP-ENV:', 'SOAP:'], '', $HTTP_RAW_POST_DATA);
$xml = simplexml_load_string($clean_xml);
print_r(new SoapClient($HTTP_RAW_POST_DATA));
?>