<?php echo snippet('dirby/layout/header') ?>
<?php echo snippet('dirby/layout/navigation') ?>

<div class="container docs-container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">

                    <p class="lead"><?php echo $page->text()->html() ?></p>

                    <?php echo snippet('dirby/elements/login_form') ?>
                </div>
            </div>

        </div>
    </div>

</div>

<?php echo snippet('dirby/layout/footer') ?>

<?php echo snippet('dirby/layout/tail') ?>