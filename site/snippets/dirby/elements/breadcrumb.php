<ol class="breadcrumb">
    <?php foreach($site->breadcrumb() as $crumb): ?>
    <li <?php echo ($crumb->isActive()) ? ' class="active"' : '' ?>>

        <?php if ($crumb->isActive()): ?>
            <?php echo html($crumb->title()) ?>
        <?php else: ?>

            <a href="<?php echo $crumb->url() ?>">
                <?php echo html($crumb->title()) ?>
            </a>

        <?php endif ?>

    </li>
    <?php endforeach ?>
</ol>