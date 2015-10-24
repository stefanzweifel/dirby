<?php if(!isset($subpages)) $subpages = $site->children() ?>
<ul>
    <?php foreach($subpages->visible() as $p): ?>
        <li class="depth-<?php echo $p->depth() ?>">
            <a<?php e($p->isActive(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
            <?php if($p->hasChildren()): ?>
                <?php snippet('dirby/elements/treemenu', array('subpages' => $p->children())) ?>
            <?php endif ?>
        </li>
    <?php endforeach ?>
</ul>