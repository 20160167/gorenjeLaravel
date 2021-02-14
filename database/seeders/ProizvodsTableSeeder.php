<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProizvodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proizvods')->insert(
            [
                ['naziv' => 'Frižider  OBRB153R', 'slika' => 'https://rs.gorenje.com/medias/MB-PIMG-2FD91D5CBED43B22C73A8AEA8E4BC3B7-MABAGOR-300Wx300H?context=bWFzdGVyfG1hYmFnb3Jwcm9kdWN0aW1hZ2VzfDM2MDEzfGltYWdlL3BuZ3xtYWJhZ29ycHJvZHVjdGltYWdlcy9oNWMvaGNkLzg5ODY3OTU0MDk0MzgucG5nfDgyYjViYWVjNThiYzRkNTZiZmZkMGU1NWJjN2MxYzg0YmEyODI1MDEwN2MyMDJiYjY2YjQyMjgxOWMyZDE1ZGQ', 'opis' => 'Energetski razred: A+++, Tip konstrukcije: Samostalni, Ukupna neto zapremina: 254 l, Širina proizvoda: 600 mm, Visina proizvoda: 1540 mm', 'cena' => 159990, 'energetski_razred' => 'A+++', 'boja' => 'Bordo crvena metalik', 'materijal' => 'metal', 'dimenzije' => '2.50m x 3.80m', 'vrsta_id' => 1],
                ['naziv' => 'Samsung Ves Masina', 'slika' => 'https://rs.gorenje.com/medias/MB-PIMG-0510E379CC50902CC617377431CD3FB9-MABAGOR-300Wx300H?context=bWFzdGVyfG1hYmFnb3Jwcm9kdWN0aW1hZ2VzfDU5NTE4fGltYWdlL3BuZ3xtYWJhZ29ycHJvZHVjdGltYWdlcy9oNjQvaGJlLzg5ODY5MDgxMzEzNTgucG5nfDZhZDMxYTdlYzdiNmRmMGZiMzZlMzQ3MDU4OTMxMTJjYzIwN2I2NDZiYWI2YTNkYTg0ODhjOGQ2NWNkMDFjMDQ', 'opis' => 'Energetski razred: A+++, Tip konstrukcije: Samostalni, Ukupna neto zapremina: 254 l, Širina proizvoda: 600 mm, Visina proizvoda: 1540 mm', 'cena' => 159990, 'energetski_razred' => 'A+++', 'boja' => 'Bordo crvena metalik', 'materijal' => 'metal', 'dimenzije' => '2.50m x 3.80m', 'vrsta_id' => 2],
                ['naziv' => 'GORENJE Frižider ', 'slika' => 'https://rs.gorenje.com/medias/MB-PIMG-2FD91D5CBED43B22C73A8AEA8E4BC3B7-MABAGOR-300Wx300H?context=bWFzdGVyfG1hYmFnb3Jwcm9kdWN0aW1hZ2VzfDM2MDEzfGltYWdlL3BuZ3xtYWJhZ29ycHJvZHVjdGltYWdlcy9oNWMvaGNkLzg5ODY3OTU0MDk0MzgucG5nfDgyYjViYWVjNThiYzRkNTZiZmZkMGU1NWJjN2MxYzg0YmEyODI1MDEwN2MyMDJiYjY2YjQyMjgxOWMyZDE1ZGQ', 'opis' => 'Energetski razred: A+++, Tip konstrukcije: Samostalni, Ukupna neto zapremina: 254 l, Širina proizvoda: 600 mm, Visina proizvoda: 1540 mm', 'cena' => 159990, 'energetski_razred' => 'A+++', 'boja' => 'Bordo crvena metalik', 'materijal' => 'metal', 'dimenzije' => '2.50m x 3.80m', 'vrsta_id' => 1]
            ]
        );
    }
}
