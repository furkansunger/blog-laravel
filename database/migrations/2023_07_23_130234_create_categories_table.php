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
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title',250);
            $table->string('description');
            $table->enum('type',["ACTIVE","INACTIVE"]);
            $table->integer('parent_id')->defaultValue(0);

            //SOFT DELETE
            $table->softDeletes();
            // created_at, updated_at
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
