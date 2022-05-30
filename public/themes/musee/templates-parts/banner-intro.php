<div class="container_banner">
    <?php if (!empty(get_field('banner'))) : ?>
        <?php $banner=get_field('banner'); ?>
    <div class="container">
    <h1><?= $banner['titre']; ?></h1>
    </div>
    <div>
        <img src="<?= $banner['image']['url']; ?>" alt="<?= $banner['image']['alt']; ?>">
        <div class="black_banner"></div>
    </div>
    <?php endif; ?>
</div>