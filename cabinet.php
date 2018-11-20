<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>User Cabinet</title>
        <link rel="stylesheet" type="text/css" href="cabinet_style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
.square {
    width: 16px;
    height: 16px;
    background: #482ea7;
    border-radius: 5px 5px 5px 5px;
    margin: 10px;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    padding-bottom: 5px;
}

.balance_text {
   color:#482ea7; 
   align: right;
   float:right;
   margin-right: 7%;
}

.purpletext {
  font-size: 25px;
  font-family: Verdana, sans-serif; 
  color: #482ea7; 
  padding: 0px 0px 0px 15px;  
    
}

.simpletext{
    font-family: Verdana, sans-serif; 
    color: #1a1919; 
    padding: 0px 0px 0px 15px;
}
.wrapper {
  height: 120px;
  width: 120px;
  display: inline-block;
  position: relative;
}
.pie {
  position: absolute;
  width: 60px;
  height: 120px;
  left: 60px;
  -webkit-transform-origin: left center;
          transform-origin: left center;
}
.pie:nth-of-type(1):before,
.pie:nth-of-type(1):after {
  background-color: #482ea7;
}
.pie:nth-of-type(2):before,
.pie:nth-of-type(2):after {
  background-color: #ccc;
}
.pie:before {
  content: "";
  position: absolute;
  width: 60px;
  height: 120px;
  left: -60px;
  border-radius: 60px 0 0 60px;
  -webkit-transform-origin: right center;
          transform-origin: right center;
  z-index: 0;
}
.pie.big {
  width: 120px;
  height: 120px;
  left: 0;
  -webkit-transform-origin: center center;
          transform-origin: center center;
}
.pie.big:before {
  left: 0;
  z-index: 1;
}
.pie.big:after {
  content: "";
  position: absolute;
  width: 60px;
  height: 120px;
  left: 60px;
  border-radius: 0 60px 60px 0;
}
.pie.over {
  width: 106px;
  height: 106px;
  left: 7px;
  top: 7px;
  background-color: #f2f2f2;
  border-radius: 53px;
  z-index: 2;
  display: table;
}
.pie.over span {
  display: table-cell;
  color: #482ea7;
  font-family: Arial;
  font-size: 18px;
  font-weight: 700;
  text-align: center;
  vertical-align: middle;
}
.start-1 {
  -webkit-transform: rotate(3.6deg);
          transform: rotate(3.6deg);
}
.start-2 {
  -webkit-transform: rotate(7.2deg);
          transform: rotate(7.2deg);
}
.start-3 {
  -webkit-transform: rotate(10.8deg);
          transform: rotate(10.8deg);
}
.start-4 {
  -webkit-transform: rotate(14.4deg);
          transform: rotate(14.4deg);
}
.start-5 {
  -webkit-transform: rotate(18deg);
          transform: rotate(18deg);
}
.start-6 {
  -webkit-transform: rotate(21.6deg);
          transform: rotate(21.6deg);
}
.start-7 {
  -webkit-transform: rotate(25.2deg);
          transform: rotate(25.2deg);
}
.start-8 {
  -webkit-transform: rotate(28.8deg);
          transform: rotate(28.8deg);
}
.start-9 {
  -webkit-transform: rotate(32.4deg);
          transform: rotate(32.4deg);
}
.start-10 {
  -webkit-transform: rotate(36deg);
          transform: rotate(36deg);
}
.start-11 {
  -webkit-transform: rotate(39.6deg);
          transform: rotate(39.6deg);
}
.start-12 {
  -webkit-transform: rotate(43.2deg);
          transform: rotate(43.2deg);
}
.start-13 {
  -webkit-transform: rotate(46.8deg);
          transform: rotate(46.8deg);
}
.start-14 {
  -webkit-transform: rotate(50.4deg);
          transform: rotate(50.4deg);
}
.start-15 {
  -webkit-transform: rotate(54deg);
          transform: rotate(54deg);
}
.start-16 {
  -webkit-transform: rotate(57.6deg);
          transform: rotate(57.6deg);
}
.start-17 {
  -webkit-transform: rotate(61.2deg);
          transform: rotate(61.2deg);
}
.start-18 {
  -webkit-transform: rotate(64.8deg);
          transform: rotate(64.8deg);
}
.start-19 {
  -webkit-transform: rotate(68.4deg);
          transform: rotate(68.4deg);
}
.start-20 {
  -webkit-transform: rotate(72deg);
          transform: rotate(72deg);
}
.start-21 {
  -webkit-transform: rotate(75.6deg);
          transform: rotate(75.6deg);
}
.start-22 {
  -webkit-transform: rotate(79.2deg);
          transform: rotate(79.2deg);
}
.start-23 {
  -webkit-transform: rotate(82.8deg);
          transform: rotate(82.8deg);
}
.start-24 {
  -webkit-transform: rotate(86.4deg);
          transform: rotate(86.4deg);
}
.start-25 {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
.start-26 {
  -webkit-transform: rotate(93.6deg);
          transform: rotate(93.6deg);
}
.start-27 {
  -webkit-transform: rotate(97.2deg);
          transform: rotate(97.2deg);
}
.start-28 {
  -webkit-transform: rotate(100.8deg);
          transform: rotate(100.8deg);
}
.start-29 {
  -webkit-transform: rotate(104.4deg);
          transform: rotate(104.4deg);
}
.start-30 {
  -webkit-transform: rotate(108deg);
          transform: rotate(108deg);
}
.start-31 {
  -webkit-transform: rotate(111.6deg);
          transform: rotate(111.6deg);
}
.start-32 {
  -webkit-transform: rotate(115.2deg);
          transform: rotate(115.2deg);
}
.start-33 {
  -webkit-transform: rotate(118.8deg);
          transform: rotate(118.8deg);
}
.start-34 {
  -webkit-transform: rotate(122.4deg);
          transform: rotate(122.4deg);
}
.start-35 {
  -webkit-transform: rotate(126deg);
          transform: rotate(126deg);
}
.start-36 {
  -webkit-transform: rotate(129.6deg);
          transform: rotate(129.6deg);
}
.start-37 {
  -webkit-transform: rotate(133.2deg);
          transform: rotate(133.2deg);
}
.start-38 {
  -webkit-transform: rotate(136.8deg);
          transform: rotate(136.8deg);
}
.start-39 {
  -webkit-transform: rotate(140.4deg);
          transform: rotate(140.4deg);
}
.start-40 {
  -webkit-transform: rotate(144deg);
          transform: rotate(144deg);
}
.start-41 {
  -webkit-transform: rotate(147.6deg);
          transform: rotate(147.6deg);
}
.start-42 {
  -webkit-transform: rotate(151.2deg);
          transform: rotate(151.2deg);
}
.start-43 {
  -webkit-transform: rotate(154.8deg);
          transform: rotate(154.8deg);
}
.start-44 {
  -webkit-transform: rotate(158.4deg);
          transform: rotate(158.4deg);
}
.start-45 {
  -webkit-transform: rotate(162deg);
          transform: rotate(162deg);
}
.start-46 {
  -webkit-transform: rotate(165.6deg);
          transform: rotate(165.6deg);
}
.start-47 {
  -webkit-transform: rotate(169.2deg);
          transform: rotate(169.2deg);
}
.start-48 {
  -webkit-transform: rotate(172.8deg);
          transform: rotate(172.8deg);
}
.start-49 {
  -webkit-transform: rotate(176.4deg);
          transform: rotate(176.4deg);
}
.start-50 {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
.start-51 {
  -webkit-transform: rotate(183.6deg);
          transform: rotate(183.6deg);
}
.start-52 {
  -webkit-transform: rotate(187.2deg);
          transform: rotate(187.2deg);
}
.start-53 {
  -webkit-transform: rotate(190.8deg);
          transform: rotate(190.8deg);
}
.start-54 {
  -webkit-transform: rotate(194.4deg);
          transform: rotate(194.4deg);
}
.start-55 {
  -webkit-transform: rotate(198deg);
          transform: rotate(198deg);
}
.start-56 {
  -webkit-transform: rotate(201.6deg);
          transform: rotate(201.6deg);
}
.start-57 {
  -webkit-transform: rotate(205.2deg);
          transform: rotate(205.2deg);
}
.start-58 {
  -webkit-transform: rotate(208.8deg);
          transform: rotate(208.8deg);
}
.start-59 {
  -webkit-transform: rotate(212.4deg);
          transform: rotate(212.4deg);
}
.start-60 {
  -webkit-transform: rotate(216deg);
          transform: rotate(216deg);
}
.start-61 {
  -webkit-transform: rotate(219.6deg);
          transform: rotate(219.6deg);
}
.start-62 {
  -webkit-transform: rotate(223.2deg);
          transform: rotate(223.2deg);
}
.start-63 {
  -webkit-transform: rotate(226.8deg);
          transform: rotate(226.8deg);
}
.start-64 {
  -webkit-transform: rotate(230.4deg);
          transform: rotate(230.4deg);
}
.start-65 {
  -webkit-transform: rotate(234deg);
          transform: rotate(234deg);
}
.start-66 {
  -webkit-transform: rotate(237.6deg);
          transform: rotate(237.6deg);
}
.start-67 {
  -webkit-transform: rotate(241.2deg);
          transform: rotate(241.2deg);
}
.start-68 {
  -webkit-transform: rotate(244.8deg);
          transform: rotate(244.8deg);
}
.start-69 {
  -webkit-transform: rotate(248.4deg);
          transform: rotate(248.4deg);
}
.start-70 {
  -webkit-transform: rotate(252deg);
          transform: rotate(252deg);
}
.start-71 {
  -webkit-transform: rotate(255.6deg);
          transform: rotate(255.6deg);
}
.start-72 {
  -webkit-transform: rotate(259.2deg);
          transform: rotate(259.2deg);
}
.start-73 {
  -webkit-transform: rotate(262.8deg);
          transform: rotate(262.8deg);
}
.start-74 {
  -webkit-transform: rotate(266.4deg);
          transform: rotate(266.4deg);
}
.start-75 {
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}
.start-76 {
  -webkit-transform: rotate(273.6deg);
          transform: rotate(273.6deg);
}
.start-77 {
  -webkit-transform: rotate(277.2deg);
          transform: rotate(277.2deg);
}
.start-78 {
  -webkit-transform: rotate(280.8deg);
          transform: rotate(280.8deg);
}
.start-79 {
  -webkit-transform: rotate(284.4deg);
          transform: rotate(284.4deg);
}
.start-80 {
  -webkit-transform: rotate(288deg);
          transform: rotate(288deg);
}
.start-81 {
  -webkit-transform: rotate(291.6deg);
          transform: rotate(291.6deg);
}
.start-82 {
  -webkit-transform: rotate(295.2deg);
          transform: rotate(295.2deg);
}
.start-83 {
  -webkit-transform: rotate(298.8deg);
          transform: rotate(298.8deg);
}
.start-84 {
  -webkit-transform: rotate(302.4deg);
          transform: rotate(302.4deg);
}
.start-85 {
  -webkit-transform: rotate(306deg);
          transform: rotate(306deg);
}
.start-86 {
  -webkit-transform: rotate(309.6deg);
          transform: rotate(309.6deg);
}
.start-87 {
  -webkit-transform: rotate(313.2deg);
          transform: rotate(313.2deg);
}
.start-88 {
  -webkit-transform: rotate(316.8deg);
          transform: rotate(316.8deg);
}
.start-89 {
  -webkit-transform: rotate(320.4deg);
          transform: rotate(320.4deg);
}
.start-90 {
  -webkit-transform: rotate(324deg);
          transform: rotate(324deg);
}
.start-91 {
  -webkit-transform: rotate(327.6deg);
          transform: rotate(327.6deg);
}
.start-92 {
  -webkit-transform: rotate(331.2deg);
          transform: rotate(331.2deg);
}
.start-93 {
  -webkit-transform: rotate(334.8deg);
          transform: rotate(334.8deg);
}
.start-94 {
  -webkit-transform: rotate(338.4deg);
          transform: rotate(338.4deg);
}
.start-95 {
  -webkit-transform: rotate(342deg);
          transform: rotate(342deg);
}
.start-96 {
  -webkit-transform: rotate(345.6deg);
          transform: rotate(345.6deg);
}
.start-97 {
  -webkit-transform: rotate(349.2deg);
          transform: rotate(349.2deg);
}
.start-98 {
  -webkit-transform: rotate(352.8deg);
          transform: rotate(352.8deg);
}
.start-99 {
  -webkit-transform: rotate(356.4deg);
          transform: rotate(356.4deg);
}
.start-100 {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}
.end-1:before {
  -webkit-transform: rotate(4.6deg);
          transform: rotate(4.6deg);
}
.end-2:before {
  -webkit-transform: rotate(8.2deg);
          transform: rotate(8.2deg);
}
.end-3:before {
  -webkit-transform: rotate(11.8deg);
          transform: rotate(11.8deg);
}
.end-4:before {
  -webkit-transform: rotate(15.4deg);
          transform: rotate(15.4deg);
}
.end-5:before {
  -webkit-transform: rotate(19deg);
          transform: rotate(19deg);
}
.end-6:before {
  -webkit-transform: rotate(22.6deg);
          transform: rotate(22.6deg);
}
.end-7:before {
  -webkit-transform: rotate(26.2deg);
          transform: rotate(26.2deg);
}
.end-8:before {
  -webkit-transform: rotate(29.8deg);
          transform: rotate(29.8deg);
}
.end-9:before {
  -webkit-transform: rotate(33.4deg);
          transform: rotate(33.4deg);
}
.end-10:before {
  -webkit-transform: rotate(37deg);
          transform: rotate(37deg);
}
.end-11:before {
  -webkit-transform: rotate(40.6deg);
          transform: rotate(40.6deg);
}
.end-12:before {
  -webkit-transform: rotate(44.2deg);
          transform: rotate(44.2deg);
}
.end-13:before {
  -webkit-transform: rotate(47.8deg);
          transform: rotate(47.8deg);
}
.end-14:before {
  -webkit-transform: rotate(51.4deg);
          transform: rotate(51.4deg);
}
.end-15:before {
  -webkit-transform: rotate(55deg);
          transform: rotate(55deg);
}
.end-16:before {
  -webkit-transform: rotate(58.6deg);
          transform: rotate(58.6deg);
}
.end-17:before {
  -webkit-transform: rotate(62.2deg);
          transform: rotate(62.2deg);
}
.end-18:before {
  -webkit-transform: rotate(65.8deg);
          transform: rotate(65.8deg);
}
.end-19:before {
  -webkit-transform: rotate(69.4deg);
          transform: rotate(69.4deg);
}
.end-20:before {
  -webkit-transform: rotate(73deg);
          transform: rotate(73deg);
}
.end-21:before {
  -webkit-transform: rotate(76.6deg);
          transform: rotate(76.6deg);
}
.end-22:before {
  -webkit-transform: rotate(80.2deg);
          transform: rotate(80.2deg);
}
.end-23:before {
  -webkit-transform: rotate(83.8deg);
          transform: rotate(83.8deg);
}
.end-24:before {
  -webkit-transform: rotate(87.4deg);
          transform: rotate(87.4deg);
}
.end-25:before {
  -webkit-transform: rotate(91deg);
          transform: rotate(91deg);
}
.end-26:before {
  -webkit-transform: rotate(94.6deg);
          transform: rotate(94.6deg);
}
.end-27:before {
  -webkit-transform: rotate(98.2deg);
          transform: rotate(98.2deg);
}
.end-28:before {
  -webkit-transform: rotate(101.8deg);
          transform: rotate(101.8deg);
}
.end-29:before {
  -webkit-transform: rotate(105.4deg);
          transform: rotate(105.4deg);
}
.end-30:before {
  -webkit-transform: rotate(109deg);
          transform: rotate(109deg);
}
.end-31:before {
  -webkit-transform: rotate(112.6deg);
          transform: rotate(112.6deg);
}
.end-32:before {
  -webkit-transform: rotate(116.2deg);
          transform: rotate(116.2deg);
}
.end-33:before {
  -webkit-transform: rotate(119.8deg);
          transform: rotate(119.8deg);
}
.end-34:before {
  -webkit-transform: rotate(123.4deg);
          transform: rotate(123.4deg);
}
.end-35:before {
  -webkit-transform: rotate(127deg);
          transform: rotate(127deg);
}
.end-36:before {
  -webkit-transform: rotate(130.6deg);
          transform: rotate(130.6deg);
}
.end-37:before {
  -webkit-transform: rotate(134.2deg);
          transform: rotate(134.2deg);
}
.end-38:before {
  -webkit-transform: rotate(137.8deg);
          transform: rotate(137.8deg);
}
.end-39:before {
  -webkit-transform: rotate(141.4deg);
          transform: rotate(141.4deg);
}
.end-40:before {
  -webkit-transform: rotate(145deg);
          transform: rotate(145deg);
}
.end-41:before {
  -webkit-transform: rotate(148.6deg);
          transform: rotate(148.6deg);
}
.end-42:before {
  -webkit-transform: rotate(152.2deg);
          transform: rotate(152.2deg);
}
.end-43:before {
  -webkit-transform: rotate(155.8deg);
          transform: rotate(155.8deg);
}
.end-44:before {
  -webkit-transform: rotate(159.4deg);
          transform: rotate(159.4deg);
}
.end-45:before {
  -webkit-transform: rotate(163deg);
          transform: rotate(163deg);
}
.end-46:before {
  -webkit-transform: rotate(166.6deg);
          transform: rotate(166.6deg);
}
.end-47:before {
  -webkit-transform: rotate(170.2deg);
          transform: rotate(170.2deg);
}
.end-48:before {
  -webkit-transform: rotate(173.8deg);
          transform: rotate(173.8deg);
}
.end-49:before {
  -webkit-transform: rotate(177.4deg);
          transform: rotate(177.4deg);
}
.end-50:before {
  -webkit-transform: rotate(181deg);
          transform: rotate(181deg);
}
.end-51:before {
  -webkit-transform: rotate(184.6deg);
          transform: rotate(184.6deg);
}
.end-52:before {
  -webkit-transform: rotate(188.2deg);
          transform: rotate(188.2deg);
}
.end-53:before {
  -webkit-transform: rotate(191.8deg);
          transform: rotate(191.8deg);
}
.end-54:before {
  -webkit-transform: rotate(195.4deg);
          transform: rotate(195.4deg);
}
.end-55:before {
  -webkit-transform: rotate(199deg);
          transform: rotate(199deg);
}
.end-56:before {
  -webkit-transform: rotate(202.6deg);
          transform: rotate(202.6deg);
}
.end-57:before {
  -webkit-transform: rotate(206.2deg);
          transform: rotate(206.2deg);
}
.end-58:before {
  -webkit-transform: rotate(209.8deg);
          transform: rotate(209.8deg);
}
.end-59:before {
  -webkit-transform: rotate(213.4deg);
          transform: rotate(213.4deg);
}
.end-60:before {
  -webkit-transform: rotate(217deg);
          transform: rotate(217deg);
}
.end-61:before {
  -webkit-transform: rotate(220.6deg);
          transform: rotate(220.6deg);
}
.end-62:before {
  -webkit-transform: rotate(224.2deg);
          transform: rotate(224.2deg);
}
.end-63:before {
  -webkit-transform: rotate(227.8deg);
          transform: rotate(227.8deg);
}
.end-64:before {
  -webkit-transform: rotate(231.4deg);
          transform: rotate(231.4deg);
}
.end-65:before {
  -webkit-transform: rotate(235deg);
          transform: rotate(235deg);
}
.end-66:before {
  -webkit-transform: rotate(238.6deg);
          transform: rotate(238.6deg);
}
.end-67:before {
  -webkit-transform: rotate(242.2deg);
          transform: rotate(242.2deg);
}
.end-68:before {
  -webkit-transform: rotate(245.8deg);
          transform: rotate(245.8deg);
}
.end-69:before {
  -webkit-transform: rotate(249.4deg);
          transform: rotate(249.4deg);
}
.end-70:before {
  -webkit-transform: rotate(253deg);
          transform: rotate(253deg);
}
.end-71:before {
  -webkit-transform: rotate(256.6deg);
          transform: rotate(256.6deg);
}
.end-72:before {
  -webkit-transform: rotate(260.2deg);
          transform: rotate(260.2deg);
}
.end-73:before {
  -webkit-transform: rotate(263.8deg);
          transform: rotate(263.8deg);
}
.end-74:before {
  -webkit-transform: rotate(267.4deg);
          transform: rotate(267.4deg);
}
.end-75:before {
  -webkit-transform: rotate(271deg);
          transform: rotate(271deg);
}
.end-76:before {
  -webkit-transform: rotate(274.6deg);
          transform: rotate(274.6deg);
}
.end-77:before {
  -webkit-transform: rotate(278.2deg);
          transform: rotate(278.2deg);
}
.end-78:before {
  -webkit-transform: rotate(281.8deg);
          transform: rotate(281.8deg);
}
.end-79:before {
  -webkit-transform: rotate(285.4deg);
          transform: rotate(285.4deg);
}
.end-80:before {
  -webkit-transform: rotate(289deg);
          transform: rotate(289deg);
}
.end-81:before {
  -webkit-transform: rotate(292.6deg);
          transform: rotate(292.6deg);
}
.end-82:before {
  -webkit-transform: rotate(296.2deg);
          transform: rotate(296.2deg);
}
.end-83:before {
  -webkit-transform: rotate(299.8deg);
          transform: rotate(299.8deg);
}
.end-84:before {
  -webkit-transform: rotate(303.4deg);
          transform: rotate(303.4deg);
}
.end-85:before {
  -webkit-transform: rotate(307deg);
          transform: rotate(307deg);
}
.end-86:before {
  -webkit-transform: rotate(310.6deg);
          transform: rotate(310.6deg);
}
.end-87:before {
  -webkit-transform: rotate(314.2deg);
          transform: rotate(314.2deg);
}
.end-88:before {
  -webkit-transform: rotate(317.8deg);
          transform: rotate(317.8deg);
}
.end-89:before {
  -webkit-transform: rotate(321.4deg);
          transform: rotate(321.4deg);
}
.end-90:before {
  -webkit-transform: rotate(325deg);
          transform: rotate(325deg);
}
.end-91:before {
  -webkit-transform: rotate(328.6deg);
          transform: rotate(328.6deg);
}
.end-92:before {
  -webkit-transform: rotate(332.2deg);
          transform: rotate(332.2deg);
}
.end-93:before {
  -webkit-transform: rotate(335.8deg);
          transform: rotate(335.8deg);
}
.end-94:before {
  -webkit-transform: rotate(339.4deg);
          transform: rotate(339.4deg);
}
.end-95:before {
  -webkit-transform: rotate(343deg);
          transform: rotate(343deg);
}
.end-96:before {
  -webkit-transform: rotate(346.6deg);
          transform: rotate(346.6deg);
}
.end-97:before {
  -webkit-transform: rotate(350.2deg);
          transform: rotate(350.2deg);
}
.end-98:before {
  -webkit-transform: rotate(353.8deg);
          transform: rotate(353.8deg);
}
.end-99:before {
  -webkit-transform: rotate(357.4deg);
          transform: rotate(357.4deg);
}
.end-100:before {
  -webkit-transform: rotate(361deg);
          transform: rotate(361deg);
}

</style>
    </head>
    <body>
        
            <?php
            
            // CURRENT SESSION PHONE RETRIEVAL
            $watestdb = new PDO('mysql:host=127.0.0.1:8889;dbname=HACMA', 'WATestUser1', 'WATestPwd1');
            session_start();
            $sql = "SELECT session_phone FROM availablesessions WHERE flag='1'";
            $phone = $watestdb->query($sql);
            for ($i = 0; $i < $phone->rowCount(); $i++) 
            { 
                $row = $phone->fetch(); 
                $userphone = $row["session_phone"]; 
            }
           
           // USER NAME RETRIEVAL
           $sql = "SELECT user_name FROM user WHERE user_phone='".$userphone."';";
           $check = $watestdb->query($sql);
           for ($i = 0; $i < $check->rowCount(); $i++) 
           { 
               $row = $check->fetch(); 
               $name = $row["user_name"]; 
            } 
            ?>
        
         <div class="cabinet-page">
        
            <form class="cabinet-form">
          
                <!-- WELCOME CONTAINER-->
                <div class="welcome_container">
                    <h3 style="color: #ffffff; padding: 20px 0px 0px 20px; margin: 0px 0px 0px 0px; font-family: Verdana, sans-serif" >
                    <label id="name"><?php print $name; ?></label>, welcome to your HACMA User Cabinet!</h3>
                </div>
                
                <!-- PAGE NAVIGATION MENU-->
                <div class="sidenav">
                    <a href="cabinet.php"><i class="square" ></i>Main Page</a>
                    <a href="package.php"><i class="square" ></i>Package</a>
                    <a href="#"><i class="square" ></i>Usage</a>
                    <a href="topup-number.php"><i class="square" ></i>Top-up</a>
                    <a href="#"><i class="square" ></i>FAQ</a>
                    <a href="#"><i class="square" ></i>Chat with us</a>
                    <a href="locations.php"><i class="square" ></i>Find stores</a>
                    <a href="#"><i class="square" ></i>Log out</a>
                    <br><br><br><br>
                    
                    <!-- LOGO IN TABLE-->
                    <table style="width:100%">
                    <tr>
                    <td style="width:30%"><img src="img/hacmalogopurple.png" style="border-radius: 50%; margin: 15px;"></td>
                    <td style="width:70%"><b style="text-align: left; font-size:20px;">HACMA</b></td>
                    </tr>
                    </table>
                    
                 </div>
                
             <!-- USER PHONE RETRIEVAL-->  
              <?php 
              $sql = "SELECT user_balance FROM user WHERE user_phone='".$userphone."';";
              $check = $watestdb->query($sql);
              for ($i = 0; $i < $check->rowCount(); $i++) 
              { 
                $row = $check->fetch(); 
                $balance = $row["user_balance"]; 

              }
              ?>
              
              <!-- USER PHONE CONTAINER-->
              <div class="number_container">
                <p style="font-size: 20px;font-family: Verdana, sans-serif; color: #1a1919; padding: 0px 0px 0px 15px; "  >
                Your number:</p> <p class="purpletext"><?php print $userphone; ?></p>  
              </div> 
              
              <!-- MINUTES HAVE RETRIEVAL-->  
              <?php
              $sql = "SELECT package_call FROM Package, user WHERE (user.user_phone='".$userphone."' AND user.user_package= Package.package_name);";
              $check = $watestdb->query($sql);
              for ($i = 0; $i < $check->rowCount(); $i++) 
              { 
                $row = $check->fetch(); 
                $calls = $row["package_call"]; 
              } 
              
              //MINUTES REST RETRIEVAL
              $sql = "SELECT Rest_call FROM Rest, Package, user WHERE (user.user_phone='".$userphone."' AND user.user_package= Package.package_name AND Package.package_restid = Rest.Rest_id) ;";
              $check = $watestdb->query($sql);
              for ($i = 0; $i < $check->rowCount(); $i++) 
              { 
                $row = $check->fetch(); 
                $restcalls = $row["Rest_call"]; 
              } 
              
              $percent_calls = intdiv((($restcalls/$calls)*100), 1);
              
              $used_calls = $calls-$restcalls;
              $hours_call = intdiv($used_calls, 60);;
              $minutes_call =  $used_calls  - (intdiv($used_calls, 60))*60;
              
              
              //SMS HAVE RETRIEVAL
              
              $sql = "SELECT package_sms FROM Package, user WHERE (user.user_phone='".$userphone."' AND user.user_package= Package.package_name);";
              $check = $watestdb->query($sql);
              for ($i = 0; $i < $check->rowCount(); $i++) 
              { 
                $row = $check->fetch(); 
                $sms = $row["package_sms"]; 
              } 
              
              //SMS REST RETRIEVAL
              $sql = "SELECT Rest_sms FROM Rest, Package, user WHERE (user.user_phone='".$userphone."' AND user.user_package= Package.package_name AND Package.package_restid = Rest.Rest_id) ;";
              $check = $watestdb->query($sql);
              for ($i = 0; $i < $check->rowCount(); $i++) 
              { 
                $row = $check->fetch(); 
                $rest_sms = $row["Rest_sms"]; 
              } 
              
              $percent_sms = intdiv((($rest_sms/$sms)*100), 1);
              
              //INTERNET HAVE RETRIEVAL
              
              $sql = "SELECT package_mgb FROM Package, user WHERE (user.user_phone='".$userphone."' AND user.user_package= Package.package_name);";
              $check = $watestdb->query($sql);
              for ($i = 0; $i < $check->rowCount(); $i++) 
              { 
                $row = $check->fetch(); 
                $mgb = $row["package_mgb"]; 
              } 
              
              //SMS REST RETRIEVAL
              $sql = "SELECT Rest_mgb FROM Rest, Package, user WHERE (user.user_phone='".$userphone."' AND user.user_package= Package.package_name AND Package.package_restid = Rest.Rest_id) ;";
              $check = $watestdb->query($sql);
              for ($i = 0; $i < $check->rowCount(); $i++) 
              { 
                $row = $check->fetch(); 
                $rest_mgb = $row["Rest_mgb"]; 
              } 
              
              $percent_mgb = intdiv((($rest_mgb/$mgb)*100), 1);
              
              ?>
             
              <!-- BALANCE CONTAINER-->  
              <div class="balance_container">
              <p  style="font-size: 20px;font-family: Verdana, sans-serif; color: #1a1919; padding: 0px 0px 0px 15px"  >Balance:</p> <p class="purpletext"><?php print $balance; ?> €</p>
              <br>
              <p  class="simpletext">Calls <span class="balance_text"><?php echo ($hours_call.":".$minutes_call.":00");?></span> </p>
              <p  class="simpletext" >Messages <span class="balance_text"><?php echo ($sms-$rest_sms." SMSes");?></span></p>
              <p  class="simpletext">Internet connection <span class="balance_text"><?php echo ($mgb-$rest_mgb." MB");?></span></p>
              </div>
                
              
                
              <!-- MINUTES LEFT CHART-->  
              <div class="minutes_container">
              <div class="wrapper" >
              <div class="pie start-0 end-<?php echo $percent_calls;?>"></div>
              <div class="pie big start-<?php echo $percent_calls;?> end-<?php echo 100-$percent_calls;?>"></div>
              <div class="pie over"><span><?php echo $restcalls;?><br>Mins</span></div>
              </div>
                  
              <!-- MINUTES HAVE LABEL-->   
              <p  style="  position: absolute; bottom: 0; left: 15%; font-family: Verdana, sans-serif; color: #1a1919; padding: 0px 0px 0px 15px"  > <label id="minutes"><?php print  $calls; ?></label> Minutes</p>
              </div>
                 
              <!-- SMS LEFT CHART-->  
              <div class="sms_container">  
              <div class="wrapper" >
              <div class="pie start-0 end-<?php echo $percent_sms;?>"></div>
              <div class="pie big start-<?php echo $percent_sms;?> end-<?php echo 100-$percent_sms;?>"></div>
              <div class="pie over"><span><?php echo $rest_sms;?><br>SMSes</span></div>
              </div>
                  
              <!-- SMS HAVE LABEL-->
              <p  style="  position: absolute; bottom: 0; left: 25%; font-family: Verdana, sans-serif; color: #1a1919; padding: 0px 0px 0px 15px"  > <label id="smses"><?php print  $sms; ?></label> SMS</p>
              </div>
                
              <!-- INTERNET LEFT CHART-->
              <div class="gb_container">
              <div class="wrapper" >
              <div class="pie start-0 end-<?php echo $percent_mgb;?>"></div>
              <div class="pie big start-<?php echo $percent_mgb;?> end-<?php echo 100-$percent_mgb;?>"></div>
              <div class="pie over"><span><?php print  intdiv($rest_mgb,1024); ?><br>GB</span></div>
              </div>
                   
              <!-- INTERNET HAVE LABEL-->    
              <p  style="  position: absolute; bottom: 0; left: 30%; font-family: Verdana, sans-serif; color: #1a1919; padding: 0px 0px 0px 15px"  > <label id="gbs"><?php print  intdiv($mgb,1024); ?></label> GB</p>
              </div>
                
              <!-- BUY NEW CONTAINER-->
              <div class="buynew_container"> 
              <a href="package.php"><img src="img/buynewdark.png" style="padding: 10px;"></a>
              <p  style="  position: absolute; bottom: 0; left: 7%;  font-family: Verdana, sans-serif; color: #1a1919; padding: 0px 0px 0px 15px;"  >Buy new package</p>
              </div>
            
            
             </form>
          
             </div>
  
            
    </body>
</html>
