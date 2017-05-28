<?php
/**
 * Photo controller
 *
 * @package PhotoController
 */
namespace App\Http\Controllers;

use App;
use App\Services\AlbumService;
use App\Services\PhotoService;
use App\Validators\AlbumValidator;
use App\Validators\PhotoValidator;
use Illuminate\Http\Request;
use Response;

/**
 * Photo controller
 *
 * @package PhotoController
 *
 * @since 1.0.1
 */
class PhotoController extends Controller
{
    /**
     * The album service
     *
     * @var AlbumService $albumService
     **/
    protected $albumService;

    /**
     * The photo service
     *
     * @var PhotoService $photoService
     **/
    protected $photoService;

    /**
     * Instantiate the controller
     *
     * @param AlbumService $albumService
     * @param PhotoService $photoService
     * @return void
     **/
    public function __construct(AlbumService $albumService, PhotoService $photoService)
    {
        $this->albumService = $albumService;
        $this->photoService = $photoService;
    }

    /**
     * Show the application dashboard to the photo.
     *
     * @param integer $photoId
     *
     * @return \Illuminate\View\View
     */
    public function show($photoId = 0)
    {
        $album = $this->albumService->getAlbumWithPhotos($photoId);
        if ($album === null) {
            return redirect()->route('home.index');
        }
        $photo = $this->photoService->find($photoId);
        if ($photo === null) {
            return redirect()->route('home.index');
        }
        return view('photo.show', compact('photo', 'album'));
    }

    /**
     * Show the application dashboard to the photo's.
     *
     * @param integer $albumId
     *
     * @return \Illuminate\View\View
     */
    public function lists($albumId = 0)
    {
        $album = $this->albumService->find($albumId);
        if ($album === null) {
            App::abort(404);
        }
        $photos = $this->photoService->getAlbumId($albumId);
        return view('photo.lists', compact('photos', 'album'));
    }

    /**
     * Remove album's.
     *
     * @param integer $albumId
     *
     * @return Response
     */
    public function remove($albumId = 0)
    {
        $album = $this->albumService->find($albumId);
        if ($album === null) {
            return response()->json(['success' => 0]);
        }
        $this->albumService->delete($albumId);
        return response()->json(['success' => 1]);
    }

    /**
     * Remove photo.
     *
     * @param integer $photoId
     *
     * @return Response
     */
    public function removePhoto($photoId = 0)
    {
        $photo = $this->photoService->find($photoId);
        if ($photo === null) {
            return response()->json(['success' => 0]);
        }
        $this->photoService->delete($photoId);
        return response()->json(['success' => 1]);
    }

    /**
     * Add album's.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function add(Request $request)
    {
        $validation = new AlbumValidator($request->all());
        if ($validation->passes()) {
            $this->albumService->createAlbum($request->all());
            return response()->json(['success' => 1]);
        }
        return response()->json(['success' => 0, 'errors' => $validation->errors]);
    }

    /**
     * Add url photo's.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function addUrl(Request $request)
    {
        $validation = new PhotoValidator($request->all());
        if ($validation->passes()) {
            $this->photoService->createPhoto($request->all());
            return response()->json(['success' => 1]);
        }
        return response()->json(['success' => 0, 'errors' => $validation->errors]);
    }
}
