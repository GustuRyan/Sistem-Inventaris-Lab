<section x-data="{ open: false }" class="h-full w-full p-20">
    <div class="z-20 h-[640px] w-full bg-[#F25E5E] rounded-[36px] relative">
        <div class="h-full flex justify-between items-end px-20">
            <img src="/assets/img/door-of-recommend.png" alt="">
            <div class="h-full flex flex-col items-end justify-center text-end gap-12 text-white font-bold text-[44px]">
                <p>
                    Belum mengetahui apa saja diperlukan untuk praktikum?
                </p>
                <p>
                    Cari tahu dengan menggunakan sistem rekomendasi disini!
                </p>
                <button x-on:click="open = !open" class="py-2 px-4 text-2xl rounded-xl text-[#F25E5E] bg-white hover:bg-[#343C53]">
                    Lihat Lebih Lanjut
                </button>
            </div>
        </div>
    </div>
    <div id="recommendation" x-show="open" class="z-10 w-full h-full bg-[#F25E5E] p-20 rounded-b-[36px] relative top-[-32px] transition-all">
        <div class="w-full h-full shadow-xl bg-white rounded-3xl flex flex-col justify-center items-center py-16 gap-12">
            <div class="w-full h-full flex justify-between px-16">
                <img class="w-[30%] shadow-xl object-cover rounded-full" src="assets/img/recommendation-logo.png" alt="">
                <form action="" class="flex flex-col w-[65%] gap-4 text-[#343C53]">
                    <label for="helper" class="text-2xl font-bold">
                        Beritahu Kami Praktikum Apa yang Akan Anda Lakukan!
                    </label>
                    <textarea class="shadow-xl border-2 rounded-xl w-full h-full p-8 text-xl" name="helper" id="helper" placeholder="Masukan praktikum yang akan dilakukan disini!"></textarea>
                    <div class="flex justify-end">
                        <button class="py-2 px-12 text-white font-bold text-2xl bg-[#F25E5E] rounded-xl hover:bg-[#343C53]" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="w-full h-full pl-16 flex flex-col gap-8">
                <span class="font-bold text-3xl text-[#343C53]">
                    Rekomendasi Alat dan Material dari Kami
                </span>
                <div class="w-full flex overflow-x-scroll scrollbar-hide gap-12">
                    @for ($i = 0; $i < 8; $i++)
                        <div>
                            <div class="w-[264px] h-[336px] relative flex flex-col justify-center items-center">
                                <img src="assets\img\laboratory-worker-examining-substance-petri-dish-while-conducting-coronavirus-research-1.jpeg"
                                    class="w-[264px] h-[336px] rounded-2xl object-cover" />
                                <div class="w-[264px] h-[336px] absolute rounded-2xl flex flex-col items-center justify-center pt-12 gap-12"
                                    style="background: linear-gradient(to bottom, rgba(140,54,54,0) 5%, #f25e5e 92.5%);">
                                    <p class="w-[224px] z-10 text-2xl font-bold text-center text-white">
                                        High Pressure Liquid Chromatography (HPLC)
                                    </p>
                                    <a
                                        class="h-[50px] px-6 p-3 z-10 rounded-3xl bg-white hover:bg-[#343C53] flex justify-center items-center text-[20px] text-[#f25e5e]">
                                        PINJAM
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

<script>

</script>
