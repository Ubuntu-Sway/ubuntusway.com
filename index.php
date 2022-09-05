<?php
  $latest_iso = basename(glob("/var/www/downloads/latest/*.iso")[0]);
  if (strpos($_SERVER["HTTP_ACCEPT_LANGUAGE"], "ru") !== false) {
    $lang = "ru";
  }
  if (isset($_GET["en"])) {
    $lang = "en";
  }
  if (isset($_GET["ru"])) {
    $lang = "ru";
  }
?>
<!--
    Mikhail Lebedinets, 2022
    https://lebedinets.ru
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This project is an attempt to provide a user-friendly desktop based on Sway.">
    <title>Ubuntu Sway Remix</title>
    <link rel="stylesheet" href="/css/index.css">
    <link rel="shortcut icon" href="/images/logo.png">
    <link rel="stylesheet" href="/dist/photoswipe.css">
    <link rel="canonical" href="https://ubuntusway.com/">
</head>
<body>
<?php
if ($lang == "ru") {
  echo "    <span class=\"language-switcher\"><a href=\"?en\">English</a> / Русский</span>";
} else {
  echo "    <span class=\"language-switcher\">English / <a href=\"?ru\">Русский</a></span>";
}
?>
    <a href="https://github.com/Ubuntu-Sway" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
    <div class="container">
        <div class="header">
            <img src="images/logo.png" alt="Ubuntu Sway Remix" class="header-logo" />
            <h1>Ubuntu Sway Remix</h1>
            <p><?php
if ($lang == "ru") {
  echo "Ubuntu c оконным менеджером <a href=\"https://swaywm.org/\">Sway</a>";
} else {
  echo "Ubuntu with <a href=\"https://swaywm.org/\">Sway</a> Wayland compositor";
}?></p>
            <br /><br />
            <a href="https://downloads.ubuntusway.com/latest/<?php echo $latest_iso ?>" class="download-button" id="download-link"><?php
if ($lang == "ru") {
  echo "Скачать сейчас";
} else {
  echo "Download Now";
}
?></a>
            <?php
if ($lang == "ru") {
  echo "<a href=\"/downloads.php?ru\" class=\"download-button\">Еще варианты</a>";
} else {
  echo "<a href=\"/downloads.php?en\" class=\"download-button\">Alternative downloads</a>";
}
?>
            <br /><br /><br />
            <a href="https://matrix.to/#/#ubuntusway:matrix.org" style="margin: 2px"><?php
if ($lang == "ru") {
  echo "Matrix Чат";
} else {
  echo "Matrix Chat";
}
?></a>
            <a href="https://mas.to/web/@ubuntusway" style="margin: 2px">Mastodon</a>
            <a href="https://github.com/Ubuntu-Sway/Ubuntu-Sway-Remix/wiki" style="margin: 2px">Wiki</a>
        </div>
        <div class="content">
            <div class="screenshots">
                <h2><?php
if ($lang == "ru") {
  echo "Скриншоты";
} else {
  echo "Screenshots";
}
?></h2>
                <a href="/images/screenshots/desktop.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/desktop.png" class="screenshot" /></a>
                <a href="/images/screenshots/neofetch.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/neofetch.png" class="screenshot" /></a>
                <a href="/images/screenshots/cleandesktop.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/cleandesktop.png" class="screenshot" /></a>
                <a href="/images/screenshots/appmenu.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/appmenu.png" class="screenshot" /></a>
                <a href="/images/screenshots/installer.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/installer.png" class="screenshot" /></a>
            </div><br />
            <p><?php
if ($lang == "ru") {
  echo "Данный проект является попыткой предоставить дружелюбный рабочий стол на базе Sway - популярного мозаичного оконного менеджера (компоновщика окон), использующего современный графический стек Wayland. Ubuntu Sway Remix прекрасно подходит как для новичков, желающих познакомиться с клавиатуро-ориентированным интерфейсом мозаичных оконных менеджеров, так и опытных пользователей GNU/Linux, желающих получить функциональный, дружелюбный и минималистичный интерфейс. Ubuntu Sway Remix содержит популярные приложения и утилиты командной строки, наряду с приложениями с графическим интерфесом, чтобы удовлетворить потребности большинства пользователей.";
} else {
  echo "This project is an attempt to provide a user-friendly desktop based on Sway - a popular tiling window manager (compositor) using the modern Wayland graphics stack. Ubuntu Sway Remix is great for both beginners who want to get familiar with the keyboard-oriented interface of tiling window managers and advanced GNU/Linux users who want a powerful, user-friendly and minimalistic interface. Ubuntu Sway contains popular console-based applications and utilities (CLI) along with graphical user interface (GUI) applications to meet the needs of most users.";
}
?></p>
            <p><?php
