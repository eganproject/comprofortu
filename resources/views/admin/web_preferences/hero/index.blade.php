@extends('layouts.admin.main') {{-- Pastikan ini menunjuk ke layout utama yang benar --}}

@section('title', 'Manajemen Hero Image - AdminPanel')

@section('content')
    {{-- Alpine.js component wrapper --}}
    <div x-data="{
        showSuccessModal: {{ session('success') ? 'true' : 'false' }},
        showDeleteModal: false,
         showErrorModal: {{ session('error') ? 'true' : 'false' }},
        deleteFormAction: ''
    }" x-init="setTimeout(() => showSuccessModal = false, 5000)">



        {{-- Main Content Table --}}
        <div
            class="bg-white/70 backdrop-blur-lg rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.1)] overflow-hidden min-h-[500px]">
            <div class="flex justify-between items-center p-6">
                <h2 class="text-2xl font-bold text-slate-800">Manajemen Hero Image</h2>
                <a href="/admin/web-preferences/hero/create"
                    class="bg-black hover:bg-gray-800 hover:border hover:border-white text-white hover:text-gray-100 font-bold py-2 px-4 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-md">
                    <i data-lucide="plus" class="w-5 h-5"></i>
                    <span>Tambah Baru</span>
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-slate-500">
                    <thead class="text-xs text-slate-700 uppercase bg-slate-50/50">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Modul</th>
                            <th scope="col" class="px-6 py-3">Teks</th>
                            <th scope="col" class="px-6 py-3">Gambar Latar</th>
                            <th scope="col" class="px-6 py-3">Gambar Isometrik</th>
                            <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($heroImages as $image)
                            <tr class="bg-transparent border-b border-slate-200/80 hover:bg-slate-50/50 transition-colors">
                                <td class="px-6 py-4 text-slate-900">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 font-medium text-slate-900">{{ $image->modul }}</td>
                                <td class="px-6 py-4 text-slate-600">{{ Str::limit($image->text, 50) }}</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('storage/' . $image->image_1) }}"
                                        alt="Image 1 for {{ $image->modul }}"
                                        class="w-24 h-12 object-cover rounded-md border border-slate-200">
                                </td>
                                <td class="px-6 py-4">
                                    @if ($image->image_2)
                                        <img src="{{ asset('storage/' . $image->image_2) }}"
                                            alt="Image 2 for {{ $image->modul }}"
                                            class="w-24 h-12 object-cover rounded-md border border-slate-200">
                                    @else
                                        <span class="text-slate-400">-</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center items-center gap-4">
                                        <a href="/admin/web-preferences/hero/{{ $image->id }}"
                                            class="font-medium text-blue-600 hover:text-blue-800 transition-colors"
                                            title="Edit">
                                            <i data-lucide="edit" class="w-5 h-5"></i>
                                        </a>
                                        <button type="button"
                                            @click.prevent="deleteFormAction = '/admin/web-preferences/hero/{{ $image->id }}'; showDeleteModal = true"
                                            class="font-medium text-red-500 hover:text-red-700 transition-colors"
                                            title="Hapus">
                                            <i data-lucide="trash-2" class="w-5 h-5"></i>
                                        </button>
                                        {{-- Form dihapus dari sini untuk UI yang lebih bersih, logikanya ditangani oleh AlpineJS --}}
                                        <form id="delete-form-{{ $image->id }}"
                                            action="/admin/web-preferences/hero/{{ $image->id }}" method="POST"
                                            class="hidden">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center p-6 text-slate-500">
                                    Belum ada data hero image.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div x-show="showSuccessModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50"
            style="display: none;">
            <div @click.away="showSuccessModal = false"
                class="bg-white rounded-xl shadow-xl w-full max-w-md mx-4 p-6 text-center">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-4">
                    <i data-lucide="check" class="w-8 h-8 text-green-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-2">Berhasil!</h3>
                <p class="text-slate-600">{{ session('success') }}</p>
                <button @click="showSuccessModal = false"
                    class="mt-6 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 w-full">
                    Tutup
                </button>
            </div>
        </div>

        <div x-show="showDeleteModal" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50"
            style="display: none;">
            <div @click.away="showDeleteModal = false"
                class="bg-white rounded-xl shadow-xl w-full max-w-md mx-4 p-6 text-center">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-100 mb-4">
                    <i data-lucide="alert-triangle" class="w-8 h-8 text-red-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-2">Anda Yakin?</h3>
                <p class="text-slate-600">Data yang telah dihapus tidak dapat dikembalikan lagi. Lanjutkan untuk menghapus
                    data ini secara permanen.</p>
                <div class="mt-6 flex justify-center gap-4">
                    <button @click="document.querySelector(`form[action='${deleteFormAction}']`).submit()"
                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 w-1/2">
                        Ya, Hapus
                    </button>
                    <button @click="showDeleteModal = false"
                        class="bg-slate-200 hover:bg-slate-300 text-slate-700 font-medium py-2 px-6 rounded-lg transition-all duration-300 w-1/2">
                        Batal
                    </button>
                </div>
            </div>
        </div>

         <div x-show="showErrorModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50"
            style="display: none;">
            <div @click.away="showErrorModal = false"
                class="bg-white rounded-xl shadow-xl w-full max-w-md mx-4 p-6 text-center">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-100 mb-4">
                    <i data-lucide="alert-triangle" class="w-8 h-8 text-red-600"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-2">Gagal!</h3>
                <p class="text-slate-600">{{ session('error') }}</p>
                <button @click="showErrorModal = false"
                    class="mt-6 bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 w-full">
                    Tutup
                </button>
            </div>
        </div>

    </div>
@endsection
