/*
I made this function to allow you to use error_log more efficiently and as alternatively as you want. Whether use as an error email on important applications, debugging specific things or just simply organizing error reporting for easier review.

Put this function wherever you like as long it is called in a global manner, like in a header or something so that it works properly.
*/ 
<?php
   function diag($msg,$type = 3,$email = 'your@emailaddress.com';,$logfile = 'logfile'){
        $headers = 'From: ';
        $logfile_name = '/dir/location/'. $logfile.'-'.date('Y-d-m').'.txt';
        $msg = "\n[".(date('D M d, Y - H:i:s'))."]: ".$msg;
        switch($type){
            case 1 : error_log($msg,1,$email,$headers );
                break;
            case 2 : error_log($msg,0);
                break;
            case 3 : error_log($msg,3,$logfile_name);
                break;
            case 4 : error_log($msg,4);
                break;
            default : error_log($msg,0);
        }
        
    }
?>
 
/*
Use it in 

$a = 'foo';

diag($a); // this will report "foo" in the default log

diag($a,1); //email it to your self

diag($a,1,'yourotheremail@address.com');//email to different email

diag($a,3);//print to the specified file location using default file name

diag($a,3,'specificNameHere');//new file name

 

Great for sprinkling throughout your scripts for debugging and troubleshooting. you can advance on it more and add custom defined directory locations, but it was not needed I felt for the main purposes. But it could be easily added in.

Usage: error_log(message,type,destination,headers);

 

Parameter	Description
message	Required. Specifies the error message to log
type	Optional. Specifies where the error message should go. Possible values:
0 - Default method. Error is sent to root of the server
1 - Message is sent by email to the address in the destination parameter
2 - Not used
3 - Error is logged in the file location designated by the destination
4 - Error is sent to the SAPI logging handler
destination	Optional, depending on the value of the type parameter. Either file location, or email
headers	Optional. Used if the type parameter is set to 1. Specifies email headers(From, Cc, and Bcc). Multiple headers should be separated with a CRLF (\r\n)
 

*/