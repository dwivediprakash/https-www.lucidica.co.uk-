jQuery(document).ready(function () {
    var $ = jQuery;
    var currentPrice = 0;
    var newPrice = 0;
    var switchers = $('.web-calculator input[type="checkbox"], .web-calculator input[type="radio"]');
    var pagesCount = $('.web-calculator__pages-count input');
    var totalEl = $('.estimate-price span');

    var timer;
    console.log(switchers);
    $('.web-calculator').on('change', function (e) {
        var pagesPrice = 0;
        if (pagesCount[0].value > 20) pagesCount[0].value = 20;
        if (pagesCount[0].value >= 1 && pagesCount[0].value <= 20) {
            console.log('exception');
            pagesPrice = pagesCount[0].value * $(pagesCount).data('price') - $(pagesCount).data('price');
        } else {
            return false;
        }
        var selectorsPrice = 0;
        $(switchers).each(function () {
            selectorsPrice += this.checked ? $(this).data('price') : 0;
        });
        newPrice = selectorsPrice + pagesPrice;
        clearTimeout(timer);
        timer = setTimeout(changePrice, 500);
    });

    function changePrice() {
        var counter = setInterval(change, 1);

        function change() {
            if (currentPrice < newPrice) {
                currentPrice = currentPrice + 5;
                $(totalEl).html(currentPrice);
            } else if (currentPrice > newPrice) {
                currentPrice = currentPrice - 5;
                $(totalEl).html(currentPrice);
            } else {
                clearInterval(counter);
            }
        }

        console.log('change price');
        console.log(currentPrice);
        console.log(newPrice);
        // while (currentPrice !== newPrice) {
        // }
    }

    $('.web-calculator').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serializeObject();
        data.action = 'website_builder';
        console.log(data);;
        $.post(myajax.url, data)
            .done(function (result) {
                if (result === '1') {
                    console.log($(e.target).find('.submit button'));
                    console.log(e);
                    $(e.target).find('.submit button').attr('disabled', true);
                }
            })
    });
    $.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
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