<nav>
    <?php
        if (empty($_SESSION['role'])) { $role = ''; } else { $role = $_SESSION['role']; }
        $page = $_GET["p"];
        $logout = './script/logout_script.php';
    ?>
    <ul id="mainmenu">
        <?php
            echo '<li id="pc"><a href="./?p=servers"><b>Servers</b></a></li>';
            echo '<li id="pc"><a href="./?p=websites"><b>Websites</b></a></li>';

            echo '<li id="center"><a href="./?p=home"><div class="svg">';
                require_once("./img/logo.svg");
            echo '</div></a></li>';

            echo '<li id="pc"><a href="./?p=merch"><b>Merch</b></a></li>';
            if ($page == 'login')
            {
                echo '<li id="pc"><a href="./?p=register"><b>Register</b></a></li>';
            }
            else
            {
                echo '<li id="pc"><a href="./?p=login"><b>Login</b></a></li>';
            }
        ?>

        <li id="tel">
            <a href="javascript:void(0);" onclick="Menu();">
                <i class="fas fa-bars" id="menutekst"></i> <span id="sub">Open Menu</span>
            </a>
            <ul id="telmenu">
                <?php
                    echo '<li id="pc"><a href="./?p=servers"><b>Servers</b></a></li>';
                    echo '<li id="pc"><a href="./?p=websites"><b>Websites</b></a></li>';
                    echo '<li id="pc"><a href="./?p=merch"><b>Merch</b></a></li>';
                    if ($page == 'login')
                    {
                        echo '<li id="pc"><a href="./?p=register"><b>Register</b></a></li>';
                    }
                    else
                    {
                        echo '<li id="pc"><a href="./?p=login"><b>Login</b></a></li>';
                    }
                ?>
            </ul>
        </li>
    </ul>
</nav>