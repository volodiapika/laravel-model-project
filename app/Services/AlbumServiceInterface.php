<?php
/**
 * Album service interface
 *
 * @package AlbumServiceInterface
 */
namespace App\Services;

/**
 * Album service interface
 *
 * @package AlbumServiceInterface
 *
 * @since 1.0.1
 */
interface AlbumServiceInterface
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
     * @return AlbumRepository
     */
    public function getAlbumWithPhotos($photoId);
}
