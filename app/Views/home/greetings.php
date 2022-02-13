<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
    <!-- hero section -->
    <div class="h-96 relative bg-[url('../img/heroSection.jpg')] bg-cover bg-center before:absolute before:bg-slate-800 before:top-0 before:bottom-0 before:left-0 before:right-0 before:opacity-30 before:-z-20 bg-fixed overflow-hidden">
        <div class="container py-20 z-10 mx-auto px-10">
            <div class="">
                <div class="hero-section text-white capitalize h-max">
                    <h1 class="text-4xl font-bold -translate-y-96 duration-700">Let's see the <span class="bg-blue-800 px-1">world</span> with me!</h1>
                    <h2 class="text-2xl">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    <a href="#" class="font-bold mt-10 inline-block px-3 py-2 bg-gradient-to-r from-indigo-600 to-red-500 rounded hover:opacity-75 hover:ring-2 duration-200"><i class="fas fa-eye mx-1"></i> See my project</a>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir hero section -->

    <!-- halaman pengenalan -->
    <section class="container mt-20">
        <div class="row">
            <div class="border py-7 shadow-md px-5 rounded bg-slate-100 dark:bg-slate-700 dark:border-slate-800">
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="flex justify-center">
                        <img src="img/istockphoto-1288538088-170667a.jpg" alt="">
                    </div>
                    <div id="greeting" class="py-12 flex flex-col justify-between">
                        <div class="leading-loose">
                            <span class="text-2xl relative before:border before:absolute before:w-1/2 before:border-blue-500 before:-bottom-1 ">Hi, My name is</span>
                            <h1 class="font-bold text-5xl mt-1 bg-gradient-to-b from-indigo-600 to-purple-700 bg-clip-text text-transparent -translate-y-11 opacity-0 duration-700">M. Aldi Firmansyah</h1>
                            <p class="text-2xl mt-3">agent <span class="font-bold text-sky-400">tour</span> and <span class="font-bold text-indigo-600">travel</span></p>
                        </div>
                        <div class="mt-12 lg:mt-0">
                            <a href="#" class="border p-2 rounded bg-sky-500 text-white hover:bg-sky-300 duration-200 dark:border-slate-800">Lihat tentangku <i class="fas fa-arrow-alt-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir halaman pengenalan -->

    <!-- info icon -->
    <div class="container px-2 mt-20 info-icons">
        <div class="border rounded-xl p-3 shadow-md overflow-hidden bg-slate-100 dark:border-slate-800 dark:bg-slate-700">
            <div class="grid sm:grid-cols-3 gap-6 px-10 py-7 sm:p-0">
                <!-- info lokasi -->
                <div class="info-icon md:p-2  -translate-y-36 opacity-0 duration-500">
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                        <div class="text-center flex justify-center">
                            <img src="img/undraw_empty_cart_co35.png">
                        </div>
                        <div class="flex flex-col justify-center lg:text-left text-center">
                            <h1>Kami melayani di daerah pulau jawa</h1>
                        </div>
                    </div>
                </div>
                <!-- info lokasi -->
                <div class="info-icon md:p-2  -translate-y-36 opacity-0 duration-500">
                    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">
                        <div class="w-full h-full">
                            <div class="w-full md:h-32 h-36 bg-slate-200 animate-pulse"></div>
                        </div>
                        <div class="flex flex-col gap-3 justify-center h-full">
                            <div class="w-full h-5 bg-slate-200 animate-pulse"></div>
                            <div class="w-full h-4 bg-slate-200 animate-pulse"></div>
                            <div class="w-full h-4 bg-slate-200 animate-pulse"></div>
                            <div class="w-full h-4 bg-slate-200 animate-pulse"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir info icon -->


<?= $this->endsection() ?>