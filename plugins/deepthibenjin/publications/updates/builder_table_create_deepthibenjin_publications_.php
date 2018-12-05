<?php namespace DeepthiBenjin\Publications\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDeepthibenjinPublications extends Migration
{
    public function up()
    {
        Schema::create('deepthibenjin_publications_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 500);
            $table->string('sub_header', 100);
            $table->string('description', 5000);
            $table->text('source');
            $table->date('publication');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('deepthibenjin_publications_');
    }
}
