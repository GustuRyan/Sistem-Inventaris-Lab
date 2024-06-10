@extends('user.layouts.dashboard')
@section('page')
    Barang
@endsection
@section('contents')
<section class="relative flex flex-col px-16 py-20 bg-white max-md:px-5">
    <div class="relative w-full mt-20 max-md:mt-10">
        <div class="absolute inset-0" style="border-radius: 48px; background: linear-gradient(77deg, rgba(242, 94, 94, 0.50) 0%, rgba(242, 94, 94, 0.25) 36.4%, rgba(242, 94, 94, 0.10) 100%);"></div>
        <img 
            loading="lazy" 
            src="assets/img/Rectangle 1.png" 
            class="w-full aspect-[2.08] max-md:max-w-full rounded-[48px]" 
            alt="Image description"
        />
        <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 flex justify-center items-center w-full max-w-7xl max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <article class="flex flex-col w-[36%] max-md:ml-0 max-md:w-full">
                    <section class="flex flex-col grow px-8 py-8 mx-auto w-full bg-white rounded-3xl shadow-lg max-md:px-5 max-md:mt-9">
                        <div class="flex gap-4 font-bold text-center text-slate-700">
                            <img loading="lazy" src="assets/img/Alat-black.svg" alt="Equipment Icon" class="shrink-0 max-w-full aspect-square w-[100px]" />
                            <div class="flex flex-col self-start mt-3">
                                <h2 class="text-[28px] font-bold">Alat Sejumlah</h2>
                                <p class="text-6xl font-bold">
                                    <span class="text-red-400">28</span> unit
                                </p>
                            </div>
                        </div>
                        <p class="mt-7 text-base text-zinc-500 font-normal">Dengan berbagai alat yang dapat dipinjamkan dan membantu anda dalam melaksanakan praktikum. Terutama berfokus kepada praktikum yang melibatkan cairan dan penggunaan laboratorium basah.</p>
                    </section>
                </article>
                <article class="flex flex-col ml-5 w-[36%] max-md:ml-0 max-md:w-full">
                    <section class="flex flex-col grow px-8 py-8 mx-auto w-full bg-white rounded-3xl shadow-lg max-md:px-5 max-md:mt-9">
                        <div class="flex gap-4 font-bold text-center text-slate-700">
                            <img loading="lazy" src="assets/img/Bahan-red.svg" alt="Materials Icon" class="shrink-0 max-w-full aspect-square w-[100px]" />
                            <div class="flex flex-col self-start mt-3">
                                <h2 class="text-[28px] font-bold">Bahan Sejumlah</h2>
                                <p class=" text-6xl font-bold">
                                    <span class="text-red-400">50</span> jenis
                                </p>
                            </div>
                        </div>
                        <p class="mt-7 text-base text-zinc-500 font-normal">Dengan berbagai bahan yang dapat dipinjamkan dan membantu anda dalam melaksanakan praktikum. Terutama berfokus kepada praktikum yang melibatkan cairan dan penggunaan laboratorium basah.</p>
                    </section>
                </article>
                <article class="flex flex-col ml-5 w-[36%] max-md:ml-0 max-md:w-full">
                    <section class="flex flex-col grow px-8 py-8 mx-auto w-full bg-white rounded-3xl shadow-lg max-md:px-5 max-md:mt-9">
                        <div class="flex gap-4 font-bold text-center text-slate-700">
                            <img loading="lazy" src="assets/img/Jam.svg" alt="Operating Hours Icon" class="shrink-0 max-w-full aspect-square w-[100px]" />
                            <div class="flex flex-col self-start mt-3">
                                <h2 class="text-[28px] font-bold">Jam Operasional</h2>
                                <p class="text-4xl font-bold">
                                    <span class="text-red-400">08.00</span> - 16.00
                                </p>
                            </div>
                        </div>
                        <p class="mt-7 text-base text-zinc-500 font-normal">Dengan berbagai alat yang dapat dipinjamkan dan membantu anda dalam melaksanakan praktikum. Terutama berfokus kepada praktikum yang melibatkan cairan dan penggunaan laboratorium basah.</p>
                    </section>
                </article>
            </div>
        </div>
    </div>

    <div class="mt-80 max-md:mt-40 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
            <article class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
                <section class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img 
                        loading="lazy" 
                        src="assets/img/Rectangle 2.png" 
                        class="object-cover absolute inset-0 size-full" 
                        alt="Image description"
                    />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5" style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                        <h3 class="mt-32 text-2xl font-bold text-white max-md:mt-10">High Pressure Liquid Chromatography (HPLC)</h3>
                        <button 
                            class="justify-center self-center px-10 py-3 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                            tabindex="0"
                        >
                            PINJAM
                        </button>
                    </div>
                </section>
            </article>
            <article class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <section class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img 
                        loading="lazy" 
                        src="assets/img/Rectangle 2.png" 
                        class="object-cover absolute inset-0 size-full" 
                        alt="Image description"
                    />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5" style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                        <h3 class="mt-32 text-2xl font-bold text-white max-md:mt-10">High Pressure Liquid Chromatography (HPLC)</h3>
                        <button 
                            class="justify-center self-center px-10 py-3 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                            tabindex="0"
                        >
                            PINJAM
                        </button>
                    </div>
                </section>
            </article>
            <article class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <section class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img 
                        loading="lazy" 
                        src="assets/img/Rectangle 2.png" 
                        class="object-cover absolute inset-0 size-full" 
                        alt="Image description"
                    />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5" style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                        <h3 class="mt-32 text-2xl font-bold text-white max-md:mt-10">High Pressure Liquid Chromatography (HPLC)</h3>
                        <button 
                            class="justify-center self-center px-10 py-3 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                            tabindex="0"
                        >
                            PINJAM
                        </button>
                    </div>
                </section>
            </article>
            <article class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <section class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img 
                        loading="lazy" 
                        src="assets/img/Rectangle 2.png" 
                        class="object-cover absolute inset-0 size-full" 
                        alt="Image description"
                    />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5" style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                        <h3 class="mt-32 text-2xl font-bold text-white max-md:mt-10">High Pressure Liquid Chromatography (HPLC)</h3>
                        <button 
                            class="justify-center self-center px-10 py-3 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                            tabindex="0"
                        >
                            PINJAM
                        </button>
                    </div>
                </section>
            </article>
        </div>
    </div>
    <div class="mt-12 max-md:mt-10 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0">
            <article class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full">
                <section class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img 
                        loading="lazy" 
                        src="assets/img/Rectangle 2.png" 
                        class="object-cover absolute inset-0 size-full" 
                        alt="Image description"
                    />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5" style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                        <h3 class="mt-32 text-2xl font-bold text-white max-md:mt-10">High Pressure Liquid Chromatography (HPLC)</h3>
                        <button 
                            class="justify-center self-center px-10 py-3 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                            tabindex="0"
                        >
                            PINJAM
                        </button>
                    </div>
                </section>
            </article>
            <article class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <section class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img 
                        loading="lazy" 
                        src="assets/img/Rectangle 2.png" 
                        class="object-cover absolute inset-0 size-full" 
                        alt="Image description"
                    />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5" style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                        <h3 class="mt-32 text-2xl font-bold text-white max-md:mt-10">High Pressure Liquid Chromatography (HPLC)</h3>
                        <button 
                            class="justify-center self-center px-10 py-3 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                            tabindex="0"
                        >
                            PINJAM
                        </button>
                    </div>
                </section>
            </article>
            <article class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <section class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img 
                        loading="lazy" 
                        src="assets/img/Rectangle 2.png" 
                        class="object-cover absolute inset-0 size-full" 
                        alt="Image description"
                    />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5" style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                        <h3 class="mt-32 text-2xl font-bold text-white max-md:mt-10">High Pressure Liquid Chromatography (HPLC)</h3>
                        <button 
                            class="justify-center self-center px-10 py-3 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                            tabindex="0"
                        >
                            PINJAM
                        </button>
                    </div>
                </section>
            </article>
            <article class="flex flex-col ml-5 w-3/12 max-md:ml-0 max-md:w-full">
                <section class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                    <img 
                        loading="lazy" 
                        src="assets/img/Rectangle 2.png" 
                        class="object-cover absolute inset-0 size-full" 
                        alt="Image description"
                    />
                    <div class="flex relative flex-col px-9 pt-20 pb-14 rounded-2xl max-md:px-5" style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                        <h3 class="mt-32 text-2xl font-bold text-white max-md:mt-10">High Pressure Liquid Chromatography (HPLC)</h3>
                        <button 
                            class="justify-center self-center px-10 py-3 mt-12 text-xl text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                            tabindex="0"
                        >
                            PINJAM
                        </button>
                    </div>
                </section>
            </article>
        </div>
    </div>
</section>
@endsection
