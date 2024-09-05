namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    use HasFactory;

    protected $fillable = ['title', 'author', 'publisher', 'year_of_publication', 'isbn', 'shelf_id', 'space_id'];
}
