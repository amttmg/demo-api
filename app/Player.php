<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Player
 * @package App
 */
class Player extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['first_name', 'last_name'];

    /**
     * Player belongs to Team Relation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
