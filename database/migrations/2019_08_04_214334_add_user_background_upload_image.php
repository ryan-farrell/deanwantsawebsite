<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserBackgroundUploadImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('make_web_pages', function (Blueprint $table) {
            $table->string('background_image');
            
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('make_web_pages', function (Blueprint $table) {
            $table->dropColumn('background_image');
            
        });
    
    }
}
