<html>
<body>
<?php
if(empty($_COOKIE["visit"])){
    setcookie("visit",0,time()+6);

}

if(!isset($_COOKIE["bisit"])){
    echo "Welcome to my website! Click here for a tour";

}
else{
    $visit = $_COOKIE["visit"]+1;
    setcookie("visit",$visit,time()+6);
    echo "This is visit number $visit.";
}
?>
</body>
</html>