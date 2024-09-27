<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedores')->insert([
            [
                'nombre_proveedor' => 'Prueba',
                'email' => 'proveedor@prueba.com',
                'telefono' => '2290 0000',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
