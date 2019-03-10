
	var athletics = ['Long Jump','Race', 'Shot-put', 'Pole Vault', 'Hammer Throw', 'Discuss Throw', 'Hurdle Race', 'Triple Jump', 'Javelin Throw', 'High Jump', 'Relay Race'];
	var inter_year = ['Basketball', 'Cricket', 'Football', 'Volleyball', 'Chess', 'Table Tennis'];
	
	function showList(str){
		$('#yourSelectList').empty();
		
		$el = $('#yourSelectList');
		
		if(str == "athletics"){
			$.each(athletics, function(key, value){
				$el.append($("<option></option")
				.attr("value", value).text(value));
			});
		}
		
		if(str == "inter-year"){
			$.each(inter_year, function(key, value){
				$el.append($("<option></option")
				.attr("value", value).text(value));
			});
		}
		else if(str == "inter-college"){
			window.alert("Coming soon");
		}
	}
	
	function saveData(){
    var name=$('#nm').text();
    var year=$('#yr').text();
    var branch=$('#bra').text();
    var game=$('#yourSelectList').val();

	$.ajax({
		type:"post",
       url:"server.php?p=add",
       data:{name:namer,branch:branchr,year:yearr,game:gamer},
       success: function(msg){
        alert('Success Insert data');
       }
	});

  }