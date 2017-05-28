<?php
/**
 * Albums Table Seeder
 *
 * @package AlbumsTableSeeder
 */
use App\Services\AlbumService;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

/**
 * AlbumsTableSeeder
 *
 * @package AlbumsTableSeeder
 *
 * @since 1.0.1
 */
class AlbumsTableSeeder extends Seeder
{
    /**
     * The album service
     *
     * @var AlbumService $albumService
     **/
    protected $albumService;

    /**
     * Instantiate the controller
     *
     * @param AlbumService $albumService
     * @return void
     **/
    public function __construct(AlbumService $albumService)
    {
        $this->albumService = $albumService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 4; $i++) {
            $this->albumService->createAlbum(['name' => $faker->name]);
        }
    }
}
