<?php
    add_action( 'admin_init', 'theme_options_init' );
    add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
    register_setting( 'smart_options', 'smart_theme_options');
}

function theme_options_add_page() {
    // add_menu_page( __( 'Основные настройки', 'WP-Unique' ), __( 'Основные настройки', 'WP-Unique' ), 'edit_theme_options', 'smart_options', 'theme_options_do_page', 'dashicons-editor-kitchensink', 4 );
    add_theme_page( __( 'Настройки Темы', 'WP-Unique' ), __( 'Настройки Темы', 'WP-Unique' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
function theme_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
    // here we adding our custom meta box
?>

<div class="wrap">
<?php screen_icon(); echo "<h2>". __( 'Основные настройки сайта', 'WP-Unique' ) . "</h2>"; ?>

    <?php if (!empty($notice)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>

<!--

<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div id="message" class="updated">
<p><strong><?php _e( 'Настройки сохранены', 'WP-Unique' ); ?></strong></p>
</div>
<?php endif; ?>
-->
</div>
 <div class="wrap">
<form method="post" action="options.php" id="form">
<?php settings_fields( 'smart_options' ); ?>
<?php $options = get_option( 'smart_theme_options' ); ?>


        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <div id="post-body-content">


<div class="postbox">
<div class="inside">


<h2 class="title" style="display: none;">Настройка всплывающей модалки:</h2>



<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
<tr style="display: none;">
    <th scope="row">Включить модальное окно мероприятия</th>
        <td>
            <fieldset>
            <legend class="screen-reader-text"><span>Активировать модальное окно</span></legend>
                <label for="blog_public"><input name="smart_theme_options[ativate_event_modal]" type="checkbox" id="smart_theme_options[ativate_event_modal]" value="0">
                Включить всплывающее модальное окно мероприятия</label>
                <p class="description">Будет ли всплывать модальное окно у посетителей сайта</p>
            </fieldset>
        </td>
</tr>

<tr class="form-field" style="border-bottom: 1px solid #f1f1f1; display: none;">
        <th valign="top" scope="row">
            <label>Контентная часть:</label>
        </th>
        <td>
            <textarea name="smart_theme_options[event_modal_code]" id="smart_theme_options[event_modal_code]" class="large-text code" rows="8" placeholder="Здесь код модалки"><?php echo $options[event_modal_code];?></textarea>
        </td>
    </tr>
</table>





<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
    <tbody>

    <tr class="form-field">
        <th valign="top" scope="row">
            <label>Google Pixel</label>
        </th>
        <td>
            <textarea name="smart_theme_options[fb_pixel]" id="smart_theme_options[fb_pixel]" class="large-text code" rows="3" placeholder="Вставьте код Facebook pixel"><?php echo $options[fb_pixel];?></textarea>
        </td>
    </tr>

    <tr class="form-field">
        <th valign="top" scope="row">
            <label>Google Tag Manager</label>
        </th>
        <td>
            <textarea name="smart_theme_options[gtm_code]" id="smart_theme_options[gtm_code]" class="large-text code" rows="7" placeholder="Вставьте код Google Tag Manager"><?php echo $options[gtm_code];?></textarea>
        </td>
    </tr>

    <tr class="form-field">
        <th valign="top" scope="row">
            <label>Google Tag Manager (noscript)</label>
        </th>
        <td>
            <textarea name="smart_theme_options[gtm_code_n]" id="smart_theme_options[gtm_code_n]" class="large-text code" rows="4" placeholder="Вставьте код Google Tag Manager (noscript)"><?php echo $options[gtm_code_n];?></textarea>
        </td>
    </tr>

    <tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
        <th valign="top" scope="row">
            <label>Код Binotel</label>
        </th>
        <td>
            <textarea name="smart_theme_options[binotel_code]" id="smart_theme_options[binotel_code]" class="large-text code" rows="8" placeholder="Вставьте код Binotel"><?php echo $options[binotel_code];?></textarea>
        </td>
    </tr>

    </tbody>
    </table>
    </div>
    </div>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Сохранить изменения"></p>


                </div>
            </div>
        </div>



</form>
 </div>
<?php
}
?>
