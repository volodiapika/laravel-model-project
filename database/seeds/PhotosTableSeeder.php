<?php
/**
 * PhotosTableSeeder
 *
 * @package PhotosTableSeeder
 */
use App\Services\PhotoService;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

/**
 * PhotosTableSeeder
 *
 * @package PhotosTableSeeder
 *
 * @since 1.0.1
 */
class PhotosTableSeeder extends Seeder
{
    /**
     * The photo service
     *
     * @var PhotoService $photoService
     **/
    protected $photoService;

    /**
     * Instantiate the controller
     *
     * @param PhotoService $photoService
     * @return void
     **/
    public function __construct(PhotoService $photoService)
    {
        $this->photoService = $photoService;
    }

    /**
     * The albums deleted at
     *
     * @var array
     */
    protected $urls = [
        'http://vignette2.wikia.nocookie.net/pokemony/images/' .
        '4/4c/Ash%27s_Pikachu.png/revision/latest?cb=20140316095658&path-prefix=pl',
        'http://vignette2.wikia.nocookie.net/pokemony/images/' .
        'c/ca/First_Meeting.png/revision/latest/zoom-cro' .
        'p/width/90/height/55?cb=20130112160235&path-prefix=pl',
        'http://vignette4.wikia.nocookie.net/pokemony/images/2' .
        '/27/Ash_1st_Pok%C3%A9_Ball.png/revision/latest/z' .
        'oom-crop/width/90/height/55?cb=20130112160238&path-prefix=pl',
        'http://vignette2.wikia.nocookie.net/pokemony/images/d/' .
        'dd/Ash_DP_1.png/revision/latest/zoom-crop/width/90/' .
        'height/55?cb=20140315213314&path-prefix=pl',
        'http://vignette3.wikia.nocookie.net/pokemony/images/c/c' .
        '2/Pikachu_Static.png/revision/latest/zoom-crop/width/90/' .
        'height/55?cb=20130112160244&path-prefix=pl',
        'http://vignette1.wikia.nocookie.net/pokemony/images/3/3a' .
        '/Ash_and_his_Pikachu.png/revision/latest/zoom-crop/width/90/' .
        'height/55?cb=20130112160321&path-prefix=pl',
        'http://vignette4.wikia.nocookie.net/pokemony/images/b/b6/' .
        'Ash_Pikachu_contest.png/revision/latest/zoom-crop/width/90/' .
        'height/55?cb=20111016172127&path-prefix=pl',
        'http://vignette1.wikia.nocookie.net/pokemony/images/8/83/P' .
        'ikachu_Bad_Mood.png/revision/latest/zoom-crop/width/90/' .
        'height/55?cb=20130112160322&path-prefix=pl',
        'http://vignette4.wikia.nocookie.net/pokemony/images/b/ba/Pi' .
        'kachu_loves_ketchup.png/revision/latest/zoom-crop/width/90/' .
        'height/55?cb=20120720152603&path-prefix=pl',
    ];

    /**
     * The albums id
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i < 50; $i++) {
            $photo = $this->photoService->createPhoto(
                [
                    'name' => $faker->name,
                    'url' => $this->urls[rand(0, 8)],
                    'id' => rand(1, 4),
                ]
            );
        }
    }
}
