

$(document).ready(function(){
	$(".remove").click(function(){
    	var produtoid=$(this).attr("data-id");
    	var linha=$(this).parent().parent();
    	console.log(produtoid);
    	if (produtoid.length>0){
			$.ajax({
	  			method: "GET",
	  			dataType : "json",
	  			url: baseurl+"/produtos/remove/"+produtoid,
			})
	  		.done(function( response ) {
	  			if(response.status){
	  				$("#msgremove p").text("produto deletado com sucesso");
	  				$("#msgremove").addClass("alert-success");
	  				linha.remove();
	  				$("#msgremove").show();
  			}
  			else{
  				$("#msgremove p").text("o produto não foi deletado");
	  				$("#msgremove").addClass("alert-danger");
	  				$("#msgremove").show();
  			    }
			});
		}
	});
  
});