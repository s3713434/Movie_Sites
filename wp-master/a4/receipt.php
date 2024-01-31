<?php
    session_start();
    include "tools.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            margin: 0;
            height: 870px;
        }
        .table{
            width: 100%;
            margin: 0 auto;
            /*border: 1px saddlebrown solid;*/
        }
        caption{
            font-size: 25px;
            /*border: 1px saddlebrown solid;*/
            border-radius: 15px;
        }
        .shouhang{
            background-color: rgba(224,86,22,0.9);
            text-align: center;
        }
        .biaotilogo td{
            background-color: rgb(232,232,232);
        }
        .jilu td{
            background-color: rgb(232,232,232);
            border-right: 1px black solid;
        }
        .youbian td{
            border-right: 1px black solid;
        }
        #xia td{
            border-bottom: 1px black solid;
        }
        #diwen{
            background-color: rgb(211,232,211);
            border-bottom: 1px black solid;
        }
        .dibu{
            height: 50px;
            font-weight: bold;
            font-size: 20px;
            text-align: right;
        }
        .Tax{
            text-align: right;
            font-weight: bold;
        }
        .Tax td:nth-child(4){
            border-bottom: 1px lightslategray solid;
        }
        .jine{
            text-align: right;
        }
        .jilu td:nth-child(1){
            border-left: 1px black solid;
        }
        #receipt{
            height: 50px;
            font-size: 30px;
            text-align: center;
            color: lightslategray;
            font-weight: bold;
        }
        #LOGO{
            display: block;
            margin-left: 50px;
            height: 120px;
            width: 120px;
            text-align: center;
            border-radius: 60px;
            line-height: 120px;
            font-size: 40px;
        }
        .dihen{
            text-align: center;
            border-bottom: 1px lightslategray solid;
            color: grey;
            font-weight: bold;
        }
        .youbian td:nth-child(1){
            border-left: 1px black solid;
        }
        .Your{
            font-size: 14px;
            text-align: left;
            color: lightslategray;
        }
        #container{
            width: 1000px;
            height: 1414px;
            /*height: 1270px;*/
            /*border: 1px saddlebrown solid;*/
            margin: 0 auto;
        }
        td{
            /*border: 1px saddlebrown solid;*/
            width: 95px;
            height: 29px;
        }
        .ticket{
            width: 100%;
            height: 458px;
            margin-top: 7px;
            /*border: 1px saddlebrown solid;*/
            background-color: rgb(156,29,59);
        }
        .diyiceng{
            width: 900px;
            height: 408px;
            position:relative;
            top: 25px;
            left: 50px;
            overflow: hidden;
            background-color: rgb(230,213,189);
        }
        .wai{
            position: absolute;
            left: 15px;
            top: 10px;
            width: 870px;
            height: 388px;
            overflow: hidden;
        }
        .chang{
            width: 700px;
            font-size: 30px;
        }
        .zi1{
            font-size: 25px;
            font-weight: bold;
        }
        .zi2{
            font-size: 40px;
            font-weight: bold;
        }
        .zi3{
            font-size: 35px;
            color: grey;
        }
        .bianjiao{
            width: 120px;
            height: 120px;
            /*border: 1px black solid;*/
            background-color: rgb(156,29,59);
        }
        .bianjiao1{
            width: 120px;
            height: 120px;
            border-radius: 60px;
            position: relative;
            top: -120px;
            left: -120px;
            background-color: rgb(230,213,189);
            border: 1px black solid;

        }
        #bianjiao2{
            border-bottom-right-radius: 60px;
            position: absolute;
            top: -60px;
            left: -60px;
        }
        #bianjiao3{
            border-bottom-left-radius: 60px;
            position: absolute;
            bottom: -103px;
            left: 814px;
        }
        #bianjiao4{
            border-bottom-left-radius: 60px;
            position: absolute;
            top: 325px;
            left: -60px;
        }
        #bianjiao5{
            border-bottom-left-radius: 60px;
            position: absolute;
            top: 328px;
            left: 814px;
        }
        .diyiceng div:nth-child(1){
            border-bottom-right-radius: 60px;
            position: relative;
            top: -60px;
            left: -60px;
        }
        .diyiceng div:nth-child(2){
            border-bottom-left-radius: 60px;
            position: absolute;
            top: -60px;
            right: -60px;
        }
        .diyiceng div:nth-child(3){
            border-top-right-radius: 60px;
            position: absolute;
            bottom: -60px;
            left: -60px;
        }
        .diyiceng div:nth-child(4){
            border-top-left-radius: 60px;
            position:absolute;
            bottom: -60px;
            right: -60px;
        }
        .biao2 td {
            border: 1px black solid;
            text-align: center;
        }
        .shupai{
            font-size: 30px;
            width: 30px;
            word-wrap: break-word;
            word-break:break-all;
            margin-left: 35px;
            writing-mode: sideways-rl;
        }

    </style>
    <title> receipt </title>
