<?php
/**
 * Album test
 *
 * @package AlbumTest
 */
use App\Services\AlbumService;
use Illuminate\Foundation\Testing\DatabaseMigrations;

/**
 * Album test
 *
 * @package AlbumTest
 *
 * @since 1.0.1
 */
class AlbumTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * The album service
     *
     * @var AlbumService $albumService
     **/
    protected $albumService;

    /**
     * The album data
     *
     * @var array
     */
    protected $albumData = ['id' => 1, 'name' => 'Test name'];

    /**
     * Test init
     *
     * @return void
     **/
    public function testInit()
    {
        $this->albumService = new AlbumService();
    }

    /**
     * Functional test album be deleted
     *
     * @return void
     */
    public function testAlbumBeDeleted()
    {
        $albumService = $this->albumService;

        $albumService->createAlbum(['name' => 'Test name']);

        $albumService->delete(1);

        $this->notSeeInDatabase('albums', $this->albumData);
    }

    /**
     * Functional test album be created
     *
     * @return void
     */
    public function testAlbumBeCreated()
    {
        $albumService = $this->albumService;

        $albumService->createAlbum(['name' => 'Test name']);

        $album = $albumService->find(1);

        $this->assertEquals($album->name, 'Test name');

        $this->seeInDatabase('albums', $this->albumData);
    }
}
