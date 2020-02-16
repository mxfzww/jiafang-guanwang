<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class YoshopUploadFile extends Model
{
    protected $connection = 'mysql_shop';

    protected $table = "yoshop_upload_file";
}
