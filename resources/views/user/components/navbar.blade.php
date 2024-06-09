{{-- Navbar --}}
<nav  x-data="{ open: false }" class="fixed z-50 w-full h-[92px] shadow bg-white px-[78px] flex flex-row justify-between items-center">
    <div>
        <img class="w-[108px]" src="/assets/img/SIIL-Dark.svg" alt="SIIL Logo">
    </div>
    <ul class="flex gap-20 text-xl font-bold text-[#343C53]">
        @if (request()->routeIs('dashboard'))
            <li class="text-[#F25E5E]">
                <a href="">Beranda</a>
            </li>
        @else
            <li class="hover:text-[#C72C2C]">
                <a href="{{ route('dashboard') }}">Beranda</a>
            </li>
        @endif
        @if (request()->routeIs('fakultas'))
            <li class="text-[#F25E5E]">
                <a href="">Fakultas</a>
            </li>
        @else
            <li class="hover:text-[#C72C2C]">
                <a href="{{ route('fakultas') }}">Fakultas</a>
            </li>
        @endif
        @if (request()->routeIs('barang'))
            <li class="text-[#F25E5E]">
                <a href="">Barang</a>
            </li>
        @else
            <li class="hover:text-[#C72C2C]">
                <a href="{{ route('barang') }}">Barang</a>
            </li>
        @endif
        @if (request()->routeIs('peminjaman'))
            <li class="text-[#F25E5E]">
                <a href="">Peminjaman</a>
            </li>
        @else
            <li class="hover:text-[#C72C2C]">
                <a href="{{ route('peminjaman') }}">Peminjaman</a>
            </li>
        @endif
    </ul>
    @php
        $user = Auth::user();
    @endphp
    @guest
        <div class="flex gap-3">
            <a href="{{ route('authentication', 'login') }}"
                class="flex justify-center items-center w-[120px] h-[36px] rounded-full border-2 border-[#343C53] text-[#343C53] text-center font-bold text-lg hover:bg-[#343C53] hover:text-white">
                Masuk
            </a>
            <a href="{{ route('authentication', 'regist') }}"
                class="flex justify-center items-center w-[120px] h-[36px] rounded-full border-2 border-[#F25E5E] bg-[#F25E5E] text-white text-center font-bold text-lg hover:bg-[rgb(199,44,44)] hover:border-[#C72C2C]">
                Daftar
            </a>
        </div>
    @endguest

    @auth
        <div x-on:click="open = !open" class="group flex gap-3 bg-slate-200 rounded-full pl-4 cursor-pointer">
            <p class="flex items-center text-2xl font-bold text-[#343C53]">{{ $user->username }}</p>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <div class="relative">
                <button
                    class=" flex justify-center items-center w-[56px] h-[56px] rounded-full border-4 border-[#343C53] bg-white text-[#343C53] text-center font-bold text-lg group-hover:bg-[#343C53] hover:text-white">
                    <img class="w-[80%] h-[80%]" src="/assets/img/profile-siil.svg" alt="profile-picture">
                </button>
                <div x-show="open" class="absolute right-0 mt-3 w-44 bg-white rounded-md shadow-lg border-2 border-slate-200">
                    <a href="" class="block px-4 py-3 text-gray-800 hover:bg-slate-200">Profil</a>
                    <a href="{{ route('logout') }}" class="block px-4 py-3 text-gray-800 hover:bg-slate-200" onclick="event.preventDefault(); confirmLogout();">Keluar</a>
                </div>
            </div>
        </div>
    @endauth

</nav>

<script>
    function confirmLogout() {
        if (confirm('Apakah Anda yakin ingin keluar?')) {
            document.getElementById('logout-form').submit();
        }
    }
</script>
