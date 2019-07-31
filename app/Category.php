<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    const ACTIVE = 1;
    const INACTIVE = 0;
    const DELETED = 9;
}
