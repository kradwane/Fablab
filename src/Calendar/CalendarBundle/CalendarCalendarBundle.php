<?php

namespace Calendar\CalendarBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CalendarCalendarBundle extends Bundle
{
    public function getParent()
    {
        return 'BladeTesterCalendarBundle';
    }
}
