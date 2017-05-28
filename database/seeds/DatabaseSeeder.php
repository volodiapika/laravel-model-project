<?php
/**
 * DatabaseSeeder
 *
 * @package DatabaseSeeder
 */
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * DatabaseSeeder
 *
 * @package DatabaseSeeder
 *
 * @since 1.0.1
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AlbumTableSeeder::class);
        $this->command->info('New albums');

        $this->call(PhotoTableSeeder::class);
        $this->command->info('New photos');

        Model::reguard();
    }
}
