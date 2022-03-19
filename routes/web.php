<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

Route::get('/', function () {
    $projects = Project::get();
    return view('welcome',compact('projects'));
});

Auth::routes(['register' => false]);
Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/project/{project}', function (Project $project) {
    $projects = Project::get();
    return view('project',compact('project','projects'));
})->name('project');


//Profile
Route::patch('profile','profileController@update')->name('profile_password_store');

// Route::get('/foo', function () {
//     Artisan::call('storage:link');
// });


Route::middleware('auth')->post('/project', function (Request $request) {
    $project = Project::create($request->all());
    return response()->json([
        'status' => 200,
        'project' => $project
    ]);
});

Route::middleware('auth')->put('/project/{id}', function (Request $request, Project $id) {
    $id->update($request->all());
    return response()->json([
        'status' => 200,
        'project' => $id
    ]);
});

Route::middleware('auth')->post('/project/{id}/gallery', function (Request $request, $id) {
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $name = time().str_random().'.'.$file->getClientOriginalExtension();
        $path = Storage::putFileAs('public/upload/files', $file, $name);
        $gallery = Gallery::create(['file' => $name,'project_id' => $id]);
        return response()->json([
            'status' => 200,
            'image' => $gallery
        ]);
    }
    return response()->json([
        'status' => 500,
        'message' => 'Debe adjuntar una imagen'
    ]);
});

Route::middleware('auth')->put('/project/{id}/gallery/{idGallery}', function (Request $request, $id, Gallery $idGallery) {
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $name = time().str_random().'.'.$file->getClientOriginalExtension();
        $path = Storage::putFileAs('public/upload/files', $file, $name);
        $idGallery->update(['file' => $name]);
        return response()->json([
            'status' => 200,
            'image' => $idGallery
        ]);
    }
    return response()->json([
        'status' => 401,
        'message' => 'Debe adjuntar una imagen'
    ]);
});
