<?php
/**
 * Refine get instant quote
 *
 * @package Refine
 * @since 1.1
 */
?>
<div class="get-instant_quote col-sm-12">
    <h3><?php echo $heading; ?></h3>
    <form id="get-instant-quote" class="get-instant-quote-<?php echo Refine_Helpers::get_page_id(); ?> <?php echo $class; ?>" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post" enctype="multipart/form-data" >
        <input type="hidden" name="page_id" value="<?php echo Refine_Helpers::get_page_id(); ?>">
        <input type="hidden" name="action" value="get_instant_quote_hanlder">
        <input type="hidden" name="form_type" value="default">
        <input type="hidden" name="url" value="<?php echo 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />

        <div class="form-group">
            <!-- <label for="name">Name</label> -->
            <input type="text" name="first_name" id="first_name" placeholder="First name" class="form-control" required="required">
            <input type="text" name="last_name" id="last_name" placeholder="Last name" class="form-control" required="required">
            <input type="hidden" name="name" id="name" placeholder="Your name" class="form-control" required="required" value="deprecated, will be removed in next release">
        </div>

        <div class="form-group">
            <!-- <label for="email">Email</label> -->
            <input type="email" name="email" id="email" placeholder="Your email" class="form-control validate-email" required="required">
        </div>

        <div class="form-group">
            <!-- <label for="phone">Phone</label> -->
            <input type="tel" name="phone" id="phone" placeholder="Your phone" class="form-control validate-phone" required="required">
        </div>

        <div class="form-group">
            <!-- <label for="product-id">Product For</label> -->
            <select name="product_id" id="product_id" required="required" class="form-control select2" required="required">
                <option value="">Select Box Type</option>
                <?php foreach ($products_array as $id => $title): ?>
                    <option value="<?php echo $id ?>" <?php selected( Refine_Helpers::get_page_id(), $id, true); ?> ><?php echo $title ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group">
            <!-- <label for="phone">Phone</label> -->
            <textarea class="form-control" name="message" placeholder="Let us know what you need! Box dimensions, number of boxes you need, design – we can help."></textarea>
        </div>

        <div class="form-group">
			
            <button class="form-control btn submit" ><?php echo $btn_text; ?></button>

        </div>

    </form>

</div>
