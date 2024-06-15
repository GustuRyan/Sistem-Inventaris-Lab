@extends('user.layouts.dashboard')
@section('page')
    Peminjaman
@endsection
@section('contents')
    <div>
        <h1 class="font-bold text-2xl">
            <div class="relative flex flex-col px-16 py-20 bg-white">
                <div class="p-20 max-md:p-5">
                    <div class="bg-red-400 text-white p-5 mb-5 rounded-lg flex items-center">
                        <div class="h-[40px] w-[40px] rounded-lg bg-slate-700"></div>
                        <h1 class="px-4 py-2 text-2x1 font-bold text-white ml-4">Peminjaman</h1>
                    </div>
                    @php
                        $user = Auth::user();
                    @endphp
                    @auth
                        <form>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="flex flex-col mb-5">
                                    <label for="tanggal_peminjaman" class="font-bold text-slate-700 mb-2.5">Nama Peminjam</label>
                                    <input type="text" id="nama" name="nama" value="{{ $user->name }}"
                                        class="p-3 border border-black text-base rounded-md">
                                </div>
                                <div class="flex flex-col mb-5">
                                    <label for="tanggal_pengembalian" class="font-bold text-slate-700 mb-2.5">Nomor Telepon
                                        Peminjam</label>
                                    <input type="text" id="tanggal_pengembalian" name="tanggal_pengembalian"
                                        value="{{ $user->phone }}" class="p-3 border border-black text-base rounded-md">
                                </div>
                                <label for="material" class="col-span-2">
                                    Daftar Bahan-Bahan Pada Keranjang
                                </label>
                                <div class="col-span-2 flex w-full overflow-x-scroll scrollbar-hide gap-8">
                                    @for ($i = 0; $i < 8; $i++)
                                        <article class="flex flex-col w-[300px] max-md:ml-0 max-md:w-full">
                                            <section
                                                class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                                                <img loading="lazy" src="/assets/img/Rectangle 2.png"
                                                    class="object-cover absolute inset-0 size-full" alt="Image description" />
                                                <div class="flex relative flex-col px-9 pb-14 rounded-2xl max-md:px-5"
                                                    style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                                                    <h3 class="mt-12 text-xl font-bold text-white max-md:mt-10">
                                                        Lithium Klorida
                                                        <br>
                                                        Padat
                                                        <br><br>
                                                        Kristal putih, digunakan dalam sintesis organik dan sebagai pengering.
                                                    </h3>
                                                    <div
                                                        class="justify-center self-center pl-12 pr-6 py-2 mt-12 text-lg text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                                                        tabindex="0">
                                                        Jumlah = <input class="w-12" type="number" value="7">
                                                    </div>
                                                </div>
                                            </section>
                                        </article>
                                    @endfor
                                </div>
                                <label for="material" class="col-span-2">
                                    Daftar Alat-Alat Pada Keranjang
                                </label>
                                <div class="col-span-2 flex w-full overflow-x-scroll scrollbar-hide gap-8">
                                    @for ($i = 0; $i < 8; $i++)
                                        <article class="flex flex-col w-[300px] max-md:ml-0 max-md:w-full">
                                            <section
                                                class="flex overflow-hidden relative flex-col grow justify-center text-center aspect-[0.67] max-md:mt-10">
                                                <img loading="lazy" src="/assets/img/Rectangle 2.png"
                                                    class="object-cover absolute inset-0 size-full" alt="Image description" />
                                                <div class="flex relative flex-col px-9 pb-14 rounded-2xl max-md:px-5"
                                                    style="background: linear-gradient(180deg, rgba(140, 54, 54, 0.00) 0%, #F25E5E 89.5%); height: 100%;">
                                                    <h3 class="mt-12 text-xl font-bold text-white max-md:mt-10">
                                                        Beaker
                                                        <br>
                                                        Pyrex
                                                        <br><br>
                                                        Kondisi Baik
                                                    </h3>
                                                    <div
                                                        class="justify-center self-center pl-12 pr-6 py-2 mt-12 text-lg text-red-400 whitespace-nowrap bg-white rounded-3xl max-md:px-5 max-md:mt-10"
                                                        tabindex="0">
                                                        Jumlah = <input class="w-12" type="number" value="7">
                                                    </div>
                                                </div>
                                            </section>
                                        </article>
                                    @endfor
                                </div>
                                <div class="flex flex-col mb-5">
                                    <label for="tanggal_peminjaman" class="font-bold text-slate-700 mb-2.5">Tanggal
                                        Peminjaman</label>
                                    <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman"
                                        class="p-3 border border-black text-base rounded-md">
                                </div>
                                <div class="flex flex-col mb-5">
                                    <label for="tanggal_pengembalian" class="font-bold text-slate-700 mb-2.5">Rencana
                                        Pengembalian</label>
                                    <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian"
                                        class="p-3 border border-black text-base rounded-md">
                                </div>
                            </div>
                            <div class="felx justify-end">

                            </div>
                            <button type="submit"
                                class="mt-5 bg-red-400 text-white text-xl font-bold py-4 px-10 rounded-lg hover:bg-red-500 transition duration-300">SIMPAN</button>
                        </form>
                    @endauth
                </div>
            </div>
        </h1>
    </div>
@endsection
