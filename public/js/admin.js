$(document).ready(function() {
    $('#homeToggle').on('click', function() {
        $('#homeMenu').collapse('toggle');
    });

    $('#pageToggle').on('click', function() {
        $('#pageMenu').collapse('toggle');
    });

    $('#lastpageToggle').on('click', function() {
        $('#lastpageMenu').collapse('toggle');
    });
});