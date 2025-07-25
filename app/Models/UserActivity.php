<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class UserActivity extends Model
{
    use HasUuids;
    protected $guarded = ['id'];
}
