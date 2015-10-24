<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo url() ?>"><?php echo $site->title()->html() ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php if($site->user()): ?>
                <ul class="nav navbar-nav">
                    <?php foreach($pages->visible() as $p): ?>
                        <li <?php e($p->isOpen(), ' class="active"') ?>>
                            <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
                        </li>
                        <li class="divider"></li>
                    <?php endforeach ?>
                </ul>
            <?php endif ?>

            <ul class="nav navbar-nav navbar-right">
                <?php if($user = $site->user()): ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo esc($user->username()) ?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <?php if($user = $site->user() and $user->hasPanelAccess()): ?>
                            <li><a href="/panel">Switch to panel</a></li>
                            <li role="separator" class="divider"></li>
                        <?php endif ?>

                        <li><a href="<?php echo url('logout') ?>">Logout</a></li>
                    </ul>
                </li>
                <?php else: ?>
                <li>
                    <a href="/login">Login</a>
                </li>

                <?php endif ?>

            </ul>

            <?php if($site->user()): ?>
            <form class="navbar-form navbar-right" action="/search" role="search">
                <div class="form-group">
                    <input type="search" name="q" class="form-control"  placeholder="Search for stuff" value="<?php echo esc(@$query) ?>">
                </div>
                <button type="submit" class="btn btn-success">Search</button>
            </form>
            <?php endif ?>
        </div>
    </div>
</nav>