<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<header id="header" class="header" role="header">
    <div class="bg-dark text-white"><div class="container"><div class="float-right"><span class="mr-5"><b>Email:</b>info@consultplus.com</span><span class="ml-5"><b>Phone:</b>+91 5685 6664 555</span> </div></div></div>
  <div class="container">

      <?php print render($page['main_header']); ?>
    <nav class=" navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php if ($site_name || $logo): ?>
          <a href="<?php print $front_page; ?>" class="navbar-brand" rel="home" title="<?php print t('Home'); ?>">
            <?php if ($logo): ?>
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo" />
            <?php endif; ?>
            <?php if ($site_name): ?>
              <span class="site-name"><?php print $site_name; ?></span>
            <?php endif; ?>
          </a>
        <?php endif; ?>
      </div> <!-- /.navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="float-right  collapse navbar-collapse" id="navbar-collapse">
        <?php if ($main_menu): ?>
          <ul id="main-menu" class="menu flex-row nav navbar-nav">
            <?php print render($main_menu); ?>
          </ul>
        <?php endif; ?>

      </div><!-- /.navbar-collapse -->
    </nav><!-- /.navbar -->
  </div> <!-- /.container -->
</header>

<div id="main-wrapper">
  <div id="main" class="main">
    <div>
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb" class="visible-desktop">
          <?php print $breadcrumb; ?>
        </div>
      <?php endif; ?>
      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
      <div id="page-header">
        <?php if ($title): ?>
          <div class="page-header">
            <h1 class="title d-none"><?php print $title; ?></h1>
          </div>
        <?php endif; ?>
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
    <div id="content" class="pt-0 pb-0" >
      <?php print render($page['content']); ?>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->

<footer id="footer" class="footer bg-dark" role="footer">
  <div class="container">
    <div class="row">
	<div class="col-6">
	<div><span style="color: #e1e1e1;
font-family: Montserrat;
font-size: 20px;
font-weight: 700;
line-height: 33px;
text-transform: uppercase;
letter-spacing: -0.5px;">NEWS LETTER</span></div>
	<div><span style="color: #838b8c;
font-family: Domine;
font-size: 15px;
font-weight: 400;
line-height: 24px;">Enter your email address to subscribe our notification of our new post & features by email.</span></div>
	<form method="POST">
	<input style="width: 415px;
height: 52px;
background-color: #323334;
color: #5e5e5e;
font-family: Montserrat;
font-size: 13px;
font-weight: 400;
line-height: 24px;
text-transform: uppercase;
border-radius: 25px;
margin-left: 10px;" type="email" placeholder="EMAIL ADDRESS">
	<input style="width: 154px;
height: 52px;
background-color: #16d428;
color: #ffffff;
font-family: Montserrat;
font-size: 15px;
font-weight: 400;
line-height: 35.45px;
text-transform: uppercase;
letter-spacing: -0.13px;
border-radius: 25px;
position: absolute;
left: 350px;
top: 80px;
" type="submit">
	</form>
	</div>
    <div class="col-6 ">
        <?php print render($page['footer']); ?>
	</div>
  </div>
  <span style="color: #838b8c;
font-family: Domine;
font-size: 15px;
font-weight: 400;
line-height: 24px;">Copyright © 2016 Consultplus theme.</span>
  <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
</footer>
