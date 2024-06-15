<div x-data="{ open: false }">
    <section x-show="!open" class="fixed z-50 w-[280px] h-[52px] bottom-0 right-8">
        <div class="w-4 h-4 bg-green-500 rounded-full absolute right-[-4px] top-[-6px] opacity-100 animate-ping z-[60]">
        </div>
        <div class="w-4 h-4 bg-green-500 rounded-full absolute right-[-4px] top-[-6px] opacity-100 z-[60]"></div>
        <card x-on:click="open = !open" id="hoverCart"
            class="fixed z-50 w-[280px] h-[52px] bg-[#F25E5E] rounded-t-xl bottom-0 right-8 shadow-xl opacity-50">
            <div class="h-full flex items-center justify-between px-4">
                <div class="rounded-full bg-white w-[36px] h-[36px] flex justify-center items-center">
                    <img src="/assets/img/CartShopping.png" alt="" class=" h-auto w-[24px] object-cover">
                </div>
                <div class="font-bold text-white text-xl flex items-center gap-3">
                    <p class="border-r-[3px] px-3 h-[24px]">
                        4 Bahan
                    </p>
                    <p class="h-[24px]">
                        3 Alat
                    </p>
                </div>
            </div>
        </card>
    </section>

    <section x-show="open" @click.away="open = false" x-cloak
        class="fixed z-50 w-[480px] h-[572px] rounded-2xl bottom-8 right-8 bg-[#F25E5E] shadow-xl p-6">
        <div class="w-full h-full bg-white rounded-xl shadow-lg">
            <p class="h-[72px] p-6 text-xl text-[#343C53] font-bold flex justify-between items-center sticky top-0 bg-white rounded-t-xl">
                Daftar Barang Dalam Keranjang
                <button x-on:click="open = !open" class="hover:opacity-70">
                    <img class="h-[24px] rounded-md" src="assets/img/Close.png" alt="">
                </button>
            </p>
            <div class="w-full h-[428px] p-6 pt-0 flex flex-col gap-6 overflow-x-scroll scrollbar-hide">
                @for ($i = 0; $i < 7; $i++)
                    <div class="w-full h-full flex items-center border-t-2 pt-6 gap-4">
                        <img class="w-[88px] h-[88px] rounded-xl bg-[#343C53] p-2" src="/assets/img/SIIL-Light.svg"
                            alt="">
                        <div class="flex flex-col text-lg font-bold text-[#343C53] gap-2">
                            <p>
                                High Pressure Liquid Chromatography (HPLC)
                            </p>
                            <p class="opacity-70">
                                <span class="border-r-2 border-[#343C53] pr-2">
                                    Material
                                </span>
                                <span class="px-3">
                                    Cairan
                                </span>
                            </p>
                        </div>
                        <input class="w-16 h-12 border-2 border-[#343C53] px-2 rounded-xl" type="number" name=""
                            id="" placeholder="1">
                    </div>
                @endfor
            </div>
        </div>
    </section>

</div>
<script>
    document.getElementById('hoverCart').addEventListener('mouseover', function() {
        this.style.opacity = '1';
    });

    document.getElementById('hoverCart').addEventListener('mouseout', function() {
        this.style.opacity = '0.7';
    });
</script>
