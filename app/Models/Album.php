<?php
/**
 * Album model
 *
 * @package Album
 */
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Album model
 *
 * Album
 *
 * @property integer $id
 * @property string $name
 * @property Carbon $deleted_at
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @package  Album
 *
 * @since 1.0.1
 */
class Album extends Model
{
    /**
     * The table used by this model
     *
     * @var string
     **/
    protected $table = 'albums';

    /**
     * The album deleted at
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

    /**
     * The album id
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Returns a formatted name album's.
     *
     * @return string
     */
    public function name()
    {
        return nl2br($this->name);
    }
}
