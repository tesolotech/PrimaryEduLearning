<!DOCTYPE html>
<html>
<!--<video autoplay loop muted poster id="video"><source src="Videos/v1.mp4" type="video/mp4"></video> -->
<head>
	<title>Class-2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style@PrimaryeduClass-2.css" />
	</head>
<body>
 <!-- <video autoplay loop muted poster id="background"><source src="Videos/v2.mp4" type="video/mp4"></video>   -->
 <div class="bk"><a href="Index@Primaryedu.php"><img src="Images/bk.jpg" height="50" width="50" / style="border-radius: 50px;"></a></div>
<div class="container">
  <h2>Welcome To Primary Education</h2>
  <ul class="nav nav-tabs" id="tab">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#hindi">Hindi</a></li>
    <li><a data-toggle="tab" href="#english">English</a></li>
    <li><a data-toggle="tab" href="#science">Science</a></li>
    <li><a data-toggle="tab" href="#maths">Maths</a></li>
    <li><a data-toggle="tab" href="#grammer">Grammer</a></li>
    <li><a data-toggle="tab" href="#test">Test Series</a></li>
  </ul>

  <div class="tab-content">

    <div id="home" class="tab-pane fade in active">
     
    <!--****************************************Slider in Home ********************************************************** -->
 
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 4</div>
        <img src="Images/a-1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="Images/a-2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 4</div>
        <img src="Images/a-3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>
    <div class="mySlides fade">
         <div class="numbertext">4 / 4</div>
          <img src="Images/a-4.jpg" style="width:100%">
        <div class="text">Caption Four</div>
    </div>
