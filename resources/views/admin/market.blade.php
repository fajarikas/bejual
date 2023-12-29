@extends('partial.main')
@section('content')
    <div id="body " class="mx-4 my-8 md:ml-[22rem] md:mr-10 md:my-8 bg-background-color">
        <div>
            <div class="flex justify-between items-center">
                <div class="flex gap-2 items-center font-bold text-biru-font text-2xl">
                    <p> CLOTHING UNYESH </p>

                </div>

            </div>

            <div class="mt-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <input type="search"
                            class="hover:drop-shadow-xl transition delay-100 duration-150 ease-in-out rounded-full px-4 py-2 text-biru-font"
                            placeholder="Search... " />
                        <a href="#" id="button-search">
                            <div
                                class="py-3 px-3 bg-biru-font rounded-full hover:bg-background-color hover:text-biru-font hover:border hover:border-biru-font transition delay-70 duration-100 ease-in-out">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-3 h-3">
                                    <path fill-rule="evenodd"
                                        d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </a>
                    </div>

                    <a href="{{ url('/market/create') }}">
                        <div
                            class="items-center flex gap-1 text-sm font-medium py-2 px-4 bg-biru-font text-white rounded-full hover:bg-background-color hover:text-biru-font hover:border-2 hover:border-biru-font transition delay-0 duration-100 ease-linear">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd"
                                    d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="hidden md:inline"> Tambah barang baru </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="mb-8 flex items-center justify-between md:justify-between">
                <hr class="w-24 md:w-96 border-2 border-biru-font" />
                <p class="font-semibold text-biru-font">DAFTAR BARANG</p>
                <hr class="w-24 md:w-96 border-2 border-biru-font" />
            </div>
            <div class="relative overflow-x-auto rounded-xl">
                <table class="w-full rounded-lg text-biru-font text-center border-collapse bg-white drop-shadow">
                    <thead class="text-xs font-medium">
                        <tr class="border-b border-biru-font">
                            <td class="font-semibold py-3 px-2"> ID Barang </td>
                            <td class="font-medium py-5 px-2"> Nama Barang </td>
                            <td class="font-medium py-5 px-2"> Harga Barang </td>
                            <td class="font-medium py-5 px-2"> Gambar Barang </td>
                            <td class="font-medium py-5 px-2"> Status </td>
                            <td class="font-medium py-5 px-2"> Action </td>
                        </tr>
                    </thead>
                    <tbody class="text-xs">
                        <tr>
                            <td class="font-semibold"> CU10283 </td>
                            <td class="font-medium flex justify-center items-center gap-1.5 py-3 px-2">
                                Sepatu Dukcapil
                            </td>
                            <td class="font-medium"> Rp. 120.000 </td>
                            <td class="font-medium">
                                <img src="{{ url('images/') }}" alt="">
                            </td>
                            <td class="font-medium"> Tersedia </td>
                            <td class="font-medium">
                                <div class="flex justify-center gap-5">
                                    <a href="#"
                                        class="bg-hijau hover:bg-white hover:border hover:border-hijau hover:text-hijau transition delay-75 duration-100 ease-in px-2.5 py-1 text-white font-medium rounded-md">Edit</a>
                                    <a href="#"
                                        class="bg-merah hover:bg-white hover:border hover:border-merah hover:text-merah transition delay-75 duration-100 ease-in px-2.5 py-1 text-white font-medium rounded-md">Delete</a>
                                </div>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
