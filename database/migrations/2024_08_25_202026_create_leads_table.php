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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('firstname' ,100);
            $table->string('lastname' ,100);
            $table->string('title' ,100);
            $table->string('company' ,100);
            $table->string('phone' ,100);
            $table->string('email')->nullable();
            $table->string('status' ,100)->nullable();
            $table->string('source' ,100)->nullable();
            $table->string('street' ,100)->nullable();
            $table->string('city' ,100)->nullable();
            $table->string('state' ,200)->nullable();
            $table->string('zip' ,100)->nullable();
            $table->string('country' ,150)->nullable();
            $table->string('description' ,100)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
