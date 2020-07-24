<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_name',150);
            $table->date('date');
            $table->string('image', 250);
            $table->integer('artist_id')->unsigned();
            $table->timestamps();
            $table->foreign('artist_id')->references('id')->on('artists');
        });

        Artisan::call('db:seed', [
            '--class' => EventsTableSeeder::class
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function(Blueprint $table) {
            $table->dropForeign('events_artist_id_foreign');
        });
        Schema::dropIfExists('events');
    }
}
