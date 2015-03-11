<?php
//echo base_url('assets/css/smartclassroom.css')
?>
<!DOCTYPE html> <!-- in this file, you can customize your SEO, CSS, favicon and more -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Codeigniter, Metro UI CSS">
    <meta name="author" content="Zulfindra">
    <title>Code Metro - a Custom Codeigniter and Metro UI CSS</title>
    <!--METRO CSS-->
    <link href="<?php echo base_url('assets/css/metro.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/metro-responsive.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/iconFont.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
    <!--FAVICON METRO-->
    <link href="<?php echo base_url('assets/images/metro-icon.png') ?>" type="image/ico" rel="shortcut icon">
    <style>
        #header {
            background-color: #000000;
            color: white;
            text-align: center;
            padding: 5px;
        }
       h1 {
            color: #956429;
        }
        #nav {
            line-height: 30px;
            background-color: #eeeeee;
            height: 500px;
            width: 200px;
            float: left;
            padding: 5px;
        }

         #section {
             width: 80;
             height: 500px;
             float: left;
             background-color: navajowhite;
             padding: 10px;
         }

        #footer {
            background-color: #000000;
            color: white;
            clear: both;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body class="metro" style="background-color: navajowhite">

<div id="header">
    <h1>Smart Class room</h1>
</div>
<div id="nav">
<nav class="sidebar (light)">
    <ul>

        <li><a href="#">DashBoard</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact Us</a></li>
    </ul>
</nav>
</div>
<div id="section">
    <div>
        <a href="http://localhost/smartclassroom/index.php/student/listStudents">
    <div class="tile bg-crimson">

        <div class="tile-status">
            <span class="name">Attendance System</span>
        </div>
    </div>
        </a>
    <div class="tile bg-crimson"  >

        <div class="tile-status">

            <span class="name">Student Assessment</span>

        </div>
    </div>
    <div class="tile bg-crimson">

        <div class="tile-status">
            <span class="name">Teaching aiding tools</span>
        </div>
    </div>
    </div>
    <div>
    <div class="tile bg-crimson">

        <div class="tile-status">
            <span class="name">Send notifications</span>
        </div>
    </div>
    <div class="tile bg-crimson">

        <div class="tile-status">
            <span class="name">Lecture notes sharing</span>
        </div>
    </div>
    <div class="tile bg-crimson">
        <div class="tile-status">
            <span class="name">Mobile app </span>
        </div>
    </div>
    </div>
</div>
<div id="footer">
    Copyright © smartClassroom.com
</div>

