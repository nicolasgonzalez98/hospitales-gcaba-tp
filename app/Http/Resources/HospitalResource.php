<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HospitalResource extends JsonResource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'especialidad' => $this->especialidad,
            'atencion' => $this->atencion,
            'direccion' => $this->direccion,
            'barrio' => $this->barrio,
            'comuna' => $this->comuna,
            'telefono' => $this->telefono,
            'fax' => $this->fax,
            'sitio_web' => $this->sitio_web,
            'gestion' => $this->gestion,
            'geometria' => $this->geometria,
        ];
    }
}
