
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

   
   
<div class="container"><!--container-->

   

     
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
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1000">
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

    
  
      
     
   </body>
</html>