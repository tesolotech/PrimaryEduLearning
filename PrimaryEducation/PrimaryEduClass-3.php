<!DOCTYPE html>
<html>
<!--<video autoplay loop muted poster id="video"><source src="Videos/v1.mp4" type="video/mp4"></video> -->
<head>
	<title>Class-3</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style@PrimaryeduClass-3.css" />
	</head>
<body>
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
        <div class="numbertext">1 / 5</div>
        <img src="Images/b-1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="Images/b-2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="Images/b-3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>
    <div class="mySlides fade">
         <div class="numbertext">4 / 5</div>
          <img src="Images/b-4.jpg" style="width:100%">
        <div class="text">Caption Four</div>
    </div>
     <div class="mySlides fade">
         <div class="numbertext">5 / 5</div>
          <img src="Images/b-5.jpg" style="width:100%">
        <div class="text">Caption Four</div>
    </div>
</div>
<br>

    <div style="text-align:center">
         <span class="dot"></span> 
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
                         <li><a href="https://www.youtube.com/embed/VvoCAxiNyYI?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-1</a></li>
                         <li><a href="https://www.youtube.com/embed/ry1JWGLiVf8?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-2</a></li>
                        <li><a href="https://www.youtube.com/embed/6bz9qHIHkaI?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-3</a></li>
                        <li><a href="https://www.youtube.com/embed/en3s69EEOPc?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-4</a></li>
                       <li><a href="https://www.youtube.com/embed/TbbmRNZ16Bw?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-5</a></li>
                       <li><a href="https://www.youtube.com/embed/IaTw1ol2QJM?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-6</a></li>
                       <li><a href="https://www.youtube.com/embed/BgYbnzMucwE?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-7</a></li>
                       <li><a href="https://www.youtube.com/embed/W2prfYIHD_g?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-8</a></li>
                       <li><a href="https://www.youtube.com/embed/koBM9C7YAaM?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-9</a></li>
                       <li><a href="https://www.youtube.com/embed/fcwgBU2uqI0?list=PL74L4Mv3cZkiR1eF2mnBgDf6dnPNTi32m?autoplay=0" target="containt">Lecture-10</a></li>
                       <li><a href="https://www.youtube.com/embed/s0WA8gNrMjc?rel=0" target="containt">Lecture-11</a></li>
                       <li><a href="https://www.youtube.com/embed/qHnMxIaJxGk?rel=0" target="containt">Lecture-12</a></li>
                       <li><a href="https://www.youtube.com/embed/rcaLuHRH3kQ?rel=0" target="containt">Lecture-13</a></li>

                    </ul>
                </div>
          </div>
          </div></div>
          <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/2wQBbGN538Q?rel=0" name="containt" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>
      </div>

    <div id="english" class="tab-pane fade">
      <div class="container">              
        <ul class="pagination">
         <li><a href="https://www.youtube.com/embed/n-tr3lHaXc0?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" target="eng">Lecture-1</a></li>
         <li><a href="https://www.youtube.com/embed/quOzMLTRDvE?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" target="eng">Lecture-2</a></li>
         <li><a href="https://www.youtube.com/embed/_CEL_pxqnhg?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" target="eng">Lecture-3</a></li>
         <li><a href="https://www.youtube.com/embed/xB2zuFhEYMM?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" target="eng">Lecture-4</a></li>
          <li><a href="https://www.youtube.com/embed/ugftnL0Bm4A?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" target="eng">Lecture-5</a></li>
          <li><a href="https://www.youtube.com/embed/GkfOBDvIDKg?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" target="eng">Lecture-6</a></li>
         <li><a href="https://www.youtube.com/embed/HoDfypVGD4M?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" target="eng">Lecture-7</a></li>
          <li><a href="https://www.youtube.com/embed/eBX16wBrk7A?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" target="eng">Lecture-8</a></li>
          <li><a href="https://www.youtube.com/embed/QY3MpWeZFE4?rel=0" target="eng">Lecture-9</a></li>
          <li><a href="https://www.youtube.com/embed/r7ht0d6pIfs?rel=0" target="eng">Lecture-10</a></li>
          <li><a href="https://www.youtube.com/embed/SAigjoID-1E?rel=0" target="eng">Lecture-11</a></li>
          <li><a href="https://www.youtube.com/embed/FPjJXXK2Fk8?rel=0" target="eng">Lecture-12</a></li>


          
      </ul>
      </div>
         <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/2LKPxKFEGao?list=PLoIr30tNT8Cb9qq8uDnBdH8GXIn0wVMov?autoplay=0" name="eng" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>

    </div>

    <div id="science" class="tab-pane fade">
      
        <div class="container">
        <ul class="breadcrumb">
          <li><a href="https://www.youtube.com/embed/0H0A_upSV8M?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan">Lecture-1</a></li>
          <li><a href="https://www.youtube.com/embed/jqGSmImsi1k?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan"> Lecture-2</a></li>
          <li><a href="https://www.youtube.com/embed/qGYakScf4_w?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan"> Lecture-3</a></li>
          <li><a href="https://www.youtube.com/embed/SK5QYXqsPU0?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan">Lecture-4</a></li>
          <li><a href="https://www.youtube.com/embed/ByqaVhuOI1g?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan"> Lecture-5</a></li>
          <li><a href="https://www.youtube.com/embed/0q2LS_vYjxc?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan">Lecture-6</a></li>
          <li><a href="https://www.youtube.com/embed/qjS4NGY-RLU?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan"> Lecture-7</a></li>
          <li><a href="https://www.youtube.com/embed/fYndGOHxqh8?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan"> Lecture-8</a></li>
          <li><a href="https://www.youtube.com/embed/jbyxE02Gf5Q?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan">Lecture-9</a></li>
          <li><a href="https://www.youtube.com/embed/_3AUrd2P0fk?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="vigyan"> Lecture-10</a></li>
          <li><a href="https://www.youtube.com/embed/jbyxE02Gf5Q?rel=0" target="vigyan">Lecture-11</a></li>
          <li><a href="https://www.youtube.com/embed/_3AUrd2P0fk?rel=0" target="vigyan"> Lecture-12</a></li>
          <li><a href="https://www.youtube.com/embed/lX8Sw3WQEMM?rel=0" target="vigyan"> Lecture-13</a></li>

        </ul>
      </div>
       <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/0H0A_upSV8M?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" name="vigyan" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>


    </div>
     <div id="maths" class="tab-pane fade">
    
        <div class="container">
        <ul class="breadcrumb">
          <li><a href="https://www.youtube.com/embed/pm1a3kD1jxM?rel=0" target="math">Lecture-1</a></li>
          <li><a href="https://www.youtube.com/embed/L9_qiXx2Dk8?rel=0" target="math"> Lecture-2</a></li>
          <li><a href="https://www.youtube.com/embed/EjxoZvVTeJY?rel=0" target="math"> Lecture-3</a></li>
          <li><a href="https://www.youtube.com/embed/KpYhgqI-KW8?rel=0" target="math">Lecture-4</a></li>
          <li><a href="https://www.youtube.com/embed/GRfIwkj2J6c?rel=0" target="math"> Lecture-5</a></li>
          <li><a href="https://www.youtube.com/embed/yL6q6_XESA8?rel=0" target="math">Lecture-6</a></li>
          <li><a href="https://www.youtube.com/embed/XlvlQBng8V4?rel=0" target="math"> Lecture-7</a></li>
          <li><a href="https://www.youtube.com/embed/Oac0YbfuByo?rel=0" target="math"> Lecture-8</a></li>
          <li><a href="https://www.youtube.com/embed/9E68DOaAJvU?rel=0" target="math">Lecture-9</a></li>
          <li><a href="https://www.youtube.com/embed/F1BPE8mU_b8?rel=0" target="math"> Lecture-10</a></li>
          <li><a href="https://www.youtube.com/embed/SWyp1mSk7lE?rel=0" target="math"> Lecture-11</a></li>
          <li><a href="https://www.youtube.com/embed/kRklXAbCFq0?rel=0" target="math"> Lecture-12</a></li>
          <li><a href="https://www.youtube.com/embed/oKCWDc152x4?rel=0" target="math"> Lecture-13</a></li>
          <li><a href="https://www.youtube.com/embed/myARHSYatwc?rel=0" target="math"> Lecture-14</a></li>
        </ul>
      </div>
       <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/V3P_VQ0u2c0?rel=0" name="math" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
                         <li><a href="Primaryedu@ClassThreeHindiTest.php" target="#">Hindi</a></li>
                         <li><a href="Primaryedu@ClassThreeEnglishTest.php">English</a></li>
                        <li><a href="Primaryedu@ClassThreeMathTest.php">Maths</a></li>
                        <li><a href="Primaryedu@ClassThreeScienceTest.php">Science</a></li>
                       <li><a href="Primaryedu@ClassThreeSocialScienceTest.php">Social Science</a></li>
                      </ul>
                </div>
    </div>

  </div>
</div>
</body>
</html>