if ($lang == "ru") {
  echo "Преимущества:";
} else {
  echo "Features:";
}
?></p>
            <ul>
<?php
if ($lang == "ru") {
  echo "              <li>Надежная база Ubuntu</li>
              <li>Никаких Snap-пакетов!</li>
              <li>Очень крутой мозаичный Wayland компоновщик с потрясающим сообществом</li>
              <li>Легковесный, лёгкий в установке, простой в использовании</li>
              <li>Популярные утилиты командной строки наряду с приложениями с графическим интерфесом</li>
              <li>Множество настроек и кастомизаций для комфортного использования Sway</li>
              <li>Полностью готов к использованию</li>";
} else {
  echo "                       <li>Solid Ubuntu base</li>
                        <li>No Snap's!</li>
                        <li>Very cool tiling Wayland compositor with amazing community</li>
                        <li>Lightweight, easy to install, simple to use</li>
                        <li>Popular console-based apps along with GUI apps</li>
                        <li>Many customizations for comfortable use of Sway</li>
                        <li>Ready to use out of the box</li>";
}
?>

            </ul>
            <p><?php
if ($lang == "ru") {
  echo "Включенные приложения:";
} else {
  echo "Included apps:";
}
?></p>
            <table style="width: 100%"><tr valign="top">
            <td>
              <ul>
                <li><a href="https://github.com/nwg-piotr/azote" target="_blank">Azote</a></li>
                <li><a href="https://github.com/nwg-piotr/autotiling" target="_blank">Autotiling</a></li>
                <li><a href="https://github.com/sentriz/cliphist" target="_blank">Cliphist</a></li>
                <li>Firefox</li>
                <li>Flatpak</li>
                <li><a href="https://codeberg.org/dnkl/foot" target="_blank">Foot</a></li>
                <li>Gimp</li>
                <li>Gparted</li>
                <li><a href="https://sr.ht/~kennylevinsen/greetd/" target="_blank">Greetd</a></li>
                <li><a href="https://github.com/swaywm/sway/blob/master/contrib/grimshot" target="_blank">Grimshot</a></li>
                <li>htop</li>
                <li><a href="https://git.sr.ht/~emersion/kanshi" target="_blank">Kanshi</a></li>
                <li><a href="https://github.com/pimutils/khal" target="_blank">Khal</a></li>
                <li>LibreOffice</li>
                <li><a href="https://github.com/neovim/neovim" target="_blank">Neovim</a></li>
                <li>Pavucontrol</li>
            </ul>
          </td>
          <td>
            <ul>
                <li>Pluma</li>
                <li><a href="https://sr.ht/~kennylevinsen/poweralertd/" target="_blank">Poweralertd</a></li>
                <li>Pulsemixer</li>
                <li><a href="https://github.com/artemsen/swayimg" target="_blank">Swayimg</a></li>
                <li>Ranger</li>
                <li>Thunar</li>
                <li>Thunderbird</li>
                <li><a href="https://github.com/apognu/tuigreet" target="_blank">Tuigreet</a></li>
                <li><a href="https://github.com/nwg-piotr/nwg-wrapper" target="_blank">nwg-wrapper</a></li>
                <li><a href="https://github.com/nwg-piotr/nwg-drawer" target="_blank">nwg-drawer</a></li>
                <li>Ubuntu Driver Manager</li>
                <li>Waybar</li>
                <li><a href="https://github.com/luispabon/wdisplays" target="_blank">Wdisplays</a></li>
                <li><a href="https://github.com/ammen99/wf-recorder" target="_blank">wf-recorder</a></li>
                <li><a href="https://sr.ht/~emersion/wlr-randr/" target="_blank">wlr-randr</a></li>
                <li><a href="https://github.com/pwmt/zathura" target="_blank">Zathura</a></li>
            </ul>
          </td>
        </tr></table>
        </div>
        <div class="footer">
            <img src="/images/welcome.png" class="footer-image" /><br />
            <small><?php
if ($lang == "ru") {
  echo "Ubuntu является торговой маркой Canonical Ltd.";
} else {
  echo "Ubuntu is a Trademark of Canonical Ltd.";

}
?></small>
        </div>
    </div>
    <script type="module">
        import PhotoSwipeLightbox from '/dist/photoswipe-lightbox.esm.js';
        const lightbox = new PhotoSwipeLightbox({
            gallery: '.screenshots',
            children: 'a',
            pswpModule: () => import('/dist/photoswipe.esm.js')
        });
        lightbox.init();
    </script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(89778434, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/89778434" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
