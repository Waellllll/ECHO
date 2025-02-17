<?php

namespace App\Entity;

enum StatusEnum: string
{
    case PENDING = 'pending';
    case RESOLVED = 'resolved';
    case CLOSED = 'closed';
}