<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('tagline')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('google_meta')->nullable();
            $table->string('bing_meta')->nullable();
            $table->string('google_analytics')->nullable();
            $table->string('google_tag')->nullable();
            $table->string('logo')->nullable();
            $table->string('second_logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->text('address')->nullable();
            $table->string('link')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('twitter')->nullable();
            $table->text('maps')->nullable();
            $table->text('whatsapp_api')->nullable();
            $table->timestamps();
        });
        DB::table('options')->insert([
            [
                'title' => 'Example',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
