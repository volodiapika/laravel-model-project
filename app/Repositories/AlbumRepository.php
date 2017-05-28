<?php
/**
 * Album repository
 *
 * @package AlbumRepository
 */
namespace App\Repositories;

use App\Models\Album;

/**
 * Album repository
 *
 * @package AlbumRepository
 *
 * @since 1.0.1
 */
class AlbumRepository extends RepositoryAbstract implements AlbumRepositoryInterface
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
    public function __construct(Album $albumObject)
    {
        $this->repositoryObject = $albumObject;
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
    protected function createPhoto($albumId, $photoName, $photoUrl)
    {
    }

    /**
     * Find photo's.
     *
     * @param integer $albumId
     *
     * @return void
     */
    protected function getAlbumId($albumId)
    {
    }
}
