<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Smart
 * @since SMART 1.0
 */
$options = get_option( 'smart_theme_options' );
$options_modal = get_option( 'event_modal_options' );

?>

</div><!-- .site-content -->
<?php if(!is_front_page()): ?>
<section id="home_map">
	<div class="container">
		<div class="content">
			<div class="locations">
				<div>
					<div class="loc-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/location.svg" alt=""></div>
					<div>
						<h5><span><strong>Центр:</strong></span><br/>ул. Троицкая, 21Г, ТСК «Новый металлург», 3 эт.</h5>
						<p><a href="tel:+380663330523"><strong>(066) 333 05 23</strong></a></p>
						<p><a href="tel:+380678072101"><strong>(067) 807 21 01</strong></a></p>
					</div>
				</div>
				<div>
					<div class="loc-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/location.svg" alt=""></div>
					<div>
						<h5><span><strong>Тополь:</strong></span><br/>ул. Запорожское шоссе 53Б</h5>
						<p><a href="tel:+380682116050"><strong>(068) 211 60 50</strong></a></p>
						<p><a href="tel:+380957087876"><strong>(095) 708 78 76</strong></a></p>
					</div>
				</div>
				<div>
					<div class="loc-icon"><img src="https://uaitsmart.com/wp-content/uploads/2020/01/location.svg" alt=""></div>
					<div>
						<h5><span><strong>Левый берег:</strong></span><br/>пр. Слобожанский, 50</h5>
						<p><a href="tel:+380950087878"><strong>(095) 008 78 78</strong></a></p>
						<p><a href="tel:+380674345993"><strong>(067) 434 59 93</strong></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<footer id="footer" class="smart-footer">
	<div class="container">
        <div class="content">
            <div class="copr">
                <div class="copyright">
                    <div>
                        <img src="https://uaitsmart.com/wp-content/uploads/2020/01/foot_logo-1.svg" alt=""><span><strong>IT-школа<br>СМАРТ</strong>™ 2020</span>
                    </div>
                </div>
            </div>
            <div class="location-center">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-1'); ?>
            </div>
            <div class="location-topol">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-2'); ?>
            </div>
            <div class="smart-phones">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-3'); ?>
            </div>
            <div class="smart-prof">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-4'); ?>
            </div>
            <div class="smart-socials">
                <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('footer-5'); ?>
            </div>
            <div class="team-343">
                <p><?php pll_e('smart_copyright','Smart'); ?></p>
            </div>
        </div>
	</div>
</footer>



<!-- Модалка -->
<div class="modal fade" id="show-map" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 900px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title reviews_name" id="exampleModalCenterTitle"><?php pll_e('smart_location','Smart'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

            </div>
            <div class="modal-body sg-popup-content">



<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-center-tab" data-toggle="tab" href="#nav-center" role="tab" aria-controls="nav-center" aria-selected="true"><?php pll_e('smart_location_center','Smart'); ?><span><?php pll_e('location_center','Smart'); ?>,</span></a>
    <a class="nav-item nav-link" id="nav-topol-tab" data-toggle="tab" href="#nav-topol" role="tab" aria-controls="nav-topol" aria-selected="false"><?php pll_e('smart_location_topol','Smart'); ?><span><?php pll_e('location_topol','Smart'); ?>,</span></a>
    <a class="nav-item nav-link" id="nav-lb-tab" data-toggle="tab" href="#nav-smart-lb" role="tab" aria-controls="nav-lb" aria-selected="false"><?php pll_e('smart_location_lb','Smart'); ?><span><?php pll_e('location_lb','Smart'); ?>,</span></a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-center" role="tabpanel" aria-labelledby="nav-center-tab">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84669.11120484034!2d34.970164663863436!3d48.4582616098831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2dfeed022d9%3A0x1a47723d33ec30f5!2zSVQt0YjQutC-0LvQsCDQodCc0JDQoNCi!5e0!3m2!1sru!2sua!4v1558526400009!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
  <div class="tab-pane fade" id="nav-topol" role="tabpanel" aria-labelledby="nav-topol-tab">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42360.97936547004!2d35.00574892878939!3d48.426567787257184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbfb5b40d7fd53%3A0xa4d0f875d33ea3c0!2zSVQt0YjQutC-0LvQsCDQodCc0JDQoNCi!5e0!3m2!1sru!2sua!4v1558526433965!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
  <div class="tab-pane fade" id="nav-smart-lb" role="tabpanel" aria-labelledby="nav-lb-tab">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.371323820912!2d35.07642716267161!3d48.50586495723334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d95861402ee3a1%3A0x851201e694fa77cc!2z0L_RgNC-0YHQv9C10LrRgiDQodC70L7QsdC-0LbQsNC90YHQutC40LksIDUwLCDQlNC90LjQv9GA0L4sINCU0L3QtdC_0YDQvtC_0LXRgtGA0L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA0OTAwMA!5e0!3m2!1sru!2sua!4v1582140233884!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>
</div>




            </div>
        </div>
    </div>
</div>



</div><!-- .site -->
<div class="search-open-bg"></div>
<div id="search-modal" class="search-open open-full">
    <div class="btnClose"></div>
    <div class="close-search"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></div>
    <div class="modalClose"></div>
    <div class="search-modal-inner">
        <p class="text-center"><?php pll_e('Placeholder_search','Smart'); ?></p>

    <div class="container search">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    </div>
    </div>
