@extends('partial.main')
@section('content')
    <form action="{{ url('market') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div id="body " class="mx-4 my-8 md:ml-[22rem] md:mr-10 md:my-14 bg-background-color">
            <div class="mt-8">
                <div class="text-biru-font w-full drop-shadow-md">
                    <div class="rounded-t-lg text-white bg-biru-font">
                        <p class="px-8 py-4 font-bold">Tambah Barang</p>
                    </div>
                    <div class="bg-white">
                        <div class="px-8 pt-5 pb-10 block w-full">
                            <div class="block">
                                <p class="font-semibold">Nama barang*</p>
                                <input id="name" name="name" type="text" placeholder="Indomie goreng..."
                                    class="rounded-lg border border-biru-font p-2 w-full" />
                            </div>

                            <div class="block  mt-5">
                                <p class="font-semibold">Harga barang*</p>
                                <div class="flex rounded-lg border border-biru-font p-2 w-full">
                                    <p class="px-2 border-r-2
                                    ">Rp.</p>
                                    <input id="price" name="price" type="number" placeholder="5000" class="px-2" />
                                </div>
                            </div>

                            <div class="block mt-5">
                                <p class="font-semibold">Gambar barang*</p>
                                <div class="mb-3">
                                    <input
                                        class="relative m-0 block w-full min-w-0 flex-auto rounded-lg border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-white transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-biru-font file:px-3 file:py-[0.32rem] file:text-white file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-biru-font focus:shadow-text-primary focus:outline-none"
                                        type="file" id="photo" name="photo" />
                                </div>

                            </div>

                            <button type="submit" class=" mt-5 md:text-justify text-right ">
                                <p
                                    class="font-semibold bg-biru-font text-white px-6 py-2 rounded-lg hover:bg-white hover:border hover:border-biru-font transition duration-75 delay-75 ease-in hover:text-biru-font">
                                    Tambah
                                    barang</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
