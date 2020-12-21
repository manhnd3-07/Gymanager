<?php

use Illuminate\Database\Seeder;
use App\Models\Position;
class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name' => 'Huấn luyện viên',
           ]);
           Position::create([
               'name' => 'Quản lý kho',
           ]);
           Position::create([
               'name' => 'Markettiong',
           ]);
           Position::create([
               'name' => 'Sale',
           ]);
    }
}
