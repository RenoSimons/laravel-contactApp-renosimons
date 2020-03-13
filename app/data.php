<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class data extends Model{
    protected $fillable = ['name','phonenumber', 'street', 'housenumber', 'city'];
    use SoftDeletes;
}
