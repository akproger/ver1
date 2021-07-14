<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    private $ads_title;
    /**
     * @var mixed
     */
    private $ads_description;
    /**
     * @var mixed
     */
    private $user_id;
}
