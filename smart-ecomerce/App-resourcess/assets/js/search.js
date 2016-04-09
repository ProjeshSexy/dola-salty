$(document).ready(function () {

	$("#search").keyup(function()
   {
	//alert("helo shihab fucka");
	var y=$("#select-search").val();

	//alert(y);
	$("#result").show();
	var x=$(this).val();
	var x=$.trim(x);
	var y=$.trim(y);
	$.ajax({

		type:'GET',
		url:'../App-roots/App-config/App-models/models/m_search.php',
		data:{
			'q':x,
			'op':$.trim(y)
		},
		success:function(data){
			$("#result").html(data);

		}

	});

	//alert(x);

});

	// body...
});