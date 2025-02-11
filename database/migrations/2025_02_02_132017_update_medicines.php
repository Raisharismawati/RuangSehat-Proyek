<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->nullable();
            $table->text('function'); // Pastikan ada kolom ini
            $table->string('dosage')->nullable();
            $table->date('expiry_date');
            $table->integer('stock');
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type')->nullable();
            $table->text('function'); // Pastikan ada kolom ini
            $table->string('dosage')->nullable();
            $table->date('expiry_date');
            $table->integer('stock');
            $table->timestamps();
        });
    }

};
