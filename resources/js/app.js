
import './bootstrap';
import  'bootstrap' ;

import JQuery from 'jquery';
window.$ = JQuery;

$(document).ready(function() {
    $('body').on('click', '.view-detail', function(e) {
        e.preventDefault();
        const button = $(this);
        $("#pokemon-detail").html("");
        $('.overlay-spinner').removeClass('d-none');

        const id = button.attr('data-id')

        $.ajax({
            url: '/detail/' + id,
            method: 'GET',
            success: function(response) {
                $("#pokemon-detail").html(response);
                $('.overlay-spinner').addClass('d-none')
            }
        });
    });
});
