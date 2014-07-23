jQuery(document).ready(function($) {

	// The number of the next page to load (/page/x/).
	var pageNum = parseInt(pbd_alp.startPage)+1;

	
	// The maximum number of pages the current query can return.
	var max = parseInt(pbd_alp.maxPages);
	
	// The link of the next page of posts.
	var nextLink = pbd_alp.nextLink;
	
	/**
	 * Replace the traditional navigation with our own,
	 * but only if there is at least one page of new posts to load.
	 */
	if(pageNum <= max) {
		// Insert the "More Posts" link.
		$('#post')
			.append('<div style="clear:both;" class="isogrid pbd-alp-placeholder-'+ pageNum +'"></div>')
			.append('<div class="viewmoreposts" id="pbd-alp-load-posts"><a href="#" class="button">Load More</a></div>');

		// Remove the traditional navigation.
		$('.navigation').remove();
	}

	/**
	 * Load new posts when the link is clicked.
	 */
	$('#pbd-alp-load-posts a').live('click',function() {
	
		// Are there more posts to load?
		if(pageNum <= max) {
		
			// Show that we're working.
			$(this).text('Loading posts...');

            $('.pbd-alp-placeholder-'+ pageNum).load(nextLink + ' .post',
                    function() {

                        // Update page number and nextLink.
                        pageNum++;
                        nextLink = nextLink.replace(/\/page\/[0-9]*/, '/page/'+ pageNum);

                        // Add a new placeholder, for when user clicks again.
                        $('#pbd-alp-load-posts')
                        	.before('<div style="clear:both;" class="isogrid pbd-alp-placeholder-'+ pageNum +'"></div>')

                        // Update the button message.
                        if(pageNum <= max) {
                            $('#pbd-alp-load-posts a').text('Load More');
                        } else {
                            $('#pbd-alp-load-posts a').text('No more to load.');
                        }

                        if (jQuery.isFunction(jQuery.fn.isotope)) {

                            var curnumpage = pageNum-1;
                            // initialize Isotope
                            $('.pbd-alp-placeholder-'+ curnumpage).isotope({
                                itemSelector : 'article.post'
                            });
                            $(window).smartresize(function(){
                                $('.pbd-alp-placeholder-'+ curnumpage).isotope({
                                    itemSelector : 'article.post'
                                });
                            });
                        }
                        $('.postslider').flexslider({animation:"slide"});
                        $("html").getNiceScroll().resize();

                    }

			);
		}
		return false;
	});
});