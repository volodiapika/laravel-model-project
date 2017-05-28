<?php
/**
 * Create photos table
 *
 * @package CreatePhotosTable
 */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * CreatePhotosTable
 *
 * @package CreatePhotosTable
 *
 * @since 1.0.1
 */
class CreatePhotosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'photos',
            function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id')->unsigned();
                $table->string('name');
                $table->string('photourl');
                $table->unsignedInteger('albumid')->nullable();
                $table->foreign('albumid')->references('id')->on('albums')->onDelete('cascade');
                $table->timestamps();
                $table->softDeletes();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photos');
    }
}
