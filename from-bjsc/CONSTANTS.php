<?php
    //Must add SLASH(/) after this constant i.e.  require_once(ROOT_DIRECTORY . '/db_connect.php');
    defined("ROOT_DIRECTORY")
    or define("ROOT_DIRECTORY", realpath(dirname(__FILE__)));
    //$example = ROOT_DIRECTORY . "/applicant_photo/" . "$gender" . "/" . $post_code . "/" . $userid. ".jpg";


    //Must add SLASH(/) after this constant i.e. require_once(LIBRARY_PATH .'/form.php');
    //defined("LIBRARY_PATH") or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));

    defined("BASE_URL") or define("BASE_URL", "http://demo.bjsc.teletalk.com.bd/version1/"); //demo.bjsc.teletalk.com.bd  //http://localhost/bjsc/
    defined("DATABASE_SERVER") or define("DATABASE_SERVER", "192.168.61.184");
    defined("DATABASE_USER_NAME") or define("DATABASE_USER_NAME", "xdev"); //root //spondon
    defined("DATABASE_PASSWORD") or define("DATABASE_PASSWORD", "DevX#3^Le%Z"); //D0N#6916 //1
    defined("DATABASE_NAME") or define("DATABASE_NAME", "bjsc_demo");  //sp_demo_bjsc //bjsc
    defined("ENVIRONMENT") or define("ENVIRONMENT", "PRODUCTION"); //DEVELOPMENT PRODUCTION


?>
