function userinterface() {}

userinterface.prototype.listData = $("#listData");
userinterface.prototype.inputData = $("#inputData");
userinterface.prototype.buttonPerform = $("#buttonPerform");

userinterface.prototype.addValueInListData = function(value) {
	ui.listData.append('<option value="' + value + '">');
}

ui = new userinterface();