<?php namespace DeepthiBenjin\Speaking\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDeepthibenjinSpeaking extends Migration
{
    public function up()
    {
        Schema::create('deepthibenjin_speaking_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->integer('name');
            $table->text('description');
            $table->string('image');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('deepthibenjin_speaking_');
    }
}
