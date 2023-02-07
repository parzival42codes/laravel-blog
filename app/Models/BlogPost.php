<?php

namespace App\Models;

use App\Enum\Model\BlogPost\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    public const DBNAME = 'blog_post_items';

    protected $table = self::DBNAME;

    protected $casts = [
        'post_status' => StatusEnum::class,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user',
        'post_title',
        'post_content',
        'post_status',
    ];



}
