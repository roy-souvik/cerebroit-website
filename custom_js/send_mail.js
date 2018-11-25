$(document).ready(function(){
$requestRunning=false;
$('#mail_send_loader').hide();
	
	$('#btnContactUs').click(function(evt){
		evt.preventDefault();
		if($requestRunning){
			return; 
		}
		var name 		= $('#name').val();
		var email		= $('#email').val();
		var subject		= $('#subject').val();
		var message		= $('#message').val();
		
		if(name!='' && email !='' && subject!='' && message!=''){
			$.ajax({
			  type:'POST',
			  url:'ajax/send_mail.php',
			  data:{ name:name,email:email,subject:subject,message:message },
			  beforeSend:function(){
					$requestRunning=true;
					$('#mail_send_loader').show();
				},
			  success:function(data){
					$requestRunning=false;
					$('#mail_send_loader').hide();
					$('.mail_loader_holder').html(data);
				}
			});
		}else{
			alert('There are some error(s) in the form.');
		}
		
		
	});//END submit function
	
});//END document ready
