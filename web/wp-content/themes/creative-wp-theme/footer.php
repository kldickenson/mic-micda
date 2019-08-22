<?php
$theme = get_template_directory_uri();

$email    = get_theme_mod( 'creative_contact_email' );
$phone    = get_theme_mod( 'creative_contact_phone' );
$address  = get_theme_mod( 'creative_contact_address' );
$twitter  = get_theme_mod( 'creative_contact_twitter' );
$facebook = get_theme_mod( 'creative_contact_facebook' );
?>

<footer class="bg-michigan-blue py-16 text-white border-t-2 border-michigan-maize">
    <div class="contained md:flex justify-between">
        <div class="flex">
            <img class="mr-12" src="<?php echo $theme ?>/img/block-m.svg" alt="">

            <div>
                <p class="font-bold text-michigan-maize uppercase mb-2"><?php echo get_bloginfo( 'name' ); ?></p>

                <div class="flex">
                    <address class="mr-16">
						<?php echo $address; ?>
                    </address>

                    <div>
                        <div class="flex items-center mb-1">
                            <img class="mr-4" src="<?php echo $theme; ?>/img/email.svg" alt="" role="presentation">
                            <a class="text-white" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </div>

                        <div class="flex items-center">
                            <img class="mr-4" src="<?php echo $theme; ?>/img/phone.svg" alt="" role="presentation">
                            <a class="block text-white"
                               href="tel:<?php echo preg_replace( '/[^0-9]/', '', $phone ); ?>">
								<?php echo $phone; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-xs">
            <div class="flex justify-end mb-6">
                <a class="mr-4" href="<?php echo $twitter ?>">
                    <img src="<?php echo $theme; ?>/img/twitter.svg" alt="" role="presentation">
                </a>

                <a href="<?php echo $facebook ?>">
                    <img src="<?php echo $theme; ?>/img/facebook.svg" alt="" role="presentation">
                </a>
            </div>

            <div class="text-sm text-right">
                <p class="mb-2">
                    ©<?php echo date( 'Y', time() ) ?>
                    <a class="text-white underline" href="http://regents.umich.edu/">Regents of the University of
                        Michigan</a>
                </p>

                <p>Site produced by <a class="text-white underline" href="https://creative.umich.edu/">Michigan
                        Creative</a>, a unit of the Vice President for Communications</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>