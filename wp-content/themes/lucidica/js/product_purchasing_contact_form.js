jQuery(document).ready(function () {
    var $ = jQuery;
    $('#product_form').on('submit', function (e) {
        e.preventDefault();
        var data = $(this).serializeObject();
        data.action = 'product_purchasing_submit';
        console.log(data);
        $.post(myajax.url, data)
            .done(function (result) {
                if (result === '1') {
                    console.log($(e.target).find('.submit'));
                    console.log(e);
                    $(e.target).find('.submit').attr('disabled', true);

                }
                console.log("result="+result);
            })
            .fail(function() {
                console.log( "error" );
            })
            .always(function() {
                console.log( "always submited" );
            });
    });
    $.fn.serializeObject = function () {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
});