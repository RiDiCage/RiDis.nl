<?php
    declare(strict_types = 1);
    require_once("./class/highlights/highlight-admin.php");
?>
<div class="video-banner">
    <video autoplay muted loop id="video">
        <source src="./video/Talpa.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
</div>

<div class="block v1">
    Intro met een klein verhaaltje.
</div>

<div class="block v2" id="minecraft">
    Servers Minecraft
</div>

<div class="block v3" id="teamspeak">
    Servers Teamspeak
</div>

<div class="block v4">
    Test.
</div>

<div class="block v5">
    Test.
</div>

<div class="block v6">
    Test.
</div>

<?php
    $admin = new Highlight\Highlightadmin();

    $admin->Add(new Highlight\Highlight(1,'party.png','Title','Sub-Title'));
    $admin->Add(new Highlight\Highlight(2,'happy.png','Title','Sub-Title'));

    echo $admin->Find(2);

    // $daypart = new Date\Daypart();
    // echo '<b class="vet">Goede ' . $daypart->get_daypart() . '</b> ';

    // $name = new User\Name('Richard','van de','Kooij');
    // echo $name->get_fullname() . '.<br><br>';

    // $date = new Date\Date();
    // echo $date->get_date() . '<br>';

    // $sun = new Date\Sun();
    // $sun->get_nautical_twilight();
    // echo $sun->get_nightmode() . '<br><br>';
?>