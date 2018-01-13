
$(setInterval(function(){
	$('.ChatPage').load('DisplayMessage.php');

		$('#scroll').stop().animate({
  scrollTop: $('#scroll')[0].scrollHeight
}, 900);
	
},600));