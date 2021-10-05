function userinterface() {}

userinterface.prototype.listData = $("#listData");
userinterface.prototype.inputData = $("#inputData");
userinterface.prototype.buttonAddValue = $("#buttonAddValue");

userinterface.prototype.buttonTasksList = $("#buttonTasksList");
userinterface.prototype.consoleTasksList = $("#consoleTasksList");

userinterface.prototype.addValueInListData = function(value) {
	ui.listData.append('<option value="' + value + '">');
}

ui = new userinterface();