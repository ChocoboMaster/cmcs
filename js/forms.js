	$(function(){
	
	//Opérateurs
		$('#addOp').click(function(){
			var username = document.querySelector("input[name='addOperator']").value;
			
			$.ajax({
				type: 'GET',
				url: 'scripts/addOperator.php',
				data: "un="+username,
				dataType: 'json',
				success: function(data){
						if(data.status == 'success'){
							$(data).hide().appendTo(".addOperatorTable").fadeIn(1000);
						}else if(data.status == 'error'){
							alert(data.result);
						}
					},
				error: function(data){
						alert("Erreur");
					}
			});
		});
		
		$('.delOp').click(function(){
			var username = $(this).attr("value");
			
			$.ajax({
				type: 'GET',
				url: 'scripts/delOperator.php',
				data: "un="+username,
				dataType: 'json',
				success: function(data){
						$("tr:contains('"+data+"')").fadeOut();
					},
				error: function(data){
						alert(data);
					}
			});
		});
		
	//Whitelist
		$('#addWL').click(function(){
			var username = document.querySelector("input[name='addWhitelist']").value;
			document.querySelector("input[name='addWhitelist']").value = "";
			$.ajax({
				type: 'GET',
				url: 'scripts/addWhitelist.php',
				data: "un="+username,
				dataType: 'json',
				success: function(data){
						$(data).hide().appendTo(".addWhitelistTable").fadeIn(1000);
					},
				error: function(data){
						alert("error");
					}
			});
		});
		
		$('.delWL').click(function(){
				var username = $(this).attr("value");
				
				$.ajax({
					type: 'GET',
					url: 'scripts/delWhitelist.php',
					data: "un="+username,
					dataType: 'json',
					success: function(data){
							$("tr:contains('"+data+"')").fadeOut();
						},
					error: function(data){
							alert(data);
						}
				});
			});
	});