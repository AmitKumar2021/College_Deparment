
<!DOCTYPE html>
<html>
<head>
  <title>Invertis</title>
      <meta charset = "utf-8">
      <meta http-equiv="" uiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
      <title>Bootstrap 101 Template</title>
      
     
      <link rel="stylesheet" href="bootstrap.min.css">
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
<style>
     .container{
      background-image: url(5.jpg);
       
     }

     .row .row-md-12 .well{
background-color: #B10D23;
}
        
        body{
          background-image: url(4.png);
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
        



        .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
      height: 40%;}
img{
  max-height: 220px;
}
      </style>
   </head>

   
   <body>
   <div id="myModal" class="modal fade rounded">
    <div class="modal-dialog" >
        <div class="modal-content" >
          
            <div class="modal-header" style="background-color: red; ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times; </button>
                
                <img src="logo2.png"  style="float: left; width: 160px; height: 70px;"><h1 class="modal-title" style="text-align: right;" >Invertis University</h1>
            </div>
            <div class="modal-body" style="background-color: cyan;">
              <h1 class="text text-primary" style="text-align: center;">Welcome</h1>
               <h2 class="text text-primary" style="text-align: center;">To</h2>
        <h3 class="text text-primary" style="text-align: center;">Computer Science Deparment</h3>
                
                    
                
         
          </div>
        </div>
    </div>
</div>
<div class="container"><!--container-->

   


          <!--Header-->
 <div class="row ">
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
      
    
      <a class = "navbar-brand" href = "home.php">Home</a>
   </div>
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
  
      <ul class = "nav navbar-nav">
         
        <li><a href = "academics.php">Academics</a></li>
         <li><a href = "PHD.php">PhD@CSE</a></li>
        
                  <!--People -->

                  <li><a href = "people.php">People</a></li>
                        <!--People End -->



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
    <div class="row">
  <div class="row-md-12" style="padding-left:20px; padding-right: 20px;">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="image/cse.jpg">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="image/science.jpg" >
        <div class="carousel-caption">
          
        </div>
      </div>
    
      <div class="item">
        <img src="image/lab.jpeg">
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        <img src="image/4.jpg" >
        <div class="carousel-caption">
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
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
<div class="row" style="width:99.9%;margin-left:-0px; padding-right: 20px; padding-left: 20px;">
  <div class="row-md-12" style="width:100%">
   <?php
   include_once"s.php";
   ?>
  </div>
</div>

<!--project end-->


<!--footer-->

<div class="row" style="  padding-right: 15px; padding-left: 15px">
  <div class="row-md-12">
    <div class="well text-center" style="color: white;">
  Copyright &#169; 2018 Department of Computer Science and Engineering. All Rights Reserved.
</div>
  
  </div>


    
  
      
     
   </body>
</html>