</div>



<!-- Модальное окно мероприятия -->
<!-- <div class="event_modal">
    <div class="cont">
        <div><img src="https://uaitsmart.com/wp-content/uploads/2019/11/smart_discont.png" alt="Запрошуємо на пробне заняття!"></div>
        <div class="content">
            <h4>Оставьте заявку!</h4>
            <p>Мы свяжемся с вами и поможем подобрать направление для вашего ребенка!</p>
            <div class="date-block" style="display: none;">
                <div><strong>28 вересня о 12:00</strong> вул. Троїцька, 21Г</div>
                <div><strong>29 вересня о 12:00</strong> вул. Запорізьке шосе, 53Б</div>
                <div>Ми зв'яжемося і допоможемо обрати зручний для вас час.</div>
                <div class="date-icon"><img src="/wp-content/uploads/2019/07/event-date-and-time-symbol.svg" alt=""></div>
            </div>
            <div class="feed-form">
                <?php echo do_shortcode('[contact-form-7 id="8615" title="Мастер-классы - СМАРТ_rus"]'); ?>
            </div>
        </div>
    </div>

    <div id="setCookie" class="close-icon-new">
        <img src="/wp-content/uploads/2019/07/cancel.svg" alt="">
    </div>
</div>
<div class="event_modal-bg"></div>
<div class="event-modal-btn"></div> -->
<!-- Модальное окно мероприятия -->

<!-- Modal -->
<div class="modal fade" id="mySmartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog smart-modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body smart-modal-body">
       <button type="button" class="close close-smart-video" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- 16:9 aspect ratio -->
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="smart-video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
      </div>
    </div>
  </div>
</div>




<?php if ( $options_modal['ativate_event_modal'] == 1) { ?>
<!-- Модальное окно мероприятия -->
<div class="event_modal <?php echo $options_modal['modal_delay']; ?>" style="background: url(<?php echo $options_modal['background_url'];?>) center no-repeat; background-size: cover;">
	<div class="cont">
		<div><img src="<?php echo $options_modal['image_url'];?>" alt=""></div>
		<div class="content">
            <h4><?php echo $options_modal['event_modal_title']; ?></h4>
            <?php if ( $options_modal['ativate_event_date_modal'] == 1) { ?>
			<div class="date-block">
				<div><strong><?php echo $options_modal['event_date']; ?></strong><?php echo $options_modal['event_location']; ?></div>
				<div class="date-icon"><img src="https://uaitsmart.com/wp-content/uploads/2019/07/event-date-and-time-symbol.svg" alt=""></div>
            </div>
            <?php } ?>
			<div class="feed-form">
				<?php echo do_shortcode( wp_unslash($options_modal['contact_form']) ); ?>
			</div>
		</div>
	</div>

	<div id="setCookie" class="close-icon">
		<img src="https://uaitsmart.com/wp-content/uploads/2019/07/cancel.svg" alt="">
	</div>
</div>
<div class="event_modal-bg"></div>
<style>
    .event_modal .cont>div>div.feed-form .form input[type=submit] { background: <?php echo $options_modal['button_color']; ?> !important; }
    .event_modal .cont>div.content a { color: <?php echo $options_modal['link_color']; ?> !important; }
    .event_modal .cont > div > div.feed-form .form .ajax-loader { background-color: <?php echo $options_modal['link_color']; ?> !important; }
    <?php echo $options_modal['modal_styles']; ?>
</style>
<script>
jQuery(document).ready(function(){
    jQuery(".event_modal .close-icon").click(function () {
    jQuery.cookie("popup-event", "", { expires:1, path: '/' });

            jQuery('.event_modal').removeClass("open");
            setTimeout(function(){
                 jQuery('.event_modal').hide();
            }, 100);
            jQuery('.event_modal-bg').removeClass("open");
            jQuery('.event_modal-bg').css({display: 'none'});

    });

    if ( jQuery.cookie("popup-event") == null )
    {
    setTimeout(function(){

            jQuery('.event_modal').show();
            setTimeout(function(){
                 jQuery('.event_modal').addClass("open");
            }, 200);
            jQuery('.event_modal-bg').fadeIn().addClass("open").css({display: 'block'});

    }, <?php echo $options_modal['modal_delay'] = $options_modal['modal_delay'] * 1000; ?>)
    }
    else {
      jQuery(".event_modal").hide();
    }
});
</script>
<!-- Модальное окно мероприятия -->
<?php } ?>







    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.appear.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.paroller.min.js"></script>
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollMagic.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/debug.addIndicators.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.maskedinput.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/share_bar.js"></script>


    <script src="<?php echo get_template_directory_uri(); ?>/js/scripts_new.js"></script>
    <script>
        jQuery('#share-bar').share();
    </script>
    <div class="event_img-input" style="display:none">[text text-744 id:event_img]</div>
    <div class="link_liqpay-input" style="display:none">[text text-745 id:link_liqpay]</div>
    <div class="price-input" style="display:none">[text text-746 id:event_price]</div>
    <div class="date-input" style="display:none">[text text-747 id:event_date]</div>

    <!-- Binotel -->
    <?php echo $options['binotel_code'];?>
    <!-- End Binotel -->

</body>
</html>
