<?php
function check(){
// Put your PHP functions and modules here
// CHECK:
// 1.Name must be English name and allow space
// 2.Email must be vaild
// 3.Card allow space and must be in 16 digit
// 4.mobile allow space and it is 10 digit
// 5.expiry dates can not use within 28/30/31 days.
// 6.Calculate if the value (price) in POST is the same in php(does not change by others)
// Once those is checked, put $_POST = $_SEESION, to recipet.php
    $errorMsg=array(
        "nameErr"=>"",
        "emailErr"=>"",
        "mobileErr"=>"",
        "cardErr"=>"",
        "expirtyErr"=>"",
        "priceErr"=>"",
        "movieIDErr"=>"",
        "movieDayErr"=>"",
        "movieHourErr"=>""
    );
    $form=array(
        "name"=>"false",
        "eamil"=>"false",
        "mobile"=>"false",
        "card"=>"false",
        "expiryMonth"=>"false",
        "expiryYear"=>"false",
        "seats"=>"false"
    );
    if (!empty($_POST)){
        if(empty($_POST["cust"]["name"])){
            $form["name"]="false";
            $errorMsg["nameErr"]="Name required!";
        }else if(preg_match("/^[a-zA-Z\s]+$/",$_POST["cust"]["name"])==1){
            $form["name"]="true";
        }else{
            $form["name"]="false";
            $errorMsg["nameErr"]="Invalid name!";
        }
        if(empty($_POST["cust"]["email"])){
            $form["eamil"]="false";
            $errorMsg["emailErr"]="Email required!";
        }else if(filter_var($_POST["cust"]["email"],FILTER_VALIDATE_EMAIL)){
            $form["eamil"]="true";
        }else{
            $form["eamil"]="false";
            $errorMsg["emailErr"]="Invalid email!";
        }
        if(empty($_POST["cust"]["mobile"])){
            $form["mobile"]="false";
            $errorMsg["mobileErr"]="Mobile required!";
        }else if(preg_match("/^04\d{8,9}|61\d{8,9}+$/",$_POST["cust"]["mobile"])==1){
            $form["mobile"]="true";
        }else{
            $form["mobile"]="false";
            $errorMsg["mobileErr"]="Invalid mobile!";
        }
        if(empty($_POST["cust"]["card"])){
            $form["card"]="false";
            $errorMsg["cardErr"]="Card required!";
        }else if(preg_match("/^[\d\s]{16}+$/",$_POST["cust"]["card"])==1){
            $form["card"]="true";
        }else{
            $form["card"]="false";
            $errorMsg["cardErr"]="Invalid card!";
        }
        if(empty($_POST["seats"]["STA"])&&empty($_POST["seats"]["STP"])&&empty($_POST["seats"]["STC"])
        &&empty($_POST["seats"]["FCA"])&&empty($_POST["seats"]["FCP"])&&empty($_POST["seats"]["FCC"])
        ){
            $form["seats"]="false";
        }else if(
            preg_match("/^\d{1}+$/",$_POST["seats"]["STA"])==1
            &&preg_match("/^\d{1}+$/",$_POST["seats"]["STP"])==1
            &&preg_match("/^\d{1}+$/",$_POST["seats"]["STC"])==1
            &&preg_match("/^\d{1}+$/",$_POST["seats"]["FCA"])==1
            &&preg_match("/^\d{1}+$/",$_POST["seats"]["FCP"])==1
            &&preg_match("/^\d{1}+$/",$_POST["seats"]["FCC"])==1
        ){
            $form["seats"]="true";
        }else{
            $form["seats"]="false";
        }
        if($form["name"]=="true"&&$form["eamil"]=="true"&&$form["card"]=="true"
            &&$form["seats"]=="true"&&$form["mobile"]=="true"
        ){
            writeBookings();
            session_start();
            $_SESSION["cart"]=$_POST;
            header("location:receipt.php");
        }else{
            return $errorMsg;
        }
    }
}
function writeBookings(){
    $list=array($_POST["cust"]["name"],$_POST["cust"]["mobile"],$_POST["cust"]["email"]);
    $bookings=fopen("bookings.txt","w");
    fputcsv($bookings,$list,"\\");
    fclose($bookings);
}
function total(){
    $pricesObject = [
    'full' => [
        'STA' => 19.8,
        'STP' => 17.5,
        'STC' => 15.3,
        'FCA' => 30.0,
        'FCP' => 27.0,
        'FCC' => 24.0
    ],
    'disc' => [
        'STA' => 14.0,
        'STP' => 12.5,
        'STC' => 11.0,
        'FCA' => 24.0,
        'FCP' => 22.5,
        'FCC' => 21.0
    ]
];
    if(
    isFullOrDiscount($_SESSION["cart"]["movie"]["day"], $_SESSION["cart"]["movie"]["hour"])==$pricesObject["full"]
    ){
        $totalPrice=sprintf("%.2f",$_SESSION["cart"]["seats"]["STA"]*$pricesObject["full"]["STA"]+
            $_SESSION["cart"]["seats"]["STP"]*$pricesObject["full"]["STP"]+
            $_SESSION["cart"]["seats"]["STC"]*$pricesObject["full"]["STC"]+
            $_SESSION["cart"]["seats"]["FCA"]*$pricesObject["full"]["FCA"]+
            $_SESSION["cart"]["seats"]["FCP"]*$pricesObject["full"]["FCP"]+
            $_SESSION["cart"]["seats"]["FCC"]*$pricesObject["full"]["FCC"]);
        $_SESSION["unit"]=$pricesObject["full"];
        $_SESSION["cart"]["price"]=$totalPrice;
        $tax=$totalPrice*0.1;
    }else{
        $totalPrice=sprintf("%.2f",$_SESSION["cart"]["seats"]["STA"]*$pricesObject["disc"]["STA"]+
            $_SESSION["cart"]["seats"]["STP"]*$pricesObject["disc"]["STP"]+
            $_SESSION["cart"]["seats"]["STC"]*$pricesObject["disc"]["STC"]+
            $_SESSION["cart"]["seats"]["FCA"]*$pricesObject["disc"]["FCA"]+
            $_SESSION["cart"]["seats"]["FCP"]*$pricesObject["disc"]["FCP"]+
            $_SESSION["cart"]["seats"]["FCC"]*$pricesObject["disc"]["FCC"]);
        $_SESSION["unit"]=$pricesObject["disc"];
        $_SESSION["cart"]["price"]=$totalPrice;
        $tax=$totalPrice*0.1;
    }
    return $tax;
}
function isFullOrDiscount($days, $hours) {
    if($days == 'MON' || $days == 'WED'){
        return 'disc';
    }elseif($days == 'SAT' || $days == 'SUN'){
        return 'full';
    }elseif($hours == 'T12'){
        return 'disc';
    }else{
        return 'full';
    }
}

