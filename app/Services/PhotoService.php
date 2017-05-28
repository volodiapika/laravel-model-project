<?php
/**
 * Photo service
 *
 * @package PhotoService
 */
namespace App\Services;

use App\Repositories\PhotoRepository;

/**
 * Photo service
 *
 * @package PhotoService
 *
 * @since 1.0.1
 */
class PhotoService extends ServiceAbstract implements PhotoServiceInterface
{
    /**
     * The repository oject
     *
     * @var array
     */
    protected $repositoryObject;

    /**
     * Construct
     *
     * @param PhotoRepository $photoRepository
     *
     * @return PhotoRepository
     */
    public function __construct(PhotoRepository $photoRepository)
    {
        $this->repositoryObject = $photoRepository;
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
    }

    /**
     * Show the albums's.
     *
     * @param integer $photoId
     *
     * @return void
     */
    public function getAlbumWithPhotos($photoId)
    {
    }
}
