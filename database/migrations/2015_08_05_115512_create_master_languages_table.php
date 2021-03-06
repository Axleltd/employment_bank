<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterLanguagesTable extends Migration{

        public function up(){

            Schema::create('master_languages', function(Blueprint $table){
                $table->increments('id');
                $table->string('name', 50);
                $table->tinyInteger('status')->default(1)->comment('Only active entries will be listed on the public end');
                $table->timestamps();
            });
        }


        public function down(){

            Schema::dropIfExists('master_languages');
        }
  }
