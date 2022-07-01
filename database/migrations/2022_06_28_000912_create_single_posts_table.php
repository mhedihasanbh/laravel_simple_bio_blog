<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_tittle')->nullable();
            $table->text('post_image')->nullable();
            $table->string('full_name')->nullable();
            $table->string('profession')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('chest')->nullable();
            $table->string('waist')->nullable();
            $table->string('bicipes')->nullable();
            $table->string('eyeColor')->nullable();
            $table->string('hairColor')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('age')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('zodic_sign')->nullable();
            $table->string('nationality')->nullable();
            $table->string('home_town')->nullable();
            $table->string('education_qualification')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('sister')->nullable();
            $table->string('brother')->nullable();
            $table->string('regions')->nullable();
            $table->string('hobby')->nullable();
            $table->string('material_status')->nullable();
            $table->string('affair')->nullable();
            $table->string('wife')->nullable();
            $table->text('wife_image')->nullable();
            $table->string('death_date')->nullable();
            $table->string('death_cause')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('facts')->nullable();

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
        Schema::dropIfExists('single_posts');
    }
};
