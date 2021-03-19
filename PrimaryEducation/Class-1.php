<?php
session_start();


?>



<!DOCTYPE html>
<html>
<head>
	<title>Class-1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style@Class-1.css">

</head>
<body>
<video autoplay loop muted poster id="background"><source src="Videos/v2.mp4" type="video/mp4"></video>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2">
		 <div class="dropdown">
    <button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">Alphabet</li>
      <li><a href="https://www.youtube.com/embed/ISm_xoAT8Ow?autoplay=0" target="containt">ककहरा</a></li>
      <li><a href="https://www.youtube.com/embed/rv7ZI-dOaN4?autoplay=0" target="containt">वर्णमाला</a></li>
      <li><a href="https://www.youtube.com/embed/BUimJcJ7cTY?autoplay=0" target="containt">वर्णाक्षर</a></li>
      <li><a href="https://www.youtube.com/embed/x7R8n9LtHA0?autoplay=0" target="containt">वर्ण-क्रम</a></li>
       <li><a href="https://www.youtube.com/embed/pzgIWBY5LL4?autoplay=0" target="containt">अक्षर</a></li>
      <li><a href="https://www.youtube.com/embed/Z6-vI0Ot3bw?autoplay=0" target="containt">प्राथमिक ज्ञान</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Number</li>
      <li><a href="https://www.youtube.com/embed/bkB3oyvCUSk?autoplay=0" target="containt">अंक(Number)</a></li>
      <li><a href="https://www.youtube.com/embed/iZuECHYLxPM?autoplay=0" target="containt">इकाई</a></li>
      <li><a href="https://www.youtube.com/embed/RMLQw1C3LF0?autoplay=0" target="containt">नम्बर</a></li>
       <li><a href="https://www.youtube.com/embed/W7FFSUcmcKs?autoplay=0" target="containt"> गिनती</a></li>
        <li><a href="https://www.youtube.com/embed/59pizmbAbfE?autoplay=0" target="containt">अंग्रेज़ी अक्षर</a></li>
         <li><a href="https://www.youtube.com/embed/QSwGnPivyKw?autoplay=0" target="containt">अंग्रेज़ी अक्षर</a></li>
    </ul>
  </div>
   <div class="dropdown">
    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"> पद्यकाव्य
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">कविता</li>
      <li><a href="https://www.youtube.com/embed/waQuxiukyw8?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt">कविता-1</a></li>
      <li><a href="https://www.youtube.com/embed/76NmRtiUTxc?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt">कविता-2</a></li>
      <li><a href="https://www.youtube.com/embed/BUimJcJ7cTY?autoplay=0" target="containt">कविता-3</a></li>
      <li><a href="https://www.youtube.com/embed/Wa7Z5N-h9iQ?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt">कविता-4</a></li>
       <li><a href="https://www.youtube.com/embed/ik23xKaGUiY?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt">कविता-5</a></li>
      <li><a href="https://www.youtube.com/embed/i0t5ZSonRYo?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt">कविता-6</a></li>
      <li><a href="https://www.youtube.com/embed/bps9dcA-TtY?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt">कविता-7</a></li>
    </ul>
  </div>

	<!--		<ul id="ul_left">
						<a href="https://www.youtube.com/embed/ISm_xoAT8Ow?autoplay=0" target="containt"><li>ककहरा</li></a>
						<a href="https://www.youtube.com/embed/rv7ZI-dOaN4?autoplay=0" target="containt"><li> वर्णमाला</li></a>
						<a href="https://www.youtube.com/embed/BUimJcJ7cTY?autoplay=0" target="containt"><li>वर्णाक्षर</li></a>
						<a href="https://www.youtube.com/embed/x7R8n9LtHA0?autoplay=0" target="containt"><li>वर्ण-क्रम</li></a>
						<a href="https://www.youtube.com/embed/pzgIWBY5LL4?autoplay=0" target="containt"><li>अक्षर</li></a>
						<a href="https://www.youtube.com/embed/Z6-vI0Ot3bw?autoplay=0" target="containt"><li>प्राथमिक ज्ञान</li></a>
				 		<a href="https://www.youtube.com/embed/bkB3oyvCUSk?autoplay=0" target="containt"><li>अंक(Number)</li></a>
						<a href="https://www.youtube.com/embed/iZuECHYLxPM?autoplay=0" target="containt"><li>इकाई</li></a>
						<a href="https://www.youtube.com/embed/RMLQw1C3LF0?autoplay=0" target="containt"><li>नम्बर</li></a>
						<a href="https://www.youtube.com/embed/W7FFSUcmcKs?autoplay=0" target="containt"><li> गिनती</li></a>
						<a href="https://www.youtube.com/embed/59pizmbAbfE?autoplay=0" target="containt"><li>अंग्रेज़ी अक्षर</li></a>
						<a href="https://www.youtube.com/embed/QSwGnPivyKw?autoplay=0" target="containt"><li>अंग्रेज़ी अक्षर</li></a>
			</ul>
						-->
		</div>     
		<div class="col-lg-8" id="1">
			<div class="embed-responsive embed-responsive-16by9" id="2">
				<iframe width="854" height="480" src="https://www.youtube.com/embed/k2pZlPgdQoE?autoplay=0" name="containt" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="opacity: 0.7"></iframe>
			</div>

			
			
		</div>
	<!--	<div class="col-lg-2" id="right">

		 <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tutorials
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li class="dropdown-header">Dropdown header 1</li>
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li class="divider"></li>
      <li class="dropdown-header">Dropdown header 2</li>
      <li><a href="#">About Us</a></li>
    </ul>
  </div>   -->


	<!--		<ul id="ul_right">
				<a href="https://www.youtube.com/embed/waQuxiukyw8?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-1</li></a>
				<a href="https://www.youtube.com/embed/76NmRtiUTxc?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-2</li></a>
				<a href="https://www.youtube.com/embed/dorFkfydpAo?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-3</li></a>
				<a href="https://www.youtube.com/embed/diyhbCxw3Y4?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-4</li></a>
				<a href="https://www.youtube.com/embed/IGrYrAvmD7c?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-5</li></a>
				<a href="https://www.youtube.com/embed/8jc8pSZmXDc?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता6</li></a>
				<a href="https://www.youtube.com/embed/Wa7Z5N-h9iQ?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-7</li></a>
				<a href="https://www.youtube.com/embed/9DdIPsDQqPc?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-8</li></a>
				<a href="https://www.youtube.com/embed/ik23xKaGUiY?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-9</li></a>
				<a href="https://www.youtube.com/embed/i0t5ZSonRYo?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-10</li></a>
				<a href="https://www.youtube.com/embed/bps9dcA-TtY?list=PLDuqxsYRp4vwvDKMr8mdwl6swZswlm09A?autoplay=0" target="containt"><li> कविता-11</li></a>
						-->
		</div>
	</div>
