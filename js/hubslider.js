/**
 * Created by ufukOzarslan & burakErmeydan on 25.04.16.
 */

jQuery.fn.hubSlider = function (config) {

    var settings = jQuery.extend({
        selector: null,
        button: {
            next: null,
            prev: null
        },
        opacity: 1,
        opacityStep: 0.2,
        startOffset: 20,
        offset: 0,
        scale: 1,
        scaleStep: '0.05',
        transition: '0.6s',
        auto: false,
        time: 3 // secondly.
    }, config);

    try {

        var they = this,
            zindex = they.find(settings.selector).length,
            array = [];

        if (settings.selector === null || settings.selector == '') console.error("Error, specify selector!");

        they.find(settings.selector).each(function (k) {

            they.find(settings.selector).eq(k).css(
                {
                    'z-index': zindex,
                    'top': -settings.offset,
                    '-webkit-transform': 'scale(' + settings.scale + ')',
                    '-moz-transform': 'scale(' + settings.scale + ')',
                    '-ms-transform': 'scale(' + settings.scale + ')',
                    '-o-transform': 'scale(' + settings.scale + ')',
                    'transform': 'scale(' + settings.scale + ')'
                }
            ).attr('data-key', k);

            settings.scale = settings.scale - settings.scaleStep;

            if (k === 0) {
                zindex = zindex - (k + 1);
            } else {
                zindex = zindex - k;
            }

            settings.offset = settings.offset + settings.startOffset;

            if (k + 1 <= they.find(settings.selector).length) {

                they.find(settings.selector).eq(k).css({'opacity': settings.opacity});

                settings.opacity = settings.opacity - settings.opacityStep;
            }

        });

        var movement = function (e) {

            they.find(settings.selector).each(function (key) {

                var num = $(this).attr("data-key"),
                    attr = null;

                if (e == 'next') {

                    attr = they.find(settings.selector).eq(key - 1).attr("style");

                    if (num != '0') {

                        $(this).attr('data-key', parseFloat(num) - 1);

                    } else {

                        $(this).attr('data-key', parseFloat(they.find(settings.selector).length) - 1);

                    }

                } else if (e == 'prev') {

                    if (key >= parseFloat(they.find(settings.selector).length) - 1) key = -1;

                    attr = they.find(settings.selector).eq(key + 1).attr("style");

                    if (num < parseFloat(they.find(settings.selector).length) - 1) {

                        $(this).attr('data-key', parseFloat(num) + 1);

                    } else {

                        $(this).attr('data-key', 0);

                    }

                }

                array.push(attr);

            });

            they.find(settings.selector).each(function (numeric) {

                $(this).attr("style", array[numeric]).css({
                    'transition': settings.transition,
                    '-webkit-transition': settings.transition,
                    'transform-style': 'flat',
                    '-webkit-transform-style': 'flat'
                });

            });

            array.length = 0;

        }

        if (settings.button.next === null || settings.button.next == '' && settings.button.prev === null || settings.button.prev == '') console.error("Error, button specify selector!");

        settings.button.next.click(function (e) {

            movement('next');

        });

        settings.button.prev.click(function (e) {

            movement('prev');

        });

        if (settings.auto === true) {

            if (settings.time === null || settings.time == '') console.error("Error, time specify selector!");

            they.interval = setInterval(function () {

                movement('next')

            }, settings.time * 1000);

            they.hover(function () {

                clearInterval(they.interval);

                they.interval = null;

            }, function () {

                they.interval = setInterval(function () {

                    movement('next')

                }, settings.time * 1000);

            });

        }

    } catch (err) {

        console.error(err);

    }

}
