<nav class="navbar navbar-expand-lg navbar-light navbar-default">
    <div class="container">
        <a href="<?php echo url('/'); ?>" class="nav-brand">Hello Laravel</a>
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a href="<?php echo action('BoardController@getIndex');?>" class="nav-link">
                    排行榜
                </a>
            </li>
        </ul>
    </div>
</nav>