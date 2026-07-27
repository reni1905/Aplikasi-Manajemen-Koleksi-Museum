<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriModel extends Model
{
    use HasFactory;
    protected $table = 'galeri';    
    public $timestamps = false;
    protected $fillable = ['nama_benda','jenis','bahan','asal_ditemukan','tempat_pembuatan','cara_didapat','tahun_abad_masa','keterangan','deskripsi_benda','photo'];

}

