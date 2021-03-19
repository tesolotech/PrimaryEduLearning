<?php
session_start();
if(empty($_SESSION['email']))
{
 header("location:PrimaryeduCover.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style@IndexPrimaryedu.css">

</head>
<body>
<!--	<video autoplay muted loop poster id="background"><source src="Videos/t.mp4" type="video/mp4" /></video>       -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<p><marquee>!!!बिना शिक्षा प्राप्त किये कोई व्यक्ति अपनी परम ऊँचाइयों को नहीं छू सकता.!!!पढ़ेगा इंडिया तभी तो बढ़े इंडिया!!!सब पढ़े सब बढ़े!!!</marquee></p>
     <a href="logout@Primaryedu.php"> <button style="border-radius: 50%; height:50px; width: 65px;" id="btn2">Logout</button>
    </div>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div id="i1"><img src="Icons/book.jpeg" height="60px" width="60px" />I'm Learning In</div>
			<a href="Class-1.php"><div id="i2"><img src="Icons/1.png" height="40px" width="40px" />Class</div></a>
			<a href="Primaryedu@Class-2.php"><div id="i3"><img src="Icons/2.png" height="40px" width="40px" />Class</div></a>
			<a href="PrimaryEduClass-3.php"><div id="i4"><img src="Icons/3.jpeg" height="40px" width="40px" />Class</div></a>
			<a href="PrimaryeduClass-4.php"><div id="i5"><img src="Icons/4.png" height="40px" width="40px" />Class</div></a>
			<a href="PrimaryeduClass-5.php"><div id="i6"><img src="Icons/5.png" height="40px" width="40px" />Class</div></a> 
		<!--	<a href="PrimaryEduMotivation.php"><div id="i7"><img src="Icons/6.png" height="40px" width="40px" />Motivation</div></a>
			<div id="i8">8<img src="Icons/8.png" height="40px" width="40px" />Guidelines</div>   -->

		</div>
		<div class="col-md-4">
		<div id="m1"><a href="Primaryedutest.php"><img src="Icons/quiz.jpg" height="90px" width="120px" /></a><a href="PrimaryeduComputerTest.php"><img src="Icons/computer.gif" height="90px" width="120px" /></a><a href="PrimaryEduMotivation.php"><img src="Icons/g1.gif" height="90px" width="120px"></a></div>

		<div id="h1"> Mathematics</div>

		<div id="m2"><a href="https://drive.google.com/open?id=1WR_2rNvOl5tiw6Df1zzEYx6GIrMmZBcf"><img src="Icons/math.png" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=1n8cNtVpDw9_07bbiR7Ljet9h4pZ_P2ST"><img src="Icons/math1.gif" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=17VLWAs1vjdVaUa3XKiWTsbUe2t3U1HK1"><img src="Icons/math2.gif" height="90px" width="120px"></a></div>

		<div id="h1"> Readings</div>

		<div id="m2"><a href="https://drive.google.com/open?id=1ysm4yK2oqPb7xIqs3O46KMWUS3drRSw_"><img src="Icons/r1.png" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=1X7450GlhROOtX-3LL4HvROgQ9aawhOKE"><img src="Icons/r2.jpg" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=198eAAPv8wkhx_-hST2OtK0lAZLoducgy"><img src="Icons/r3.jpg" height="90px" width="120px"></a></div>

<!--		<div id="h1"> Poems & Story</div>

		<div id="m2"><a href="Doc/h-poems.pdf"><img src="Icons/p1.png" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=1JOOY_VHDLhgjgdh5yg4_XYIndTXK_z0X"><img src="Icons/p2.jpg" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=1t_Zk5DVOHbdPn7Zrw_rFaHxZb8PazvAr"><img src="Icons/p3.jpeg" height="90px" width="120px"></a></div>    -->

			
		</div>
		<div class="col-md-4">

			<div id="r1"><a href="PrimaryEduBookCollection.php"><img src="Icons/b1.png" height="90px" width="120px" /></a><a href=""><img src="Icons/b2.png" height="90px" width="120px" /></a><a href=""><img src="Icons/b3.png" height="90px" width="120px"></a></div>

			<div id="h2"> Poems & Story</div>

			<div id="r1"><a href="Doc/h-poems.pdf"><img src="Icons/P1.gif" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=1JOOY_VHDLhgjgdh5yg4_XYIndTXK_z0X"><img src="Icons/p2.gif" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=1t_Zk5DVOHbdPn7Zrw_rFaHxZb8PazvAr"><img src="Icons/p2.gif" height="90px" width="120px"></a>


<!--			<a href="Doc/H-grammer.pdf"><img src="Icons/i1.jpeg" height="90px" width="120px" /></a><a href="Doc/grammer-1.pdf"><img src="Icons/i2.jpeg" height="90px" width="120px" /></a><a href="Doc/E-grammer.pdf"><img src="Icons/i3.png" height="90px" width="120px"></a>
			-->
</div>

			<div id="h2"> Videos & Songs</div>

			<div id="r1"><a href="https://drive.google.com/open?id=1RMVIqTVFjcXLd1GUywO9zl6imONbyklu"><img src="Icons/flag.gif" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=16ubtZH_Z6AKW2JUJABxi5drv98rnRdEe"><img src="Icons/g3.gif" height="90px" width="120px" /></a><a href="https://drive.google.com/open?id=1Kq7nGUsXIXj-fz4ykAn_dTjYFnngF6X-"><img src="Icons/g4.gif" height="90px" width="120px"></a></div>

		<!--	<div id="h2"> Current Affairs</div>

			<div id="r1"><a href=""><img src="Icons/g8.gif" height="90px" width="120px" /></a><a href=""><img src="Icons/g6.gif" height="90px" width="120px" /></a><a href=""><img src="Icons/g7.gif" height="90px" width="120px"></a></div>   -->
			


		</div>
	</div>
</div>

</body>
</html>
