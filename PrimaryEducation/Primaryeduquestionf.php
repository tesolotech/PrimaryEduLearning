<!DOCTYPE html>
<html>
<head>
	<title>Question</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" src="Js/Primaryedujquery.js"></script>
	<script type="text/javascript" src="Js/Jquery.js"></script> 
	<style type="text/css">
			body{background-color: #FFEBCD;}
		.col-lg-6{
			position: fixed;
			left: 50%;
			top:50%;
			transform: translate(-50%, -50%);
			background-color: black;
		}
		.header{font-size: 30px;font-style: bold;font-family: sans-serif;text-shadow: 2px 3px 10px red; text-align: center;color: green;}

		.questionForm h2{padding-left: 20px;color: green;font-size: 40px;}
		.questionForm ul li{list-style: none; font-size: 30px;font-style: bold;padding-top: 10px;padding-bottom: 10px;color: white;}
		.questionForm{padding-left: 30px;padding-top: 10px;margin-bottom: 20px;color: white;}
		#submit{background-color: black;font-size: 20px;}

	</style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<div class="header"> Welcome To Quiz Competitions</div>

<form class="questionForm" id="q1" data-question="1">
	<h2> 1. What is your name?</h2>
	<ul>
		<li><input type="radio" name="q1" value="a"> vikash</li>
		<li><input type="radio" name="q1" value="b"> nitu</li>
		<li><input type="radio" name="q1" value="c"> rohan</li>
		<li><input type="radio" name="q1" value="d"> mohan</li>
	</ul>
	<input type="submit" name="submit" value="submit" id="submit" />
</form>

<form class="questionForm" id="q2" data-question="2">
	<h2> 2. Computer comes from the word?</h2>
	<ul>
		<li><input type="radio" name="q2" value="a">calculator</li>
		<li><input type="radio" name="q2" value="b">machine</li>
		<li><input type="radio" name="q2" value="c">compute</li>
		<li><input type="radio" name="q2" value="d">component</li>
	</ul>
	<input type="submit" name="submit" value="submit" id="submit" />
</form>

<form class="questionForm" id="q3" data-question="3">
	<h2> 3. which is the output device?</h2>
	<ul>
		<li><input type="radio" name="q3" value="a">paper</li>
		<li><input type="radio" name="q3" value="b">monitor</li>
		<li><input type="radio" name="q3" value="c">mouse</li>
		<li><input type="radio" name="q3" value="d">cpu</li>
	</ul>
	<input type="submit" name="submit" value="submit" id="submit" />
</form>

<form class="questionForm" id="q4" data-question="4">
	<h2> 4.who is the father's of computer?</h2>
	<ul>
		<li><input type="radio" name="q4" value="a">charles babage</li>
		<li><input type="radio" name="q4" value="b">billgets</li>
		<li><input type="radio" name="q4" value="c">mohan bhagabat</li>
		<li><input type="radio" name="q4" value="d">none</li>
	</ul>
	<input type="submit" name="submit" value="submit" id="submit" />
</form>

<form class="questionForm" id="q5" data-question="5">
	<h2> 5. printer produce.........?</h2>
	<ul>
		<li><input type="radio" name="q5" value="a">paper</li>
		<li><input type="radio" name="q5" value="b">result</li>
		<li><input type="radio" name="q5" value="c">hard copy printable doc</li>
		<li><input type="radio" name="q5" value="d">color</li>
	</ul>
	<input type="submit" name="submit" value="submit" id="submit" />
</form>
<div id="result"></div>
		</div>
	</div>
</div>
</body>
</html>