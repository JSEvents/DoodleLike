 function CheckEmail(emailInput){
	 var regexEmail = "(([a-zA-Z])*(\d*))+@(([a-zA-Z])*(\d*))+\.([a-zA-Z])+";
	 var errorMsg = emailInput.parent().find(".errorMsg");
	if(emailInput.val() !== undefined && emailInput.val().match(regexEmail)){
		errorMsg.hide();
	}
	else{
		errorMsg.show();
	}
 } 
 
 function CheckEmpty(inputField){
	 var errorMsg = inputField.parent().find(".errorMsg");
	if(inputField.val()){
		errorMsg.hide();
	}
	else{
		errorMsg.show();
	}
 }
 
 function CheckValidPassword(inputPassword, inputConfirm){
	 var passwordErrorMsg = inputPassword.parent().find(".errorMsg");
	 var confirmErrorMsg = inputConfirm.parent().find(".errorMsg");
	if(inputPassword.val() !== undefined && inputPassword.val().length>=8){
		passwordErrorMsg.hide();
	}
	else{
		passwordErrorMsg.show();
	}
	if(inputConfirm.val() !== undefined && inputConfirm.val()===inputPassword.val()){
		confirmErrorMsg.hide();
	}
	else{
		confirmErrorMsg.show();
	}
 }
 
function CheckValidPhoneNumber(inputField){
	var regexPhone = "0([0-9]){9}";
	var errorMsg = inputField.parent().find(".errorMsg");
	if(inputField.val() !== undefined && inputField.val().match(regexPhone)){
		errorMsg.hide();
	}
	else{
		errorMsg.show();
	}
 }
 
 function CheckFileImportFormat(fileName, input){
	 var errorMsg = input.find(".errorMsg");
	 var regexFilename="((.)+\.jpg|()(.)+\.gif|(.)+\.png|(.)+\.jpeg)";
	 if(fileName.match(regexFilename)){
		 errorMsg.hide();
	}
	else{
		errorMsg.show();
	}
}
 
 function CheckEmptyEventTable(table){
	 var errorMsg = table.parent().find(".errorMsg");
	 if(table.find('td') && table.find('tr').length>1){		 
		errorMsg.val()="";
		errorMsg.hide();
	 }
	 else{
		errorMsg.addClass("badField");
		if(!table.find('td')){
			errorMsg.val() = "Veuillez ajouter (au moins) une colonne !<br/>"
		}
		if(table.find('tr').length<=1){
			errorMsg.val() += "Veuillez ajouter (au moins) un participant !<br/>"
		}
		errorMsg.show();
	 }
 }
