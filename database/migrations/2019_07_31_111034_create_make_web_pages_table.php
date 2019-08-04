<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakeWebPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('make_web_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('siteName');
            $table->mediumText('hero');
            $table->string('fontType');
            $table->string('background');
            $table->string('colour1');
            $table->string('colour2');
            $table->string('colour3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('make_web_pages');
    }
}
