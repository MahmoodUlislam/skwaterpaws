(function($) {
    "use strict";
    $.fn.menumaker = function(options) {
        var cssmenu = $(this),
            settings = $.extend({
                title: "Menu",
                format: "dropdown",
                breakpoint: 768,
                sticky: false
            }, options);
        return this.each(function() {
            cssmenu.find('li ul').parent().addClass('has-sub');
            if (settings.format != 'select') {
                cssmenu.prepend('<a href="#" id="menu-button">' + settings.title + '</a>');
                $(this).find("#menu-button").on('keydown', function(e) {
                    var tabKey = e.keyCode === 9;
                    var shiftKey = e.shiftKey;
                    if ($(this).hasClass('menu-opened')) {
                        if (shiftKey && tabKey) {
                            e.preventDefault();
                            $('div#cssmenu > ul.menu').css('display', 'none').removeClass('open');
                            $(this).removeClass('menu-opened');
                        };
                    }
                });
                $(this).find("#menu-button").on('click', function() {
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.hide().removeClass('open');
                    } else {
                        mainmenu.show().addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').show();
                        }
                    }
                });
                var multiTg = function() {
                    function submenuButton() {
                        var buttonTag = 'span';
                        if ($(window).width() > settings.breakpoint) {
                            buttonTag = 'span';
                        } else {
                            buttonTag = 'span';
                        }
                        cssmenu.find(".has-sub ul.sub-menu").before('<' + buttonTag + '  class="submenu-button"></' + buttonTag + '>');
                        // let buttonLength = cssmenu.find(".has-sub").children('button').length;
                        // if (buttonLength < 1) {
                        //     $('.submenu-button').siblings('.submenu-button').remove('.submenu-button');
                        // }
                        var hasClicked = false;
                        cssmenu.find('.submenu-button').on('click', function(e) {
                            $(this).toggleClass('submenu-opened');
                            if ($(this).siblings('ul').hasClass('open')) {
                                $(this).siblings('ul').removeClass('open').hide();
                            } else {
                                $(this).siblings('ul').addClass('open').show();
                            }
                        });
                    }
                    submenuButton();
                    // $(window).on('resize', function() {
                    //     submenuButton();
                    // });
                };
                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');
            } else if (settings.format === 'select') {
                cssmenu.append('<select style="width: 100%"/>').addClass('select-list');
                var selectList = cssmenu.find('select');
                selectList.append('<option>' + settings.title + '</option>', {
                    "selected": "selected",
                    "value": ""
                });
                cssmenu.find('a').each(function() {
                    var element = $(this),
                        indentation = "";
                    for (i = 1; i < element.parents('ul').length; i++) {
                        indentation += '-';
                    }
                    selectList.append('<option value="' + $(this).attr('href') + '">' + indentation + element.text() + '</option');
                });
                selectList.on('change', function() {
                    window.location = $(this).find("option:selected").val();
                });
            }
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            var resizeFix = function() {
                if ($(window).width() > settings.breakpoint) {
                    cssmenu.find('ul').show();
                    cssmenu.removeClass('small-screen');
                    if (settings.format === 'select') {
                        cssmenu.find('select').hide();
                    } else {
                        cssmenu.find("#menu-button").removeClass("menu-opened");
                    }
                }
                if ($(window).width() <= settings.breakpoint && !cssmenu.hasClass("small-screen")) {
                    cssmenu.find('ul').hide().removeClass('open');
                    cssmenu.addClass('small-screen');
                    if (settings.format === 'select') {
                        cssmenu.find('select').show();
                    }
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
        });
    };
})(jQuery);