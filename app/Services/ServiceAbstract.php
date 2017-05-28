<?php
/**
 * Service abstract
 *
 * @package ServiceAbstract
 */
namespace App\Services;

/**
 * Service abstract
 *
 * @package ServiceAbstract
 *
 * @since 1.0.1
 */
abstract class ServiceAbstract
{
    /**
     * Show all photo's.
     *
     * @return AlbuRepository|PhotoRepository
     */
    public function all()
    {
        return $this->repositoryObject->all();
    }

    /**
     * Find the photo's.
     *
     * @param integer $photoId
     *
     * @return Response
     */
    public function find($photoId)
    {
        return $this->repositoryObject->find($photoId);
    }

    /**
     * Delete the photo's.
     *
     * @param integer $photoId
     *
     * @return void
     */
    public function delete($photoId)
    {
        $this->repositoryObject->delete($photoId);
    }

    /**
     * Update the photo's.
     *
     * @param array $input
     *
     * @return void
     */
    public function createPhoto(array $input)
    {
        $albumId = $input['id'];
        $albumName = $input['name'];
        $albumUrl = $input['url'];
        $this->repositoryObject->createPhoto($albumId, $albumName, $albumUrl);
    }

    /**
     * Find where the photo's.
     *
     * @param integer $albumId
     *
     * @return repositoryObject
     */
    public function getAlbumId($albumId)
    {
        return $this->repositoryObject->getAlbumId($albumId);
    }

    /**
     * Create the albums's.
     *
     * @param array $input
     *
     * @return void
     */
    abstract public function createAlbum(array $input);

    /**
     * Show the albums's.
     *
     * @param integer $photoId
     *
     * @return AlbumRepository
     */
    abstract public function getAlbumWithPhotos($photoId);
}