</head>
<body>
<div id="container">
    <div class="invoice">
        <table class="table" cellspacing="0" cellpadding="0" >
            <tr class="shouhang">
                <td colspan="6"></td>
            </tr>
            <tr class="biaotilogo">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="biaotilogo">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="biaotilogo">
                <td rowspan="3">
                    <div id="LOGO">
                      <img src='../../media/Lunardo.png' alt='Lunardo' length=300 width=200 />
                    </div>
                </td>
                <td style="font-size: 20px;" colspan="2"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr id="receipt" class="biaotilogo">
                <td class="Your" colspan="2"></td>
                <td></td>
                <td colspan="2">RECEIPT</td>
            </tr>
            <tr class="biaotilogo">
                <td class="Your" colspan="2"></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="biaotilogo">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="dihen" colspan="2"><?php echo date("Y-m-d h:i");?></td>
            </tr>
            <tr class="biaotilogo">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="biaotilogo">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="dihen" colspan="2">RECEIPT NO.</td>
            </tr>
            <tr>
                <td class="dihen"  colspan="3">BILL TO</td>
            </tr>
            <tr>
                <td colspan="3"><?php echo $_SESSION["cart"]["cust"]["name"];?></td>
            </tr>
            <tr>
                <td colspan="3"><?php echo $_SESSION["cart"]["cust"]["mobile"];?></td>
            </tr>
            <tr>
                <td colspan="3"><?php echo $_SESSION["cart"]["cust"]["email"];?></td>
            </tr>
            <tr></tr>
            <tr class="shouhang">
                <td colspan="3">DESCRIPTION</td>
                <td>QTY</td>
                <td>UNIT PRICE</td>
                <td>TOTAL</td>
            </tr>
            <tr class="youbian">
                <td colspan="3">Standard Adults</td>
                <td><?php echo $_SESSION["cart"]["seats"]["STA"];?></td>
                <td>$<?php echo sprintf("%.2f",$_SESSION["unit"]["STA"]);?></td>
                <td class="jine">$<?php echo sprintf("%.2f",$_SESSION["unit"]["STA"]*$_SESSION["cart"]["seats"]["STA"]);?></td>
            </tr>
            <tr  class="jilu">
                <td colspan="3">Standard Concession</td>
                <td><?php echo $_SESSION["cart"]["seats"]["STP"];?></td>
                <td>$<?php echo sprintf("%.2f",$_SESSION["unit"]["STP"]);?></td>
                <td class="jine">$<?php echo sprintf("%.2f",$_SESSION["unit"]["STP"]*$_SESSION["cart"]["seats"]["STP"]);?></td>
            </tr>
            <tr class="youbian">
                <td colspan="3">Standard Childern</td>
                <td><?php echo $_SESSION["cart"]["seats"]["STC"];?></td>
                <td>$<?php echo sprintf("%.2f",$_SESSION["unit"]["STC"]);?></td>
                <td class="jine">$<?php echo sprintf("%.2f",$_SESSION["unit"]["STC"]*$_SESSION["cart"]["seats"]["STC"]);?></td>
            </tr>
            <tr class="jilu">
                <td colspan="3">First Class Adults</td>
                <td><?php echo $_SESSION["cart"]["seats"]["FCA"];?></td>
                <td>$<?php echo sprintf("%.2f",$_SESSION["unit"]["FCA"]);?></td>
                <td class="jine">$<?php echo sprintf("%.2f",$_SESSION["unit"]["FCA"]*$_SESSION["cart"]["seats"]["FCA"]);?></td>
            </tr>
            <tr class="youbian">
                <td colspan="3">First Class Concession</td>
                <td><?php echo $_SESSION["cart"]["seats"]["FCP"];?></td>
                <td>$<?php echo sprintf("%.2f",$_SESSION["unit"]["FCP"]);?></td>
                <td class="jine">$<?php echo sprintf("%.2f",$_SESSION["unit"]["FCP"]*$_SESSION["cart"]["seats"]["FCP"]);?></td>
            </tr>
            <tr class="jilu">
                <td colspan="3">First Class Childern</td>
                <td><?php echo $_SESSION["cart"]["seats"]["FCC"];?></td>
                <td>$<?php echo sprintf("%.2f",$_SESSION["unit"]["FCC"]);?></td>
                <td class="jine">$<?php echo sprintf("%.2f",$_SESSION["unit"]["FCC"]*$_SESSION["cart"]["seats"]["FCC"]);?></td>
            </tr>
            <tr class="Tax">
                <td colspan="3"></td>
                <td></td>
                <td>TAX RATE</td>
                <td class="jine">10.00%</td>
            </tr>
            <tr class="Tax">
                <td colspan="3"></td>
                <td></td>
                <td>TOTAL TAX</td>
                <td class="jine">$<?php echo total();?></td>
            </tr>
            <tr class="dibu">
                <td colspan="3"></td>
                <td></td>
                <td>Balance Paid</td>
                <td id="diwen" class="jine">$&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["cart"]["price"];?>&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr class="shouhang">
                <td colspan="6"></td>
            </tr>
        </table>
        <?php showTicket();?>
    </div>
</div>

</body>
</html>
