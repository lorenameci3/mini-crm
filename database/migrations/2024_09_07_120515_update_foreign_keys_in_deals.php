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
        Schema::table('deals', function (Blueprint $table) {
            // Adding 'on delete cascade' to existing foreign keys
            $table->dropForeign(['account_id']);
            $table->dropForeign(['contact_id']);
    
            $table->foreign('account_id')->references('id')->on('accounts')->onDelete('cascade');
            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::table('deals', function (Blueprint $table) {
            // Reverting the changes
            $table->dropForeign(['account_id']);
            $table->dropForeign(['contact_id']);
    
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('contact_id')->references('id')->on('contacts');
        });
    }
    
};
