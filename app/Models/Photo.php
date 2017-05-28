<?php
/**
 * Photo model
 *
 * @package Photo
 */
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Photo model
 *
 * @property      integer $id
 * @property      string $name
 * @property      string $photourl
 * @property      Carbon $deleted_at
 * @property      Carbon $updated_at
 * @property      Carbon $created_at
 * @property-read \Albums $albumid
 * @package       Photo
 *
 * @since 1.0.1
 */
class Photo extends Model
{
    /**
     * The table used by this model
     *
     * @var string
     **/
    protected $table = 'photos';

    /**
     * The Photo deleted at
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'updated_at', 'created_at'];

    /**
     * The Photo id
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

    /**
     * Returns a photo url's.
     *
     * @return string
     */
    public function photoUrl()
    {
        return nl2br($this->photourl);
    }

    /**
     * Album id
     *
     * @return integer
     */
    public function albumId()
    {
        return $this->belongsTo('App\Albums', 'id');
    }
}
