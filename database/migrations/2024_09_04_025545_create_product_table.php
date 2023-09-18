?<?php
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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('kategori_id')->nullable();
            $table->foreign('kategori_id')
                ->references('id')
                ->on('kategori')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
            $table->string('cover')->nullable();
            $table->string('galeri')->nullable();
            $table->string('judul')->nullable();
            $table->string('brand')->nullable();
            $table->string('stock')->nullable();
            $table->string('tags')->nullable();
            
            $table->string('harga')->nullable();
            $table->string('size')->nullable();
            $table->string('status')->nullable();
            $table->string('statuson')->nullable();
            $table->text('singkat')->nullable();
            $table->text('isi')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign(['kategori_id']);
        });
        Schema::dropIfExists('product');
    }
};
