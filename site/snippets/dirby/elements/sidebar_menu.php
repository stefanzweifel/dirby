<?php

$items = false;

// get the open item on the first level
if($root = $pages->findOpen()) {

  // get visible children for the root item
  $items = $page->children()->visible();
}

// only show the menu if items are available
if($items and $items->count()):

?>
<h5 class="subheader text-uppercase text-muted">Sub-Navigation</h5>

  <ul class="nav nav-pills nav-stacked">
    <?php foreach($items as $item): ?>
        <li <?php e($item->isOpen(), ' class="active"') ?>>
            <a<?php e($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>">
                <?php echo $item->title()->html() ?>
            </a>
        </li>
    <?php endforeach ?>
  </ul>
<?php endif ?>