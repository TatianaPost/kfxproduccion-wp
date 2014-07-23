// add your custom scripts here
// as the page loads, call these scripts
jQuery(function($) {

    //Custom scroll var
    var scrollstatus = $('html').data('scroll');
    var animationstatus = $('html').data('pageani');


    //Skins Selector Box
    if($('.skinselector').length){
        $('.openbutton').live('click',function(){
            $('.skinselector').css('margin-left','0');
            $(this).addClass('openedbox');

            $('.openedbox').live('click',function(){
                $('.skinselector').css('margin-left','-224px');
                $(this).removeClass('openedbox');
            });


            $('.item').live('click',function(){
                var curent_color = $(this).data('color');
                var curlink = $(this).data('link');
                $.cookie('bonitacolor', curent_color, { path: '/' });

                $('#1-css,#2-css,#3-css,#4-css,#5-css,#6-css,#7-css,#8-css,#9-css,#10-css').remove();
                $('head').append('<link rel=\'stylesheet\' id=\''+curent_color+'-css\'  href=\''+curlink+'/css/preview/'+curent_color+'.css?ver=1.0\' type=\'text/css\' media=\'all\' />')

                $('.item').removeClass('active');
                $(this).addClass('active');
            });

        });
    }

    //Slider on Home type 1
    $('.newhomeslider').flexslider({
        animation:"slide",
        slideshowSpeed: 10000,
        animationSpeed: 500,
        prevText:"",
        nextText:""
    });
    $('.newhomeslider .flex-viewport').css('overflow','');

    $('.postsliderhome').flexslider({
        animation:"slide",
        prevText:"",
        nextText:""
    });


    //Slider for Recent from Blog on Home type 1
    $('.recentblogslide').flexslider(
        {
            animation:"slide",
            controlNav:false,
            animationLoop: true,
            itemWidth:245,
            directionNav:true,
            controlsContainer:".custom-direction-nav",
            minItems: 3,
            maxItems: 3
            //smoothHeight: true
        }
    );

    //Slider for Reviews line on Home type 1
    $('.reviewslide').flexslider(
        {
            animation:"fade",
            controlNav:false,
            animationLoop: true,
            directionNav:true,
            controlsContainer:".rev-nav",
            smoothHeight: true
        }
    );





    $(window).bind('scroll', function() {
        var scroll_top = $(document).scrollTop();
        var sliderheight = $('.headerbox').height();
        if(scroll_top >= sliderheight ){
            $('.navigationtop').css('position', 'fixed');
            $('.navigationtop').css('top', '0px');
            $('.navigationtop').css('z-index', '9999');
            $('.navigationtop').css('background', '#f5f5f5');
            $('.headerbox').css('margin-bottom', '70px');
        } else {
            $('.navigationtop').css('position', '');
            $('.navigationtop').css('top', '');
            $('.navigationtop').css('z-index', '');
            $('.navigationtop').css('background', '');
            $('.headerbox').css('margin-bottom', '');
        }
    });




        //Post slider
        $('.postslider').flexslider({
            animation:"slide",
            prevText:"",
            nextText:""
        });
        $('.homegalsider').flexslider({
            animation:"slide"
        });

        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            slideshow: false,
            itemWidth: 123,
            directionNav: false,
            asNavFor: '.newsslider'
        });
        $('.newsslider').flexslider({
            animation: "slide",
            smoothHeight: true,
            animationLoop: true,
            controlNav: false,
            sync: "#carousel"
        });

        //Scroll Comments
        $('.scrollbox').jScrollPane();

        //Select Navigation on Mobile Devices
        $('select.mobilemenu').change(function(){
            var url = $(this).val();
            if (url) {
                window.location = url;
            }
            return false;
        });

        $('.listbut').live('click',function(){
           $('#post').addClass('liststyle').removeClass('gridstyle');
            $(this).addClass('selected');
            $('.gridbut').removeClass('selected');
            $("html").getNiceScroll().resize();
        });
        $('.gridbut').live('click',function(){
            $('#post').addClass('gridstyle').removeClass('liststyle');
            $(this).addClass('selected');
            $('.listbut').removeClass('selected');
            $("html").getNiceScroll().resize();
        });


        //Gallery sliders
        $('#fullcarousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 165,
            prevText:"",
            nextText:"",
            asNavFor: '.portfolioslider'
        })
        $('.portfolioslider').flexslider({
            animation: "slide",
            controlNav:false,
            slideshow:false,
            prevText:"",
            nextText:"",
            animationLoop: true,
            smoothHeight: true,
            multipleKeyboard: true,
            sync: "#fullcarousel",
            initDelay:1
        });
        $('.entertumba').click(function(){
            $('.portfoliotumbas').toggle();
            $('.scroll-pane').jScrollPane({
                animateScroll: true,
            });
        });
        $('.textblock').jScrollPane();
        $('#carousel img').click(function(){
            var indexnum = $(this).parent().index();
            $('.portfolioslider').flexslider(indexnum);
            $('.portfoliotumbas').toggle("slow");
        });
        $(document).bind('fullscreenerror', function() {
            alert('Browser rejected fullscreen change');
        });
        $('.closefull').click(function(){
            $('.bigsliderbox').fullScreen();
            $('.bottomslidelist,.fullscreetop').css("display","none");
            $('.portfolioslider').find('img').css({
                width : '100%',
                height : 'auto'
            });
        });
        $('.enterfullscreen').click(function(){
            function getFullscreenmode(){
                $('.bigsliderbox').fullScreen();
                $('.bottomslidelist,.fullscreetop').css("display","block");
                $('.portfolioslider').find('img').css({
                    width : 'auto',
                    height : screen.height
                });
            }

            if($('.portfoliotumbas').css('display') == 'none'){
                getFullscreenmode();
            }
            else {
                $('.portfoliotumbas').toggle();
                getFullscreenmode();
            }

            if ( $.browser.msie ) {
                $('.bottomslidelist,.fullscreetop').css("display","none");
                $('.portfolioslider').find('img').css({
                    width : '100%',
                    height : 'auto'
                });
                alert("Browser rejected fullscreen change");
            }
        });


    $(window).resize(function(){

        //Scroll Comments
        $('.scrollbox').jScrollPane();
        $('.textblock').jScrollPane();
        $('.scroll-pane').jScrollPane({
            animateScroll: true
        });
    });

    $(window).load(function(){

        $('.tophead').addClass('viewtophead');

        //FadeIn the slider on Home Type 1 when page is loaded
        $('.topfullslider').css({'opacity':'1'});

        $('.galleryarchive .singlegallerytitle h2').addClass("slideRight");
        $('.galleryarchive .singlegallerytitle .backbut,.galleryarchive .filterbox').addClass("slideLeft");


        if(animationstatus == 1){
            $('.blogpostsgrid,.galleryarchive .gallerycont,.galleryarchive .twocolumnsgaly,.galleryarchive .threecolumnsgaly,.galleryarchive .fourcolumnsgaly').addClass("slideUp");
        }

        //Appear effects on Home type 1
        if($(window).height() > 750) {
            $('.welcome .weltitle').addClass("slideDown");
            $('.welcome .weldesc').addClass("slideUp");
            $('.welcome .buttonabout').addClass("slideUp");
            $('.fromblog .blogitems').addClass("slideRight");
            $('.fromblog .titlefromblog').addClass("slideLeft");
            $('.page-template-template-home-one-php .singlegallerytitle h2').addClass("slideRight");
            $('.page-template-template-home-one-php .singlegallerytitle .backbut').addClass("slideLeft");
            $('.page-template-template-home-one-php .gallerycont').addClass("slideUp");
            $('.aboutpagedatandskills .leftpart').addClass("slideRight");
            $('.aboutpagedatandskills .rightpart').addClass("slideLeft");



            $(window).scroll(function() {

                $('.portfoliocat').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('.titlebox').addClass("slideRight");
                        $('.reviews').addClass("slideLeft");
                    }
                });

                $('.portfolioboxes').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('.leftportbox .portmask').addClass("slideRight");
                        $('.rightportbox .portmask').addClass("slideLeft");
                    }
                });

                $('.partners').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+700) {
                        $('.itempar').addClass("fadeIn");
                    }
                });

                $('.recentgallyhome').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('.singlegallerytitle h2').addClass("slideRight");
                        $('.singlegallerytitle .backbut').addClass("slideLeft");
                        $('.gallerycont').addClass("slideUp");
                        $('.filterbox').addClass("slideLeft");
                        $('#galcontainer').addClass("slideUp");
                    }
                });

                $('.bothometext').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('.titline').addClass("slideDown");
                        $('.homewhitebox').addClass("slideUp");
                    }
                });

                $('.recentgaleries').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('.recentgaleries .posttitle h2').addClass("slideRight");
                        $('.gallyitems').addClass("slideLeft");
                    }
                });

                $('.commentsboxgallery').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('h2.commentstit').addClass("slideRight");
                        $('#comments').addClass("slideLeft");
                    }
                });

                $('section.respond').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('h3.galleryti').addClass("slideRight");
                        $('.gallerycommentform').addClass("slideLeft");
                    }
                });

                $('.blogcomments').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('.comments').addClass("slideRight");
                        $('.respond').addClass("slideLeft");
                    }
                });

                $('.bottomaboutteam').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('.bottomaboutteam .title').addClass("slideDown");
                        $('.teamphotos').addClass("slideUp");
                    }
                });
            });
        } else {
            $(window).scroll(function() {
                $('.welcome').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.weltitle').addClass("slideDown");
                        $('.weldesc').addClass("slideUp");
                        $('.buttonabout').addClass("slideUp");
                    }
                });

                $('.fromblog').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.blogitems').addClass("slideRight");
                        $('.titlefromblog').addClass("slideLeft");
                    }
                });

                $('.portfoliocat').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.titlebox').addClass("slideRight");
                        $('.reviews').addClass("slideLeft");
                    }
                });

                $('.portfolioboxes').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.leftportbox .portmask').addClass("slideRight");
                        $('.rightportbox .portmask').addClass("slideLeft");
                    }
                });

                $('.partners').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+500) {
                        $('.itempar').addClass("fadeIn");
                    }
                });

                $('.recentgallyhome').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+600) {
                        $('.singlegallerytitle h2').addClass("slideRight");
                        $('.singlegallerytitle .backbut').addClass("slideLeft");
                        $('.filterbox').addClass("slideLeft");
                        $('.gallerycont').addClass("slideUp");
                        $('#galcontainer').addClass("slideUp");
                    }
                });

                $('.bothometext').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.titline').addClass("slideDown");
                        $('.homewhitebox').addClass("slideUp");
                    }
                });

                $('.recentgaleries').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.recentgaleries .posttitle h2').addClass("slideRight");
                        $('.gallyitems').addClass("slideLeft");
                    }
                });

                $('.commentsboxgallery').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('h2.commentstit').addClass("slideRight");
                        $('#comments').addClass("slideLeft");
                    }
                });

                $('section.respond').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('h3.galleryti').addClass("slideRight");
                        $('.gallerycommentform').addClass("slideLeft");
                    }
                });

                $('.blogcomments').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.comments').addClass("slideRight");
                        $('.respond').addClass("slideLeft");
                    }
                });

                $('.aboutpagedatandskills').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.leftpart').addClass("slideRight");
                        $('.rightpart').addClass("slideLeft");
                    }
                });

                $('.bottomaboutteam').each(function(){
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow+400) {
                        $('.bottomaboutteam .title').addClass("slideDown");
                        $('.teamphotos').addClass("slideUp");
                    }
                });
            });
        }


        if (jQuery.isFunction(jQuery.fn.isotope)) {

            // initialize Isotope
            $('.isogridblog').isotope({
                itemSelector : 'article.post'
            });
            $(window).smartresize(function(){
                $('.isogridblog').isotope({
                    itemSelector : 'article.post'
                });
            });

            //Filtering on Gallery pages
            // cache container
            var $container = $('#galcontainer');
            // initialize isotope
            $container.isotope({});

            // filter items when filter link is clicked
            $('#filters a').click(function(){
                var selector = $(this).attr('data-filter');
                $container.isotope({ filter: selector },function(){$("html").getNiceScroll().resize();});
                $('#filters li').removeClass('activefilter');
                $(this).parent().addClass('activefilter');
                return false;
            });
            $(window).smartresize(function(){
                $container.isotope({});
            });


        }

        if(scrollstatus === 'scroll') {
            //Textarea scroll
            $("textarea").niceScroll(
                {
                    cursorcolor: "#000000",
                    zindex:99999,
                    cursorborder:"1px solid transparent",
                    horizrailenabled: false,
                    cursoropacitymin: 0.1,
                    cursoropacitymax: 0.6,
                    cursorwidth:"7px",
                    cursorborderradius:"10px"
                });

            // Main window scroll
            $("html").niceScroll(
                {
                    cursorcolor: "#000000",
                    zindex:99999,
                    cursorborder:"1px solid transparent",
                    horizrailenabled: false,
                    cursoropacitymin: 0.1,
                    cursoropacitymax: 0.6,
                    cursorwidth:"7px",
                    cursorborderradius:"10px"
                }
            );
        }
    });
});

