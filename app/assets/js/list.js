
    $(function(){
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            $('#btDelete').attr("href", "/test/del/"+id);
        });
    });