function showTicket(){
    if($_SESSION["cart"]["seats"]["STA"]!=0){
        for ($i=0;$i<$_SESSION["cart"]["seats"]["STA"];$i++)
        echo "<div class=\"ticket\">
            <div class=\"diyiceng\">
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"wai\">
                    <div id=\"bianjiao2\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao3\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao4\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao5\" class=\"bianjiao1\"></div>
                    <table class=\"biao2\">
                        <tr>
                            <td rowspan=\"3\"><p class=\"shupai\">⭐ADMIT⭐</p></td>
                            <td colspan=\"4\" class=\"chang\">
                                <span class=\"zi2\">".$_SEESION["cart"]["movie"]["id"]." </span>
                                <br>⭐⭐⭐ <br>
                                <span class=\"zi3\">ADULT CINEMA TICKET</span></td>
                            <td rowspan=\"3\"><p class=\"shupai\">27020404</p></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["day"]."</td>
                            <td rowspan=\"2\"class=\"zi1\">ROW <br>
                                <p class=\"zi2\">ROW</p>
                            </td>
                            <td rowspan=\"2\"class=\"zi1\">SEAT <br>
                                <p class=\"zi2\">STA</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["hour"]."</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>";
    }
    if($_SESSION["cart"]["seats"]["STP"]!=0){
        for ($i=0;$i<$_SESSION["cart"]["seats"]["STP"];$i++)
            echo "<div class=\"ticket\">
            <div class=\"diyiceng\">
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"wai\">
                    <div id=\"bianjiao2\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao3\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao4\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao5\" class=\"bianjiao1\"></div>
                    <table class=\"biao2\">
                        <tr>
                            <td rowspan=\"3\"><p class=\"shupai\">⭐ADMIT⭐</p></td>
                            <td colspan=\"4\" class=\"chang\">
                                <span class=\"zi2\">".$_SEESION["cart"]["movie"]["id"]." </span>
                                <br>⭐⭐⭐ <br>
                                <span class=\"zi3\">CONCESSION CINEMA TICKET</span></td>
                            <td rowspan=\"3\"><p class=\"shupai\">27020404</p></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["day"]."</td>
                            <td rowspan=\"2\"class=\"zi1\">ROW <br>
                                <p class=\"zi2\">ROW</p>
                            </td>
                            <td rowspan=\"2\"class=\"zi1\">SEAT <br>
                                <p class=\"zi2\">STP</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["hour"]."</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>";
    }
    if($_SESSION["cart"]["seats"]["STC"]!=0){
        for ($i=0;$i<$_SESSION["cart"]["seats"]["STC"];$i++)
            echo "<div class=\"ticket\">
            <div class=\"diyiceng\">
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"wai\">
                    <div id=\"bianjiao2\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao3\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao4\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao5\" class=\"bianjiao1\"></div>
                    <table class=\"biao2\">
                        <tr>
                            <td rowspan=\"3\"><p class=\"shupai\">⭐ADMIT⭐</p></td>
                            <td colspan=\"4\" class=\"chang\">
                                <span class=\"zi2\">".$_SEESION["cart"]["movie"]["id"]." </span>
                                <br>⭐⭐⭐ <br>
                                <span class=\"zi3\">CHILDREN CINEMA TICKET</span></td>
                            <td rowspan=\"3\"><p class=\"shupai\">27020404</p></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["day"]."</td>
                            <td rowspan=\"2\"class=\"zi1\">ROW <br>
                                <p class=\"zi2\">ROW</p>
                            </td>
                            <td rowspan=\"2\"class=\"zi1\">SEAT <br>
                                <p class=\"zi2\">STC</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["hour"]."</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>";
    }
    if($_SESSION["cart"]["seats"]["FCA"]!=0){
        for ($i=0;$i<$_SESSION["cart"]["seats"]["FCA"];$i++)
            echo "<div class=\"ticket\">
            <div class=\"diyiceng\">
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"wai\">
                    <div id=\"bianjiao2\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao3\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao4\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao5\" class=\"bianjiao1\"></div>
                    <table class=\"biao2\">
                        <tr>
                            <td rowspan=\"3\"><p class=\"shupai\">⭐ADMIT⭐</p></td>
                            <td colspan=\"4\" class=\"chang\">
                                <span class=\"zi2\">".$_SEESION["cart"]["movie"]["id"]."  </span>
                                <br>⭐⭐⭐ <br>
                                <span class=\"zi3\">ADULT CINEMA TICKET</span></td>
                            <td rowspan=\"3\"><p class=\"shupai\">27020404</p></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["day"]."</td>
                            <td rowspan=\"2\"class=\"zi1\">ROW <br>
                                <p class=\"zi2\">ROW</p>
                            </td>
                            <td rowspan=\"2\"class=\"zi1\">SEAT <br>
                                <p class=\"zi2\">FCA</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["hour"]."</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>";
    }
    if($_SESSION["cart"]["seats"]["FCP"]!=0){
        for ($i=0;$i<$_SESSION["cart"]["seats"]["FCP"];$i++)
            echo "<div class=\"ticket\">
            <div class=\"diyiceng\">
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"wai\">
                    <div id=\"bianjiao2\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao3\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao4\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao5\" class=\"bianjiao1\"></div>
                    <table class=\"biao2\">
                        <tr>
                            <td rowspan=\"3\"><p class=\"shupai\">⭐ADMIT⭐</p></td>
                            <td colspan=\"4\" class=\"chang\">
                                <span class=\"zi2\">".$_SEESION["cart"]["movie"]["id"]."  </span>
                                <br>⭐⭐⭐ <br>
                                <span class=\"zi3\">CONCESSION CINEMA TICKET</span></td>
                            <td rowspan=\"3\"><p class=\"shupai\">27020404</p></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["day"]."</td>
                            <td rowspan=\"2\"class=\"zi1\">ROW <br>
                                <p class=\"zi2\">ROW</p>
                            </td>
                            <td rowspan=\"2\"class=\"zi1\">SEAT <br>
                                <p class=\"zi2\">FCP</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["hour"]."</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>";
    }
    if($_SESSION["cart"]["seats"]["FCC"]!=0){
        for ($i=0;$i<$_SESSION["cart"]["seats"]["FCC"];$i++)
            echo "<div class=\"ticket\">
            <div class=\"diyiceng\">
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"bianjiao\"></div>
                <div class=\"wai\">
                    <div id=\"bianjiao2\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao3\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao4\" class=\"bianjiao1\"></div>
                    <div id=\"bianjiao5\" class=\"bianjiao1\"></div>
                    <table class=\"biao2\">
                        <tr>
                            <td rowspan=\"3\"><p class=\"shupai\">⭐ADMIT⭐</p></td>
                            <td colspan=\"4\" class=\"chang\">
                                <span class=\"zi2\">".$_SEESION["cart"]["movie"]["id"]." </span>
                                <br>⭐⭐⭐ <br>
                                <span class=\"zi3\">CHILDREN CINEMA TICKET</span></td>
                            <td rowspan=\"3\"><p class=\"shupai\">27020404</p></td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["day"]."</td>
                            <td rowspan=\"2\"class=\"zi1\">ROW <br>
                                <p class=\"zi2\">ROW</p>
                            </td>
                            <td rowspan=\"2\"class=\"zi1\">SEAT <br>
                                <p class=\"zi2\">FCC</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan=\"2\" class=\"zi1\">".$_SESSION["cart"]["movie"]["hour"]."</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>";
    }
}
$pricesObject = [
  'full' => [
    'STA' => 19.8,
    'STP' => 17.5,
    'STC' => 15.3,
    'FCA' => 30.0,
    'FCP' => 27.0,
    'FCC' => 24.0
  ],
  'disc' => [
    'STA' => 14.0,
    'STP' => 12.5,
    'STC' => 11.0,
    'FCA' => 24.0,
    'FCP' => 22.5,
    'FCC' => 21.0
   ]
];
$moviesObject = [
  'ACT' => [
    'title' => 'Avengers: Endgame',
    'rating' => 'R',
    'description' => '<p><p1>Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his
                 oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow,
                Captain America and Bruce Banner -- must figure out a way to bring back their vanquished
                 allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and
                  the universe.</p1></p>',
    'screenings' => [
      'WED' => 'T21',
      'SAT' => 'T18',
      'SUN' => 'T18'
    ]
  ],
  'RMC' => [
      'title' => 'Top End Wedding',
      'rating' => 'R',
      'description' => '',
      'screenings' => [
        'WED' => 'T21',
        'SAT' => 'T18',
        'SUN' => 'T18'
      ]
],
  'ANM' => [
     'title' => 'SDF',
        'rating' => 'R',
        'description' => '',
        'screenings' => [
          'WED' => 'T21',
          'SAT' => 'T18',
          'SUN' => 'T18'
        ]
      ],
  'AHF' => ['title' => 'SFAX',
        'rating' => 'R',
        'description' => '',
        'screenings' => [
          'WED' => 'T21',
          'SAT' => 'T18',
          'SUN' => 'T18'
        ]
      ],
];

function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function */";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}
$pricesArrayPHP = array ($pricesObject);
php2js($pricesArrayPHP, 'pricesArrayJS'); // ie echos javascript equivalent code

function printMyCode() {

  $lines = file('tools.php');
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}

/*function printMyCode() {
  $lines = file($_SERVER['tools.php']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}
preShow($_POST); // ie echo a string
preShow($_SESSION);

$aaarg = preShow($my_bad_array, true); // ie return as a string

echo "Why is \n $aaarg \n not working?";
function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'><ol>";
  foreach ($lines as $line)
     echo '<li>'.rtrim(htmlentities($line)).'</li>';
  echo '</ol></pre>';
}


/*function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "/* Generated with A4's php2js() function *//*";
  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
  echo "</script>\n\n";
}

$pricesArrayPHP = array ( ... );
php2js($pricesArrayPHP, 'pricesArrayJS');*/

?>
