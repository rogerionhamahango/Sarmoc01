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
        Schema::create('workertable', function (Blueprint $table) {
            $table->id();
            $table -> String('fullname');
            $table -> char('gender');
            $table -> String('nuit');
            $table -> String('numberofdocument');
            $table -> String('provinceofbirth');
            $table -> String('districofbirth');
            $table -> String('fullfathername');
            $table -> String('fullmothername');
            $table -> date('birthday');
            $table -> date('admissiondate');
            $table -> String('academiclevel');
            $table -> String('trainingarea');
            $table -> String('phone1');
            $table -> String('phone2');
            $table -> String('document');
            $table -> String('contract');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workertable');
    }
};
