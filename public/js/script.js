$(document).ready(function () {
    $('#limitSelect').on('change', function () {
        var url_string = window.location.href;
        var url = new URL(url_string);
        var params = url.searchParams;
        params.set("per_page", this.value);
        window.location.search = params.toString();
    });

    $('.deleteRequest').on('submit', function (event) {
        event.preventDefault();
        var url = $(this).attr('action');
        $('#deleteModal').modal('show');
        $('#deleteForm').attr("action", url);
    });

    $('#lectures').select2();
    $('#students').select2();
    
});