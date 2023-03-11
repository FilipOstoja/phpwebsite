<?php require ('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require ('partials/banner.php'); ?>

<main xmlns="http://www.w3.org/1999/html">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p>
        <a href="/notes" class="text-blue-500 hover:underline">Go back to all notes</a></br>
        <?=$note['body']?>
    </p>
    </div>
</main>

<?php require ('partials/footer.php'); ?>

