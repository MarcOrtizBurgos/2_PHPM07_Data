function showUser(str) {
    if (str=="") {
      document.getElementById("tablesita").innerHTML="";
      return;
    }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("tablesita").innerHTML=this.responseText;
      }
    }
    xmlhttp.open("GET","tabla_ajax.php?q="+str,true);
    xmlhttp.send();
}

$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var modalitat = $('#modalitat').val();
		var nivell = $('#nivell').val();
		var intents = $('#intents').val();
		if(modalitat!="" && nivell!="" && intents!=""){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					modalitat: modalitat,
					nivell: nivell,
					intents: intents				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});

$(document).ready(function() {
	$('#butdelete').on('click', function() {
		$("#butdelete").attr("disabled", "disabled");
		var id = $('#id').val();
		if(id!=""){
			$.ajax({
				url: "delete.php",
				type: "POST",
				data: {
					id: id				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butdelete").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});

$(document).ready(function() {
	$('#butupdate').on('click', function() {
		$("#butupdate").attr("disabled", "disabled");
		var modalitat = $('#modalitat').val();
		var nivell = $('#nivell').val();
		var intents = $('#intents').val();
                var id = $('#id').val();
		if(modalitat!="" && nivell!="" && intents!="" && id!=""){
			$.ajax({
				url: "update.php",
				type: "POST",
				data: {
					modalitat: modalitat,
					nivell: nivell,
					intents: intents,
                                        id: id
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butupdate").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});