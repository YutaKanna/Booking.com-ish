<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DummyRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'name' => 'ヒルトン シングル',
                'is_vacancy' => true,
                'charge' => '10000',
                'hotel_id' => '1',
                'room_type_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ヒルトン ダブル',
                'is_vacancy' => true,
                'charge' => '20000',
                'hotel_id' => '1',
                'room_type_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ハイアットリージェンシー シングル',
                'is_vacancy' => true,
                'charge' => '10000',
                'hotel_id' => '2',
                'room_type_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'ハイアットリージェンシー ダブル',
                'is_vacancy' => true,
                'charge' => '20000',
                'hotel_id' => '2',
                'room_type_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'リーガロイヤルホテル シングル',
                'is_vacancy' => true,
                'charge' => '10000',
                'hotel_id' => '3',
                'room_type_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'リーガロイヤルホテル ダブル',
                'is_vacancy' => true,
                'charge' => '20000',
                'hotel_id' => '3',
                'room_type_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '帝国ホテル シングル',
                'is_vacancy' => true,
                'charge' => '10000',
                'hotel_id' => '4',
                'room_type_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '帝国ホテル ダブル',
                'is_vacancy' => true,
                'charge' => '20000',
                'hotel_id' => '4',
                'room_type_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '星野リゾート シングル',
                'is_vacancy' => true,
                'charge' => '10000',
                'hotel_id' => '5',
                'room_type_id' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '星野リゾート ダブル',
                'is_vacancy' => true,
                'charge' => '20000',
                'hotel_id' => '5',
                'room_type_id' => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
