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
                    <h1 class="px-4 py-2 text-2x1 font-bold text-slate-200 ml-4">Peminjaman</h1>
                </div>

                <form>
                    <div class="grid grid-cols-2 gap-5">
                        <div class="flex flex-col mb-5">
                            <label for="id_barang" class="font-bold text-slate-700 mb-2.5">ID Barang</label>
                            <input type="text" id="id_barang" name="id_barang" class="p-3 border border-black text-base rounded-md">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="id_transaksi" class="font-bold text-slate-700 mb-2.5">ID Transaksi</label>
                            <input type="text" id="id_transaksi" name="id_transaksi" class="p-3 border border-black text-base rounded-md">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="nama_barang" class="font-bold text-slate-700 mb-2.5">Nama Barang</label>
                            <input type="text" id="nama_barang" name="nama_barang" class="p-3 border border-black text-base rounded-md">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="nama_peminjam" class="font-bold text-slate-700 mb-2.5">Nama Peminjam</label>
                            <input type="text" id="nama_peminjam" name="nama_peminjam" class="p-3 border border-black text-base rounded-md">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="jumlah_barang" class="font-bold text-slate-700 mb-2.5">Jumlah Barang</label>
                            <input type="number" id="jumlah_barang" name="jumlah_barang" class="p-3 border border-black text-base rounded-md">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="tanggal_peminjaman" class="font-bold text-slate-700 mb-2.5">Tanggal Peminjaman</label>
                            <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" class="p-3 border border-black text-base rounded-md">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="status_barang" class="font-bold text-slate-700 mb-2.5">Status Barang</label>
                            <input type="text" id="status_barang" name="status_barang" class="p-3 border border-black text-base rounded-md">
                        </div>
                        <div class="flex flex-col mb-5">
                            <label for="tanggal_pengembalian" class="font-bold text-slate-700 mb-2.5">Tanggal Pengembalian</label>
                            <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" class="p-3 border border-black text-base rounded-md">
                        </div>
                    </div>
                    <button type="submit" class="bg-red-400 text-white font-bold py-3 px-6 rounded-lg hover:bg-red-500 transition duration-300">SIMPAN</button>
                </form>
            </div>
        </div>
    </h1>
</div>
@endsection