<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['codigo' => '01', 'departamento' => 'Amazonas'],
            ['codigo' => '02', 'departamento' => 'Áncash'],
            ['codigo' => '03', 'departamento' => 'Apurímac'],
            ['codigo' => '04', 'departamento' => 'Arequipa'],
            ['codigo' => '05', 'departamento' => 'Ayacucho'],
            ['codigo' => '06', 'departamento' => 'Cajamarca'],
            ['codigo' => '07', 'departamento' => 'Callao'],
            ['codigo' => '08', 'departamento' => 'Cusco'],
            ['codigo' => '09', 'departamento' => 'Huancavelica'],
            ['codigo' => '10', 'departamento' => 'Huánuco'],
            ['codigo' => '11', 'departamento' => 'Ica'],
            ['codigo' => '12', 'departamento' => 'Junín'],
            ['codigo' => '13', 'departamento' => 'La Libertad'],
            ['codigo' => '14', 'departamento' => 'Lambayeque'],
            ['codigo' => '15', 'departamento' => 'Lima'],
            ['codigo' => '16', 'departamento' => 'Loreto'],
            ['codigo' => '17', 'departamento' => 'Madre de Dios'],
            ['codigo' => '18', 'departamento' => 'Moquegua'],
            ['codigo' => '19', 'departamento' => 'Pasco'],
            ['codigo' => '20', 'departamento' => 'Piura'],
            ['codigo' => '21', 'departamento' => 'Puno'],
            ['codigo' => '22', 'departamento' => 'San Martín'],
            ['codigo' => '23', 'departamento' => 'Tacna'],
            ['codigo' => '24', 'departamento' => 'Tumbes'],
            ['codigo' => '25', 'departamento' => 'Ucayali'],
        ];

        foreach($departments as $department) {
            \App\Models\Department::insert($department);
        } 
    }
}
