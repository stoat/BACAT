<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Arrghy</title>
<link rel="stylesheet" type="text/css" href="assets/css/basic.css" title="default" />

<link rel="stylesheet" type="text/css" href="assets/css/galleriffic-5.css" title="default" />

<link rel="stylesheet" type="text/css" href="assets/css/black.css" title="default" />
 <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/jquery.galleriffic.js"></script>

    <!-- Optionally include jquery.history.js for history support -->
    <script type="text/javascript" src="assets/js/jquery.history.js"></script>
    <script type="text/javascript" src="assets/js/jquery.opacityrollover.js"></script>

</head>

<body>
<div id="page">
    <div id="container">
        <h1><a href="index.html">Gallery</a></h1>
            <!-- Start Advanced Gallery Html Containers -->
            <div class="navigation-container">
            <div id="thumbs" class="navigation">
            <a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>

                <ul class="thumbs noscript">
                    <li>
                        <a class="thumb" name="optionalCustomIdentifier" href="assets/images/kairos1.jpg" title="your image title">
                            <img src="assets/imagethumbs/kairos1.jpg" alt="your image title again for graceful degradation" />
                        </a>
                        <div class="caption">
                            (one)
                        </div>
                    </li>
                    <li>
                        <a class="thumb" name="optionalCustomIdentifier" href="assets/images/kairos2.jpg" title="your image title">
                            <img src="assets/imagethumbs/kairos2.jpg" alt="your image title again for graceful degradation" />
                        </a>
                        <div class="caption">
                            (two)
                        </div>
                    </li>        <li>
                        <a class="thumb" name="optionalCustomIdentifier" href="assets/images/kairos3.jpg" title="your image title">
                            <img src="assets/imagethumbs/kairos3.jpg" alt="your image title again for graceful degradation" />
                        </a>
                        <div class="caption">
                            (three)
                        </div>
                    </li>
                     <li>
                        <a class="thumb" name="optionalCustomIdentifier" href="assets/images/kairos4.jpg" title="your image title">
                            <img src="assets/imagethumbs/kairos4.jpg" alt="your image title again for graceful degradation" />
                        </a>
                        <div class="caption">
                            (three)
                        </div>
                    </li>

                </ul>
                <a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
                </div>
                </div>
                <div class="content">
                        <div class="slideshow-container">
                                <div id="controls" class="controls"></div>
                                <div id="loading" class="loader"></div>
                                <div id="slideshow" class="slideshow"></div>
                        </div>
                        <div id="caption" class="caption-container">

                                <div class="photo-index"></div>
                        </div>
                </div>
                <!-- End Gallery Html Containers -->
                <div style="clear: both;"></div>

    </div>
</div>
    		<script type="text/javascript">
		jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.content').css('display', 'block');
    $('div.navigation').css({'width' : '600px', 'float' : 'left'});
  //  $('div.content').css('display', 'block');
				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li, div.navigation a.pageLink').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});

				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 10,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         false,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              'Play Slideshow',
					pauseLinkText:             'Pause Slideshow',
					prevLinkText:              '&lsaquo; Previous Photo',
					nextLinkText:              'Next Photo &rsaquo;',
					nextPageLinkText:          'Next &rsaquo;',
					prevPageLinkText:          '&lsaquo; Prev',
					enableHistory:             true,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);

						// Update the photo index display
						this.$captionContainer.find('div.photo-index')
							.html('Photo '+ (nextIndex+1) +' of '+ this.data.length);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
						var nextPageLink = this.find('a.next').css('visibility', 'hidden');

						// Show appropriate next / prev page links
						if (this.displayedPage > 0)
							prevPageLink.css('visibility', 'visible');

						var lastPage = this.getNumPages() - 1;
						if (this.displayedPage < lastPage)
							nextPageLink.css('visibility', 'visible');

						this.fadeTo('fast', 1.0);
					}
				});

				/**************** Event handlers for custom next / prev page links **********************/

				gallery.find('a.prev').click(function(e) {
					gallery.previousPage();
					e.preventDefault();
				});

				gallery.find('a.next').click(function(e) {
					gallery.nextPage();
					e.preventDefault();
				});

				/****************************************************************************************/

				/**** Functions to support integration of galleriffic with the jquery.history plugin ****/

				// PageLoad function
				// This function is called when:
				// 1. after calling $.historyInit();
				// 2. after calling $.historyLoad();
				// 3. after pushing "Go Back" button of a browser
				function pageload(hash) {
					// alert("pageload: " + hash);
					// hash doesn't contain the first # character.
					if(hash) {
						$.galleriffic.gotoImage(hash);
					} else {
						gallery.gotoIndex(0);
					}
				}

				// Initialize history plugin.
				// The callback is called at once by present location.hash.
				$.historyInit(pageload, "advanced.html");

				// set onlick event for buttons using the jQuery 1.3 live method
				$("a[rel='history']").live('click', function(e) {
					if (e.button != 0) return true;

					var hash = this.href;
					hash = hash.replace(/^.*#/, '');

					// moves to a new page.
					// pageload is called at once.
					// hash don't contain "#", "?"
					$.historyLoad(hash);

					return false;
				});

				/****************************************************************************************/
			});

		</script>

</body>
</html>