<?php echo snippet('dirby/layout/header') ?>
<?php echo snippet('dirby/layout/navigation') ?>

<div class="container docs-container">

    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="page-header">
                <h1><?php echo $page->title()->html() ?></h1>
            </div>

            <?php echo $page->text()->kirbytext() ?>

        </div>

    </div>

</div>

<?php echo snippet('dirby/layout/footer') ?>

<?php echo snippet('dirby/layout/tail') ?>