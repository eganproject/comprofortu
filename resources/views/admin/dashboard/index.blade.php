@extends('layouts.admin.main')

@section('title', 'Dashboard - AdminPanel')

@section('content')
    <h2 class="text-2xl font-bold text-white mb-6">Dashboard</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/10 shadow-lg hover:border-purple-400/50 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm font-medium text-gray-300">Total Pendapatan</p>
                    <p class="text-3xl font-bold text-white mt-1">Rp 12.5M</p>
                </div>
                <div class="bg-purple-500/20 p-2 rounded-lg">
                    <i data-lucide="dollar-sign" class="w-6 h-6 text-purple-300"></i>
                </div>
            </div>
            <p class="text-xs text-green-400 mt-4 flex items-center gap-1">
                <i data-lucide="trending-up" class="w-4 h-4"></i>
                <span>+15.2% dari bulan lalu</span>
            </p>
        </div>

        <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/10 shadow-lg hover:border-blue-400/50 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm font-medium text-gray-300">Total Penjualan</p>
                    <p class="text-3xl font-bold text-white mt-1">+3,450</p>
                </div>
                <div class="bg-blue-500/20 p-2 rounded-lg">
                    <i data-lucide="shopping-bag" class="w-6 h-6 text-blue-300"></i>
                </div>
            </div>
            <p class="text-xs text-green-400 mt-4 flex items-center gap-1">
                <i data-lucide="trending-up" class="w-4 h-4"></i>
                <span>+8.5% dari bulan lalu</span>
            </p>
        </div>

        <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/10 shadow-lg hover:border-green-400/50 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm font-medium text-gray-300">Pelanggan Baru</p>
                    <p class="text-3xl font-bold text-white mt-1">+72</p>
                </div>
                <div class="bg-green-500/20 p-2 rounded-lg">
                    <i data-lucide="user-plus" class="w-6 h-6 text-green-300"></i>
                </div>
            </div>
            <p class="text-xs text-red-400 mt-4 flex items-center gap-1">
                <i data-lucide="trending-down" class="w-4 h-4"></i>
                <span>-2.1% dari bulan lalu</span>
            </p>
        </div>

        <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/10 shadow-lg hover:border-yellow-400/50 transition-all duration-300">
            <div class="flex justify-between items-start">
                <div>
                    <p class="text-sm font-medium text-gray-300">Pesanan Pending</p>
                    <p class="text-3xl font-bold text-white mt-1">12</p>
                </div>
                <div class="bg-yellow-500/20 p-2 rounded-lg">
                    <i data-lucide="loader-2" class="w-6 h-6 text-yellow-300"></i>
                </div>
            </div>
            <p class="text-xs text-gray-400 mt-4 flex items-center gap-1">
                <i data-lucide="info" class="w-4 h-4"></i>
                <span>Perlu segera diproses</span>
            </p>
        </div>
    </div>

    <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/10 shadow-lg">
            <h3 class="text-lg font-semibold text-white mb-4">Transaksi Terbaru</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="border-b border-purple-800/50">
                        <tr>
                            <th class="p-3 font-semibold text-gray-300">Invoice</th>
                            <th class="p-3 font-semibold text-gray-300">Pelanggan</th>
                            <th class="p-3 font-semibold text-gray-300">Tanggal</th>
                            <th class="p-3 font-semibold text-gray-300">Status</th>
                            <th class="p-3 font-semibold text-gray-300 text-right">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-purple-900/30 hover:bg-purple-500/10">
                            <td class="p-3 font-mono">#INV1234</td>
                            <td class="p-3">Budi Santoso</td>
                            <td class="p-3">18 Jul 2025</td>
                            <td class="p-3"><span class="bg-green-500/20 text-green-300 px-2 py-1 text-xs rounded-full">Selesai</span></td>
                            <td class="p-3 text-right font-medium text-white">Rp 2.500.000</td>
                        </tr>
                        <tr class="border-b border-purple-900/30 hover:bg-purple-500/10">
                            <td class="p-3 font-mono">#INV1235</td>
                            <td class="p-3">Citra Lestari</td>
                            <td class="p-3">18 Jul 2025</td>
                            <td class="p-3"><span class="bg-yellow-500/20 text-yellow-300 px-2 py-1 text-xs rounded-full">Pending</span></td>
                            <td class="p-3 text-right font-medium text-white">Rp 850.000</td>
                        </tr>
                        <tr class="border-b border-purple-900/30 hover:bg-purple-500/10">
                            <td class="p-3 font-mono">#INV1236</td>
                            <td class="p-3">Ahmad Dahlan</td>
                            <td class="p-3">17 Jul 2025</td>
                            <td class="p-3"><span class="bg-green-500/20 text-green-300 px-2 py-1 text-xs rounded-full">Selesai</span></td>
                            <td class="p-3 text-right font-medium text-white">Rp 5.200.000</td>
                        </tr>
                        <tr class="hover:bg-purple-500/10">
                            <td class="p-3 font-mono">#INV1237</td>
                            <td class="p-3">Dewi Anggraini</td>
                            <td class="p-3">16 Jul 2025</td>
                            <td class="p-3"><span class="bg-red-500/20 text-red-300 px-2 py-1 text-xs rounded-full">Dibatalkan</span></td>
                            <td class="p-3 text-right font-medium text-white">Rp 300.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/10 shadow-lg">
            <h3 class="text-lg font-semibold text-white mb-4">Aktivitas Terbaru</h3>
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <div class="bg-purple-500/20 p-2 rounded-full mt-1"><i data-lucide="user-plus" class="w-4 h-4 text-purple-300"></i></div>
                    <div>
                        <p class="text-sm text-white">Pelanggan baru <span class="font-bold">Rina Amelia</span> mendaftar.</p>
                        <p class="text-xs text-gray-400">15 menit yang lalu</p>
                    </div>
                </li>
                    <li class="flex items-start gap-3">
                    <div class="bg-blue-500/20 p-2 rounded-full mt-1"><i data-lucide="package-check" class="w-4 h-4 text-blue-300"></i></div>
                    <div>
                        <p class="text-sm text-white">Pesanan <span class="font-bold">#INV1235</span> telah dikirim.</p>
                        <p class="text-xs text-gray-400">1 jam yang lalu</p>
                    </div>
                </li>
                    <li class="flex items-start gap-3">
                    <div class="bg-green-500/20 p-2 rounded-full mt-1"><i data-lucide="server" class="w-4 h-4 text-green-300"></i></div>
                    <div>
                        <p class="text-sm text-white">Server di-restart untuk pembaruan sistem.</p>
                        <p class="text-xs text-gray-400">3 jam yang lalu</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection