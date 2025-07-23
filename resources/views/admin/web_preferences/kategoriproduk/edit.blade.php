@extends('layouts.admin.main') {{-- Pastikan ini menunjuk ke layout utama yang benar --}}

@section('title', 'Edit Kategori - AdminPanel')

@push('cssOnPage')
    {{-- CSS untuk Quill Editor --}}
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <style>
        /* Menyesuaikan Quill Editor dengan tema terang */
        .ql-toolbar {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
            border-color: #cbd5e1 !important;
            /* slate-300 */
        }

        .ql-container {
            border-bottom-left-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
            border-color: #cbd5e1 !important;
            /* slate-300 */
            background-color: #ffffff;
            color: #1e293b;
            /* slate-800 */
            min-height: 250px;
        }

        .ql-editor {
            font-family: 'Inter', sans-serif;
        }

        .ql-editor.ql-blank::before {
            color: #94a3b8;
            /* slate-400 */
            font-style: normal;
        }
    </style>
@endpush

@section('content')
    <h2 class="text-2xl font-bold text-slate-800 mb-6">Edit Kategori</h2>

    <div x-data="{ image1Preview: null, image2Preview: null }"
        class="bg-white/70 backdrop-blur-lg p-6 md:p-8 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.1)]">
        <form action="/admin/web-preferences/kategori/{{ $kategori->id }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="modul" class="block mb-2 text-sm font-medium text-slate-700">Nama Kategori</label>
                <input
                    class="bg-white border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    type="text" name="nama_kategori" id="nama_kategori" placeholder="Masukkan Nama Kategori" value="{{ old('nama_kategori', $kategori->nama_kategori) }}" required/>
                @error('nama_kategori')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <label for="layout" class="block mb-2 text-sm font-medium text-slate-700">Layout Tampilan</label>
                <select id="layout" name="layout"
                    class="bg-white border border-slate-300 text-slate-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="2" {{ old('layout', $kategori->layout) == '2' ? 'selected' : '' }}>2 Layout</option>
                    <option value="3" {{ old('layout', $kategori->layout) == '3' ? 'selected' : '' }}>3 Layout</option>
                </select>
                @error('layout')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>



            <div class="flex items-center gap-4 pt-4">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-5 rounded-lg transition-all duration-300">
                    Simpan
                </button>
                <a href="/admin/web-preferences/kategori"
                    class="bg-slate-200 hover:bg-slate-300 text-slate-700 font-medium py-2 px-5 rounded-lg transition-all duration-300">
                    Batal
                </a>
            </div>

        </form>
    </div>
@endsection

