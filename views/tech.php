<?php include __DIR__ . '/partials/header.php'; ?>

<!-- Tailwind CSS is used only for the button exercise on this page.
     Disable Preflight so it does not reset the existing Bootstrap styles. -->
<script>
  tailwind = { config: { corePlugins: { preflight: false } } };
</script>
<script src="https://cdn.tailwindcss.com"></script>

<main class="container">
  <section class="my-5 rounded-lg border border-gray-200 p-4">
    <h2 class="mb-2 text-2xl font-bold text-gray-900">Tailwind CSS: Primary button</h2>
    <p class="mb-4 text-gray-600">
      Bootstrapi btn-primary nupu sarnane nupp, mis kasutab ainult Tailwindi utiliidiklasse.
    </p>

    <button
      type="button"
      class="inline-flex items-center justify-center rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base font-normal leading-normal text-white transition-colors duration-150 hover:border-[#0a58ca] hover:bg-[#0b5ed7] active:border-[#0a53be] active:bg-[#0a58ca] focus:outline-none focus:ring-4 focus:ring-[rgba(13,110,253,0.25)] focus:ring-offset-2"
    >
      Primary button
    </button>

    <p class="mt-4 text-sm text-gray-600">
      Testi nupu hover-, active- ja focus-olekut: liigu hiirega nupule, vajuta seda
      ning kasuta klaviatuuril Tab-klahvi.
    </p>
  </section>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>
