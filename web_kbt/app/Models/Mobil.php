namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = [
        'merk', 'tipe', 'plat_nomor', 'harga_per_hari', 'status'
    ];
}
