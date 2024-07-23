
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

        const id = button.attr('data-id');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

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
