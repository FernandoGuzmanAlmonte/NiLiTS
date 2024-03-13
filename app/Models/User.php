<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [        
        'role_id',
        'school_code',
        'gender',
        'name',
        'first_lastname',
        'second_lastname',
        'birthday',
        'cell_phone',
        'landline_phone',
        'institutional_phone',
        'income_calendar',
        'email',
        'institutional_email',
        'location',
        'state',
        'password',
        'avatar',
        'status',
        'module_one',
        'module_two',
        'module_three',
        'module_four',
        'module_five',
        'module_six',
        'module_seven',
        'module_eight',
        'module_nine',
        'module_ten',
        'module_eleven',
        'module_twelve',
            
        'graduation_mode',
        'certificate_book',
        'act_number',
        'graduation_calendar',
        'director_id',

        'tutor_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
    * @return string
    */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function avatarUrl() {
        return $this->avatar ? Storage::disk('avatars')->url($this->avatar) : '/assets/img/team-3.jpg';
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function director() {
        return $this->belongsTo(User::class, 'director_id', 'id');
    }

    public function directorStudents() {
        return $this->hasMany(User::class, 'director_id', 'id');
    }

    public function tutor() {
        return $this->belongsTo(User::class, 'tutor_id', 'id');
    }

    public function tutorStudents() {
        return $this->hasMany(User::class, 'tutor_id', 'id');
    }

    /**
     * Check if the user is admin
     */
    public function isAdmin() {
        return $this->role_id === 1;
    }

    /**
     * Check if the user is creator
     */
    public function isTutor() {
        return $this->role_id === 2;
    }

    /**
     * Check if the user is member
     */
    public function isAspirant() {
        return $this->role_id === 3;
    }

    public function isStudent() {
        return $this->role_id === 4;
    }

    // COMPUTED FIELDS
    public function getFullNameAttribute() {
        return $this->name . ' ' . $this->first_lastname . ' ' . $this->second_lastname;
    }

    public function getLastModuleFinishedAttribute() {        
        
        $lastModuleFinished = null;

        if ($this->module_one != null) $lastModuleFinished = "Modulo 1";
        else if ($this->module_two != null) $lastModuleFinished = "Modulo 2";
        else if ($this->module_three != null) $lastModuleFinished = "Modulo 3";
        else if ($this->module_four != null) $lastModuleFinished = "Modulo 4";
        else if ($this->module_five != null) $lastModuleFinished = "Modulo 5";
        else if ($this->module_six != null) $lastModuleFinished = "Modulo 6";
        else if ($this->module_seven != null) $lastModuleFinished = "Modulo 7";
        else if ($this->module_eight != null) $lastModuleFinished = "Modulo 8";
        else if ($this->module_nine != null) $lastModuleFinished = "Modulo 9";
        else if ($this->module_ten != null) $lastModuleFinished = "Modulo 10";
        else if ($this->module_eleven != null) $lastModuleFinished = "Modulo 11";
        else if ($this->module_twuelve != null) $lastModuleFinished = "Modulo 12";

        return $lastModuleFinished;
    }
}
