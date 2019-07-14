<?php

namespace App\Http\Controllers\Api\Pengaturan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengaturan;
use App\Http\Resources\Pengaturan\PengaturanResource;
use Illuminate\Http\Response;

class PengaturanController extends Controller
{
    public function index()
    {
        return PengaturanResource::collection(Pengaturan::latest()->get());
    }

    public function update(Request $request, $id)
    {
        $pengaturan = Pengaturan::find($id);
        $pengaturan->update($request->all());
        return response(new PengaturanResource($pengaturan), Response::HTTP_CREATED);
    }
}
