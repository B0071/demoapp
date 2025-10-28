        <?php require base_path('views/partials/head.php'); ?>
        <?php require base_path('views/partials/nav.php'); ?>
        <?php require base_path('views/partials/banner.php'); ?>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <ul>
                    <?php foreach ($notes as $note) : ?>
                        <li>
                            <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                                <?= htmlspecialchars($note['title']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <br>
                <div>
                    <a href="/notes/create" class="text-blue-500 hover:underline">Create New Note</a>
                </div>
            </div>
        </main>

        <?php require base_path('views/partials/footer.php'); ?>