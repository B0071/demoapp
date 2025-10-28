        <?php require base_path('views/partials/head.php'); ?>
        <?php require base_path('views/partials/nav.php'); ?>
        <?php require base_path('views/partials/banner.php'); ?>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="mb-2 text-blue-500 hover:underline">
                    <a href="/notes">Go Back</a>
                </div>
                <div style="font-size:larger; font-weight: 700;">
                    <?= htmlspecialchars($note['title']); ?>
                </div>
                <div>
                    <?= htmlspecialchars($note['context']); ?>
                </div>
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $note['id']; ?>">
                    <button class="text-sm text-red-500 mt-4">Delete</button>
                </form>

            </div>
        </main>

        <?php require base_path('views/partials/footer.php'); ?>