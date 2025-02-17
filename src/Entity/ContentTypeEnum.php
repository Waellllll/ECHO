<?php
namespace App\Entity;
enum ContentTypeEnum: string 
{
    case PDF = 'pdf';
    case VIDEO = 'video';
    case ARTICLE = 'article';
    case QUIZ = 'quiz';
    case IMAGE = 'image';
}