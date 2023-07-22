<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('role')->comment('1:Superadmin, 2:Admin, 3:user');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => '1',
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => '2',
            ],
            [
                'name' => 'USer',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => '3',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
