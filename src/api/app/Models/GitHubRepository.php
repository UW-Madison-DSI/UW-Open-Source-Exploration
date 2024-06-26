<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GitHubRepository extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'github.wisconsin_repositories';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}