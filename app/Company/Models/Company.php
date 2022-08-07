<?php

namespace App\Company\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 *
 * @package App\Company\Models
 *
 * @property  int  $id
 * @property  string  $name
 * @property  string  $company_id
 * @property  \Carbon\Carbon  $created_at
 * @property  \Carbon\Carbon  $updated_at
 */
class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'company_id',
    ];
}
