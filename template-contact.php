<?php 
/**
 * Template Name: Template Contact 1
 */
// send contact
if (isset($_POST['contact'])) {
	$error = ale_send_contact($_POST['contact']);
}
get_header();
?>
<section class="singleblog cf">
    <div class="blogpostsgrid">
        <div class="content wrapper cf">
            <div class="contacttop cf">
                <div class="leftpart">
                    <?php echo ale_get_meta('gomap'); ?>
                </div>
                <div class="rightpart">
                    <div class="title">
                        <h2><?php _e('Get in touch with us','aletheme'); ?></h2>
                    </div>
                    <div class="formbox cf">
                        <form method="post" action="<?php the_permalink();?>">
                            <?php if (isset($_GET['success'])) : ?>
                            <p class="success"><?php _e('Your email was sent successfully. Thank you for your message!', 'aletheme')?></p>
                            <?php endif; ?>
                            <?php if (isset($error) && isset($error['msg'])) : ?>
                            <p class="error"><?php echo $error['msg']?></p>
                            <?php endif; ?>
                            <div class="ta nametwo">
                                <input type="text" placeholder="<?php _e('Name', 'aletheme')?>" name="contact[name]" value="<?php echo isset($_POST['contact']['name']) ? $_POST['contact']['name'] : ''?>" required="required" id="contact-form-name" />
                            </div>
                            <div class="ta emailtwo">
                                <input type="email" placeholder="<?php _e('Email', 'aletheme')?>" name="contact[email]" value="<?php echo isset($_POST['contact']['email']) ? $_POST['contact']['email'] : ''?>" required="required" id="contact-form-email" />
                            </div>
                            <div class="ta phone">
                                <input type="text" placeholder="<?php _e('Phone', 'aletheme')?>" name="contact[phone]" value="<?php echo isset($_POST['contact']['phone']) ? $_POST['contact']['phone'] : ''?>" required="required" id="contact-form-phone" />
                            </div>
                            <div class="commenttextarea">
                                <textarea name="contact[message]" placeholder="<?php _e('Message', 'aletheme')?>" id="contact-form-message" cols="40" rows="5" required="required"><?php echo isset($_POST['contact']['message']) ? $_POST['contact']['message'] : ''?></textarea>
                            </div>
                            <div class="buttoncomment">
                                <input type="submit" class="submit" value="<?php _e('Send', 'aletheme')?>" />
                                <input name="reset" class="reset" type="reset" tabindex="5" value="<?php _e('Clear', 'aletheme')?>" />
                            </div>
                            <?php wp_nonce_field() ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="fromblog welcome cf">
            <div class="contactbottomtext wrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="weltitle headerfont">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="weldesc">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </section>
    </div>

</section>
<?php get_footer(); ?>