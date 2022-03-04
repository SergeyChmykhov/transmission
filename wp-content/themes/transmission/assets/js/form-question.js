jQuery(function($) {

    jQuery('#questionForm').on('submit', function(e) {
    e.preventDefault();

        jQuery.ajax({
            url: jQuery(this).attr('action'),
            method: jQuery(this).attr('method'),
            dataType: "json",
            data: {
                "data" : jQuery(this).serialize()
            },

            success: function(res) {
                alert(res['info']);
            },

            error: function(res) {
                alert(' Ошибка при выполнении запроса! Повторите попытку позже! ');
            }
        });
    });
});