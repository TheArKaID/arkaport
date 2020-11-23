<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property boolean $type
 * @property string $name
 * @property string $detail
 * @property string $created_at
 * @property string $updated_at
 */
class Expertise extends Model
{
    const WEB_EXPERTISED = 1;
    const MOBILE_EXPERTISED = 2;
    const DESKTOP_EXPERTISED = 3;

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['type', 'name', 'detail', 'created_at', 'updated_at'];

    public function typeExpertised()
    {
        if($this->type===Expertise::WEB_EXPERTISED) {
            return "Web";
        }else if($this->type===Expertise::MOBILE_EXPERTISED) {
            return "Mobile";
        }else if($this->type===Expertise::DESKTOP_EXPERTISED) {
            return "Desktop";
        }
    }
}
