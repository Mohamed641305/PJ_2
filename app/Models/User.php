<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // الحقول القابلة للملء
    protected $fillable = [
        'profile_image',
        'name',
        'email',
        'password',
        'phone_number',
        'address',
        'role',      // admin / user
        'status',    // مفعل / غير مفعل أو أي حالة أخرى
    ];

    // الحقول المخفية عند الإرسال كـ JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // الحقول التي يجب تحويل نوعها تلقائيًا
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Laravel 10+ يدعم التشفير التلقائي
    ];

    // ======= ميثودات للتحقق من الدور =======
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isUser(): bool
    {
        return $this->role === 'user';
    }
}
