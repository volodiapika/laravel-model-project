<?php
/**
 * Photo repository interface
 *
 * @package PhotoRepositoryInterface
 */
namespace App\Repositories;

/**
 * Photo repository interface
 *
 * @package PhotoRepositoryInterface
 *
 * @since 1.0.1
 */
interface PhotoRepositoryInterface
{
    /**
     * The photo all
     *
     * @return Photo[]|null
     */
    public function all();

    /**
     * The photo find
     *
     * @param integer $photoId
     *
     * @return Photo[]|null
     */
    public function find($photoId);

    /**
     * The photo delete
     *
     * @param integer $photoId
     *
     * @return void
     */
    public function delete($photoId);

    /**
     * The album create
     *
     * @param string $albumName
     *
     * @return void
     */
    public function createAlbum($albumName);

    /**
     * The album show
     *
     * @param integer $photoId
     *
     * @return Album[]|null
     */
    public function getAlbumWithPhotos($photoId);

    /**
     * The photo update
     *
     * @param integer $albumId
     * @param string $photoName
     * @param string $photoUrl
     *
     * @return void
     */
    public function createPhoto($albumId, $photoName, $photoUrl);

    /**
     * The photo find where
     *
     * @param integer $albumId
     *
     * @return void
     */
    public function getAlbumId($albumId);
}
