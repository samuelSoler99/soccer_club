<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('member_type')->insert([
            ['id' => 1, 'type' => 'player'],
            ['id' => 2, 'type' => 'coach'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('member_type')->where("id", 1)->delete();
        DB::table('member_type')->where("id", 2)->delete();
    }
};
