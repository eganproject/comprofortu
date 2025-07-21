@extends('layouts.admin.main')

@section('title', 'Edit Hero Image - AdminPanel')

@section('content')
    <h2 class="text-2xl font-bold text-white mb-6">Edit Hero Image: {{ $heroImage->modul }}</h2>

    {{-- 
    Inisialisasi x-data. 
    - image1Preview dimulai dengan path gambar yang sudah ada.
    - image2Preview juga dimulai dengan path yang ada, atau null jika tidak ada.
--}}
    <div x-data="{
        image1Preview: '{{ asset('storage/' . $heroImage->image_1) }}',
        image2Preview: '{{ $heroImage->image_2 ? asset('storage/' . $heroImage->image_2) : null }}'
    }" class="bg-white/10 backdrop-blur-md p-6 md:p-8 rounded-xl border border-white/10 shadow-lg">
        <form action="/admin/web-preferences/hero/update" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('POST')
            <input type="hidden" name="id" value="{{$heroImage->id}}" /> 
            <!-- Modul Dropdown -->
            <div>
                <label for="modul" class="block mb-2 text-sm font-medium text-gray-300">Pilih Modul</label>
                <select id="modul" name="modul"
                    class="bg-white/5 border border-white/20 text-white text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                    required>
                    <option value="index" {{ old('modul', $heroImage->modul) == 'index' ? 'selected' : '' }}
                        class="bg-gray-800 text-white">Index / Beranda</option>
                    <option value="about" {{ old('modul', $heroImage->modul) == 'about' ? 'selected' : '' }}
                        class="bg-gray-800 text-white">About Us</option>
                    <option value="service" {{ old('modul', $heroImage->modul) == 'service' ? 'selected' : '' }}
                        class="bg-gray-800 text-white">Service</option>
                    <option value="blog" {{ old('modul', $heroImage->modul) == 'blog' ? 'selected' : '' }}
                        class="bg-gray-800 text-white">Blog</option>
                </select>
                @error('modul')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Text Input -->
            <div>
                <label for="text" class="block mb-2 text-sm font-medium text-gray-300">Teks Deskripsi</label>
                <textarea id="text" name="text" rows="4"
                    class="bg-white/5 border border-white/20 text-white text-sm rounded-lg focus:ring-purple-500 focus:border-purple-500 block w-full p-2.5"
                    placeholder="Tulis deskripsi singkat di sini...">{{ old('text', $heroImage->text) }}</textarea>
                @error('text')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image 1 Input with Preview -->
            <div>
                <label for="image_1_edit" class="block mb-2 text-sm font-medium text-gray-300">Ganti Gambar Latar</label>
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
                <input type="file" id="image_1_edit" name="image_1"
                    class="mt-4 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-600/50 file:text-purple-200 hover:file:bg-purple-600/70"
                    @change="image1Preview = URL.createObjectURL($event.target.files[0])">
                <p class="mt-1 text-xs text-gray-400">Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('image_1')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Image 2 Input with Preview -->
            <div>
                <label for="image_2_edit" class="block mb-2 text-sm font-medium text-gray-300">Ganti Gambar
                    Isometrik</label>
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
                <input type="file" id="image_2_edit" name="image_2"
                    class="mt-4 block w-full text-sm text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-600/50 file:text-purple-200 hover:file:bg-purple-600/70"
                    @change="image2Preview = URL.createObjectURL($event.target.files[0])">
                <p class="mt-1 text-xs text-gray-400">Kosongkan jika tidak ingin mengubah gambar.</p>
                @error('image_2')
                    <p class="mt-2 text-sm text-red-400">{{ $message }}</p>
                @enderror
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4 pt-4">
                <button type="submit"
                    class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-5 rounded-lg transition-all duration-300">
                    Update
                </button>
                <a href="/admin/web-preferences/hero"
                    class="bg-gray-600/50 hover:bg-gray-600/80 text-gray-200 font-medium py-2 px-5 rounded-lg transition-all duration-300">
                    Batal
                </a>
            </div>

        </form>
    </div>
@endsection

@push('scripts')
    {{-- Pastikan Alpine.js dan Lucide Icons sudah di-load di layout utama Anda --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        });
    </script>
@endpush
