<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapersonal extends Model
{
    use HasFactory;

    protected $fillable = ['nama','alamat','nomor_telp','email','level_id'];
}
