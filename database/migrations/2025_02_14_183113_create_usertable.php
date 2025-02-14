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
        Schema::create('usertable', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 255);
            $table->string('email', 34)->unique;
            $table->string('phonenumber', 15)->unique;
            $table->string('password', 12);
            $table->string('confirmpassword', 12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usertable');
    }
};
