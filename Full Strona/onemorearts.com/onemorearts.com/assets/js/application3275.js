$(document).ready(function()
{
//zliczanie klikow
    $('.countBan').bind('click', function() {
        //console.log('jest');
        var url = $(this).attr('data-url');
         $.post("/ajax/others/countBan", {'id': $(this).attr('data-id')},
            function(data){
                
                if( url != '' && url != 'undefined')
                    window.location.assign(url);
            },
        "json"
        );
    });

    if($('.right-side .module.type-blok').length > 0)
    {
        $('.right-side .module.type-blok').last().addClass('last-blok');
        var blok = $('.last-blok');
        blok.attr('data-offset-top', 0);
        var menuh = $('.mmenu').height();
        var containerh = $('.container-fluid.content').height()+$('.container-fluid.content').offset().top;
        $(window).scroll(function() {
            if(blok.attr('data-offset-top') == 0)
                blok.attr('data-offset-top', $(blok).offset().top);

            //console.log('offset '+$('.last-blok').offset().top + ' position'+$('.last-blok').position().top+' window'+$(document).scrollTop());
            if(blok.attr('data-offset-top') < ($(document).scrollTop()+menuh+60) /*&& ($(document).scrollTop()+blok.height()+menuh) < containerh*/)
            {
                
                if(!blok.hasClass('blok-fixed'))
                    blok.css('width', $('.right-side').width()+30).addClass('blok-fixed').css('top', menuh+30);
            }
            else
            {
                blok.removeClass('blok-fixed').css('top', 0);
            }
        });
    }

    $('.scroll').bind('click', function(event) {
        event.preventDefault();

        $(window).scrollTo($($(this).attr('href')), 300);
    });

    $('.more-articles').bind('click', function(event) {
        event.preventDefault();
        more_articles();
    });
    
});

function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
}

function more_articles()
{
    var id = $('#more-articles').data('id');
    var offset = $('#more-articles').data('offset');

    $.post( "/ajax/articles/more_articles", {'id' : id, 'offset' : offset}, function( data ) {
            $('#more-articles').append(data.content);
            $('#more-articles').data('offset', data.offset);
    }, 'json');
}


//menu
$(document).ready(function(){
    if(menu_type == 1)
    {
        $(".m-w").click(function(){
            $('#menu2').slideToggle({
                'done' : function() {
                    $('#menu2').attr('data-display', $('#menu2').css('display'));
                    $(window).scroll(function() {
                        //console.log('display0 '+$('#menu2').css('display'));
                        if($('#menu2').attr('data-display') == 'block')
                        {
                            $('#menu2').attr('data-display', 'none');   
                            $('#menu2').slideToggle();
                        }
                    });
                    //$('#menu2').attr('data-display', 'block');
            }

            });
        });
    }
    /*var el_w = 0;
    var menu_show = false;
    $.each($('.el_w'), function(key, value) {
        //console.log($(this).width() + ' '+ $(value).attr('class'));
        el_w += $(this).width();
        //console.log(menu_width);
    });

    console.log('dlugosc el '+el_w);*/

    function menu_width()
    {
        var menu = $('#menu>li');
        var menu_width = 0;
        $.each(menu, function(key, value) {
            //console.log($(this).width() + ' ' + $(value).width(true));
            $(this).attr('data-w', ($(this).width()));
            //console.log(menu_width);
        });
        //console.log(menu_width);
        //return menu_width;
    }

    function showMenu(){    
        //console.log(el_w);
        el_w = 0;
            $.each($('.el_w'), function(key, value) {
            //console.log($(this).width() + ' '+ $(value).attr('class'));
            el_w += $(this).width();
            //console.log(menu_width);
        });

        var menu_width = $('.mmenu').width()-el_w;
        //console.log(menu_width + ' menu ' + $('.mmenu').width() + ' el_w '+ el_w + 'navbar '+ $('.navbar-collapse').width());
        if(window.innerWidth < 768)
        {
            //console.log('okno '+window.innerWidth);
            var el_move = $('#menu2>ul>li');
            if(el_move.length > 0)
            {
                //console.log(el_move);
                $('#menu').prepend(el_move);
            }
            /*else
            {
                $('#menu').append($('#menu2>ul>li'));
            }*/
        }
        else if( (menu_width < ($('.navbar-collapse').width()+60) )) {
            //console.log(window.innerWidth);
            var el_move = $('#menu>li:last');
            //$(el_move).attr('data-w', $(el_move).width()+10);
            $('#menu2>ul').prepend(el_move);
            //$('#menu2>ul>li:first>a').attr('data-hover-h', $('#menu2>ul>li:first>a').attr('data-hover'));
            //$('#menu2>ul>li:first>a').removeAttr('data-hover');
            if(($('.mmenu').width()-el_w) < ($('.navbar-collapse').width()+60))
            {
                showMenu();
            }

        } else {
            if($('#menu2>ul>li').length > 0)
            {
                //console.log(' ilosc '+$('#menu2 ul li').length);
                var el_t_move = $('#menu2>ul>li:first');

                if((menu_width - $(el_t_move).attr('data-w')) > ($('.navbar-collapse').width()+60))
                {
                    //$(el_t_move).attr('data-hover', $(el_t_move).attr('data-hover-h'));
                    $('#menu').append($(el_t_move));
                    //console.log(menu_show);

                    if(($('.mmenu').width()-$('#menu2>ul>li:first')) < ($('.navbar-collapse').width()+60))
                        showMenu(); 
                }
            }
            else
            {
                //console.log('test3 - ' + menu_show);

                if(menu_show === true)
                {
                    $('#menu2').hide();
                    menu_show = false;
                }
            }
        }

        
        if(($('#menu2>ul>li').length > 0) && menu_show === false)
        {
            $('#menu2').show();
            menu_show = true;
            showMenu();
        }
        
    }

    function menu_bg()
    {
        if($(window).scrollTop() >= 100)
        {
            if(!$('.head .menu').hasClass('bg'))
            {
                $('.head .menu').addClass('bg');
                //$('.menu .navbar-header').slideToggle();
            }
        }
        else
        {
            $('.head .menu').removeClass('bg');
            //$('.menu .navbar-header').show();
        }
    }

    function top_page()
    {
        if($(window).scrollTop() >= 600)
        {
            if(!$('.top-page').hasClass('show'))
                $('.top-page').addClass('show');
        }
        else
        {
            $('.top-page').removeClass('show');
        }
    }

    //menu_bg();
    top_page();

    $(window).scroll(function() {
        
        if(window.innerWidth >= 1200)
        {
            //console.log(window.innerWidth);
            menu_bg();
            
        }
        top_page();
    });

    //menu_width();
    //showMenu();
    //$(window).resize(showMenu);

    $('.dropdown-toggle').dropdownHover();
});

//artykuly
$(document).ready(function() {
    var string = $('.article-view .left .content .desc').html();

    if(string)
    {

        var length = string.length,
        step = length/2,
        i = 0,
        j;

        

        if($('.article-view .left .content .desc').find("p").length > 2)
            var search = '</p>';
        else
            var search = '<br>';

        while (i < length) {
            j = string.indexOf(search, i + step);

            //console.log(i, j, length);

            if (j === -1) {
                j = length;
            }
            else
            {
                string = string.substring(0, j) + '<div class="row" id="baner-tresc"></div>' + string.substring(j);
                $('.article-view .left .content .desc').html(string);
                break;
            }
            i = j;
            
        }



        $('.article-view .left .content .ban-72').appendTo($('.article-view #baner-tresc'));
    }
    
});