<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property boolean $level
 * @property string $major
 * @property string $year
 * @property string $created_at
 * @property string $updated_at
 */
class Education extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'educations';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['level', 'major', 'year', 'created_at', 'updated_at'];

}
