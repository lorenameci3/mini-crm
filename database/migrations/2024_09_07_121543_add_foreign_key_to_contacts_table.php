<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Adding foreign key to the existing 'account_id' column
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Dropping the foreign key
            $table->dropForeign(['account_id']);
        });
    }
    
};
