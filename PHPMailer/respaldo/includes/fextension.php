<?php 
function Eextension($tipo){

global $extension;

switch ($tipo){
case "image/bmp":
$extension=".bmp";
break;

case "image/pjpeg":
$extension=".jpg";
break;

case "image/jpeg":
$extension=".jpg";

break;
case "image/gif":
$extension=".gif";

break;
case "image/x-png":
$extension=".png";

break;
case "image/png":
$extension=".png";

break;

case "mpg":
$extension=".mpg";
break;

case "avi":
$extension=".avi";
break;

case "flv":
$extension=".flv";
break;



case "video/mpeg":
$extension=".mpg";
break;

case "video/avi":
$extension=".avi";
break;

case "video/x-msvideo":
$extension=".avi";
break;

case "application/octet-stream":
$extension=".flv";
break;

case "video/x-flv":
$extension=".flv";
break;

case "video/3gpp":
$extension=".3gp";
break;

case "video/x-ms-wmv":
$extension=".wmv";
break;

}
}
?>