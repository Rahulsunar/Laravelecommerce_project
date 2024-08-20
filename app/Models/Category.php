<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $table='categories';
    protected $fillable= ['title','rank','icon','status','created_by','updated_by'];

    
    public function createdBy(){
        return $this->belongsTo(User::class, 'created_by','id');
    }
    public function updatedBy(){
        return $this->belongsTo(User::class, 'updated_by','id');
    }

    public function getAllActiveCategory(){
        return $this->where('status',1)->orderBy('rank')->get();
    }
    
}
