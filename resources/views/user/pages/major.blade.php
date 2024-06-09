@extends('user.layouts.dashboard')
@section('page')
Fakultas
@endsection
@section('contents')
<div class="flex flex-col bg-white">
    <div class="flex flex-col w-full bg-red-400 max-md:max-w-full">
        <div class="flex gap-5 justify-between items-center px-20 py-6 w-full text-2xl font-bold whitespace-nowrap bg-white shadow-sm max-md:flex-wrap max-md:px-5 max-md:max-w-full">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/2b8c00694baae81531e3f0ae99f1029951cda0012d3eacd7a15cb8742d6dfb29?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="shrink-0 self-stretch max-w-full aspect-[2.27] w-[109px]" />
            <div class="flex gap-5 self-stretch my-auto text-slate-700 max-md:flex-wrap max-md:max-w-full">
                <div>Beranda</div>
                <div class="text-red-400">Fakultas</div>
                <div>Barang</div>
                <div class="flex-auto">Peminjaman</div>
            </div>
            <div class="flex gap-3.5 self-stretch my-auto">
                <div class="justify-center px-6 py-2.5 rounded-3xl border-2 border-solid border-slate-700 text-slate-700 max-md:px-5">
                    Masuk
                </div>
                <div class="justify-center px-7 py-2.5 text-white bg-red-400 rounded-3xl max-md:px-5">
                    Daftar
                </div>
            </div>
        </div>
        <div class="flex z-10 flex-col self-center mt-32 mb-0 w-full max-w-[987px] max-md:mt-10 max-md:mb-2.5 max-md:max-w-full">
            <div class="self-center ml-24 text-3xl text-center text-white">
                Fasilitas Pada Setiap Fakultas
            </div>
            <div class="self-end mt-16 mr-16 text-xl font-medium text-center text-white max-md:mt-10 max-md:mr-2.5 max-md:max-w-full">
                Universitas Udayana telah terintegrasi dengan Sistem Informasi Inventaris Laboratorium untuk mengoptimalkan pengelolaaninventarisnya. Melalui platform ini, fakultas dapat dengan mudah mengakses daftar lengkap alat dan bahan dari laboratorium-laboratorium yang dimilikinya, termasuk Laboratorium Kimia, Biologi, Fisika, dan Komputer.
            </div>
            <div class="mt-56 max-md:mt-10 max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                    <div class="flex flex-col w-[62%] max-md:ml-0 max-md:w-full">
                        <div class="grow max-md:mt-10 max-md:max-w-full">
                            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                                <div class="flex flex-col w-2/5 max-md:ml-0 max-md:w-full">
                                    <div class="flex justify-center items-center px-2 mx-auto bg-gray-600 rounded-2xl h-[164px] w-[164px] max-md:mt-10">
                                        <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/e4b4ce30a295608d4e5f980aa07fda98d596fe3c2d8c21fab7372dead6b8bdaf?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4b4ce30a295608d4e5f980aa07fda98d596fe3c2d8c21fab7372dead6b8bdaf?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4b4ce30a295608d4e5f980aa07fda98d596fe3c2d8c21fab7372dead6b8bdaf?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4b4ce30a295608d4e5f980aa07fda98d596fe3c2d8c21fab7372dead6b8bdaf?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4b4ce30a295608d4e5f980aa07fda98d596fe3c2d8c21fab7372dead6b8bdaf?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4b4ce30a295608d4e5f980aa07fda98d596fe3c2d8c21fab7372dead6b8bdaf?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4b4ce30a295608d4e5f980aa07fda98d596fe3c2d8c21fab7372dead6b8bdaf?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/e4b4ce30a295608d4e5f980aa07fda98d596fe3c2d8c21fab7372dead6b8bdaf?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="aspect-square w-[150px]" />
                                    </div>
                                </div>
                                <div class="flex flex-col ml-5 w-3/5 max-md:ml-0 max-md:w-full">
                                    <div class="self-stretch my-auto text-3xl font-bold text-black max-md:mt-10">
                                        Matematika <br />
                                        dan Ilmu Pengetahuan Alam
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[38%] max-md:ml-0 max-md:w-full">
                        <div class="flex grow gap-5 font-bold whitespace-nowrap max-md:mt-10">
                            <div class="justify-center items-center px-16 text-7xl text-center text-white bg-gray-600 rounded-2xl h-[164px] w-[164px] max-md:px-5 max-md:text-4xl">
                                8
                            </div>
                            <div class="flex-auto my-auto text-3xl text-black">
                                Fasilitas
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="self-center px-5 mt-44 w-full max-w-[1308px] max-md:mt-10 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
            <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="object-cover absolute inset-0 size-full" />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5">
                        <div class="mt-32 text-2xl font-bold text-white max-md:mt-10">
                            High Pressure Liquid Chromatography (HPLC)
                        </div>
                        <div class="justify-center self-center px-10 py-5 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                            PINJAM
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="object-cover absolute inset-0 size-full" />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5">
                        <div class="mt-32 text-2xl font-bold text-white max-md:mt-10">
                            High Pressure Liquid Chromatography (HPLC)
                        </div>
                        <div class="justify-center self-center px-10 py-5 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                            PINJAM
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="object-cover absolute inset-0 size-full" />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5">
                        <div class="mt-32 text-2xl font-bold text-white max-md:mt-10">
                            High Pressure Liquid Chromatography (HPLC)
                        </div>
                        <div class="justify-center self-center px-10 py-5 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                            PINJAM
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="object-cover absolute inset-0 size-full" />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5">
                        <div class="mt-32 text-2xl font-bold text-white max-md:mt-10">
                            High Pressure Liquid Chromatography (HPLC)
                        </div>
                        <div class="justify-center self-center px-10 py-5 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                            PINJAM
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="self-center px-5 mt-12 w-full max-w-[1308px] max-md:mt-10 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
            <div class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="object-cover absolute inset-0 size-full" />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5">
                        <div class="mt-32 text-2xl font-bold text-white max-md:mt-10">
                            High Pressure Liquid Chromatography (HPLC)
                        </div>
                        <div class="justify-center self-center px-10 py-5 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                            PINJAM
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="object-cover absolute inset-0 size-full" />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5">
                        <div class="mt-32 text-2xl font-bold text-white max-md:mt-10">
                            High Pressure Liquid Chromatography (HPLC)
                        </div>
                        <div class="justify-center self-center px-10 py-5 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                            PINJAM
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="object-cover absolute inset-0 size-full" />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5">
                        <div class="mt-32 text-2xl font-bold text-white max-md:mt-10">
                            High Pressure Liquid Chromatography (HPLC)
                        </div>
                        <div class="justify-center self-center px-10 py-5 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                            PINJAM
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <div class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img loading="lazy" srcSet="https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/4963245c9ca4bfbc8b407b48e33b2560b157a1c6e50ae61aebeeb8e36889a61d?apiKey=0c86980da75849aa9c41af2c3a1e016c&" class="object-cover absolute inset-0 size-full" />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5">
                        <div class="mt-32 text-2xl font-bold text-white max-md:mt-10">
                            High Pressure Liquid Chromatography (HPLC)
                        </div>
                        <div class="justify-center self-center px-10 py-5 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10">
                            PINJAM
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection