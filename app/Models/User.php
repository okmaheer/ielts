<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, HasFactory, Notifiable;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

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
        'access_given_at'   => 'datetime',
    ];

    // Duration value → days map (matches admin create/edit dropdown)
    private static array $durationDays = [
        '1' => 15,
        '2' => 30,
        '3' => 60,
        '4' => 90,
    ];

    public function getAccessExpiresAt(): ?\Carbon\Carbon
    {
        if (!$this->access_given_at || !$this->duration) {
            return null;
        }
        $days = self::$durationDays[$this->duration] ?? null;
        if (!$days) {
            return null;
        }
        return $this->access_given_at->copy()->addDays($days);
    }

    public function hasAccessExpired(): bool
    {
        $expiresAt = $this->getAccessExpiresAt();
        if (!$expiresAt) {
            return false;
        }
        return now()->gt($expiresAt);
    }

    public function isActive(): bool
    {
        return $this->status == '1';
    }

    /**
     * 
     * Relation to get details
     */
    public function details () {
        return $this->hasOne(UserDetail::class, 'user_id', 'id');
    }

    /**
     * 
     * Relation to get details
     */
    public function branch () {
        return $this->hasOne(Branch::class, 'id', 'branch_id');
    }

    /**
     * 
     * Relation to get partner
     */
    public function partner () {
        return $this->belongsTo(User::class, 'partner_id', 'id');
    }

    /**
     * 
     * Relation to get business unit
     */
    public function businessUnit () {
        return $this->belongsTo(User::class, 'businessunit_id', 'id');
    }
}
