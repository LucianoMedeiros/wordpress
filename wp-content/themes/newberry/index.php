<?= get_header(); ?>

<div class="container">
<div class="row">
    <main class="col-8">
        <section>
            <h1><?= the_title(); ?></h1>
            <div><?= the_content(); ?></div>
        </section>
    </main>
    
    <?= get_sidebar(); ?>
</div>
</div>

<?= get_footer(); ?>