<?php namespace DeepthiBenjin\Media\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDeepthibenjinMedia extends Migration
{
    public function up()
    {
        Schema::create('deepthibenjin_media_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('description', 5000);
            $table->string('publication_year', 500);
            $table->string('sub_title', 500);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('deepthibenjin_media_');
    }
}
