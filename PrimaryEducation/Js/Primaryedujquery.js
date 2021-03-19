var score=0;
var total=5;
var point=1;
var highest=total*point;


function init(){
	sessionStorage.setItem('a1','a');
	sessionStorage.setItem('a2','b');
	sessionStorage.setItem('a3','c');
	sessionStorage.setItem('a4','d');
	sessionStorage.setItem('a5','a');
}

$(document).ready(function(){

	$('.questionForm').hide();

	$('#q1').show();

	$('.questionForm #submit').click(function(){

		current=$(this).parents('form:first').data('question');
		next=$(this).parents('form:first').data('question')+1;
		// hide the question
		$('.questionForm').hide();
		// show question of next
		$('#q'+next+'').fadeIn(300);
		process(''+current+'');
		return false;
	});

});

function process(n){
	// get input value
	var submitted=$('input[name=q'+n+']:checked').val();
	if(submitted==sessionStorage.getItem('a'+n+'')){
		score=score+point;
	}

	if(n==total){
		
	$('#result').html('<h3>your final score is:'+score+' out of '+highest+'</h3><a href="Primaryeduquestionf.php">Take quiz again</a>');
	}
	return false;
}
 

window.addEventListener('load',init,false);
