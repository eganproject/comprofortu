<?php
namespace App\Http\Controllers\Admin\WebPreferences;

use App\Http\Controllers\Controller;
use App\Models\ClientExperience;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ClientExperienceController extends Controller
{
     public function index()
    {
        // Logic to display the list of product categories
        return view('admin.web_preferences.clientexperience.index');
    }

    public function lists(Request $request)
    {
        $query = ClientExperience::select('kategori_produks.*');


        // --- PENCARIAN (SEARCHING) ---
        if ($request->filled('search.value')) {
            $searchValue = $request->input('search.value');

            $query->where(function ($q) use ($searchValue) {
                $q->where('nama_kategori', 'like', "%{$searchValue}%");
            });
        }

        // --- PENGURUTAN (ORDERING) ---
        if ($request->filled('order')) {
            $orderColumnIndex = $request->input('order.0.column');
            $orderDir = $request->input('order.0.dir');
            $columns = $request->input('columns');
            $orderColumnName = $columns[$orderColumnIndex]['data'];

            // Mapping nama kolom dari DataTables ke nama kolom database
            $columnMap = [
                'nama_kategori' => 'nama_kategori',
                'layout' => 'layout',
            ];

            if (isset($columnMap[$orderColumnName])) {
                $query->orderBy($columnMap[$orderColumnName], $orderDir);
            }
        }

        // --- MENGHITUNG TOTAL DATA ---
        $totalRecords = ClientExperience::count();
        $filteredRecords = $query->count();

        // --- PAGINASI ---
        if ($request->filled('start') && $request->filled('length')) {
            $query->skip($request->input('start'))
                ->take($request->input('length'));
        }

        $kategoris = $query->get();

        // --- FORMATTING DATA ---
        $data = [];
        $no = $request->input('start', 0) + 1;
        foreach ($kategoris as $kategori) {
            $data[] = [
                'no' => $no++,
                'nama_kategori' => $kategori->nama_kategori,
                'deskripsi' => $kategori->deskripsi,
                'layout' => $kategori->layout . " Layout",
                'aksi' => $kategori->id
            ];
        }

        return response()->json([
            'draw' => intval($request->input('draw')),
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $filteredRecords,
            'data' => $data,
        ]);
    }
}
