$(document).ready(function(){

$("#insert").click(function(){


	var cat_id=$("#cat-id").val();
	var name_id=$("#name-id").val();
	var price_id=$("#price-id").val();
	var desc_id=$("#desc-id").val();
	var details_id=$("#details-id").val();
	
	var file_id=$("#fileToUpload").prop("files")[0];
	//alert(file_id);


	$.ajax({
			type:"post",
			url: "upload.php",
			data:{
				

				
				"insert":"insert"

			},
			
			success:function(msg){
				alert(msg);

			}
		});

});

});