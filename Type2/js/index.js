$(document).ready(function(){

	include("./js/ui.js");
    include("./js/app.js");

    var domain = null;

    function main(){
        try {
            BX24.init(function(){
                var initData = BX24.getAuth();
                domain = initData.domain;
            });
        } catch (e) {
        	console.log('Не удалось подключиться к Битрикс24');
        }
    }
    main();

    function include(file){
        $("head").append('<script type="text/javascript" src="'+file+'"></script>');
    }
}