<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomsDeclaration extends Model
{
    use HasFactory;

    protected $table = 'customs_declaration';

    protected $fillable = [
        'full_name',
        'passport_number',
        'declaration_details',
    ];
}
