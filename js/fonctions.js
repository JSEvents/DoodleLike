


function setSession(index,value){
	sessionStorage.setItem(index,value);
	
}

function getSession(nom){
	var variable=sessionStorage.getItem(nom);
	return variable
}
function navigation(nomPage){

	$(".page").hide();
	$("#"+nomPage).show(effect,1000);
	

}