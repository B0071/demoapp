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
                <div class="flex justify-start gap-x-4">
                    <form method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= $note['id']; ?>">
                        <button class="rounded-md bg-red-500 px-3 py-2 mt-4 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
                    </form>
                    <a href="/note/edit?id=<?= $note['id']; ?>" class="rounded-md bg-yellow-500 px-3 py-2 mt-4 text-sm font-semibold text-white shadow-xs hover:bg-yello-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Edit</a>
                </div>

            </div>
        </main>

        <?php require base_path('views/partials/footer.php'); ?>