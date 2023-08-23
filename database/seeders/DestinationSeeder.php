<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Destination::create([
        'image' => 'images/granada.jpg',
        'title'=>'Alambra',
        'location'=>'Granada',
        'reason'=>'La Alhambra es un palacio y fortaleza ubicado en Granada, España. Es un destino turístico muy popular debido a su belleza arquitectónica, su historia rica y su importancia cultural.',
        
        
       ]);

       Destination::create([
        'image' => 'images/colombia.png',
        'title'=>'Nuqui',
        'location'=>'Colombia',
        'reason'=>'Nuquí es un destino turístico en la costa pacífica de Colombia que atrae a viajeros que buscan experiencias auténticas en un entorno natural exuberante y menos desarrollado.',
         ]);

    Destination::create([
        'image' => 'images/filipinas.jpg',
        'title'=>'Cebú',
        'location'=>'Filipinas',
        'reason'=>'hermoso entorno natural, su rica historia y su oferta diversa de actividades para los viajeros.',
    ]);
    
    Destination::create([
        'image' => 'images/venecia.jpg',
        'title'=>'Venecia',
        'location'=>'Italia',
        'reason'=>'Venecia es una ciudad icónica ubicada en el noreste de Italia, conocida por su arquitectura única, sus canales serpenteantes y su rica historia. Viajar a Venecia puede ofrecer una experiencia encantadora y única.',
    ]);
    }
}
