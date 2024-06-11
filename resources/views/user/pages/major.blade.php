@extends('user.layouts.dashboard')
@section('page')
    Fakultas
@endsection
@section('contents')
    <div class="flex flex-col w-full h-full">
        <div
            class="w-full h-[725px] relative bg-[#f25e5e] text-white flex flex-col justify-center items-center text-center gap-7 py-4">
            <p class="font-rhodium text-[28px] font-bold">
                Fasilitas Pada Setiap Fakultas
            </p>
            <p class="text-xl w-[680px]">
                Universitas Udayana telah terintegrasi dengan Sistem Informasi Inventaris Laboratorium untuk
                mengoptimalkan pengelolaan inventarisnya. Melalui platform ini, fakultas dapat dengan mudah
                mengakses daftar lengkap alat dan bahan dari laboratorium-laboratorium yang dimilikinya,
                termasuk Laboratorium Kimia, Biologi, Fisika, dan Komputer.
            </p>
            <div
                class="w-[88%] h-[244px] absolute top-[597.5px] z-10 grid grid-cols-2 px-16 py-10 rounded-[40px] shadow-lg bg-white">
                <div class="flex gap-16">
                    <div class="w-[164px] h-[164px] rounded-2xl bg-[#515769] flex justify-center items-center">
                        <img class="w-[150px] h-[150px]" src="/assets/img/logo-fmipa-(1)-1.png" alt="">
                    </div>
                    <p class="w-[300px] flex items-center text-[32px] font-bold text-black text-left">
                        Matematika dan Ilmu Pengetahuan Alam
                    </p>
                </div>
                <div class="border-l-4 border-slate-300 px-16 flex gap-16">
                    <div
                        class="w-[164px] h-[164px] rounded-2xl bg-[#515769] font-bold text-[96px] flex items-center justify-center">
                        8
                    </div>
                    <span class="flex items-center text-[48px] font-bold text-black text-left">
                        Fasilitas
                    </span>
                </div>
            </div>
        </div>
        <div class="w-full h-full grid grid-cols-4 px-24 pt-48 pb-24 gap-12">
            @for ($i = 0; $i < 8; $i++)
                <div class="w-[294px] h-[436px] relative flex flex-col justify-center items-center">
                    <img src="assets\img\laboratory-worker-examining-substance-petri-dish-while-conducting-coronavirus-research-1.jpeg"
                        class="w-[294px] h-[436px] rounded-2xl object-cover" />
                    <div class="w-[294px] h-[436px] absolute rounded-2xl flex flex-col items-center justify-center pt-24 gap-16"
                        style="background: linear-gradient(to bottom, rgba(140,54,54,0) 5%, #f25e5e 92.5%);">
                        <p class="w-[238px] z-10 text-2xl font-bold text-center text-white">
                            Laboratorium Kimia Program Studi Kimia
                            <br><br>
                            <span class="font-normal">
                                Jl. Goa Gong, Bukit Jimbaran
                            </span>
                        </p>
                        <a
                            class="h-[50px] p-3 z-10 rounded-3xl bg-white hover:bg-[#343C53] flex justify-center items-center text-[20px] text-[#f25e5e]">
                            SELENGKAPNYA
                        </a>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
