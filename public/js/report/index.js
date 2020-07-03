$(function () {
    $('#start_date').val(newDate.getFullYear() +'-'+ ('0' + (newDate.getMonth() + 1)).slice(-2))
    $('#end_date').val(newDate.getFullYear() +'-'+ ('0' + (newDate.getMonth() + 1)).slice(-2))
    $('#time_change').click(function() {
        console.log($('#time_form').serialize())
        $.ajax({
            url: route,
            method: 'get',
            data: $('#time_form').serialize(),
            success : function(res) {
                $('#new_guest').text(res.guests)
                $('#count_sold').text(res.count_sold)
                $('#in_prices').text(res.in_prices)
                $('#sales').text(res.sales)
            }
        })
    });
});
