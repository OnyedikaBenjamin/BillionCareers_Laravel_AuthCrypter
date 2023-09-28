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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // wipe user post filtering by the id when user is deleted.
            $table->string('role');
            $table->string('location');
            $table->string('job_type');
            $table->longText('description');
            $table->string('salary_range');
            $table->string('yearly_salary');
            $table->string('no_vacancy');
            $table->string('company');
            $table->string('email');
            $table->longText('company_description')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