Modernizr.addTest('ipad', function () {
  return !!navigator.userAgent.match(/iPad/i);
});

Modernizr.addTest('iphone', function () {
  return !!navigator.userAgent.match(/iPhone/i);
});

Modernizr.addTest('ipod', function () {
  return !!navigator.userAgent.match(/iPod/i);
});

Modernizr.addTest('appleios', function () {
  return (Modernizr.ipad || Modernizr.ipod || Modernizr.iphone);
});

Modernizr.addTest('positionfixed', function () {
    var test    = document.createElement('div'),
        control = test.cloneNode(false),
        fake = false,
        root = document.body || (function () {
            fake = true;
            return document.documentElement.appendChild(document.createElement('body'));
        }());

    var oldCssText = root.style.cssText;
    root.style.cssText = 'padding:0;margin:0';
    test.style.cssText = 'position:fixed;top:42px'; 
    root.appendChild(test);
    root.appendChild(control);
    
    var ret = test.offsetTop !== control.offsetTop;

    root.removeChild(test);
    root.removeChild(control);
    root.style.cssText = oldCssText;
    
    if (fake) {
        document.documentElement.removeChild(root);
    }
    
    /* Uh-oh. iOS would return a false positive here.
     * If it's about to return true, we'll explicitly test for known iOS User Agent strings.
     * "UA Sniffing is bad practice" you say. Agreeable, but sadly this feature has made it to
     * Modernizr's list of undectables, so we're reduced to having to use this. */
    return ret && !Modernizr.appleios;
});


