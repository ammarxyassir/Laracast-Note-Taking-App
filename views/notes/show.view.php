<?php require(__DIR__ . '/../partials/head.php') ?>
<?php require(__DIR__ . '/../partials/nav.php') ?>
<?php require(__DIR__ . '/../partials/banner.php') ?>



<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-20">
      <?=htmlspecialchars($note['body']) ?>
    </p>

    <p>
      <a href="/notes" class="text-blue-500 hover:underline">
        GO BACK
      </a>
    </p>
  </div>
</main>

<?php require(__DIR__ . '/../partials/footer.php') ?>