<?php

namespace OneSeven9955\Auditing\Drivers;

enum Rotation: string
{
    case Single = 'single';
    case Hourly = 'hourly';
    case Daily = 'daily';
}
