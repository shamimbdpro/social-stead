

function selectStateUser(id){
	if(id!=""){
		loadDataUser('state',id);
		$("#city_dropdown").html("<option value=''>Select State</option>");	
	}else{
		$("#state_dropdown").html("<option value=''>Select City</option>");
		$("#city_dropdown").html("<option value=''>Select State</option>");		
	}
}

/*function selectSub(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}*/

function selectCityUser(state_id){
	if(state_id!=""){
		loadDataUser('city',state_id);
	}else{
		$("#city_dropdown").html("<option value=''>Select city</option>");		
	}
}


function loadDataUser(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "StateCity/loadDataUser",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}






function selectStat(id){
	if(id!=""){
		loadDataUser('statee',id);
		$("#citye_dropdown").html("<option value=''>Select State</option>");	
	}else{
		$("#statee_dropdown").html("<option value=''>Select City</option>");
		$("#citye_dropdown").html("<option value=''>Select State</option>");		
	}
}

/*function selectSub(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}*/

function selectCityy(statee_id){
	if(statee_id!=""){
		loadDataUser('citye',state_id);
	}else{
		$("#citye_dropdown").html("<option value=''>Select city</option>");		
	}
}