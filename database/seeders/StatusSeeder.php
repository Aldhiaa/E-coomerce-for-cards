<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::create([
            'name'=>'قيد المراجعة'
        ]);
        Status::create([
            'name'=>'تم الدفع'
        ]);
        Status::create([
            'name'=>'اكتملت'
        ]);
        Status::create([
            'name'=>'الغاء '
        ]);
    }
}
