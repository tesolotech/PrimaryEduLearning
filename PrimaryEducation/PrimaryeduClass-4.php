<!DOCTYPE html>
<html>
<!--<video autoplay loop muted poster id="video"><source src="Videos/v1.mp4" type="video/mp4"></video> -->
<head>
	<title>Class-4</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style@PrimaryeduClass-4.css" />
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
        <img src="Images/c1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="Images/c2.jpg" style="width:100%">
      <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="Images/c3.jpg" style="width:100%">
        <div class="text">Caption Three</div>
    </div>
    <div class="mySlides fade">
         <div class="numbertext">4 / 5</div>
          <img src="Images/c4.jpg" style="width:100%">
        <div class="text">Caption Four</div>
    </div>
     <div class="mySlides fade">
         <div class="numbertext">5 / 5</div>
          <img src="Images/c5.jpg" style="width:100%">
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
                         <li><a href="https://www.youtube.com/embed/Nqu1kK4tFcU?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne?autoplay=0" target="containt">Lecture-1</a></li>
                         <li><a href="https://www.youtube.com/embed/ryksbZqD-kg?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-2</a></li>
                        <li><a href="https://www.youtube.com/embed/akeihFQFeP0?list=PL39C110DE3DE5543D?autoplay=0" target="containt">Lecture-3</a></li>
                        <li><a href="https://www.youtube.com/embed/_LjVYiCyNIg?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-4</a></li>
                       <li><a href="https://www.youtube.com/embed/4A-7awUDNXU?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-5</a></li>
                       <li><a href="https://www.youtube.com/embed/3XJw6TTkXVU?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-6</a></li>
                       <li><a href="https://www.youtube.com/embed/4g8aWof8Fmk?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-7</a></li>
                       <li><a href="https://www.youtube.com/embed/G1UulyCrQC0?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-8</a></li>
                       <li><a href="https://www.youtube.com/embed/V5ao1S1RRIs?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-9</a></li>
                       <li><a href="https://www.youtube.com/embed/PaABGO6-NLg?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-10</a></li>
                       <li><a href="https://www.youtube.com/embed/iMmmVO4ZxvQ?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-11</a></li>
                       <li><a href="https://www.youtube.com/embed/h3brGrY_hjg?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-12</a></li>
                       <li><a href="https://www.youtube.com/embed/vkbxuk5tQtg?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne" target="containt">Lecture-13</a></li>
                    </ul>
                </div>
          </div>
          </div></div>
          <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/Nqu1kK4tFcU?list=PLlKMvYIxbsNgMUd1Hi5y-vZFRyDPtg2Ne?autoplay=0" name="containt" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>
      </div>

    <div id="english" class="tab-pane fade">
      <div class="container">                        
                     <ul class="pagination">
                         <li><a href="https://www.youtube.com/embed/gzeErUOgE1o?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA?autoplay=0" target="eng">Lecture-1</a></li>
                         <li><a href="https://www.youtube.com/embed/Qh_9atI_5Y4?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA?autoplay=0" target="eng">Lecture-2</a></li>
                        <li><a href="https://www.youtube.com/embed/V42jApNrIwE?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA?autoplay=0" target="eng">Lecture-3</a></li>
                        <li><a href="https://www.youtube.com/embed/QpdUEaLj5FU?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA?autoplay=0" target="eng">Lecture-4</a></li>
                       <li><a href="https://www.youtube.com/embed/PsQe8AcdBp8?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA" target="eng">Lecture-5</a></li>
                       <li><a href="https://www.youtube.com/embed/gU25Nh3H61o?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA" target="eng">Lecture-6</a></li>
                       <li><a href="https://www.youtube.com/embed/BWPi1QJgnXw?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA" target="eng">Lecture-7</a></li>
                       <li><a href="https://www.youtube.com/embed/BVliTmCphAo?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA" target="eng">Lecture-8</a></li>
                       <li><a href="https://www.youtube.com/embed/tckuT-EBKQ4?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA" target="eng">Lecture-9</a></li>
                       <li><a href="https://www.youtube.com/embed/gPpwMcPRmwk?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA" target="eng">Lecture-10</a></li>
                       <li><a href="https://www.youtube.com/embed/X5O4elczrFM?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA" target="eng">Lecture-11</a></li>
                    </ul>
                </div>
           <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/gzeErUOgE1o?list=PLoIr30tNT8CbHHhCQJR8gydZtUuG-QhmA?autoplay=0" name="eng" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>

    </div>

    <div id="science" class="tab-pane fade">
      
       <div class="col-lg-12">
                    <div class="container">                        
                     <ul class="breadcrumb">
                         <li><a href="https://www.youtube.com/embed/uEEMyGEIDl0?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-1</a></li>
                         <li><a href="https://www.youtube.com/embed/zkNqZ436-pA?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-2</a></li>
                        <li><a href="https://www.youtube.com/embed/WH5iTkvvwFY?list=PLettYtTdb-6zCkAu_4bXekElcpxzTcB3t?autoplay=0" target="iframe">Lecture-3</a></li>
                        <li><a href="https://www.youtube.com/embed/n17c86H-CKY?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-4</a></li>
                       <li><a href="https://www.youtube.com/embed/dzStQ4h-fx8?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-5</a></li>
                       <li><a href="https://www.youtube.com/embed/VbUWTMRDxRw?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-6</a></li>
                       <li><a href="https://www.youtube.com/embed/DdkHGiCkuIg?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-7</a></li>
                       <li><a href="https://www.youtube.com/embed/HIg-uckNgnw?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-8</a></li>
                       <li><a href="https://www.youtube.com/embed/BOgTIt_islY?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-9</a></li>
                       <li><a href="https://www.youtube.com/embed/k6T2VgLigWo?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" target="iframe">Lecture-10</a></li>
                    </ul>
                </div>
          </div>
         <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/uEEMyGEIDl0?list=PLPbVevbMS3MpHdmaqydL_zxIfW_uUpF-R?autoplay=0" name="iframe" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>



    </div>
     <div id="maths" class="tab-pane fade">
      <div class="container">                        
                     <ul class="breadcrumb">
                         <li><a href="https://www.youtube.com/embed/8l6PovJedAc?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-1</a></li>
                         <li><a href="https://www.youtube.com/embed/_JMZyDvgS90?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-2</a></li>
                        <li><a href="https://www.youtube.com/embed/u1bsOTzEt-8?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-3</a></li>
                        <li><a href="https://www.youtube.com/embed/OnX7FEc7SVs?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-4</a></li>
                       <li><a href="https://www.youtube.com/embed/ebcNioCVzrI?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-5</a></li>
                       <li><a href="https://www.youtube.com/embed/PMKsc2QPfkE?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-6</a></li>
                       <li><a href="https://www.youtube.com/embed/9j7Iy_gRSxg?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-7</a></li>
                       <li><a href="https://www.youtube.com/embed/U5MR8-1PQsw?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-8</a></li>
                       <li><a href="https://www.youtube.com/embed/22wgW9txOIY?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-9</a></li>
                       <li><a href="https://www.youtube.com/embed/QUxkWRmbCpA?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-10</a></li>
                       <li><a href="https://www.youtube.com/embed/y_OWSI95fls?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-11</a></li>
                       <li><a href="https://www.youtube.com/embed/7ekpcfkU9Zo?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-12</a></li>
                        <li><a href="https://www.youtube.com/embed/oREuX2IbSYs?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-13</a></li>
                       <li><a href="https://www.youtube.com/embed/5kiNXKS4OJo?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" target="math">Lecture-14</a></li>
                    </ul>
                </div>
             <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/8l6PovJedAc?list=PLPbVevbMS3MrA39b9GR-TMEdRS45wsXiY&amp?autoplay=0" name="math" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>
    </div>
     <div id="grammer" class="tab-pane fade">
              <div class="container">                        
                     <ul class="pagination">
                         <li class="active"><a href="https://www.youtube.com/embed/g0YzlJ1kLGQ?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw?autoplay=0" target="con">भाषा और व्याकरण</a></li>
                         <li><a href="https://www.youtube.com/embed/6ytolopyqF0?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw?autoplay=0" target="con">व्रण-विचर</a></li>
                        <li><a href="https://www.youtube.com/embed/4vJoQfN5Z9w?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw?autoplay=0" target="con">शब्द</a></li>
                        <li><a href="https://www.youtube.com/embed/Tzl35_rb_08?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw?autoplay=0" target="con">वाक्य</a></li>
                        <li><a href="https://www.youtube.com/embed/zRmIKYvWRPU?autoplay=0" target="con">संज्ञा</a></li>
                       <li><a href="https://www.youtube.com/embed/QOxsqNGW3p4?autoplay=0" target="con"> लिंग</a></li>
                       <li><a href="https://www.youtube.com/embed/ONt-H-pmoy0?autoplay=0" target="con">वचन</a></li>
                      <li><a href="https://www.youtube.com/embed/Tir5h9QCiUU?autoplay=0" target="con">सर्वनाम</a></li>
                       <li><a href="https://www.youtube.com/embed/AvakIFgvDPQ?autoplay=0" target="con"> विशेषण</a></li>
                       <li><a href="https://www.youtube.com/embed/1bWaDhpaHig?autoplay=0" target="con"> क्रिया</a></li>
                       <li><a href="https://www.youtube.com/embed/WnJL8w82eNI?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw" target="con">पर्यायवाची शब्द </a></li>
                       <li><a href="https://www.youtube.com/embed/PimYbmjywBA?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw" target="con">विराम चिह्न</a></li>
                       <li><a href="https://www.youtube.com/embed/qNXNnjQgrRY?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw" target="con">अशुद्ध को शुद्ध करना</a></li>
                       <li><a href="https://www.youtube.com/embed/o22MUm5WrBs?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw" target="con">मुहावरे</a></li>
                       <li><a href="https://www.youtube.com/embed/rQhZyoUH1yg?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw" target="con">अपठित गद्यांश</a></li>
                       <li><a href="https://www.youtube.com/embed/Li6CUDu7dpk?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw" target="con">पत्र लेखन</a></li>
                    </ul>
                </div>
                <div class="container-fluid">
              <div class="row">
               <div class="col-lg-8" style="margin-left: 10%;">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="854" height="480" src="https://www.youtube.com/embed/g0YzlJ1kLGQ?list=PL74L4Mv3cZkgx_0hcBaRxHdthO9-D00Qw?autoplay=0" name="con" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                  </div>
                </div>
             </div>
         </div>

    </div>
     <div id="test" class="tab-pane fade">
           <div class="container">                        
                     <ul class="pagination">
                         <li><a href="Primaryeduclass-4HindiTest.php">Hindi</a></li>
                         <li><a href="PrimaryeduClass-4EnglishTest.php">English</a></li>
                        <li><a href="PrimaryeduClass-4MathTest4.php">Maths</a></li>
                        <li><a href="PrimaryeduClass-4ScienceTest.php">Science</a></li>
                       <li><a href="PrimaryeduClass-4GrammerTest.php">Grammer</a></li>
                    </ul>
                </div>
    </div>

  </div>
</div>
</body>
</html>
