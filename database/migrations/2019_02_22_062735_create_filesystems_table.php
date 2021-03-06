<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("filesystems", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id");
            $table->boolean("is_creative");
            $table->string("path", 255)->nullable();
            $table->uuid("uuid");
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
        Schema::dropIfExists("filesystems");
    }
}
