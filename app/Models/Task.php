<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * 
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property bool $is_completed
 * @property Carbon|null $due_date
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Task extends Model
{
	protected $table = 'tasks';

	protected $casts = [
		'is_completed' => 'bool',
		'due_date' => 'datetime',
		'user_id' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'is_completed',
		'due_date',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
