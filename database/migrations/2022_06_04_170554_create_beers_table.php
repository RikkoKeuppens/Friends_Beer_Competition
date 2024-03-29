<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("beerAmount");
            $table->boolean("selected")->default(true);
            $table->integer("totaal");
            $table->integer("hoogste");
            $table->timestamps();
        });
        DB::table('beers')->insert(
            [
                [
                    'name' => 'Rikko',
                    'beerAmount' => 0,
                    'selected' => true,
                    'totaal' => 0,
                    'hoogste' => 0
                ]
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beers');
    }
}
