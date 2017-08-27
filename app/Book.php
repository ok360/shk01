<?php

namespace App;

use App\BookDetail;
use App\BookLang;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded= ['id'];

    public function bookDetail()
    {
        return $this->hasOne (BookDetail::class);
    }
    public function bookLang()
    {
        return $this->hasMany (BookLang::class);
    }
}
