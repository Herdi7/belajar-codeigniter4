<!-- header -->
<header class="w-full bg-slate-500 px-6 py-2 text-white">
    <div class="container">
        <div class="flex justify-start gap-5">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>
    </div>
</header>
<!-- akhir header -->



<!-- brand -->
<div class="container text-center mt-7">
        <a href="#">
            <h1 class="duration-500 text-5xl font-bold bg-gradient-to-r from-blue-700 via-green-300 to-red-600 bg-clip-text text-transparent">Aldi Firmansyah</h1>
        </a>
    </div>
    <!-- akhir brand -->
    <hr class="opacity-0 border-4">
    <!-- navbar -->
    <nav class="text-center w-full duration-150 py-2 z-20 relative">
        <div class="container">
            <div class="sm:flex sm:justify-around ">
                <!-- nav-toogle -->
                <div id="nav-toogle" class="sm:hidden flex flex-col gap-1 w-7 mx-auto relative mb-2">
                    <input type="checkbox" class="peer absolute scale-x-[2.5] scale-y-[2.2] opacity-0 right-2 top-1 cursor-pointer mb-2 z-50">
                    <span class="border-2 border-slate-800 dark:border-white w-full peer-checked:rotate-45 peer-checked:translate-y-2 duration-75 mt-2"></span>
                    <span class="border-2 border-slate-800 dark:border-white w-full peer-checked:opacity-0"></span>
                    <span class="border-2 border-slate-800 dark:border-white w-full peer-checked:-rotate-45 peer-checked:-translate-y-2  duration-75"></span>
                </div>
                <!-- navbar items -->
                <div class="flex justify-center opacity-0 sm:opacity-100 duration-500 sm:w-1/2 xl:w-1/3" id="navbar">
                    <ul class="flex flex-col gap-2 justify-evenly absolute w-full sm:text-slate-800 sm:flex-row sm:bg-transparent sm:static sm:h-auto px-4 bg-slate-100 text-xl last:pb-3 first:pt-3 sm:last:pb-0 sm:first:pt-0 dark:bg-slate-400 dark:md:bg-transparent duration-100 h-0 overflow-hidden">
                        <li class="bg-blue-100 p-1 rounded text-slate-700"><a href="/">Home</a></li>
                        <li class="hover:bg-blue-100 p-1 rounded hover:text-slate-700 dark:hover:text-slate-700 duration-300 dark:text-white"><a href="/Anime">Anime</a></li>
                        <li class="hover:bg-blue-100 p-1 rounded hover:text-slate-700 dark:hover:text-slate-700 duration-300 dark:text-white"><a href="/About">About</a></li>
                        <li class="hover:bg-blue-100 p-1 rounded hover:text-slate-700 dark:hover:text-slate-700 duration-300 dark:text-white"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!-- switch dark/light mode -->
                <div class="flex items-center absolute right-7 z-20 top-4">
                    <label for="switch"><i class="fas fa-sun"></i></label>
                    <input type="checkbox" id="switch" class="hidden">
                    <label for="switch">
                        <div class="w-8 h-4 mx-2 rounded-full bg-slate-400 ">
                            <div class="w-4 h-full rounded-full border bg-white duration-200" id="check-mode"></div>
                        </div>
                    </label>
                    <label for="switch"><i class="fas fa-moon"></i></label>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->