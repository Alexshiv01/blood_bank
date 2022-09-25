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
        Schema::create('bloodrequests', function (Blueprint $table) {
            $table->id();
            $table->string('name',120);
            $table->string('blood_group',15);
            $table->string('gender',10);
            $table->date('dob');
            $table->string('email',150);
            $table->string('contact_no',10);
            $table->string('city',50);
            $table->text('dec');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloodrequests');
    }
};
