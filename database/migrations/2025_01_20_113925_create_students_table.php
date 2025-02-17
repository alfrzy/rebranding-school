<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik')->unique(); // NIK
            $table->enum('gender', ['L', 'P']); // Jenis Kelamin
            $table->string('place_of_birth'); // Tempat Lahir
            $table->date('date_of_birth'); // Tanggal Lahir
            $table->string('religion'); // Agama
            $table->text('address'); // Alamat
            $table->integer('child_number'); // Anak Nomor
            $table->integer('siblings_count'); // Jumlah Saudara
            $table->float('weight'); // Berat Badan
            $table->float('height'); // Tinggi Badan
            $table->string('disability')->nullable(); // Cacat Tubuh
            $table->string('illness_history')->nullable(); // Penyakit yang pernah diderita
            $table->integer('illness_duration')->nullable(); // Lama menderita Penyakit
            $table->string('father_name'); // Nama Ayah
            $table->string('father_job'); // Pekerjaan Ayah
            $table->string('mother_name'); // Nama Ibu
            $table->string('mother_job'); // Pekerjaan Ibu
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
