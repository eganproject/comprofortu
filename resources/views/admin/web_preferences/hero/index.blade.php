@extends('layouts.admin.main')

@section('title', 'Manajemen Hero Image - AdminPanel')

@section('content')
    {{-- Alpine.js component wrapper --}}
    <div x-data="{
        showSuccessModal: {{ session('success') ? 'true' : 'false' }},
        showDeleteModal: false,
        deleteFormAction: ''
    }" x-init="setTimeout(() => showSuccessModal = false, 5000)">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-white">Manajemen Hero Image</h2>
            <a href="/admin/web-preferences/hero/create"
                class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-lg shadow-purple-500/20">
                <i data-lucide="plus" class="w-5 h-5"></i>
                <span>Tambah Baru</span>
            </a>
        </div>

        {{-- Main Content Table --}}
        <div class="bg-white/10 backdrop-blur-md p-6 rounded-xl border border-white/10 shadow-lg">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left">
                    <thead class="border-b border-purple-800/50">
                        <tr>
                            <th class="p-3 font-semibold text-gray-300">Modul</th>
                            <th class="p-3 font-semibold text-gray-300">Teks</th>
                            <th class="p-3 font-semibold text-gray-300">Gambar Latar</th>
                            <th class="p-3 font-semibold text-gray-300">Gambar Isometrik</th>
                            <th class="p-3 font-semibold text-gray-300 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($heroImages as $image)
                            <tr class="border-b border-purple-900/30 hover:bg-purple-500/10 transition-colors duration-300">
                                <td class="p-3 font-medium text-white">{{ $image->modul }}</td>
                                <td class="p-3 text-gray-300">{{ Str::limit($image->text, 50) }}</td>
                                <td class="p-3">
                                    <img src="{{ asset('storage/' . $image->image_1) }}"
                                        alt="Image 1 for {{ $image->modul }}"
                                        class="w-24 h-12 object-cover rounded-md border border-white/10">
                                </td>
                                <td class="p-3">
                                    @if ($image->image_2)
                                        <img src="{{ asset('storage/' . $image->image_2) }}"
                                            alt="Image 2 for {{ $image->modul }}"
                                            class="w-24 h-12 object-cover rounded-md border border-white/10">
                                    @else
                                        <span class="text-gray-500">-</span>
                                    @endif
                                </td>
                                <td class="p-3 text-center">
                                    <div class="flex justify-center items-center gap-2">
                                        <a href="/admin/web-preferences/hero/{{ $image->id }}"
                                            class="text-blue-400 hover:text-blue-300 transition-colors" title="Edit">
                                            <i data-lucide="edit" class="w-5 h-5"></i>
                                        </a>
                                        <form id="delete-form-{{ $image->id }}"
                                            action="/admin/web-preferences/hero/{{ $image->id }}" method="POST"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                @click.prevent="deleteFormAction = '/admin/web-preferences/hero/{{ $image->id }}'; showDeleteModal = true"
                                                class="text-red-500 hover:text-red-400 transition-colors" title="Hapus">
                                                <i data-lucide="trash-2" class="w-5 h-5"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center p-6 text-gray-400">
                                    Belum ada data hero image.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Success Modal -->
        <div x-show="showSuccessModal" x-transition:enter="transition ease-in-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in-out duration-200"
            x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95"
            class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm flex items-center justify-center z-50"
            style="display: none;">
            <div @click.away="showSuccessModal = false"
                class="bg-gradient-to-br from-gray-800 to-gray-900 border border-green-500/50 rounded-xl shadow-2xl shadow-green-500/20 w-full max-w-md mx-4 p-6 text-center">
                <div
                    class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-500/20 border-2 border-green-500/50 mb-4">
                    <i data-lucide="check" class="w-8 h-8 text-green-400"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Berhasil!</h3>
                <p class="text-gray-300">{{ session('success') }}</p>
                <button @click="showSuccessModal = false"
                    class="mt-6 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 w-full">
                    Tutup
                </button>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div x-show="showDeleteModal" x-transition:enter="transition ease-in-out duration-200"
            x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in-out duration-200"
            x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95"
            class="fixed inset-0 bg-black bg-opacity-60 backdrop-blur-sm flex items-center justify-center z-50"
            style="display: none;">
            <div @click.away="showDeleteModal = false"
                class="bg-gradient-to-br from-gray-800 to-gray-900 border border-red-500/50 rounded-xl shadow-2xl shadow-red-500/20 w-full max-w-md mx-4 p-6 text-center">
                <div
                    class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-red-500/20 border-2 border-red-500/50 mb-4">
                    <i data-lucide="alert-triangle" class="w-8 h-8 text-red-400"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Anda Yakin?</h3>
                <p class="text-gray-300">Data yang telah dihapus tidak dapat dikembalikan lagi. Lanjutkan untuk menghapus
                    data ini secara permanen.</p>
                <div class="mt-6 flex justify-center gap-4">
                    <button @click="document.querySelector(`form[action='${deleteFormAction}']`).submit()"
                        class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-lg transition-all duration-300 w-1/2">
                        Ya, Hapus
                    </button>
                    <button @click="showDeleteModal = false"
                        class="bg-gray-600/50 hover:bg-gray-600/80 text-gray-200 font-medium py-2 px-6 rounded-lg transition-all duration-300 w-1/2">
                        Batal
                    </button>

                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endpush
