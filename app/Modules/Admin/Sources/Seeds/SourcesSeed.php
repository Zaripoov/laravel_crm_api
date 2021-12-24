<?php

namespace App\Modules\Admin\Sources\Seeds;

use Illuminate\Database\Seeder;

class SourcesSeed extends Seeder
{

    public function run() {
        DB::table('sources')->insert([
            [
                'title' => 'Instagram'
            ],
            [
                'title' => 'Viber'
            ],
            [
                'title' => 'Site'
            ],
            [
                'title' => 'Phone'
            ],
        ]);
    }
}
