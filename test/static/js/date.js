    function zero_first_format(value)
    {
        if (value < 10)
        {
            value='0'+value;
        }
        return value;
    }

    function date_time()
    {
        var current_datetime = new Date();
        var day = zero_first_format(current_datetime.getDate());
        var month = zero_first_format(current_datetime.getMonth()+1);
        var year = current_datetime.getFullYear();
        return day+"."+month+"."+year;
    }
    /* выводим текущую дату и время на сайт в блок с id "current_date_time_block" */
    document.getElementById('current_date_time_block').innerHTML = date_time();
