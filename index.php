<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>repositorios de software libre</title>
        <link rel="stylesheet" href="/include/css/style.css" type="text/css" />
        <link rel="stylesheet" href="/include/css/frontpage.css" type="text/css" />
        <link rel="stylesheet" href="/css/ui-lightness/jquery-ui-1.10.1.custom.min.css" media="screen" type="text/css" />
        <link rel="shortcut icon" href="/favicon.ico" />
        <script src="/include/js/jquery-1.9.1.js"></script>
        <script src="/include/js/jquery-ui-1.10.1.custom.min.js"></script>
        <script src="/include/js/espresso.js"></script>
    </head>
    <body>
    <?php include './include/header.html' ?>
    <?php
        $path = '.';
        $directories = @scandir($path);
        $list = array();

        $translations = array (
            'archlinux'  => array('title' => 'Arch Linux'),
            'backtrack'  => array('title' => 'BackTrack'),
            'centos'     => array('title' => 'CentOS'),
            'chakra'     => array('title' => 'Chakra'),
            'debian'     => array('title' => 'Debian'),
            'fedora'     => array('title' => 'Fedora'),
            'fos'        => array('title' => 'FOS GNU/Linux'),
            'fosobi'     => array('title' => 'OBI GNU/Linux'),
            'freebsd'    => array('title' => 'FreeBSD'),
            'gentoo'     => array('title' => 'Gentoo'),
            'geexbox'    => array('title' => 'GeeXboX'),
            'knoppix'    => array('title' => 'Knoppix'),
            'linuxmce'   => array('title' => 'LinuxMCE'),
            'linuxmint'  => array('title' => 'Linux Mint'),
            'mageia'     => array('title' => 'Mageia'),
            'mandriva'   => array('title' => 'Mandriva'),
            'opensuse'   => array('title' => 'openSUSE'),
            'puppylinux' => array('title' => 'Puppy Linux'),
            'slackware'  => array('title' => 'Slackware'),
            'ubuntu'     => array('title' => 'Ubuntu'),
            'uremix'     => array('title' => 'Uremix'),
        );

        foreach ($directories as $directory) {
            if (is_dir("$path/$directory")) {
                if ($directory <> '.' && $directory <> '..' && $directory <> '.git' && 
                    $directory <> 'lost+found' && $directory <> 'include' && $directory <> 'logs') {
                    $list[] = $directory;
                }
            }
        }

        shuffle($list);
        $count = 0;
        foreach ($list as $element) {
            $img = file_exists("$path/include/img/distros/$element.png") ? $element : 'blank';
            $title = (isset($translations[$element]['title'])) ? $translations[$element]['title'] : $element;

            echo '<div class="tooltip block" title="qwer"><div class="logo">';
            echo '<a href="/' . $element . '/">';
            echo '<img src="/include/img/distros/' . $img . '.png" alt="" title="" /></a>';
            echo '</div><div class="alt"><a href="/' . $element . '">' . $title . '</a></div></div>';

            if ($count >= 4 + rand(0, 4)) {
                $count = 0;
                echo '<br/>';
            }
            $count++;
        }
    ?>
    <?php include './include/footer.html' ?>
    </body>
</html>

