@extends('partial.main')
@section('content')
    <div id="body " class="mx-4 my-8 md:ml-[22rem] md:mr-10 md:my-8">
        <div class="mb-8 md:flex block items-center justify-between">
            <div>
                <p class="text-center text-biru-font font-bold text-2xl">
                    Dashboard Toko
                </p>
            </div>
            <div class="md:mt-0 mt-5 flex items-center gap-3">
                <input type="search" class="rounded-full w-full px-4 py-2 text-biru-font" placeholder="Search... " />
                <a href="#">
                    <div class="py-3 px-3 bg-biru-font rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-3 h-3">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="flex w-full justify-between">
            <div class="drop-shadow-xl">
                <div class="flex bg-white py-10 px-8 rounded-3xl justify-around">
                    <div class="flex items-center gap-4">
                        <div class="text-center items-center flex bg-biru-font h-14 w-14 justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-5">
                                <path fill-rule="evenodd"
                                    d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-abu"> Jumlah Produk </p>
                            <p class="text-xl font-bold text-biru">230</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="drop-shadow-xl">
                <div class="flex bg-white py-10 px-8 rounded-3xl justify-around">
                    <div class="flex items-center gap-4">
                        <div class="text-center items-center flex bg-orange h-14 w-14 justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-5">
                                <path
                                    d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375z" />
                                <path fill-rule="evenodd"
                                    d="M3.087 9l.54 9.176A3 3 0 006.62 21h10.757a3 3 0 002.995-2.824L20.913 9H3.087zm6.163 3.75A.75.75 0 0110 12h4a.75.75 0 010 1.5h-4a.75.75 0 01-.75-.75z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-abu"> Produk Aktif </p>
                            <p class="text-xl font-bold text-biru">230</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="drop-shadow-xl">
                <div class="flex bg-white py-10 px-8 rounded-3xl justify-around">
                    <div class="flex items-center gap-4">
                        <div class="text-center items-center flex bg-kuning h-14 w-14 justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-5">
                                <path
                                    d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-abu"> Jumlah User </p>
                            <p class="text-xl font-bold text-biru">981 </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="drop-shadow-xl">
                <div class="flex bg-white py-10 px-8 rounded-3xl justify-around">
                    <div class="flex items-center gap-4">
                        <div class="text-center items-center flex bg-hijau h-14 w-14 justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-5">
                                <path
                                    d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 01-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004zM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 01-.921.42z" />
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v.816a3.836 3.836 0 00-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 01-.921-.421l-.879-.66a.75.75 0 00-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 001.5 0v-.81a4.124 4.124 0 001.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 00-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 00.933-1.175l-.415-.33a3.836 3.836 0 00-1.719-.755V6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-xs font-medium text-abu"> User Aktif </p>
                            <p class="text-xl font-bold text-biru">981 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-8 flex gap-5">
            <div class="w-2/3 bg-white drop-shadow-2xl rounded-xl p-6">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-biru-font font-semibold"> Daftar Barang </p>
                    <input class="text-white bg-biru rounded-full px-4 py-1" placeholder="Search..." />
                </div>
                <div>
                    <table class="text-sm my-7 rounded-full w-full py-4 text-center justify-between">

                        <tbody>
                            <tr class="hover:bg-abu-fontmt-2">
                                <td class="justify-right py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2 text-biru-font font-semibold text-center">ID 9729812</td>
                                <td class="py-2">RP. 1.500.000</td>
                            </tr>

                            <tr class="hover:bg-abu-fontmt-2">
                                <td class="justify-right py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2 text-biru-font font-semibold text-center">ID 9729812</td>
                                <td class="py-2">RP. 1.500.000</td>
                            </tr>

                            <tr class="hover:bg-abu-fontmt-2">
                                <td class="justify-right py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2 text-biru-font font-semibold text-center">ID 9729812</td>
                                <td class="py-2">RP. 1.500.000</td>
                            </tr>

                            <tr class="hover:bg-abu-fontmt-2">
                                <td class="justify-right py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2 text-biru-font font-semibold text-center">ID 9729812</td>
                                <td class="py-2">RP. 1.500.000</td>
                            </tr>

                            <tr class="hover:bg-abu-fontmt-2">
                                <td class="justify-right py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2 text-biru-font font-semibold text-center">ID 9729812</td>
                                <td class="py-2">RP. 1.500.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="w-1/3 bg-white drop-shadow-2xl rounded-xl p-6">
                <div class="flex justify-between items-center mb-2">
                    <p class="text-biru-font font-semibold"> Transaksi </p>
                    <input class="text-white w-24 bg-biru rounded-full px-4 py-1" placeholder="Search..." />
                </div>
                <div>
                    <table class="text-sm my-7 rounded-full w-full py-4 text-center justify-between">
                        <tbody>
                            <tr class="hover:bg-abu-font mt-2">
                                <td class="justify-left py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2">RP. 1.500.000</td>
                                <td class="py-2 font-semibold text-hijau">Complete</td>
                            </tr>

                            <tr class="hover:bg-abu-font mt-2">
                                <td class="justify-left py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2">RP. 1.500.000</td>
                                <td class="py-2 font-semibold text-hijau">Complete</td>
                            </tr>

                            <tr class="hover:bg-abu-font mt-2">
                                <td class="justify-left py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2">RP. 1.500.000</td>
                                <td class="py-2 font-semibold text-merah">Failed</td>
                            </tr>

                            <tr class="hover:bg-abu-font mt-2">
                                <td class="justify-left py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2">RP. 1.500.000</td>
                                <td class="py-2 font-semibold text-abu">Pending</td>
                            </tr>

                            <tr class="hover:bg-abu-font mt-2">
                                <td class="justify-left py-2 flex items-center gap-2">
                                    <img src="img/airpod.png" class="w-8 h-8 rounded-full" alt="" />
                                    <p> iPods Pro </p>
                                </td>
                                <td class="py-2">RP. 1.500.000</td>
                                <td class="py-2 font-semibold text-hijau">Complete</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
