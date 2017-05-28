<?php
/**
 * Photo service interface
 *
 * @package PhotoServiceInterface
 */
namespace App\Services;

/**
 * Photo service interface
 *
 * @package PhotoServiceInterface
 *
 * @since 1.0.1
 */
interface PhotoServiceInterface
{
    /**
     * Show all photo's.
     *
     * @return AlbuRepository|PhotoRepository
     */
    public function all();

    /**
     * Find the photo's.
     *
     * @param integer $photoId
     *
     * @return Response
     */
    public function find($photoId);

    /**
     * Delete the photo's.
     *
     * @param integer $photoId
     *
     * @return void
     */
    public function delete($photoId);

    /**
     * Update the photo's.
     *
     * @param array $input
     *
     * @return void
     */
    public function createPhoto(array $input);

    /**
     * Find where the photo's.
     *
     * @param integer $albumId
     *
     * @return repositoryObject
     */
    public function getAlbumId($albumId);

    /**
     * Create the albums's.
     *
     * @param array $input
     *
     * @return void
     */
    public function createAlbum(array $input);

    /**
     * Show the albums's.
     *
     * @param integer $photoId
     *
     * @return void
     */
    public function getAlbumWithPhotos($photoId);
}
