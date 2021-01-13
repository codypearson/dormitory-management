$(function() {
    $('.unit').click(function(event) {
        window.location = '/unit-detail/' + $(event.currentTarget).attr('data-unit_id');
    });
});