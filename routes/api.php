<?php

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// middleware('auth:api')
Route::post('/project', function (Request $request) {
    $projet = Project::create($request->all());
    return response()->json([
        'status' => 200,
        'project' => $project
    ]);
});

Route::put('/project/{id}', function (Request $request, Project $id) {
    $id->update($request->all());
    return response()->json([
        'status' => 200,
        'project' => $id
    ]);
});

Route::post('/project/{id}/gallery', function (Request $request, $id) {
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
