<?php

namespace App\Enum\Model\BlogPost;

enum StatusEnum:string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case HIDDEN = 'hidden';
}