</div>
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& FOOTER OF THIS PAGE &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&777 -->

<div class="col-container" style="opacity: 0.7">
  		<div class="col">
   		 <img src="/Login Application/Images/abcd.jpg" height="150" width="150"/>

   		 <a href=""><p>Developed By:- Mr. Vikash Kumar</p></a>
   		</div>

   		<div class="col">
   			<a href=""><h2>Grammer(ब्याकरन)</h2></a>
   			<ul style="list-style: none;">
   				<a href="https://www.youtube.com/embed/RNHP10_Cm9k?autoplay=0" target="containt"><li>संज्ञा-1</li></a>
   				<a href="https://www.youtube.com/embed/UF3S1IvOK4w?list=PL9vL8QnJ37pKTp_yrJ2ujHIMtbzu8InMX?autoplay=0" target="containt"><li>संज्ञा-2</li></a>
   				<a href="https://www.youtube.com/embed/pYqiLBNvDBs?list=PL9vL8QnJ37pKTp_yrJ2ujHIMtbzu8InMX?autoplay=0" target="containt"><li> भाषा</li></a>
   				<a href="https://www.youtube.com/embed/UF3S1IvOK4w?list=PL9vL8QnJ37pKTp_yrJ2ujHIMtbzu8InMX?autoplay=0" target="containt"><li>लिंग</li></a>
   			</ul>
   		</div>
   		<div class="col">
   			<a href=""><h2>Vocabulary(शब्दावली)</h2></a>
   			<ul>
   				<a href="https://www.youtube.com/embed/hNuqtXCnSk4?autoplay=0" target="containt"><li>शब्दकोष-1</li></a>
   				<a href="https://www.youtube.com/embed/b1gcjQsm9us?autoplay=0" target="containt"><li>शब्दकोष-2</li></a>
   				<a href="https://www.youtube.com/embed/QpFp8FV5a8M?autoplay=0" target="containt"><li>शब्दकोष-3</li></a>
   				<a href="https://www.youtube.com/embed/Rp-7AysT3jA?autoplay=0" target="containt"> <li>शब्दकोष-4 </li></a>
   			</ul>
   		</div>
   		<div class="col">
   			<div class="btn">
   			<a href="Index@Primaryedu.php"> <button type="button" class="btn btn-success">Home</button></a>
   			<a href="logout@Primaryedu.php"> <button type="button" class="btn btn-danger">Sign Out</button></a>
   			</div>

   		</div>
  </div>
<!-- &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& FOOTER OF THIS PAGE &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&777 -->




</body>
</html>


