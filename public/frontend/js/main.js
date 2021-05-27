const AJAX_CONFIG = {
    headers: {
        "Content-type": "application/json; charset=utf-8",
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
};