</div>
<br>

    <div style="text-align:center">
         <span class="dot"></span> 
         <span class="dot"></span> 
         <span class="dot"></span> 
        <span class="dot"></span> 
    </div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); // Change image every 2 seconds
}
</script>
<!--****************************************Slider in Home ********************************************************** -->


    </div>

    <div id="hindi" class="tab-pane fade">
          <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
                    <div class="container">                        
                     <ul class="pagination">
                         <li><a href="https://www.youtube.com/embed/J5l0SwmX06Q?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-1</a></li>
                         <li><a href="https://www.youtube.com/embed/ryksbZqD-kg?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-2</a></li>
                        <li><a href="https://www.youtube.com/embed/akeihFQFeP0?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-3</a></li>
                        <li><a href="https://www.youtube.com/embed/St0U4klaTPw?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-4</a></li>
                       <li><a href="https://www.youtube.com/embed/eXi9dJrt7sk?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-5</a></li>
                       <li><a href="https://www.youtube.com/embed/Sn6i0icuKpk?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-6</a></li>
                       <li><a href="https://www.youtube.com/embed/daNTjhHTnEw?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-7</a></li>
                       <li><a href="https://www.youtube.com/embed/v2x1ZsGcpP4?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-8</a></li>
                       <li><a href="https://www.youtube.com/embed/j7ieA96CJGc?autoplay=0" target="containt">Lecture-9</a></li>
                       <li><a href="https://www.youtube.com/embed/wbtxLfxpWE4?autoplay=0" target="containt">Lecture-10</a></li>
                       <li><a href="https://www.youtube.com/embed/vt-pTTc9g_g?autoplay=0" target="containt">Lecture-11</a></li>
                       <li><a href="https://www.youtube.com/embed/MJ-6sxcS9Bs?autoplay=0" target="containt">Lecture-12</a></li>
                    </ul>
                </div>
          </div>
          </div></div>
          <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/k2pZlPgdQoE?autoplay=0" name="containt" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>
      </div>

    <div id="english" class="tab-pane fade">
      <div class="container">
           <ul class="pagination">
                         <li><a href="https://www.youtube.com/embed/s9Rui9VQFKs?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way" target="eng">Lecture-1</a></li>
                         <li><a href="https://www.youtube.com/embed/wsPA_yOq-iU?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-2</a></li>
                        <li><a href="https://www.youtube.com/embed/n-Nm48E2plU?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-3</a></li>
                        <li><a href="https://www.youtube.com/embed/8D-ZHH8n5AQ?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-4</a></li>
                       <li><a href="https://www.youtube.com/embed/g8V8irkJABM?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-5</a></li>
                       <li><a href="https://www.youtube.com/embed/iip6q-B4ZU0?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-6</a></li>
                       <li><a href="https://www.youtube.com/embed/3qkaO6ebDEw?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-7</a></li>
                       <li><a href="https://www.youtube.com/embed/PmOEe58a1L4?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-8</a></li>
                       <li><a href="https://www.youtube.com/embed/d4D0jrpiwFQ?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-9</a></li>
                       <li><a href="https://www.youtube.com/embed/avjpRrVHgbk?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-10</a></li>
                       <li><a href="https://www.youtube.com/embed/u29phRKh_2U?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-11</a></li>
                       <li><a href="https://www.youtube.com/embed/YbXoOasdHSg?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" target="eng">Lecture-12</a></li>
                    </ul>
      </div>
         <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/s9Rui9VQFKs?list=PLIDXQ2rveIazzdLuCbH1cAuZPFXu47way?autoplay=0" name="eng" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>

    </div>

    <div id="science" class="tab-pane fade">

      <div class="col-lg-2">
        <ul style="list-style: none;">
          <li><a href="https://www.youtube.com/embed/vs6SKTkOXSE?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan">Lecture-1</a></li>
          <li><a href="https://www.youtube.com/embed/Sc1YM1z22hw?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan"> Lecture-2</a></li>
          <li><a href="https://www.youtube.com/embed/dMo_f7lNWfs?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan"> Lecture-3</a></li>
          <li><a href="https://www.youtube.com/embed/0H0A_upSV8M?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan">Lecture-4</a></li>
          <li><a href="https://www.youtube.com/embed/QPLkLntvbdw?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan"> Lecture-5</a></li>
          <li><a href="https://www.youtube.com/embed/QPLkLntvbdw?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan">Lecture-6</a></li>
          <li><a href="https://www.youtube.com/embed/QPLkLntvbdw?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan"> Lecture-7</a></li>
          <li><a href="https://www.youtube.com/embed/QPLkLntvbdw?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan"> Lecture-8</a></li>
          <li><a href="https://www.youtube.com/embed/QPLkLntvbdw?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan">Lecture-9</a></li>
          <li><a href="https://www.youtube.com/embed/QPLkLntvbdw?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" target="vigyan"> Lecture-10</a></li>


          
        </ul>
      </div>
       <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/vs6SKTkOXSE?list=PLPbVevbMS3MrtqLHveKxPmDFTHdgnbzWa?autoplay=0" name="vigyan" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>

    </div>
     <div id="maths" class="tab-pane fade">
      <div class="col-lg-12">
        <div class="container">
          <ul class="breadcrumb">
             <li><a href="https://www.youtube.com/embed/KRbQ39nlDBc?autoplay=0" target="iframe">Lecture-1</a></li>
               <li><a href="https://www.youtube.com/embed/22wgW9txOIY?list=PLPbVevbMS3MqJncW7rsWve5QJb3lv_dvD?autoplay=0" target="iframe">Lecture-2</a></li>
               <li><a href="https://www.youtube.com/embed/QUxkWRmbCpA?list=PLPbVevbMS3MqJncW7rsWve5QJb3lv_dvD?autoplay=0" target="iframe">Lecture-3</a></li>
               <li><a href="https://www.youtube.com/embed/y_OWSI95fls?list=PLPbVevbMS3MqJncW7rsWve5QJb3lv_dvD?autoplay=0" target="iframe">Lecture-4</a></li>
              <li><a href="https://www.youtube.com/embed/7ekpcfkU9Zo?list=PLPbVevbMS3MqJncW7rsWve5QJb3lv_dvD?autoplay=0" target="iframe">Lecture-5</a></li>
              <li><a href="https://www.youtube.com/embed/7ekpcfkU9Zo?list=PLPbVevbMS3MqJncW7rsWve5QJb3lv_dvD?autoplay=0" target="iframe">Lecture-6</a></li>
              <li><a href="https://www.youtube.com/embed/LNantAeQuLw?list=PLPbVevbMS3MqJncW7rsWve5QJb3lv_dvD?autoplay=0" target="iframe">Lecture-7</a></li>
              <li><a href="https://www.youtube.com/embed/qsbej7I0VPc?list=PLPbVevbMS3MqJncW7rsWve5QJb3lv_dvD?autoplay=0" target="iframe">Lecture-8</a></li>
               <li><a href="https://www.youtube.com/embed/r-Ta91qSa18?list=PLPbVevbMS3MoRk2rR2g4d3fxwq5Sacrhh?autoplay=0" target="iframe">Lecture-9</a></li>
              <li><a href="https://www.youtube.com/embed/jGkjRte17sw?list=PLPbVevbMS3MoRk2rR2g4d3fxwq5Sacrhh?autoplay=0" target="iframe">Lecture-10</a></li>
              <li><a href="https://www.youtube.com/embed/97INd1E_uNw?list=PLPbVevbMS3MoRk2rR2g4d3fxwq5Sacrhh?autoplay=0" target="iframe">Lecture-11</a></li>
              <li><a href="https://www.youtube.com/embed/0iAqA4ae0nU?list=PLPbVevbMS3MoRk2rR2g4d3fxwq5Sacrhh?autoplay=0" target="iframe">Lecture-12</a></li>




            
          </ul>
        </div>
      </div>
      <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/KRbQ39nlDBc?autoplay=0" name="iframe" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>

    </div>

     <div id="grammer" class="tab-pane fade">
              <div class="container">                        
                     <ul class="pagination">
                         <li class="active"><a href="https://www.youtube.com/embed/QkMasoNWF9E?autoplay=0" target="con">वर्ण और वर्णमाला</a></li>
                         <li><a href="https://www.youtube.com/embed/zRmIKYvWRPU?autoplay=0" target="con">संज्ञा</a></li>
                        <li><a href="https://www.youtube.com/embed/RdqXOIUUlwY?autoplay=0" target="con">सर्वनाम</a></li>
                        <li><a href="https://www.youtube.com/embed/ONt-H-pmoy0?autoplay=0" target="con">वचन</a></li>
                       <li><a href="https://www.youtube.com/embed/QOxsqNGW3p4?autoplay=0" target="con"> लिंग</a></li>
                       <li><a href="https://www.youtube.com/embed/AvakIFgvDPQ?autoplay=0" target="con"> विशेषण</a></li>
                    </ul>
                </div>
                <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/QkMasoNWF9E?autoplay=0" name="con" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>

    </div>
     <div id="test" class="tab-pane fade">
           <div class="container">                        
                     <ul class="pagination">
                         <li><a href="Primaryedu@ClassTwoHindiTest.php" target="#">Hindi</a></li>
                         <li><a href="Primaryedu@Class2EnglishTest.php">English</a></li>
                        <li><a href="Primaryedu@ClassTwoMathTest.php">Maths</a></li>
                        <li><a href="#">Science</a></li>
                       <li><a href="#">Grammer</a></li>
                    </ul>
                </div>
    </div>

  </div>
</div>
</body>
</html>
