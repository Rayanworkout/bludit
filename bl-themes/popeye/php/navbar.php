<nav class="navbar bg-dark border-bottom mb-4">
    <div class="container">
        <a class="navbar-brand bold text-center mx-auto" href="<?php echo $site->url() ?>" style="font-size: 24px;"><?php echo $site->title() ?></a>
        <div class="d-flex">
            <!-- Static pages -->
            <?php foreach ($staticContent as $tmp) : ?>
                <a class="mr-3 ml-3" href="<?php echo $tmp->permalink(); ?>"><?php echo $tmp->title(); ?></a>
            <?php endforeach ?>
        </div>
    </div>
</nav>
