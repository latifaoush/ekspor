<header class="fixed top-0 w-screen bg-white lg:max-w-full dark:bg-gray-900 z-50">
    <nav class="bg-white border-teal-900 px-4 lg:px-6 py-2.5 dark:bg-teal-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="//dashboard/pembeli" class="flex items-center">
                <img src="{{ url('/images/logoo.png') }}" class="mr-3 h-6 sm:h-9" alt=" Logo">
                <span class="self-center text-xl text-black whitespace-nowrap dark:text-white font-serif ">Ekspor
                    Kelapa</span>
            </a>
            <div class="flex items-center lg:order-3 space-x-3">
                <a href="/cart">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M4 4a1 1 0 0 1 1-1h1.5a1 1 0 0 1 .979.796L7.939 6H19a1 1 0 0 1 .979 1.204l-1.25 6a1 1 0 0 1-.979.796H9.605l.208 1H17a3 3 0 1 1-2.83 2h-2.34a3 3 0 1 1-4.009-1.76L5.686 5H5a1 1 0 0 1-1-1Z"
                            clip-rule="evenodd" />
                    </svg></a><br>

                <!-- Tautan logout -->
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <svg class="w-5 h-5 text-gray-800 dark:text-white " xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" viewBox="0 0 512 512" width="24" height="24" fill="currentColor">
                        <path
                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                    </svg>
                </a>

                <!-- Formulir logout -->
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </div>
            <div class="navbar hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
                id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/dashboard/pembeli"
                            class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-800 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-800 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">About
                            Us</a>
                    </li>
                    <li>
                        <a href="/product"
                            class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-800 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Products</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-800 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
            <script>
                function confirmLogout() {
                    if (confirm('Are you sure you want to logout?')) {
                        document.getElementById('logout-form').submit();
                    }
                    return false;
                }
            </script>
        </div>
    </nav>
</header>
