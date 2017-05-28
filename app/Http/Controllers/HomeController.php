<?php
/**
 * Home controller
 *
 * @package HomeController
 */
namespace App\Http\Controllers;

use App\Services\AlbumService;

/**
 * Home controller
 *
 * @package HomeController
 *
 * @since 1.0.1
 */
class HomeController extends Controller
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
     * Show the application dashboard to the home.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $albums = $this->albumService->all();
        return view('home.index', compact('albums'));
    }
}
