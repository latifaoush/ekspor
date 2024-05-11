
<header  class="fixed top-0 w-screen bg-white dark:bg-gray-900 z-50">
    <nav class="bg-white border-teal-900 px-4 lg:px-6 py-2.5 dark:bg-teal-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/marketing" class="flex items-center">
                <img src="{{ url('images/logo.png') }}" class="mr-3 h-6 sm:h-9" alt=" Logo" />
                <span class="self-center text-xl whitespace-nowrap dark:text-white font-serif ">Ekspor Kelapa</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="/login" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 font-serif border-b-0">Log in</a>
                <a class="hover:text-teal-500 h-fit" href="logout.php?logout=true" onclick="return confirmLogout()"><span class="material-symbols-outlined">logout</span></a>
            </div>
            <div class="navbar hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/marketing" class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/products" class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Products</a>
                    </li>
                    <li>
                        <a href="/list" class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Manage Products</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700 font-serif border-b-0">Request Coconut </a>
                    </li>
                   
                    
                </ul>
            </div>
        </div>
    </nav>
</header>