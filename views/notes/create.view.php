        <?php require base_path('views/partials/head.php'); ?>
        <?php require base_path('views/partials/nav.php'); ?>
        <?php require base_path('views/partials/banner.php'); ?>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <form method="POST">
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                                    <div class="mt-2">
                                        <textarea name="title" id="title">
                                            <?= isset($_POST['title']) ? $_POST['title'] : '' ?>
                                        </textarea>
                                        <?php if (isset($errors['title'])) : ?>
                                            <p class="text-red-500 text-xs mt-2"><?= $errors['title']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <br>
                                <div class="col-span-4">
                                    <label for="context" class="text-sm/6 font-medium text-gray-900">Description</label>
                                    <div class="mt-2">
                                        <textarea id="context" name="context" rows="2" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 mt-4 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </main>

        <?php require base_path('views/partials/footer.php'); ?>