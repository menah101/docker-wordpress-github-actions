<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bs2wooo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/template/vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/template/1.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/template/vendor/bootstrap.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/template/vendor/font-awesome.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/template/1.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
	$logo = get_theme_mod('custom_logo');
	$logo_up_len = wp_get_attachment_image_src($logo, 'full');
?>

<?php wp_body_open(); ?>
<div class="thanhcc text-xs-center text-sm-left">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <a href="#" class="cctop">
              <i class="fa fa-sign-in"></i>
              Register
            </a>
            <a href="#" class="cctop"> My Account </a>
            <a href="#" class="cctop">
              <i class="fa fa-shopping-cart"></i>
              5 items
            </a>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-right text-xs-center text-sm-left">
              <input
                type="text"
                class="form-control tim"
                placeholder="Tìm kiếm"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- HẾT THANH CÔNG CỤ -->

    <div class="menutop">
      <nav class="navbar navbar-light">
        <button
          class="navbar-toggler hidden-lg-up"
          type="button"
          data-toggle="collapse"
          data-target="#exCollapsingNavbar2"
        ></button>
        <div class="collapse navbar-toggleable-md" id="exCollapsingNavbar2">
          <a class="navbar-brand" href="#"
            ><img src="<?php echo $logo_up_len[0]; ?>" alt="LOGO Project 1"
          /></a>

					<?php 
						wp_nav_menu(array('menu_class' => 'nav navbar-nav'));
					?>

          
        </div>
      </nav>
    </div>
    <!-- END MENUTOP -->
	
