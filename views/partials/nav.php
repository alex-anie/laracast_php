<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://images.unsplash.com/photo-1745252279105-f5c6e2785889?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>

                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="<?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>
                        <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-grey-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">About</a>
                        <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-grey-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Notes</a>
                        <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>

                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button type="button" class="rounded-full bg-gray-800 p-1 text-grey-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                            <span class="sr-only">View notification</span>
                            <!-- https://feathericons.dev/?search=bell&iconset=feather -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                            <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                            </svg>
                        </button>

                        <div class="relative ml-3">
                            <div>
                                <button type="button" class="flex max-w-xs items-cent">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8" src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</nav>