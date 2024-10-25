<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';

    protected $fillable = [
           'user_id','no_pendaftaran', 'nama', 'jenis_kelamin', 'tempat_tanggal_lahir', 'alamat', 'agama', 'anak_ke',
        'jumlah_saudara', 'status_anak', 'bahasa_sehari_hari', 'golongan_darah', 'kewarganegaraan',
        'nama_ayah', 'tanggal_lahir_ayah', 'agama_ayah', 'pendidikan_ayah', 'pekerjaan_ayah',
        'kewarganegaraan_ayah', 'alamat_ayah', 'no_telepon_ayah', 'nama_ibu', 'tanggal_lahir_ibu',
        'agama_ibu', 'pendidikan_ibu', 'pekerjaan_ibu', 'kewarganegaraan_ibu', 'alamat_ibu', 'no_telepon_ibu',
        'foto_ijazah', 'foto_kk', 'foto_ktp', 'foto_piagam'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
