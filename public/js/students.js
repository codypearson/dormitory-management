$(function () {
    $('.delete-student').click(function (event) {
        const button = $(event.target);
        if (confirm('Are you sure you want to delete this student? This cannot be undone!'))
        {
            $.ajax('/student/' + button.attr('data-student_id'), {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': button.attr('data-csrf_token')
                },
                success: function() {
                    window.location = '/students';
                }
            });
        }
    });
});