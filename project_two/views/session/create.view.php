    <?php require base_path('views/partials/head.php'); ?>
    <?php require base_path('views/partials/nav.php'); ?>

    <main>
        <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="w-full max-w-md space-y-8">
                <div>
                    <img class="mx-auto h-12 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="">
                    <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Log In!</h2>
            
                </div>
                <form class="mt-8 space-y-6" action="/session" method="POST">
                    <input type="hidden" name="remember" value="true">
                    <div class="-space-y-px rounded-md shadow-sm">
                        <div>
                            <label for="email" class="sr-only">Email address</label>
                            <input type="email" id="email" name="email" autocomplete="email" required placeholder="Email address" class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 px-4 bg-white text-gray-900">
                        </div>

                        <?php if(isset($errors['email'])):?>
                            <p class="mt-3 text-sm/6 text-red-600"><?= $errors['email']?></p>
                        <?php endif; ?>

                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" id="password" name="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 px-4 bg-white text-gray-900" placeholder="Password">
                        </div>

                        <?php if(isset($errors['password'])):?>
                            <p class="mt-3 text-sm/6 text-red-600"><?= $errors['password']?></p>
                        <?php endif; ?>
                    </div>

                    <!-- Buttons -->
                    <div>
                        <button type="submit" class="group relative text-white flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2">
                        
                        Log In</button>

                    </div>
                </form>
            </div>
        </div>
    </main>

<?php require base_path('views/partials/footer.php');?>