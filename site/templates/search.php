<?php if(!$site->user()) go('/login') ?>

<?php echo snippet('dirby/layout/header') ?>
<?php echo snippet('dirby/layout/navigation') ?>

<div class="container docs-container">

    <div class="row">
        <div class="col-md-2 hidden-sm hidden-xs"></div>


        <div class="col-md-10">

            <?php echo snippet('dirby/elements/breadcrumb') ?>

            <div class="page-header">
                <h1><?php echo $page->title()->html() ?></h1>
            </div>

            <?php echo $page->text()->kirbytext() ?>

            <div class="row">
                <div class="col-md-8">
                    <form style="margin-bottom: 4rem;">
                        <div class="input-group">
                            <input type="search" class="form-control input-lg" placeholder="Search for things ..." name="q" value="<?php echo esc($query) ?>">
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-success btn-lg" value="Search">
                            </span>
                        </div>
                    </form>

                    <?php if ($results->count() > 0 ): ?>

                        <ul class="list-unstyled">

                            <?php foreach($results as $result): ?>

                                <li>
                                    <h4>
                                        <a href="<?php echo $result->url() ?>">
                                        <?php echo $result->title()->html() ?>
                                        </a>
                                    </h4>
                                    <p class="search-excerpt">
                                        <?php echo $result->text()->excerpt(140) ?>
                                    </p>
                                    <?php if (!$result->author()->empty()): ?>
                                    <p class="search-author">
                                        <?php echo snippet('dirby/elements/written-by', array('object' => $result)); ?>
                                    </p>
                                    <?php endif ?>
                                </li>

                                <hr>
                            <?php endforeach ?>

                            <?php if($pagination->hasPages()): ?>

                                <nav>
                                    <ul class="pagination">

                                        <?php if($pagination->hasPrevPage()): ?>
                                            <li>
                                                <a class="prev" href="<?php echo $pagination->prevPageURL() ?>">&laquo;</a>
                                            </li>
                                        <?php endif ?>

                                        <?php foreach($pagination->range(10) as $r): ?>
                                            <li <?php if($pagination->page() == $r) echo ' class="active"' ?>>
                                                <a href="<?php echo $pagination->pageURL($r) ?>">
                                                    <?php echo $r ?>
                                                </a>
                                            </li>
                                        <?php endforeach ?>

                                        <?php if($pagination->hasNextPage()): ?>
                                            <li>
                                                <a class="next" href="<?php echo $pagination->nextPageURL() ?>">&raquo;</a>
                                            </li>
                                        <?php endif ?>
                                    </ul>
                                </nav>

                            <?php endif ?>

                        </ul>

                    <?php else: ?>

                        <div class="alert alert-warning" role="alert">
                            <strong>Nooope!</strong> No results found for <mark><?php echo $query; ?></mark>
                        </div>

                    <?php endif ?>

                </div>
            </div>

        </div>

    </div>

</div>

<?php echo snippet('dirby/layout/footer') ?>

<?php echo snippet('dirby/layout/tail') ?>