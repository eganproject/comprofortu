@extends('layouts.admin.main') {{-- Pastikan ini menunjuk ke layout utama yang benar --}}

@section('title', 'Manajemen Produk - AdminPanel')
@push('cssOnPage')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
@section('content')
    {{-- Alpine.js component wrapper --}}
    <div x-data="{
        showSuccessModal: {{ session('success') ? 'true' : 'false' }},
        showDeleteModal: false,
        deleteFormAction: ''
    }" x-init="setTimeout(() => showSuccessModal = false, 5000)">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-slate-800">Manajemen Produk</h2>
            <a href="/admin/web-preferences/produk/create"
                class="bg-black hover:bg-gray-800 hover:border hover:border-white text-white hover:text-gray-100 font-bold py-2 px-4 rounded-lg transition-all duration-300 flex items-center gap-2 shadow-md">
                <i data-lucide="plus" class="w-5 h-5"></i>
                <span>Tambah Baru</span>
            </a>
        </div>

        {{-- Main Content Table --}}

        <div
            class="bg-white/70 backdrop-blur-lg rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.1)] overflow-hidden min-h-[500px]">
            <div class="p-4 flex justify-between items-center">
                <input type="text" id="customSearch" placeholder="Cari..."
                    class="border border-slate-300 rounded-lg p-2 text-sm">
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left" id="indexTable">
                    <thead class="text-xs text-slate-700 uppercase bg-slate-50/50">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Nama Produk</th>
                            <th scope="col" class="px-6 py-3">Kategori</th>
                            <th scope="col" class="px-6 py-3">Deskripsi</th>
                            <th scope="col" class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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

    </div>
@endsection

@push('jsOnPage')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>

        $(document).ready(function() {
            // Inisialisasi DataTable
            var table = $('#indexTable').DataTable({
                // AKTIFKAN SERVER-SIDE
                "processing": true, // Menampilkan indikator "processing"
                "serverSide": true, // Mengaktifkan mode server-side
                "ajax": {
                    "url": "/admin/web-preferences/produk/lists", // URL endpoint API Anda untuk mengambil data
                    "type": "POST", // atau 'GET', sesuaikan dengan backend Anda
                    "data": function(d) {
                        d._token = '{{ csrf_token() }}';
                    }
                },

                // MENGHILANGKAN FITUR BAWAAN DATATABLES
                "dom": 't<"flex justify-between items-center p-4"ip>', // 't' = tabel, 'i' = info, 'p' = pagination
                "pagingType": "simple_numbers", // Tipe pagination
                "searching": true, // Tetap aktifkan searching, tapi kita kontrol dari input sendiri

                // DEFINISIKAN KOLOM DARI DATA JSON SERVER
                "columns": [{
                        "data": "no",
                        "orderable": false,
                        "searchable": false,
                        "className": "px-6 py-4 font-medium text-slate-900"
                    }, // Kolom nomor
                    {
                        "data": "nama_produk",
                        "className": "px-6 py-4 font-medium text-slate-900"
                    },
                    {
                        "data": "kategori",
                        "className": "px-6 py-4 font-medium text-slate-900"
                    },
                    {
                        "data": "deskripsi",
                        "render": function(data) {
                            return data.substring(0, 50) + '...'; // Pangkas artikel
                        },
                        "className": "px-6 py-4 font-medium text-slate-900"
                    },
                     {
                        "data": "aksi",
                        "orderable": false,
                        "searchable": false,
                        "render": function(data) {
                            return `
                                <div class="flex justify-center items-center gap-4">
                                    <a href="/admin/web-preferences/kategori/${data}" 
                                        class="font-medium text-blue-600 hover:text-blue-800 transition-colors" title="Edit">
                                        <i data-lucide="edit" class="w-5 h-5"></i>
                                    </a>
                                    <button type="button"
                                        @click.prevent="deleteFormAction = '/admin/web-preferences/kategori/${data}'; showDeleteModal = true"
                                        class="font-medium text-red-500 hover:text-red-700 transition-colors" title="Hapus">
                                        <i data-lucide="trash-2" class="w-5 h-5"></i>
                                    </button>
                                    <form id="delete-form-${data}"
                                        action="/admin/web-preferences/kategori/${data}" method="POST" class="hidden">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            `;
                        },
                        "className": "px-6 py-4 font-medium text-slate-900"
                    } // Kolom aksi
                ],

                // FUNGSI UNTUK MENAMBAHKAN CLASS TAILWIND SETELAH TABEL DI-RENDER
                "initComplete": function(settings, json) {
                    // Menambahkan class ke pagination container
                    $('.dt-paging').addClass('flex items-center');

                    // Menambahkan class ke setiap tombol pagination
                    $('.dt-paging-button').addClass(
                        'px-3 py-1 mx-1 border border-slate-300 rounded-md hover:bg-slate-100');

                    // Menambahkan class ke tombol yang aktif
                    $('.dt-paging-button.current').addClass('bg-blue-500 text-white').removeClass(
                        'border-slate-300');

                    // Menambahkan class ke info "Showing x to y of z entries"
                    $('.dt-info').addClass('text-sm text-slate-600');
                    lucide.createIcons();
                },
                "drawCallback": function(settings, json) {
                    // Menambahkan class ke pagination container
                    $('.dt-paging').addClass('flex items-center');

                    // Menambahkan class ke setiap tombol pagination
                    $('.dt-paging-button').addClass(
                        'px-3 py-1 mx-1 border border-slate-300 rounded-md hover:bg-slate-100');

                    // Menambahkan class ke tombol yang aktif
                    $('.dt-paging-button.current').addClass('bg-blue-500 text-white').removeClass(
                        'border-slate-300');

                    // Menambahkan class ke info "Showing x to y of z entries"
                    $('.dt-info').addClass('text-sm text-slate-600');
                    lucide.createIcons();
                },

                // Mengganti teks default
                "language": {
                    "processing": '<div class="text-center">Memuat...</div>',
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "infoEmpty": "Tidak ada data",
                    "infoFiltered": "(difilter dari _MAX_ total data)",
                    "zeroRecords": "Data tidak ditemukan",
                    "paginate": {
                        "next": "›",
                        "previous": "‹"
                    }
                }
            });

            // HUBUNGKAN INPUT PENCARIAN KUSTOM
            $('#customSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            
        });
    </script>
@endpush
