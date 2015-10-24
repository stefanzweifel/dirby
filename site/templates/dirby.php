<?php if(!$site->user()) go('/login') ?>

<?php echo snippet('dirby/layout/header') ?>
<?php echo snippet('dirby/layout/navigation') ?>

<div class="container docs-container">

    <div class="row">
        <div class="col-md-3 hidden-sm hidden-xs">
            <?php echo snippet('dirby/elements/sidebar_menu') ?>
        </div>

        <div class="col-md-8">

            <?php echo snippet('dirby/elements/breadcrumb') ?>

            <div class="page-header">
                <h1>
                    <?php echo $page->title()->html() ?>

                </h1>
                <?php if (!$page->author()->empty()): ?>
                    <?php echo snippet('dirby/elements/written-by', array('object' => $page)); ?>
                <?php endif ?>
            </div>

            <?php echo $page->text()->kirbytext() ?>

            <hr>

            <?php if ($page->hasFiles()): ?>
                <h4>Files</h4>
                <ul>
                    <?php foreach($page->files() as $file): ?>
                        <li>
                            <a href="<?php echo $file->url() ?>">
                              <?php echo $file->filename() ?>
                              (<?php echo $file->niceSize() ?>)
                            </a> -
                            <a download href="<?php echo $file->url() ?>">(Download)</a>
                      </li>
                  <?php endforeach ?>
                </ul>
            <?php endif ?>

            <hr>

            <div class="row">
                <div class="col-md-4 col-xs-8">
                    <div class="input-group">
                        <input type="text" readonly="readonly" value="<?php echo $page->tinyurl() ?>" id="page_shorturl" class="form-control disabled" id="basic-url" aria-describedby="basic-addon3">
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-clipboard" data-clipboard-target="#page_shorturl" type="button">&nbsp;<i class="fa fa-clipboard"></i></button>
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-4">
                    <?php if($user = $site->user() and $user->hasPanelAccess()): ?>

                        <?php
                            // New Admin URLs in 2.2
                            $version = str_replace(".", "", toolkit::version());
                            $adminUrl = "/panel/pages/show/{$page->uri()}/edit";

                            if ($version < 220) {

                                $adminUrl = "/panel/#/pages/show/{$page->uri()}/p:1";
                            }

                        ?>

                        <a href="<?php echo $adminUrl ?>" class="btn btn-warning" target="blank">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                    <?php endif ?>
                </div>
            </div>

        </div>

    </div>

</div>

<?php echo snippet('dirby/layout/footer') ?>

<?php echo snippet('dirby/layout/tail') ?>