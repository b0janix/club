<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

class CreateEventTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned();
            $table->integer('table_id')->unsigned();
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('table_id')->references('id')->on('tables');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Artisan::call('db:seed', [
            '--class' => EventTablesTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_tables', function(Blueprint $table) {
            $table->dropForeign('event_tables_event_id_foreign');
            $table->dropForeign('event_tables_table_id_foreign');
            $table->dropForeign('event_tables_user_id_foreign');
        });
        Schema::dropIfExists('event_tables');
    }
}
