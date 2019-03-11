<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agency Final</title>
    <link rel="stylesheet" href="/sites/all/themes/mytheme/main.css">
</head>
<body>
<section class="start-screen">
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="/"><img src="sites/all/themes/mytheme/img/Logo.png" height="32" width="289"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php print render($page['header_menu']); ?>
                </div>
            </nav>
        </header>
        <div class="row justify-content-center align-items-end main-screen-text">
            <div class="col-8">
                <?php print render($page['start_screen_text']); ?>
            </div>
        </div>
        <div class="row justify-content-center align-items-end remaining-space d-none d-sm-flex">
            <div class="col-2">
                <?php print render($page['scroll_down']); ?>
            </div>
        </div>
    </div>
</section>
<section class="best-design-background">
    <div class="container">
        <div class="row design-text-layout align-items-center justify-content-between">
            <div class="col-12 col-sm-5">
                <?php print render($page['best_design']); ?>
            </div>
            <div class="col-12 col-sm-5">
                <?php print render($page['best_code']); ?>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <?php print render($page['title_four_blocks']); ?>
    <?php print render($page['web_design']); ?>
    <?php print render($page['ask_for_price']); ?>
</section>
<section class="container-fluid clearfix">
    <div class="row">
        <div class="float-lg-left card col-lg-4 p-0">
            <?php print render($page['drone_zone_template']); ?>
        </div>
        <div class="float-lg-left card col-lg-4 p-0">
            <?php print render($page['neptune_template']); ?>
        </div>
        <div class="float-lg-left card col-lg-4 p-0">
            <?php print render($page['fit_app_template']); ?>
        </div>
    </div>
</section>
<section class="about-us-background">
    <div class="container">
        <?php print render($page['about_team']); ?>
        <div class="row">
            <div class="col-3">
                <?php print render($page['person1']); ?>
            </div>
            <div class="col-3">
                <?php print render($page['person2']); ?>
            </div>
            <div class="col-3">
                <?php print render($page['person3']); ?>
            </div>
            <div class="col-3">
                <?php print render($page['person4']); ?>
            </div>
        </div>
    </div>
    <?php print render($page['map']); ?>
</section>
<footer class="container">
    <?php print render($page['footer']); ?>
</footer>
</body>
</html>