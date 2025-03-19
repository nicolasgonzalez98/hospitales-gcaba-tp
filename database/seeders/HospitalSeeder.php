<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\Csv\Reader;
use App\Models\Hospital;
use Illuminate\Support\Facades\DB;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $csv = Reader::createFromPath(storage_path('app/hospitales.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            Hospital::create([
                'nombre' => $record['fna'],
                'especialidad' => $record['esp'],
                'atencion' => $record['ate'],
                'direccion' => $record['dir'],
                'barrio' => $record['bar'],
                'comuna' => $record['com'],
                'telefono' => $record['tel'],
                'fax' => $record['fax'],
                'sitio_web' => $record['web'],
                'gestion' => $record['sag'],
                'geometria' => $record['geometry'],
            ]);
        }
    }
}
