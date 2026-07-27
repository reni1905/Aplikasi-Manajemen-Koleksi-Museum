<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SemuakoleksiModel extends Model
{
    use HasFactory;
    protected $table = 'semuakoleksi';    
    public $timestamps = false;
    protected $fillable = ['no_reg','no_inv','jenis','nama_benda','bahan','asal_ditemukan','tempat_pembuatan','cara_didapat','tahun_abad_masa','tempat_simpan','ukuran','keterangan','deskripsi_benda'];

}

