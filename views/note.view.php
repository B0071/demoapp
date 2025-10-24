        <?php require('views/partials/head.php'); ?>
        <?php require('views/partials/nav.php'); ?>
        <?php require('views/partials/banner.php'); ?>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="mb-2 text-blue-500 hover:underline">
                    <a href="/notes">Go Back</a>
                </div>
                <div style="font-size:larger; font-weight: 700;">
                    <?= $note['title']; ?>
                </div>
                <div>
                    <?= $note['context']; ?>
                </div>

            </div>
        </main>

        <?php require('views/partials/footer.php'); ?>