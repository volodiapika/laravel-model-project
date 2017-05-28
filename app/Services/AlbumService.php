<?php
/**
 * Album service
 *
 * @package AlbumService
 */
namespace App\Services;

use App\Repositories\AlbumRepository;

/**
 * Album service
 *
 * @package AlbumService
 *
 * @since 1.0.1
 */
class AlbumService extends ServiceAbstract implements AlbumServiceInterface
{
    /**
     * The repository object
     *
     * @var array
     */
    protected $repositoryObject;

    /**
     * Construct
     *
     * @param AlbumRepository $albumRepository
     *
     * @return void
     */
    public function __construct(AlbumRepository $albumRepository)
    {
        $this->repositoryObject = $albumRepository;
    }

    /**
     * Create the albums's.
     *
     * @param array $input
     *
     * @return void
     */
    public function createAlbum(array $input)
    {
        $albumName = $input['name'];
        $this->repositoryObject->createAlbum($albumName);
    }

    /**
     * Show the albums's.
     *
     * @param integer $photoId
     *
     * @return AlbumRepository
     */
    public function getAlbumWithPhotos($photoId)
    {
        return $this->repositoryObject->getAlbumWithPhotos($photoId);
    }
}
