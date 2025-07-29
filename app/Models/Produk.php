<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Produk extends Model
{
    use HasUuids, HasSlug;
    protected $guarded = ["id"];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('nama') // Sumber slug adalah kolom 'title'
            ->saveSlugsTo('slug');      // Slug akan disimpan di kolom 'slug'
    }

    public function kategoriProduk()
    {
        // Parameter kedua (foreign_key) dan ketiga (owner_key) bisa diabaikan jika mengikuti konvensi Laravel
        return $this->belongsTo(KategoriProduk::class, 'kategori_id');
    }

    /**
     * Mendefinisikan relasi "hasMany" ke model SpesifikasiProduk.
     * Setiap produk bisa memiliki banyak spesifikasi.
     */
    public function spesifikasiProduks()
    {
        return $this->hasMany(SpesifikasiProduk::class, 'produk_id');
    }
}
