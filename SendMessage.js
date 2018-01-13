$(document).ready(function(){
	$("#enterMessage").click(function(){

			var name = $('#name').val();
			var inputBox = $('#inputBox').val();
			if(inputBox==''){
				return false;
			}
			else{
			$.ajax({
					type:"POST",
					url: "Message.php",
					data:{name:name,inputBox:inputBox},
					success:function(){
						$('#inputBox').val('');
						
					}


			});
		}

	});


});