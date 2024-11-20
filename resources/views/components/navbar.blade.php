<nav class="bg-gray-800" x-data="{isOpen: false, activePath: window.location.pathname}">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Menu Items -->
                        <a :class="activePath === '/' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'" 
                           href="/" 
                           class="rounded-md px-3 py-2 text-sm font-medium">Home</a>
                        <a :class="activePath === '/blog' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'" 
                           href="/blog" 
                           class="rounded-md px-3 py-2 text-sm font-medium">Blog</a>
                        <a :class="activePath === '/about' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'" 
                           href="/about" 
                           class="rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a :class="activePath === '/contact' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'" 
                           href="/contact" 
                           class="rounded-md px-3 py-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>
            <!-- User Menu -->
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="relative ml-3">
                        <div>
                            <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="sr-only">Open user menu</span>
                                <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>
                        <!-- Dropdown -->
                        <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Settings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
