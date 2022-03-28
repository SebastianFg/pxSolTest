<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\User;
use App\UserFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserFilesController extends Controller
{

    public function index()
    {
        $usersFiles = User::all();

        return response()
            ->json([
                'success' => true,
                'status' => 200,
                'records' => $usersFiles
            ], 200);
    }


    public function store(Request $request)
    {

        $user = User::find($request->get('user_id'));

        if (empty($user)) {
            return response()
                ->json([
                    'success' => false,
                    'status' => 404,
                    'message' => 'El usuario ingresado no éxiste.'
                ], 404);
        }

        $result = [];




        try {
            $filename = time() . $request->file('file')->getClientOriginalName();
            $path = Storage::disk('local')->put('files', $request->file('file'));
            $file =  UserFiles::create([
                'user_id' => $request->get('user_id'),
                'file_name' => $filename,
                'url' => 'storage/public/' . $path
            ]);



            $files = UserFiles::where('user_id', $request->get('user_id'))->get();

            array_push($result, array(
                'user_id' => $request->get('user_id'),
                'uploaded_file' => $file,
                'files' => $files,
            ));
        } catch (\Throwable $th) {
            return response()
                ->json([
                    'success' => false,
                    'status' => 500,
                    'message' => 'Ocurrio un error en el servicio.'
                ], 500);
        }

        return response()
            ->json([
                'success' => true,
                'status' => 201,
                'records' => $result
            ], 201);
    }

    public function show($id)
    {

        $result = [];

        $files = UserFiles::where('user_id', $id)->get();

        array_push($result, array(
            'user_id' => $id,
            'files' => $files,
        ));

        return response()
            ->json([
                'success' => true,
                'status' => 200,
                'records' => $result
            ], 200);
    }

    public function update(Request $request, UserFiles $userFiles)
    {
        return 'update';
    }


    public function destroy(UserFiles $userFiles)
    {
        return 'delete';
    }
}
