<nav class="navbar navbar-default navbar-fixed-top nav">
  <div class="container-fluid">
    <div class="navbar-header" id="header-top">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-top" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mym-fin-7.png"/>
      </a>
    </div>
	<div class="collapse navbar-collapse" id="nav-top">
        <ul id="menu-top" class="nav navbar-nav navbar-right">
            <?php get_search_form();?>
            <li id="love">
                <a title="Cart" href="http://localhost/maintainyourmane/cart/">
                    <div class="icon-container">
                        <i class="fa fa-shopping-bag"></i>
                    </div>
                </a>
            </li>

            <li id="shopping-bag">
                <a title="My Account" href="http://localhost/maintainyourmane/my-account/">
                    <div class="icon-container">
                        <i class="fa fa-user"></i>
                    </div>
                </a>
            </li>
        </ul>
	</div>
  </div>
    <div class="collapse navbar-collapse clearfix" id="nav-bottom">
        <?php
        wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
    </div>

</nav>



