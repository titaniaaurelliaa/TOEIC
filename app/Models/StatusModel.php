<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusModel extends Model
{
    use HasFactory;

    protected $table = 'status';

    protected $primaryKey = 'id';

    protected $fillable = [
        'status_kode',
        'status_nama',
    ];
}
