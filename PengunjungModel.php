<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengunjungModel extends Model
{
    use HasFactory;
    protected $table = 'pengunjung';    
    public $timestamps = false;
    protected $fillable = ['nama_lengkap','email','no_hp','asal','jenis_kelamin','tanggal_lahir','tanggal_kunjungan'];

}

