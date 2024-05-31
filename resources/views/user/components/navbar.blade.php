{{-- Navbar --}}
<nav class="fixed z-50 w-full h-[92px] shadow bg-white px-[78px] flex flex-row justify-between items-center">
    <div>
        <img class="w-[108px]" src="/assets/img/SIIL-Dark.svg" alt="SIIL Logo">
    </div>
    <ul class="flex gap-20 text-xl font-bold text-[#343C53]">
        @if(request()->routeIs('dashboard'))
        <li class="text-[#F25E5E]">
            <a href="">Beranda</a>
        </li>      
        @else
        <li class="hover:text-[#C72C2C]">
            <a href="{{ route('dashboard') }}">Beranda</a>
        </li>
        @endif
        @if(request()->routeIs('fakultas'))
        <li class="text-[#F25E5E]">
            <a href="">Fakultas</a>
        </li>      
        @else
        <li class="hover:text-[#C72C2C]">
            <a href="{{ route('fakultas') }}">Fakultas</a>
        </li>
        @endif
        @if(request()->routeIs('barang'))
        <li class="text-[#F25E5E]">
            <a href="">Barang</a>
        </li>      
        @else
        <li class="hover:text-[#C72C2C]">
            <a href="{{ route('barang') }}">Barang</a>
        </li>
        @endif
        @if(request()->routeIs('peminjaman'))
        <li class="text-[#F25E5E]">
            <a href="">Peminjaman</a>
        </li>      
        @else
        <li class="hover:text-[#C72C2C]">
            <a href="{{ route('peminjaman') }}">Peminjaman</a>
        </li>
        @endif
    </ul>
    <div class="flex gap-3">
        <button class="w-[120px] h-[36px] rounded-full border-2 border-[#343C53] text-[#343C53] text-center font-bold text-lg hover:bg-[#343C53] hover:text-white">
            Masuk
        </button>
        <button class="w-[120px] h-[36px] rounded-full border-2 border-[#F25E5E] bg-[#F25E5E] text-white text-center font-bold text-lg hover:bg-[rgb(199,44,44)] hover:border-[#C72C2C]">
            Daftar
        </button>
    </div>
</nav>