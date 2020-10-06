<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CategoriesName');
            $table->string('Description');
            $table->string('Slug');
            $table->string('Message');
            $table->boolean('isDeleted')->nullable()->default(false);
            $table->string('created_by');
            $table->string('update_by');
            $table->string('deleted_by');
            $table->timestamp('deleted_at',0)->nullable();
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
        Schema::dropIfExists('Categories');
    }
}
