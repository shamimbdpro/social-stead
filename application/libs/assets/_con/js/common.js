function selectState(id){
	if(id!="-1"){
		loadData('state',id);
		$("#city_dropdown").html("<option value='-1'>Select Category</option>");	
	}else{
		$("#state_dropdown").html("<option value='-1'>Select SubCategory</option>");
		$("#city_dropdown").html("<option value='-1'>Select Category</option>");		
	}
}

/*function selectSub(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}*/

function selectCity(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}



function loadData(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait......');
	$.ajax({
		type: "POST",
		url: "LoadData",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}


////////////////////////insert/childcategory///////////////////////////////////////////////

function loadDataf(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait......');
	$.ajax({
		type: "POST",
		url: "LoadDataf",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}


















function selectCategory(id){
	if(id!="-1"){
		loadData('state',id);
		$("#city_dropdown").html("<option value='-1'>Select Category</option>");	
	}else{
		$("#state_dropdown").html("<option value='-1'>Select SubCategory</option>");
		$("#city_dropdown").html("<option value='-1'>Select Category</option>");		
	}
}

/*function selectSub(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}*/

function selectSubca(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}


////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
function selectBrands(id){
	if(id!="-1"){
		loadBrands('brands',id);
		$("#brandsd_dropdown").html("<option value='-1'>Select Category</option>");	
	}else{
		$("#brands_dropdown").html("<option value='-1'>Select SubCategory</option>");
		$("#brandsd_dropdown").html("<option value='-1'>Select Category</option>");		
	}
}

/*function selectSub(state_id){
	if(state_id!="-1"){
		loadData('city',state_id);
	}else{
		$("#city_dropdown").html("<option value='-1'>Select city</option>");		
	}
}*/

function selectSubBrands(brands_id){
	if(brands_id!="-1"){
		loadBrands('brandss',brands_id);
	}else{
		$("#brandsd_dropdown").html("<option value='-1'>Select city</option>");		
	}
}


function loadBrands(loadType,loadId){
	var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
	$("#"+loadType+"_loader").show();
    $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
	$.ajax({
		type: "POST",
		url: "fdsf",
		data: dataString,
		cache: false,
		success: function(result){
			$("#"+loadType+"_loader").hide();
			$("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");  
			$("#"+loadType+"_dropdown").append(result);  
		}
	});
}




