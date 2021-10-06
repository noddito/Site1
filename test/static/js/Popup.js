    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы
        PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
        $("#sec-a734").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        console.log("Какая-либо информация");
        $("#sec-a734").hide();
    }