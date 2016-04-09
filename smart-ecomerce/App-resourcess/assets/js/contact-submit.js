$(document).ready(function(){


$("#contact-form").validate({
	rules:{
		"name":{
			required: true,

		},
		
		
		"email":{
			required: true,
			email:true

		},
		"subject":{
			required: true,

		},
		"input-message":{
			required: true,

		},

		
	}


});

$("#submit-contact").click(function(){

	if($("#contact-form").valid()){

	//alert('ok');



 var name=$("#name").val();
 var email=$("#email").val();
 var subject=$("#subject").val();
 var message=$("#input-message").val();


   $.ajax({

        type:"post",
        url:"../sending-mail/",
        data:{
        	"name":name,
        	"email":email,
        	"message":message,
        	"subject":subject,
        	"op":"email"

        },

        success:function(msg){
        	if(msg==1){
        	//alert(msg);
        	window.location = '../success/success.php';
        }else{
        	//alert(msg);
        }

        },

         });
	}
});
});