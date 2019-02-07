<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory as Response;

class AssetUploadsController 
{
    public function uploadFile(Request $request, Response $response)
    {
        if (!$request->hasFile('file')) {
            return $response->view('failed');
        }
        
        if (!$request->file('file')->isValid()) {
            return $response->view('failed');
        }

        $newFileName = uniqid() . '.' . $request->file('file')->getClientOriginalExtension();

        $request->file('file')->move(env('UPLOAD_DIRECTORY'), $newFileName);

        return $response->json([
            'status' => 'succeeded',
            'file' => $newFileName
        ]);
    }
}
