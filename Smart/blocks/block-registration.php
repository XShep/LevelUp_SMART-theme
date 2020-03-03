<div class="post-form-block new-reg-block  <?php block_field( 'color-scheme' ); ?>" style="margin-bottom: <?php block_field( 'margin-bottom' ); ?>px" id="open-reg">
	<div id="google">
	<div id="fb">
	<div id="mail">

	<div class="content">
		<div class="post-form-title"><?php block_field( 'title' ); ?></div>
				<div class="post-form-reg">
					<div class="reg-icon">
						<div><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="31.979px" height="31.979px" viewBox="0 0 31.979 31.979" style="enable-background:new 0 0 31.979 31.979;"
							 xml:space="preserve">
						<g>
							<g>
								<path d="M21.945,6.06V5.359c0-0.796-0.646-1.441-1.441-1.441h-2.365c0.197-0.356,0.309-0.797,0.309-1.245
									C18.447,1.2,17.249,0,15.777,0c-1.472,0-2.669,1.2-2.669,2.673c0,0.448,0.112,0.889,0.309,1.245h-1.94
									c-0.796,0-1.441,0.645-1.441,1.441V6.06H6.822c-1.207,0-2.185,0.979-2.185,2.186v21.546c0,1.207,0.978,2.187,2.185,2.187h18.334
									c1.207,0,2.186-0.979,2.186-2.187V8.246c0-1.207-0.979-2.186-2.186-2.186H21.945z M14.187,2.674c0-0.878,0.713-1.594,1.589-1.594
									c0.878,0,1.591,0.716,1.591,1.594c0,0.502-0.234,0.933-0.6,1.245h-1.981C14.421,3.606,14.187,3.176,14.187,2.674z M25.156,28.492
									c0,0.742-0.602,1.344-1.344,1.344H8.166c-0.742,0-1.344-0.602-1.344-1.344V9.59c0-0.743,0.602-1.344,1.344-1.344h1.868
									c0,0.591,0.479,1.071,1.07,1.071h9.769c0.592,0,1.07-0.479,1.07-1.071h1.869c0.741,0,1.344,0.602,1.344,1.344V28.492
									L25.156,28.492z"/>
								<circle cx="10.852" cy="13.098" r="1.899"/>
								<path d="M21.656,12.038H15.18c-0.596,0-1.08,0.475-1.08,1.071c0,0.596,0.483,1.071,1.08,1.071h6.478
									c0.596,0,1.078-0.475,1.078-1.071C22.736,12.513,22.253,12.038,21.656,12.038z"/>
								<circle cx="10.852" cy="18.485" r="1.899"/>
								<path d="M21.656,17.391H15.18c-0.596,0-1.08,0.498-1.08,1.094s0.483,1.092,1.08,1.092h6.478c0.596,0,1.078-0.496,1.078-1.092
									S22.253,17.391,21.656,17.391z"/>
								<circle cx="10.852" cy="24.242" r="1.898"/>
								<path d="M21.656,23.145H15.18c-0.596,0-1.08,0.498-1.08,1.094s0.483,1.092,1.08,1.092h6.478c0.596,0,1.078-0.497,1.078-1.092
									C22.736,23.643,22.253,23.145,21.656,23.145z"/>
							</g>
						</g>
						</svg></div>
					</div>
					<div class="post-tel-reg">
						<p class="post-tel-reg-title"><?php block_field( 'phones-title' ); ?></p>
						<p class="post-tel-reg-phone"><a href="tel:<?php block_field( 'phone-1' ); ?>"><?php block_field( 'phone-1' ); ?></a></p>
						<p class="post-tel-reg-phone"><a class="binct-phone-number-1" href="tel:<?php block_field( 'phone-2' ); ?>"><?php block_field( 'phone-2' ); ?></a></p>
					</div>
					<div class="post-btn-reg btn-blue">
						<p class="post-btn-reg-title"><?php block_field( 'form-title' ); ?></p>
						<div class="classic-btn"><a href="#" data-toggle="modal" class="sg-show-popup" data-target="#<?php block_field( 'id-modal' ); ?>"><?php block_field( 'text-btn' ); ?></a></div>


					</div>
				</div>
				<div class="bottom-post-form-text"><?php block_field( 'end-text' ); ?></div>
	</div>

	</div>
	</div>
	</div>
    <div class="event_mail hidden"><?php block_field( 'cf-mail' ); ?></div>
	<div class="liqpay hidden"><?php block_field( 'liqpay' ); ?></div>
</div>















<!-- Модалка -->
<div class="modal fade" id="<?php block_field( 'id-modal' ); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title reviews_name" id="exampleModalCenterTitle"><?php block_field( 'title-modal' ); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

			</div>
			<div class="modal-body sg-popup-content">

            <?php
                if ( block_value( 'contact-form' ) == 'free' ) {
                    echo do_shortcode('[cf7form cf7key="registraciya-na-besplatnoe-meripriyatie"]');
                } elseif ( block_value( 'contact-form' ) == 'not_free' ) {
                    echo do_shortcode('[cf7form cf7key="registraciya-na-platnoe-meropriyatie"]');
                }
            ?>

            </div>
		</div>
	</div>
</div>
