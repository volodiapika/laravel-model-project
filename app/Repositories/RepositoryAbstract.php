<?php
/**
 * Repository abstract
 *
 * @package RepositoryAbstract
 */
namespace App\Repositories;

/**
 * Repository abstract
 *
 * @package RepositoryAbstract
 *
 * @since 1.0.1
 */
abstract class RepositoryAbstract
{
    /**
     * Show all albums's.
     *
     * @return Album[]|null
     */
    public function all()
    {
        return $this->repositoryObject->all();
    }

    /**
     * Find album's.
     *
     * @param integer $albumId
     *
     * @return Album[]|null
     */
    public function find($albumId)
    {
        return $this->repositoryObject->find($albumId);
    }

    /**
     * Delete the albums's.
     *
     * @param integer $albumId
     *
     * @return void
     */
    public function delete($albumId)
    {
        $repositoryObject = $this->repositoryObject->where('id', $albumId);
        if ($repositoryObject !== null) {
            $repositoryObject->delete();
        }
    }

    /**
     * Create the albums's.
     *
     * @param string $albumName
     *
     * @return void
     */
    public function createAlbum($albumName)
    {
        $album = $this->repositoryObject;
        $album->name = $albumName;
        $album->save();
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
    abstract protected function createPhoto($albumId, $photoName, $photoUrl);

    /**
     * Find photo's.
     *
     * @param integer $albumId
     *
     * @return Photo[]|null
     */
    abstract protected function getAlbumId($albumId);

    /**
     * Get album with photos
     *
     * @param integer $photoId
     *
     * @return Album[]|null
     */
    public function getAlbumWithPhotos($photoId)
    {
        return $this->repositoryObject->join('photos', 'photos.albumid', '=', 'albums.id')
            ->select(['albums.id', 'albums.name', 'albums.created_at'])
            ->where('photos.id', '=', $photoId)
            ->first();
    }
}
