<?php
    /* Set Timezone */
    date_default_timezone_set('Europe/Amsterdam');

    /* Database */
    // require_once('./class/database/database.php');

    /* User */
    require_once('./class/user/name.php');

    /* Date */
    require_once('./class/date/sun.php');
    require_once('./class/date/year.php');
    require_once('./class/date/season.php');
    require_once('./class/date/month.php');
    require_once('./class/date/weeknumber.php');
    require_once('./class/date/day.php');
    require_once('./class/date/daypart.php');
    require_once('./class/date/clock.php');
    require_once('./class/date/date.php');

    /* Highlights */
    require_once('./class/highlights/highlight-admin.php');
    require_once('./class/highlights/highlight.php');

    /* Test */
    // require_once('./class/test/test.php');
?>