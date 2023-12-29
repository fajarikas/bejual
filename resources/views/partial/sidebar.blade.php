<aside id="sidebar" class="hidden md:inline fixed top-0 w-[20%] h-screen bg-biru">
    <div class="ml-12 my-8">
        <div class="flex items-center gap-5">
            <div class="py-2 px-4 rounded-2xl bg-orange">
                <p class="font-bold text-2xl text-white">A</p>
            </div>
            <div class="">
                <p class="text-2xl text-white font-bold"> Adol UNY </p>
            </div>
        </div>

        <div class="mt-8">
            <a href="#">
                <div class="bg-background-color rounded-l-full w-[100%] pl-8 py-4">
                    <div class="flex text-biru">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                                <path
                                    d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                            </svg>

                            <div>
                                <p class="font-medium"> Dashboard </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="{{ url('/market') }}">
                <div
                    class="stroke-biru hover:bg-white text-abu-font hover:text-biru hover:fill-biru rounded-l-full w-[100%] pl-8 py-4 mt-4">
                    <div class="flex">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6">
                                <path
                                    d="M5.223 2.25c-.497 0-.974.198-1.325.55l-1.3 1.298A3.75 3.75 0 007.5 9.75c.627.47 1.406.75 2.25.75.844 0 1.624-.28 2.25-.75.626.47 1.406.75 2.25.75.844 0 1.623-.28 2.25-.75a3.75 3.75 0 004.902-5.652l-1.3-1.299a1.875 1.875 0 00-1.325-.549H5.223z" />
                                <path fill-rule="evenodd"
                                    d="M3 20.25v-8.755c1.42.674 3.08.673 4.5 0A5.234 5.234 0 009.75 12c.804 0 1.568-.182 2.25-.506a5.234 5.234 0 002.25.506c.804 0 1.567-.182 2.25-.506 1.42.674 3.08.675 4.5.001v8.755h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3zm3-6a.75.75 0 01.75-.75h3a.75.75 0 01.75.75v3a.75.75 0 01-.75.75h-3a.75.75 0 01-.75-.75v-3zm8.25-.75a.75.75 0 00-.75.75v5.25c0 .414.336.75.75.75h3a.75.75 0 00.75-.75v-5.25a.75.75 0 00-.75-.75h-3z"
                                    clip-rule="evenodd" />
                            </svg>

                            <div>
                                <p class="font-medium"> Toko </p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</aside>

<nav class="md:hidden inline">
    <div class="py-3 px-4 bg-biru">
        <div class="flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="font-bold text-lg text-white w-8 h-8 items-center justify-center flex rounded-lg bg-orange">
                    <p class="">A</p>
                </div>

                <p class="text-md text-white font-semibold"> Adol UNY </p>
            </div>
            <div>
                <a href="#">
                    <svg id="menu" name="menu" onclick="Menu(this)" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="white" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div id="navbar" class="hidden transition duration-100 delay-100 ease-in bg-biru pr-4 pl-8 pb-5 pt-3">
        <div class="px-4 py-2 rounded-md text-biru-font font-semibold bg-background-color">
            <a class="" href="#">Dashboard</a>
        </div>
        <div
            class="mt-2 px-4 py-2 rounded-md text-background-color hover:text-biru-font font-semibold hover:bg-background-color">
            <a href="#">Barang</a>
        </div>
    </div>
</nav>
