<?php
/**
 * Photo repository
 *
 * @package PhotoRepository
 */
namespace App\Repositories;

use App\Models\Photo;

/**
 * Photo repository
 *
 * @package PhotoRepository
 *
 * @since 1.0.1
 */
class PhotoRepository extends RepositoryAbstract implements PhotoRepositoryInterface
{
    /**
     * The repository object
     *
     * @var Object $repositoryObject
     **/
    protected $repositoryObject;

    /**
     * Construct.
     *
     * @return void
     */
    public function __construct(Photo $photoObject)
    {
        $this->repositoryObject = $photoObject;
    }

    /**
     * Update the photo's.
     *
     * @param integer $albumId
     * @param string $photoName
     * @param string $photoUrl
     *
     * @return void
     */
    public function createPhoto($albumId, $photoName, $photoUrl)
    {
        $photo = $this->repositoryObject;
        $photo->albumid = $albumId;
        $photo->name = $photoName;
        $photo->photourl = $photoUrl;
        $photo->save();
    }

    /**
     * Find photo's.
     *
     * @param integer $albumId
     *
     * @return Photo[]|null
     */
    public function getAlbumId($albumId)
    {
        return $this->repositoryObject->where('albumid', $albumId)->get();
    }
}
