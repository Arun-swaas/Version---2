<?php if ( ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Mobile/' ) !== false ) && ( strpos ( $_SERVER['HTTP_USER_AGENT'], 'Safari/' ) == false ) ) {

} else if ($_SERVER['HTTP_X_REQUESTED_WITH'] == "net.swaas.hidoctorapp") {

} else { ?>

    <footer class="content-info">

        <div class="container widget-wrap">

            <?php dynamic_sidebar('sidebar-footer'); ?>

        </div>

        <div class="container copyrights">

            <div class="row">

                <div class="col-md-6">
                    Copyrights &copy; <?php echo get_bloginfo('name') . ' ' . date('Y'); ?>
                </div>

                <div class="col-md-6">
                    <?php if (has_nav_menu('footer_navigation')) :
                        wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-nav clearfix']);
                    endif; ?>
                </div>

            </div>

        </div>

    </footer>

    <div class="search-wrap">

        <div class="overlay"></div>


        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">

            <div class="searchform-wrap">

                <span>What do you need help with?</span>

                <div class="search-bg clearfix">
                    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search-text" placeholder="Search" />
                    <input type="submit" id="searchsubmit" value="Search" class="search-submit" />
                </div>

            </div>

        </form>

    </div>

<?php } ?>

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s1">

    <?php $catID = get_cat_ID('Speciality'); ?>

    <div class="slide-head clearfix">

        <h3>Select the Speciality</h3>

        <span class="spe-close"></span>

    </div>

    <ul>
    <?php $categories = get_categories(array('child_of' => $catID,));

    foreach ($categories as $category) {

        echo '<li><a href="' . add_query_arg( array("cat" => $category->term_id), get_category_link( $category->term_id ) ) . '">';
        echo $category->cat_name;
        echo ' ('.$category->category_count.')';
        echo '</a></li>';
    } ?>

    </ul>

</nav>

<div id="slidebox" class="hidden-xs hidden-sm">
    <a class="close"></a>
    <div id="mc_embed_signup">
        <form action="//doctorbond.us12.list-manage.com/subscribe/post?u=cd0338e91488aa5537ecddf77&amp;id=706e0f9438" method="post"                  id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
            <h2>Subscribe to our mailing list</h2>
                <div class="form-group mc-field-group">
                    <label for="mce-EMAIL">Email address<span class="asterisk"> *</span></label>
                    <input type="email" value="" class="form-control required email" id="mce-EMAIL" name="EMAIL">
                </div>
                <div class="form-group mc-field-group">
                    <label for="mce-FNAME">Name<span class="asterisk"> *</span></label>
                    <input type="text" value="" class="form-control required" id="mce-FNAME" name="FNAME">
                </div>
                <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cd0338e91488aa5537ecddf77_706e0f9438" tabindex="-1" value="">
                </div>
                <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary button">SUBSCRIBE</button>
            </div>
        </form>
    </div>
</div>
