<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property int $id
 * @property string $NOM
 * @property string $PRENOM
 * @property int $TELEPHONE
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string $CNI
 * @property int $ID_ROLE
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Role $role
 * @property Collection|Occupation[] $occupations
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';

	protected $casts = [
		'TELEPHONE' => 'int',
		'email_verified_at' => 'datetime',
		'ID_ROLE' => 'int'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'NOM',
		'PRENOM',
		'TELEPHONE',
		'email',
		'email_verified_at',
		'password',
		'CNI',
		'ID_ROLE',
		'remember_token'
	];

	public function role()
	{
		return $this->belongsTo(Role::class, 'ID_ROLE');
	}

	public function occupations()
	{
		return $this->hasMany(Occupation::class, 'ID');
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class, 'ID');
	}
}
