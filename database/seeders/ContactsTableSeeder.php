<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory()->count(35)->create();

        // $item = [
        //     'id' => 1,
        //     'fullname' => '佐々木パンツ',
        //     'age' => 36,
        //     'gender' => '男性',
        //     'email' => 'fofofo@example.com',
        //     'post_code' => '444-8888',
        //     'address' => '東京都エドモンド市1-1-1',
        //     'building_name' => '五右衛門ビル',
        //     'option' => 'キンチョーの夏がきました。',
        // ];
        // DB::table('contacts')->insert($item);

        //  $item = [
        //     'id' => 2,
        //     'fullname' => '蟹見沢海老身',
        //     'age' => 78,
        //     'gender' => '女性',
        //     'email' => 'fokokokok@example.com',
        //     'post_code' => '444-6689',
        //     'address' => '沖縄県海の底1-8-88',
        //     'building_name' => '海底ビル',
        //     'option' => 'あと200年は生きたいと思います。',
        // ];
        // DB::table('contacts')->insert($item);

        //  $item = [
        //     'id' => 3,
        //     'fullname' => '盆級凡凡',
        //     'age' => 98,
        //     'gender' => '男性',
        //     'email' => 'fofohuejfo@example.com',
        //     'post_code' => '123-4972',
        //     'address' => '坊々県峰凡凡市坊々坊々町8-8-8',
        //     'building_name' => '',
        //     'option' => '坊々ボンボンボンボンボンボンボンボンボンボンボn',
        // ];
        // DB::table('contacts')->insert($item);
    }
}
