<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="A grindcore band based in Rancho Cordova, Sacramento County, California, United States of America">
    <meta name="robots" content="all">    
    <meta name="author" content="Daniel Ohm, C0MPU73R PR09R4M CHARITY">
    <title><?= $title ? $title . ' - ' : '' ?>BR3WT4L</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="/css/site.css" />
    <?php if (!empty($_SERVER['SUCCESS_MESSAGE'])) { ?>
        <div class="alert alert-success">
            <?= $_SERVER['SUCCESS_MESSAGE'] ?>
        </div>
    <?php } ?>
    <?= (new DateTime() >= new DateTime('December 21') && new DateTime() <= new DateTime('March 20')) ? '<link rel="stylesheet" href="~/css/season-winter.css" />' : ''; ?>
    <?= (new DateTime() >= new DateTime('March 21') && new DateTime() <= new DateTime('June 21')) ? '<link rel="stylesheet" href="~/css/season-spring.css" />' : ''; ?>
    <?= (new DateTime() >= new DateTime('June 21') && new DateTime() <= new DateTime('September 22')) ? '<link rel="stylesheet" href="~/css/season-summmer.css" />' : ''; ?>
    <?= (new DateTime() >= new DateTime('September 22') && new DateTime() <= new DateTime('December 21')) ? '<link rel="stylesheet" href="~/css/season-fall.css" />' : ''; ?>
</head>
<body>
    <?php if (!empty($_SERVER['SUCCESS_MESSAGE'])) { ?>
        <div class="alert alert-success">
            <?= $_SERVER['SUCCESS_MESSAGE'] ?>
        </div>
    <?php } ?>
    
    <?php if (!empty($_SERVER['ERROR_MESSAGE'])) { ?>
        <div class="alert alert-danger">
            <?= $_SERVER['ERROR_MESSAGE'] ?>
        </div>
    <?php } ?>
    <div class="header center">
        <a href="/" class="text-decoration-none">
            <img src="/images/logo.png" alt="BR3WT4L" class="header-image redirect" />
        </a>
        <div class="header-text">BR3WT4L</div>
    </div>
    <hr />
    <main role="main" class="pb-0">
        <?= $content ?? '' ?>
    </main>
    <footer class="border-top footer text-muted">
        <div class="float-end me-3">
            &copy; <?= date('Y') ?> - BR3WT4L
        </div>
    </footer>
    <script type="text/javascript" src="~/jquery.min.js"></script>
    <script type="text/javascript" src="~/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="~/jquery-ui.min.js"></script>
    <script type="text/javascript" src="~/jquery.validate.min.js"></script>
    <script type="text/javascript" src="~/jquery.validate.unobtrusive.min.js"></script>
    <script type="text/javascript" src="~/site.js"></script>
    <?= $scripts ?? '' ?>
</body>
</html>
