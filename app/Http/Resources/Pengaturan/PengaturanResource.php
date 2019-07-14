<?php

namespace App\Http\Resources\Pengaturan;

use Illuminate\Http\Resources\Json\JsonResource;

class PengaturanResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'nama_ujian'        => $this->nama_ujian,
            'waktu'             => $this->waktu,
            'nilai_min'         => $this->nilai_min,
            'peraturan_ujian'   => $this->peraturan_ujian,
        ];
    }
}
