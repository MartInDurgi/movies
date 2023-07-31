<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            
            $table->string('title');
            $table->string('genre');
            $table->string('director');
            $table->longText('storyline');
            $table->integer('created');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
//Movie::create[("title"=>"neki film","genre"=>"action","director"=>"neki lik","storyline"=>"ljk kjhsj efwefw eff ef efw ef we wf","created"=>1999)];