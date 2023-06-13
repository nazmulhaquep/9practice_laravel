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
        Schema::create('patients', function (Blueprint $table) {
            $table->uuid('PatientId')->primary();
            $table->string('WorkPlaceId')->unique();
            $table->string('WorkPlaceBranchId')->unique();
            $table->string('PatientCode');
            $table->string('RegistrationId');
            $table->string('GivenName');
            $table->string('FamilyName');
            $table->string('GenderId')->unique();
            $table->date('BirthDate');
            $table->integer('Age');
            $table->integer('AgeYear');
            $table->integer('AgeMonth');
            $table->integer('AgeDay');
            $table->date('JoiningDate');
            $table->string('ReligionId')->unique();
            $table->string('RefDepartmentId')->unique();
            $table->string('MaritalStatusId')->unique();
            $table->string('EducationId')->unique();
            $table->string('FatherName');
            $table->string('MotherName');
            $table->string('SpouseName');
            $table->string('HeadOfFamilyId')->unique();
            $table->string('IdNumber');
            $table->string('CellNumber');
            $table->integer('FamilyMembers');
            $table->integer('ChildrenNumber');
            $table->integer('ChildAge0To1');
            $table->integer('ChildAge1To5');
            $table->integer('ChildAgeOver5');
            $table->string('EmailAddress');
            $table->string('PatientImage');
            $table->tinyInteger('Status');
            $table->dateTime('CreateDate');
            $table->dateTime('UpdateDate');
            $table->string('UpdateUser');
            $table->string('OrgId')->unique();
            $table->tinyInteger('IsCalculatedBirthday');
            $table->bigInteger('usersID');
            $table->string('IdType');
            $table->string('OwnerId');
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
        Schema::dropIfExists('patients');
    }
};