// Modernizr.load loading the right scripts only if you need them
Modernizr.load([
	{
		// Let's see if we need to load selectivizr
		test : Modernizr.borderradius,
		// Modernizr.load loads selectivizr and Respond.js for IE6-8
		nope : [ale.template_dir + '/js/libs/selectivizr.min.js', ale.template_dir + '/js/libs/respond.min.js']
	},{
		test: Modernizr.touch,
		yep:ale.template_dir + '/css/touch.css'
	}
]);



jQuery(function($) {
	var is_single = $('#post').length;
	var posts = $('article.post');
	var is_mobile = parseInt(ale.is_mobile);
	
	var slider_settings = {
		animation: "slide",
		slideshow: false,
		controlNav: false
	}
	
    $(document).ajaxComplete(function(){
        try{
			if (!posts.length) {
				return;
			}
            FB.XFBML.parse(); 
            gapi.plusone.go();
            twttr.widgets.load();
			pin_load();
        }catch(ex){}
    });
	
    // open external links in new window
    $("a[rel$=external]").each(function(){
        $(this).attr('target', '_blank');
    });
	
	$.fn.init_posts = function() {
		var init_post = function(data) {
            // close other posts
            data.post.siblings('.open-post').find('a.toggle').trigger('click', {
                hide:true
            });
			
			var loading = data.post.find('span.loading');
			
			if (data.more.is(':empty')) {
				data.post.addClass('post-loading');
				loading.css('visibility', 'visible');
                data.more.load(ale.ajax_load_url, {
                    'action':'aletheme_load_post',
                    'id':data.post.data('post-id')
                }, function(){
                    loading.remove();
                    data.more.slideDown(400, function(){
                        data.post.addClass('open-post');
                        data.toggler.text('Close Post');
						$('.video', data.more).fitVids();
                        if (data.scroll) {
                            data.scroll.scrollTo('fast');
                        }
                    });
					init_comments(data.post);
                });
            } else {
                data.more.slideDown(400, function(){
                    data.post.addClass('open-post');
                    data.toggler.text('Close Post');
                    if (data.scroll) {
                        data.scroll.scrollTo('fast');
                    }
                });
            }
		}

		var load_post = function(e, _opts) {
			e.preventDefault();
            var data  = {
                toggler:$(this),
                scroll:false
            };
            var opts = $.extend({
                comments:false,
                hide:false,
                add_comment:false
            }, _opts);
            data.post = data.toggler.parents('article.post');
            data.more = data.post.find('.full');
			
            if (data.more.is(':visible')) {
                if (opts.hide == true) {
					// quick hide for multiple posts
                    data.more.hide();
                } else {
                    data.more.slideUp(400);
                }
                data.toggler.text('Open Post');
                data.post.removeClass('open-post');
            } else {
                if (typeof(e.originalEvent) != 'undefined' ) {
                    data.scroll = data.post;
                }
                init_post(data);
            }
		}
		
		var init_comments = function(post) {
			var respond = $('section.respond', post);
			var respond_form = $('form', respond);
			var respond_form_error = $('p.error', respond_form);
			//var respond_cancel = $('.cancel-comment-reply a', respond);
			var comments = $('section.comments', post);
			
			/*$('a.comment-reply-link', post).on('click', function(e){
				e.preventDefault();
				var comment = $(this).parents('li.comment');
				comment.find('>div').append(respond);
				respond_cancel.show();
				respond.find('input[name=comment_post_ID]').val(post.data('post-id'));
				respond.find('input[name=comment_parent]').val(comment.data('comment-id'));
				respond.find('input:first').focus();
			}).attr('onclick', '');

			respond_cancel.on('click', function(e){
				e.preventDefault();
				comments.after(respond);
				respond.find('input[name=comment_post_ID]').val(post.data('post-id'));
				respond.find('input[name=comment_parent]').val(0);
				$(this).hide();
			});
			*/
			respond_form.ajaxForm({
				'beforeSubmit':function(){
					respond_form_error.text('').hide();
				},
				'success':function(_data){
					var data = $.parseJSON(_data);
					if (data.error) {
						respond_form_error.html(data.msg).slideDown('fast');
						return;
					}
					var comment_parent_id = respond.find('input[name=comment_parent]').val();
					var _comment = $(data.html);
					var list;
					_comment.hide();
					
					if (comment_parent_id == 0) {
						list = comments.find('ol');
						if (!list.length) {
							list = $('<ol class="commentlist "></ol>');
							comments.find('.scrollbox .jspContainer .jspPane').append(list);
						}
					} else {
						list = $('#comment-' + comment_parent_id).parent().find('ul');
						if (!list.length) {
							list = $('<ul class="children"></ul>');
							$('#comment-' + comment_parent_id).parent().append(list);
						}
						respond_cancel.trigger('click');
					}
					list.append(_comment);
					_comment.fadeIn('fast');
							//.scrollTo();

                    var pane2api = post.find('.scrollbox').data('jsp');
                    pane2api.reinitialise();
                    pane2api.scrollToElement(_comment.filter('li:last'));
                    $('.commenttextarea span.succes').html('Thank you for your comment!');

					respond.find('textarea').clearFields();
				},
				'error':function(response){
					var error = response.responseText.match(/\<p\>(.*)<\/p\>/)[1];
					if (typeof(error) == 'undefined') {
						error = 'Something went wrong. Please reload the page and try again.';
					}
					respond_form_error.html(error).slideDown('fast');
				}
			});
		}
		$(this).each(function(){
			var post = $(this);
			// init post galleries 
			$(window).load(function(){
				$('.preview .flexslider', post).flexslider(slider_settings);
			});
			// do not init ajax posts & comments for mobile
			if (!is_mobile) {
				// ajax posts enabled
                if (ale.ajax_posts) {
                    $('a.toggle', post).click(load_post);
					$('.video', post).fitVids();
					$('.preview figure a', post).click(function(e){
						e.preventDefault();
						$(this).parents('article.post').find('a.toggle').trigger('click');
					});
                }
			}
		});
		// init ajax comments on a single post if ajax comments are enabled
		if (is_single && parseInt(ale.ajax_comments)) {
			init_comments(posts);	
		}
		// open single post on page
		if (parseInt(ale.ajax_open_single) && !is_single && posts.length == 1) {
			posts.find('a.toggle').trigger('click');
		}
	}
	posts.init_posts();
	
	$.fn.init_gallery = function() {
		$(this).each(function(){
			var gallery = $(this);
			$(window).load(function(){
				$('.flexslider', gallery).flexslider(slider_settings);
			});
			
		})
	}
	$('#gallery').init_gallery();

    $.fn.init_archives = function()
    {
        $(this).each(function(){
            var archives = $(this);
            var year = $('#archives-active-year');
            var months = $('div.months div.year-months', archives);
            var arrows = $('a.up, a.down', archives);
            var activeMonth;
            var current, active;
            var animated = false;
			if (months.length == 1) {
				arrows.remove();
				activeMonth = months.filter(':first').addClass('year-active').show();
				year.text(activeMonth.attr('id').replace(/[^0-9]*/, ''));
				return;
			}
            arrows.click(function(e){
                e.preventDefault();
                if (animated) {
                    return;
                }
                var fn = $(this);
                animated = true;
                arrows.css('visibility', 'visible');
                var current = months.filter('.year-active');
                if (fn.hasClass('up')) {
                    active = current.prev();
                    if (!active.length) {
                        active = months.filter(':last');
                    }
                } else {
                    active = current.next();
                    if (!active.length) {
                        active = months.filter(':first');
                    }
                }
                current.removeClass('year-active').fadeOut(150, function(){
                    active.addClass('year-active').fadeIn(150, function(){
                        animated = false;
                    });
                    year.text(active.attr('id').replace(/[^0-9]*/, ''));

                    if (fn.hasClass('up')) {
                        if (!active.prev().length) {
                            arrows.filter('.up').css('visibility', 'hidden');
                        }
                    } else {
                        if (!active.next().length) {
                            arrows.filter('.down').css('visibility', 'hidden');
                        }
                    }
                });
            });
            activeMonth = months.filter(':first').addClass('year-active').show();
            year.text(activeMonth.attr('id').replace(/[^0-9]*/, ''));
            arrows.filter('.up').css('visibility', 'hidden');
        });
    }
    $('#archives .ale-archives').init_archives();
	
	
	
	

	
});

// HTML5 Fallbacks for older browsers
jQuery(function($) {
    // check placeholder browser support
    if (!Modernizr.input.placeholder) {
        // set placeholder values
        $(this).find('[placeholder]').each(function() {
            $(this).val( $(this).attr('placeholder') );
        });
 
        // focus and blur of placeholders
        $('[placeholder]').focus(function() {
            if ($(this).val() == $(this).attr('placeholder')) {
                $(this).val('');
                $(this).removeClass('placeholder');
            }
        }).blur(function() {
            if ($(this).val() == '' || $(this).val() == $(this).attr('placeholder')) {
                $(this).val($(this).attr('placeholder'));
                $(this).addClass('placeholder');
            }
        });
 
        // remove placeholders on submit
        $('[placeholder]').closest('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                if ($(this).val() == $(this).attr('placeholder')) {
                    $(this).val('');
                }
            });
        });
    }
});

