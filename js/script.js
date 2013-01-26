$(function() {
    var number = 0;

    $('#play').click(function() {
        // clear the form and generate new random number
        $('#trys').html(0);
        $('.ok').hide();
        $('.err').hide();
        $('#game').show();
        $('#guess').show();
        $('#num').select();

        number = Math.floor((Math.random()*maxNumber)+1);
//        alert(number);

        return false;
    });

    $('#guess').click(function() {
        num = parseInt($('#num').val());

        trys = parseInt($('#trys').html()) + 1;
        if (trys == maxNumber)
        {
            // if max trys show error and exit
            $('.err').html('Достигнахте максималният брой опити!').show();
            $(this).hide();

            return false;
        }
        if (!isNaN(num)) $('#trys').html(trys);

        if (num !== number)
        {
            if (num > number) sign = 'по-малко';
            else sign = 'по-голямо';

            if (isNaN(num)) msg = 'Моля, въведете число!';
            else msg = 'Търсеното число е '+sign+' от '+num;
            $('.err').html(msg).show();
            $('#num').select();
        }
        else
        {
            $('.err').hide();
            $('.ok').html('Вие познахте числото :-)').show();
            $(this).hide();
            $.ajax({
                url: url,
                type: 'post',
                data: { trys: $('#trys').html() }
            });
        }

        return false;
    });

});
