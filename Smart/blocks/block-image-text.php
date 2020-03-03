
    <div class="block-image-text <?php block_field( 'position' ); ?>" style="margin-bottom: <?php block_field( 'margin-bottom' ); ?>px;<?php if ( block_value( 'border-bottom' ) ) { echo "border-bottom: 1px solid #ededed; padding-bottom: 20px;"; } ?>">
        <div class="image">
            <img src="<?php block_field( 'image' ); ?>" alt="">
        </div>
        <div class="text">
            <div>
                <h4><?php block_field( 'title' ); ?></h4>
                <p><?php block_field( 'description' ); ?></p>
            </div>
        </div>
    </div>

