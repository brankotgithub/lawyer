<?php

function lawyer_option_page() {
    add_menu_page(
            'Option Page', 
            'Lawyer Option', 
            'administrator', 
            'option_page', 
            'lawyer_contact_data', 
            'dashicons-id', 
            19);
    
}
add_action('admin_menu', 'lawyer_option_page');

function lawyer_contact_setings() {
    register_setting('lawyer_contact_data', 'lawyer_contact_title');
    register_setting('lawyer_contact_data', 'lawyer_address');
    register_setting('lawyer_contact_data', 'lawyer_phone');
    register_setting('lawyer_contact_data', 'lawyer_mobile_1');
    register_setting('lawyer_contact_data', 'lawyer_mobile2');
    register_setting('lawyer_contact_data', 'lawyer_email_1');
    register_setting('lawyer_contact_data', 'lawyer_email_2');
};
add_action('init', 'lawyer_contact_setings');

function lawyer_contact_data() {
    ?>

<h1>Lawyer contact data</h1>

<form method="post" action="options.php">
    <?php

    settings_fields('lawyer_contact_data');
    do_settings_sections('lawyer_contact_data')

?>
<table class="form-table">
    <tr><th>Info Section Title:</th>
        <td>
            <input type="text" name="lawyer_contact_title" value="<?php echo esc_attr(get_option('lawyer_contact_title')) ?>">
        </td>
    </tr>
    <tr>
        <th>Address:</th>
        <td>
            <input type="text" name="lawyer_address" value="<?php echo esc_attr(get_option('lawyer_address')) ?>">
        </td>
    </tr>
    <tr>
        <th>Phone:</th>
        <td>
            <input type="text" name="lawyer_phone" value="<?php echo esc_attr(get_option('lawyer_phone')) ?>">
        </td>
    </tr>
    <tr>
        <th>Mobile-1:</th>
        <td>
            <input type="text" name="lawyer_mobile_1" value="<?php echo esc_attr(get_option('lawyer_mobile_1')) ?>">
        </td>
    </tr>
    <tr>
        <th>Mobile-2:</th>
        <td>
            <input type="text" name="lawyer_mobile_2" value="<?php echo esc_attr(get_option('lawyer_mobile_2')) ?>">
        </td>
    </tr>
    <tr>
        <th>Email-1:</th>
        <td>
            <input type="text" name="lawyer_email_1" value="<?php echo esc_attr(get_option('lawyer_email_1')) ?>">
        </td>
    </tr>
    <tr>
        <th>Email-2:</th>
        <td>
            <input type="text" name="lawyer_email_2" value="<?php echo esc_attr(get_option('lawyer_email_2')) ?>">
        </td>
    </tr>
</table>
<?php
submit_button();
?>
    
</form>
<?php
}
?>