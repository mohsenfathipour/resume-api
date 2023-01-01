<?php

namespace App\Enums;

enum GenderEnum:string {
    use BaseEnum;
    case male = 'Male';
    case female = 'Female';
}
