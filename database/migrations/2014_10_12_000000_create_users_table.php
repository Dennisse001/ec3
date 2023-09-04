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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('username')->unique();
            $table->string('profesi')->nullable();  
            $table->string('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('email')->unique();
            $table->string('no_hp')->unique();
            $table->string('foto')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role',['admin','user'])->default('user');
            $table->enum('status',['aktif','nonaktif'])->default('aktif');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
