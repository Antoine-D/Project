<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 31 May 2018 11:54:45 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Relation
 * 
 * @property int $id
 * @property int $idUserRequest
 * @property int $idUserAccept
 * @property bool $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Relation extends Eloquent
{
	protected $casts = [
		'idUserRequest' => 'int',
		'idUserAccept' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'idUserRequest',
		'idUserAccept',
		'status'
	];
}
