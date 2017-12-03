<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ZanrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zanr')->delete();
        DB::table('zanr')->insert(array(



            Array
            (
                'naziv' => 'Horor',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()')
            ),
            Array
            (
                'naziv' => 'Triler',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()')
            ),
            Array
            (
                'naziv' => 'Krimić',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()')
            ),
            Array
            (
                'naziv' => 'Komedija',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()')
            ),
            Array
            (
                'naziv' => 'Akcija',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()')
            ),
            Array
            (
                'naziv' => 'Drama',
                'created_at' => DB::raw('now()'),
                'updated_at' => DB::raw('now()')
            )
            ));
        
        
        
        
        
        
    }
}
