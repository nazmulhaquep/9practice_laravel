<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;

class Patient extends Model
{

    protected $table='patients';

    protected $primaryKey = 'PatientId';

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable=[
        'PatientId',
        'WorkPlaceId',//table:WorkPlace
        'WorkPlaceBranchId',//table:WorkPlaceBranch
        'PatientCode','RegistrationId','GivenName',
        'FamilyName',
        'GenderId', //table:RefGender
        'BirthDate','Age','AgeYear','AgeMonth',
        'AgeDay','JoiningDate','ReligionId','RefDepartmentId','RefDesignationId',
        'MaritalStatusId',//table:RefMaritalStatus
        'EducationId','FatherName','MotherName','SpouseName',
        'HeadOfFamilyId','IdNumber','CellNumber','FamilyMembers','ChildrenNumber',
        'ChildAge0To1','ChildAge1To5','ChildAgeOver5','EmailAddress',
        'PatientImage','Status','CreateDate','CreateUser',
        'UpdateDate','UpdateUser',
        'OrgId', //table:Organization
        'IsCalculatedBirthday','oWnerId'
    ];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::uuid4()->toString();
        });
    }

    public function get_workplace(){
        return $this->hasOne(WorkPlace::class,'WorkPlaceId','WorkPlaceId');
    }
    public function get_workplacebranch(){
        return $this->hasOne(WorkPlaceBranch::class,'WorkPlaceBranchId','WorkPlaceBranchId');
    }
    public function get_refgender(){
        return $this->hasOne(RefGender::class,'GenderId','GenderId');
    }
    public function get_refmaritalstatus(){
        return $this->hasOne(RefMaritalStatus::class,'MaritalStatusId','MaritalStatusId');
    }
    public function get_organization(){
        return $this->hasOne(Organization::class,'OrgId','OrgId');
    }
}
