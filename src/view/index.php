<?php
//function lettercount(string $line)
//{
//    $wordarr = explode(" ", $line);
//    foreach ($wordarr as $word){
//        echo " $word ";
//        $letterarr = str_split($word);
//        $count = my_count_function($letterarr);
//        foreach ($count as $letter=>$number){
//        echo "[$letter-$number],";
//        }
//    }
//}
//
//function my_count_function($entry){
//    $len = count($entry);
//    $result = [];
//
//    for ($i=0; $i<$len; $i++) {
//        $char = $entry[$i];
//
//        if (!array_key_exists($char, $result)){
//            $result["$char"] = 0;
//        }
//        $result["$char"] += 1;
//    }
//
//    return $result;
//}
//
//lettercount("Some texteses here");


//if (isset($_GET["Name"]) && isset($_GET["Message"])){
//    echo renderhtml("page3.php", ["Message" => $_GET["Message"], "Name" => $_GET["Name"]]);
//}  elseif (isset($_GET["Name"])) {
//    echo renderhtml("page2.php", ["Name" => $_GET["Name"]]);
//}   elseif (isset($_GET["Message"])) {
//    echo renderhtml("page3.php", ["Message" => $_GET["Message"]]);
//}  else {
//    echo renderhtml("page1.php");
////}
//session_start();
//

if (!auth_check()){?>
    <a href="/login">Login</a>
    <?php
}
if (auth_check()){
 ?>
<a href="/logout">Logout</a>
<?php
}
//$request = $_SERVER["REQUEST_URI"];
//if($request === "/test"){
//    echo renderhtml("page1");
//}

