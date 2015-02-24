<!DOCTYPE html>
<html lang="en" >
<head>
    <title>
      Abilene Seniors Magazine
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.ico">
    <meta charset="utf-8" />
    <meta name="description" content="Search Seniors needs in Abilene, Texas. Inclucing: Independent Living and Retirement Homes, Nursing Homes, Home Health Care Providers, and Seniors Centers">
    <meta name="keywords" content="Find, Search, Seniors, Abilene, Texas, Nursing Homes, Home Health, Retirement, Hospice Care, Elderly">
    
    <script type="text/javascript" src="<?php echo base_url();?>javascript/senors_javascript.js"></script>
    <link href="<?php echo base_url();?>css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>javascript/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>javascript/jquery-ui-1.10.4.custom.js"></script>
   
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/san_ang_srs_main.css">
    <script>
        //google analytics will go here
    </script>

    <style type="text/css">
        html    {margin: 0px;
                background-image: url(<?php echo base_url();?>images/bgimage.jpg);
                background-repeat: no-repeat;
                background-color: white;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: 100%;
                font-size: 1em;
                letter-spacing: 1px;}
        body    {margin: 0px;}
    </style>

</head>
<body>
    <script type="text/javascript">
        $(document).ready(function(){
                $( "#accordion" ).accordion({ collapsible: true, heightStyle: "content", active: false });
                $( "#button" ).button();
                $( "#menu" ).menu();
        });      
    </script>
    

    <header>
        
        <h1>ABILENE<span class="alt1">SENIORS</span>MAGAZINE<span class="alt1">.COM</span></h1>
        <p class="small1">Brought to you by the <span class="small2">Abilene Seniors Magazine</span></p>
        
    </header>
    
    <div id="nav_bar">
        <table>
            <tr>
                <!--<td style="width: 160px;"><a href="#" onclick="show_links();">NAVIGATION ></a></td>-->
                <td><div id="links">
                        <ul>
                            <li><a href="<?php echo base_url();?>">HOME</a></li>
                            <!-- <li><a href="<?php echo base_url();?>welcome/search">SEARCH</a></li> -->
                            <li><a href="<?php echo base_url();?>welcome/message">CONTACT</a></li>
                            <li><a href="<?php echo base_url();?>welcome/definition">DEFINITIONS</a></li>
                            <li><a href="<?php echo base_url();?>welcome/download">DOWNLOAD</a></li>
                            <!-- <li><a href="<?php echo base_url();?>blog" target="_blank">BLOG</a></li> -->
                            <!--<li><a href="#">ARTICLES</a></li>-->
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    
