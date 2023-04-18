<?php

namespace App\Enums;

enum Status: string
{
    case NEW = 'New';
    case ACTIVE = 'Active';
    case FINISHED = 'Finished';
    case POSTPONED = 'Postponed';
}
