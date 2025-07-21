@extends('layouts.admin.main')

@section('title', 'Tambah Hero Image - AdminPanel')
@push('cssOnPage')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
@endpush
@section('content')
    <h2 class="text-2xl font-bold text-white mb-6">Tambah Hero Image Baru</h2>

    <div x-data="{ image1Preview: null, image2Preview: null }" class="bg-white/10 backdrop-blur-md p-6 md:p-8 rounded-xl border border-white/10 shadow-lg">
        <form action="/admin/web-preferences/hero" method="POST" enctype="multipart/form-data" class="space-y-6" id="article-form">
            @csrf

            <!-- Modul Input -->
            <div>
                <label for="modul" class="block mb-2 text-sm font-medium text-gray-300">Pilih Modul</label>
                <select id="modul" name="modul"
                    class="bg-white/5 border border-white/20 text-white text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                    required>
                    <option value="" disabled {{ old('modul') ? '' : 'selected' }} class="bg-gray-800 text-gray-400">
                        -- Pilih salah satu modul --</option>
                    <option value="index" {{ old('modul') == 'index' ? 'selected' : '' }} class="bg-gray-800 text-white">
                        Index / Beranda</option>
                    <option value="about" {{ old('modul') == 'about' ? 'selected' : '' }} class="bg-gray-800 text-white">
                        About Us</option>
                    <option value="service" {{ old('modul') == 'service' ? 'selected' : '' }}
                        class="bg-gray-800 text-white">Service</option>
                    <option value="blog" {{ old('modul') == 'blog' ? 'selected' : '' }} class="bg-gray-800 text-white">
                        Blog</option>
                </select>
                @error('modul')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>
            <!-- Text Input -->
             <div class="form-group">
                    <label for="content">Konten Artikel</label>
                    {{-- Input tersembunyi ini akan diisi oleh Quill secara otomatis --}}
                    <input type="hidden" name="content" id="content">
                    {{-- Elemen div ini akan diubah menjadi Quill Editor --}}
                    <div id="editor-container" style="height: 300px;"></div>
                </div>
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-300">Teks Deskripsi</label>
               
                {{-- <textarea id="text" name="text" rows="4"
                    class="bg-white/5 border border-white/20 text-white text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                    placeholder="Tulis deskripsi singkat di sini...">{{ old('text') }}</textarea> --}}
                @error('text')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image 1 Input -->
            <div>
                <label for="image_1" class="block mb-2 text-sm font-medium text-gray-300">Gambar Latar (Wajib)</label>
                <!-- Preview Container -->
                <div
                    class="mt-2 w-full max-w-sm h-40 rounded-lg border-2 border-dashed border-white/20 flex items-center justify-center bg-white/5 overflow-hidden">
                    <template x-if="!image1Preview">
                        <div class="text-center text-gray-400">
                            <i data-lucide="image" class="w-10 h-10 mx-auto mb-2 opacity-50"></i>
                            <p>Pratinjau Gambar Latar</p>
                        </div>
                    </template>
                    <template x-if="image1Preview">
                        <img :src="image1Preview" alt="Pratinjau Gambar Latar" class="w-full h-full object-cover">
                    </template>
                </div>
                <input type="file" id="image_1" name="image_1"
                    class="mt-4 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-600/50 file:text-purple-200 hover:file:bg-purple-600/70"
                    required @change="image1Preview = URL.createObjectURL($event.target.files[0])">
                <p class="mt-1 text-xs text-gray-400">PNG, JPG, WEBP, SVG (MAX. 2MB). Rekomendasi rasio 16:9.</p>
                @error('image_1')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image 2 Input with Preview -->
            <div>
                <label for="image_2" class="block mb-2 text-sm font-medium text-gray-300">Gambar Isometrik
                    (Opsional)</label>
                <!-- Preview Container -->
                <div
                    class="mt-2 w-full max-w-sm h-40 rounded-lg border-2 border-dashed border-white/20 flex items-center justify-center bg-white/5 overflow-hidden">
                    <template x-if="!image2Preview">
                        <div class="text-center text-gray-400">
                            <i data-lucide="image" class="w-10 h-10 mx-auto mb-2 opacity-50"></i>
                            <p>Pratinjau Gambar Isometrik</p>
                        </div>
                    </template>
                    <template x-if="image2Preview">
                        <img :src="image2Preview" alt="Pratinjau Gambar Isometrik" class="w-full h-full object-cover">
                    </template>
                </div>
                <input type="file" id="image_2" name="image_2"
                    class="mt-4 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-600/50 file:text-purple-200 hover:file:bg-purple-600/70"
                    @change="image2Preview = URL.createObjectURL($event.target.files[0])">
                <p class="mt-1 text-xs text-gray-400">PNG, JPG, WEBP, SVG (MAX. 2MB). Rekomendasi rasio 4:3 atau 1:1.</p>
                @error('image_2')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4 pt-4">
                <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-5 rounded-lg transition-all duration-300">
                    Simpan
                </button>
                <a href="/admin/web-preferences/hero"
                    class="bg-gray-600/50 hover:bg-gray-600/80 text-gray-200 font-medium py-2 px-5 rounded-lg transition-all duration-300">
                    Batal
                </a>
            </div>

        </form>
    </div>
@endsection

@push('jsOnPage')
    {{-- JS untuk Quill --}}
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    <script>
        // Inisialisasi Quill Editor
        const quill = new Quill('#editor-container', {
            theme: 'snow', // 'snow' adalah tema standar dengan toolbar
            modules: {
                toolbar: [
                    [{
                        'header': [1, 2, 3, false]
                    }],
                    [{
                        'font': []
                    }],
                    [{
                        'size': ['small', false, 'large', 'huge']
                    }], // Dropdown ukuran font
                    ['bold', 'italic', 'underline'],
                    [{
                        'list': 'ordered'
                    }, {
                        'list': 'bullet'
                    }],
                    [{
                        'align': []
                    }],
                    ['link', 'image'],
                    ['clean'] // Tombol untuk menghapus format
                ]
            }
        });

        // Menghubungkan Quill dengan Form
        const form = document.querySelector('#article-form');
        const contentInput = document.querySelector('#content');

        form.addEventListener('submit', function(event) {
            // Saat form disubmit, ambil konten HTML dari Quill...
            const htmlContent = quill.root.innerHTML;

            // ...lalu masukkan ke dalam input 'content' yang tersembunyi.
            contentInput.value = htmlContent;

            // Lanjutkan proses submit form
        });
    </script>
@endpush
