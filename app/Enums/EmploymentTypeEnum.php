<?php

namespace App\Enums;

enum EmploymentTypeEnum:string{
    use BaseEnum;
    case full_time = 'Full-time';
    case part_time = 'Part-time';
    case self_employed = 'Self-employed';
    case freelance = 'Freelance';
    case contract = 'Contract';
    case internship = 'Internship';
    case apprenticeship = 'Apprenticeship';
    case seasonal = 'Seasonal';
}
