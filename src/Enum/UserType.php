<?php


namespace App\Enum;

enum UserType: string
{
    case ADMIN = 'admin';
    case PROFESSIONNEL = 'professionnel';
    case AMATEUR = 'amateur';

    public function label(): string
    {
        return match ($this) {
            self::ADMIN => 'Administrateur',
            self::PROFESSIONNEL => 'Agriculteur Professionnel',
            self::AMATEUR => 'Agriculteur Amateur',
        };

    }
}
