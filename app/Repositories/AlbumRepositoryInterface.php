<?php
/**
 * Album repository interface
 *
 * @package AlbumRepositoryInterface
 */
namespace App\Repositories;

/**
 * Album repository interface
 *
 * @package AlbumRepositoryInterface
 *
 * @since 1.0.1
 */
interface AlbumRepositoryInterface
{
    /**
     * The album all
     *
     * @return Album[]|null
     */
    public function all();

    /**
     * The album find
     *
     * @param integer $albumId
     *
     * @return Album[]|null
     */
    public function find($albumId);

    /**
     * The album delete
     *
     * @param integer $albumId
     *
     * @return void
     */
    public function delete($albumId);

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
}
