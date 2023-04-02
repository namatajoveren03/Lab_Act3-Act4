<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    public $timestamps = false;
protected $table = 'students';
// column sa table
protected $fillable = [
'students_first_name', 'students_last_name', 'students_phone_number'
];
}