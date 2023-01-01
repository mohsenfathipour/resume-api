<?php

namespace App\Enums;

enum LocationTypeEnum:string {
    use BaseEnum;
    case on_site = 'On-site';
    case hybrid = 'Hybrid';
    case remote = 'Remote';
}
