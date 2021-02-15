<!DOCTYPE html>
<html>
<head>
  <title>Invertis</title>
      <meta charset = "utf-8">
      <meta http-equiv="" uiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
      <title>Bootstrap 101 Template</title>
      
      <!-- Bootstrap -->
      <link href = "bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

     <style>
     .container{
      background-color: #91B0DF;
       
     }

     .row .row-md-12 .well{
background-color: #B10D23;
}
        
        body{
         
          padding-top: 0px;
          padding-bottom: 0px;

        }
        .pos{
        
           float: right; 
          padding-right:  50px; 
          
           vertical-align: text-top;
        }
        #d{
           vertical-align: baseline;
           padding-left: 10px;
           width: 180px;
           height: 90px;
        }
        





      </style>
   </head>

   
   <body>
    
   <div class="container"><!--container-->



    <div class="row" >
      <div class="row-md-12">
         <?php
         include_once"f.php";
         ?>
      </div>
    </div>





          <!--Header-->
 <div class="row">
          <div class="row-md-12 ">
        
          <table class="table">
  
                  <tr bgcolor="#B10D23">
        <td>
        <img src="logo2.png" id="d">
       <h1 class="text-primary pos">Department of Computer Science and Engineering</h1>
 </td>
  </tr>
    </table>
      </div>
  </div>
    
       
       <!--Header end-->
     
      <!--Menu Bar-->

      <div class="row">
        <div class="row-md-12 ">

          <nav class = "navbar navbar-default " role = "navigation">
   
        <div class="row-md-12 ">
   <div class = "navbar-header ">
      <button type = "button" class = "navbar-toggle" 
         data-toggle = "collapse" data-target = "#example-navbar-collapse">
         <span class = "sr-only">Toggle navigation</span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
         <span class = "icon-bar"></span>
      </button>
    
      <a class = "navbar-brand" href = "home.php">Home</a>
   </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
  
      <ul class = "nav navbar-nav">
         
        <li class = "dropdown"> <!--Academics Drop -->
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               Academics
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href = "Graduate Admissions.php">Graduate Admissions</a></li>
               <li><a href = "Degree Program.php">Degree Program</a></li>
               <li><a href = "Course.php">Course</a></li>
            </ul>
         </li><!--Academics Drop END-->
         <li><a href = "#">PhD@CSE</a></li>
         <li><a href = "#">People</a></li>
         <li><a href = "#">Event</a></li>
         <li><a href = "#">Research</a></li>

        <li class = "dropdown">
            <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown">
               Student Activities
               <b class = "caret"></b>
            </a>
            
            <ul class = "dropdown-menu">
               <li><a href = "#">ACES ACM</a></li>
               <li><a href = "#">Teaching Assistant Awards</a></li>
               <li><a href = "#">Jasper Report</a></li>
               
               <li class = "divider"></li>
               <li><a href = "#">Separated link</a></li>
               
               <li class = "divider"></li>
               <li><a href = "#">One more separated link</a></li>
            </ul>
            
         </li>
      
      </ul>
   </div>
   
</nav>

  
        </div>
      </div>

<!--Menu Bar End-->

<!--slider-->
<div class="row" >
  <div class="row-md-12">
   <?php
   include_once"slider.php";
   ?>
</div></div>
    
  

<!--slider End-->

<!--content-->
<div class="row">
  <div class="col-md-12">
   <?php
   include_once"jumbo.php";
   ?>
  </div>
</div>


<!--content End-->

<!--project div-->
<div class="row" style="width:99.9%;margin-left:-1px; margin-right: -20px;">
  <div class="row-md-12" style="width:100%">
   <?php
   include_once"s.php";
   ?>
  </div>
</div>

<!--project end-->


<!--footer-->

<div class="row">
  <div class="row-md-12">
    <div class="well text-center">
  Copyright &#169; 2018 Department of Computer Science and Engineering. All Rights Reserved.
</div>
  
  </div>



<!--footer End-->
           
  </div><!--container end-->
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "bootstrap.min.js"></script>
      
   </body>
</html>