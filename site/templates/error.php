<?php echo snippet('dirby/layout/header') ?>
<?php echo snippet('dirby/layout/navigation') ?>

<div class="container docs-container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="jumbotron">
                <h1><?php echo $page->title()->html() ?></h1>
                <?php echo $page->text()->kirbytext() ?>
                <p>
                    <a class="btn btn-primary btn-lg" href="/" role="button">Return to homepage</a>
                </p>
            </div>
        </div>
    </div>

</div>

<?php echo snippet('dirby/layout/footer') ?>

<?php echo snippet('dirby/layout/tail') ?>