<?php

// define CMSPATH - used as test definition in ALL php files to determine
// if CMS is loaded or not	
define ("CMSPATH", realpath(dirname(__DIR__, 1)));
define ("ADMINPATH",realpath(dirname(__FILE__)));
define ("CURPATH",ADMINPATH);

// bootstrap CMS
require_once (CMSPATH . "/core/cms.php");


















