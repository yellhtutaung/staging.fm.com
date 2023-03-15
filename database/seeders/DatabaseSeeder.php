<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\Admin::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $sampleJson = '[{"account": {"list": "true","add": "true","create": "true","edit": "true","update": "true","hide_show": "false","details": "true","history": "true","delete": "true"}},
                        {"user": {"list": "true","add": "true","create": "true","edit": "true","update": "true","hide_show": "false","details": "true","history": "true","delete": "true"}},
                        {"fruit": {"list": "true","add": "true","create": "true","edit": "true","update": "true","hide_show": "false","details": "true","history": "true","delete": "true"}},
                        {"country": {"list": "true","add": "true","create": "true","edit": "true","update": "true","hide_show": "false","details": "true","history": "true","delete": "true"}},
                        {"permission": {"list": "true","add": "true","create": "true","edit": "true","update": "true","hide_show": "false","details": "true","history": "true","delete": "true"}},
                        {"contact":{"list": "true","add":"true","create":"true","edit":"true","update":"true","hide_show":"false","details":"true","history":"true","delete": "true"}}
        ]  ';

         Permission::insert(array(
             array(
                 'name' => "Programmer",
                 'order_sort_id' => 1,
                 'guard_json' => $sampleJson,
                 "created_at" => date("y-m-d h:i:s"),
                 "updated_at" => date("y-m-d h:i:s"),
             ),
             array(
                 'name' => "Owner",
                 'order_sort_id' => 2,
                 'guard_json' =>  $sampleJson,
                 "created_at" => date("y-m-d h:i:s"),
                 "updated_at" => date("y-m-d h:i:s"),
             )
         ));
    }
}
