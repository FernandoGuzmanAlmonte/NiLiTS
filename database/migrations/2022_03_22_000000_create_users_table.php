<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('gender')->nullable();
            $table->string('name')->nullable();
            $table->string('first_lastname')->nullable();
            $table->string('second_lastname')->nullable();
            $table->date('birthday')->nullable();
            $table->string('cell_phone')->nullable();;
            $table->string('landline_phone')->nullable();
            $table->string('institutional_phone')->nullable();
            $table->string('school_code')->nullable()->unique();
            $table->string('income_calendar')->nullable();;
            $table->string('email')->nullable()->unique();
            $table->string('institutional_email')->nullable()->unique();
            $table->string('location')->nullable();
            $table->string('state')->nullable();
            $table->string('status')->nullable();
            
            $table->string('module_one')->nullable();
            $table->string('module_two')->nullable();
            $table->string('module_three')->nullable();
            $table->string('module_four')->nullable();
            $table->string('module_five')->nullable();
            $table->string('module_six')->nullable();
            $table->string('module_seven')->nullable();
            $table->string('module_eight')->nullable();
            $table->string('module_nine')->nullable();
            $table->string('module_ten')->nullable();
            $table->string('module_eleven')->nullable();
            $table->string('module_twelve')->nullable();

            $table->string('graduation_mode')->nullable();
            $table->string('certificate_book')->nullable();
            $table->string('act_number')->nullable();
            $table->string('graduation_calendar')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreignId('role_id')->constrained('roles');
            $table->foreignId('director_id')->nullable()->constrained('users');
            $table->foreignId('tutor_id')->nullable()->constrained('users');
        });
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
