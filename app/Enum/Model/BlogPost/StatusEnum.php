<?php

namespace App\Enum\Model\BlogPost;

enum StatusEnum:string
{
    case Draft = 'draft';
    case Published = 'published';
    case Hidden = 'hidden';
}