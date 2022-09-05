<?php
  function humanFileSize($size,$unit="") {
    if( (!$unit && $size >= 1<<30) || $unit == "GB")
    return number_format($size/(1<<30),2)."GB";
    if( (!$unit && $size >= 1<<20) || $unit == "MB")
    return number_format($size/(1<<20),2)."MB";
    if( (!$unit && $size >= 1<<10) || $unit == "KB")
    return number_format($size/(1<<10),2)."KB";
    return number_format($size)." bytes";
  }
  $latest_iso = basename(glob("/var/www/downloads/latest/*.iso")[0]);
  $latest_rpi = basename(glob("/var/www/downloads/raspberrypi/latest/*.img.xz")[0]);
  $latest_md5 = basename(glob("/var/www/downloads/latest/*.md5.txt")[0]);
  $latest_sha256 = basename(glob("/var/www/downloads/latest/*.sha256.txt")[0]);
  $latest_torrent = basename(glob("/var/www/downloads/latest/*.torrent")[0]);
  $rpi_size = humanFileSize(filesize("/var/www/downloads/raspberrypi/latest/$latest_rpi"));
  $rpi_md5 = basename(glob("/var/www/downloads/raspberrypi/latest/*.md5.txt")[0]);
  $rpi_sha256 = basename(glob("/var/www/downloads/raspberrypi/latest/*.sha256.txt")[0]);
  $torrent_size = humanFileSize(filesize("/var/www/downloads/latest/$latest_torrent"));
  $latest_size = humanFileSize(filesize("/var/www/downloads/latest/$latest_iso"));
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
    <title><?php
if ($lang == "ru") {
  echo "Ubuntu Sway Remix :: Альтернативные загрузки";
} else {
  echo "Ubuntu Sway Remix :: Alternative downloads";
}
?></title>
    <link rel="stylesheet" href="/css/downloads.css">
    <link rel="shortcut icon" href="/images/logo.png">
    <link rel="stylesheet" href="/dist/photoswipe.css">
    <link rel="canonical" href="https://ubuntusway.com/downloads.html">
</head>
<body>
<?php
if ($lang == "ru") {
  echo "    <span class=\"language-switcher\"><a href=\"?en\">English</a> / Русский</span>";
} else {
  echo "    <span class=\"language-switcher\">English / <a href=\"?ru\">Русский</a></span>";
}
?>
    <div class="container">
        <div class="header">
            <h1><?php
if ($lang == "ru") {
  echo "Альтернативные загрузки";
} else {
  echo "Alternative downloads";
}
?></h1>
            <p><?php
if ($lang == "ru") {
  echo "Загрузите через BitTorrent и образы для Raspberry Pi";
} else {
  echo "Download via BitTorrent or Raspberry Pi images";
}
?></p>
            <br /><br />
            <?php
if ($lang == "ru") {
  echo "<a href=\"/?ru\" class=\"download-button\">Вернуться назад</a>";
} else {
  echo "<a href=\"/?en\" class=\"download-button\">Back to Home Page</a>";
}
?>
        </div>
        <div class="content">
            <div class="downloads">
                <table>
                <tr>
                    <td><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve"> <g> <g> <path d="M233,378.7c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4l107.5-107.5c5.3-5.3,5.3-13.8,0-19.1c-5.3-5.3-13.8-5.3-19.1,0L256,336.5 v-323C256,6,250,0,242.5,0S229,6,229,13.5v323l-84.4-84.4c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1L233,378.7z"/> <path d="M426.5,458h-368C51,458,45,464,45,471.5S51,485,58.5,485h368c7.5,0,13.5-6,13.5-13.5S434,458,426.5,458z"/> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg></td>
                    <td><?php
if ($lang == "ru") {
  echo "Загрузить напрямую";
} else {
  echo "Direct download";
}
?></td>
                    <td><a href="https://downloads.ubuntusway.com/latest/<?php echo $latest_iso ?>"><?php echo $latest_iso ?></a></td>
                    <td><?php echo $latest_size ?></td>
                </tr>
                <tr>
                    <td><svg role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14"><path d="m 6.5590634,4.41475 c -0.42968,0.083 -1.14736,0.4199 -1.46463,0.6835 -0.76654,0.6347 -1.14246,1.4842 -1.14246,2.5582 0,0.669 0.0781,1.0253 0.36612,1.5965 0.56144,1.118 1.74296,1.8797 3.53478,2.2654 0.42968,0.098 0.67862,0.1123 2.10908,0.1319 l 1.6257796,0.02 0.22947,-0.1367 c 0.21967,-0.127 1.22536,-1.0741 1.1814,-1.1132 -0.01,0 -0.19531,0 -0.41009,0.024 -0.21478,0.02 -0.88862,0.063 -1.49401,0.093 -2.3141896,0.1074 -3.6957996,-0.1172 -4.8138896,-0.7909 -0.32707,-0.2002 -0.83977,-0.7275 -0.98132,-1.0204 -0.5029,-1.0449 -0.21478,-2.2751 0.67372,-2.8707 1.04964,-0.6982 2.48501,-0.4297 3.16375,0.5956 l 0.12208,0.1806 0.46874,-0.249 c 0.25874,-0.1415 0.4785396,-0.2587 0.4882096,-0.2685 0.0587,-0.049 -0.20988,-0.4248 -0.5565296,-0.7762 -0.32229,-0.332 -0.46874,-0.4394 -0.85434,-0.6298 -0.72748,-0.3565 -1.43059,-0.4494 -2.24586,-0.2931 z m -0.17094,-1.4501 c -1.53308,0.249 -2.84636,1.2401 -3.51518,2.6511 -0.6103,1.2791 -0.55164,2.9294 0.15134,4.311 0.50781,0.996 1.37684,1.8552 2.40689,2.3727 l 0.38572,0.1904 1.70879,0 c 1.84067,0 2.15794,-0.029 2.8903196,-0.2734 0.35155,-0.1123 0.66392,-0.2637 0.39539,-0.1904 -0.23437,0.068 -2.1628396,0.034 -2.7096996,-0.044 -2.83167,-0.415 -4.53556,-2.0944 -4.53556,-4.4721 0,-0.5517 0.0147,-0.6543 0.14645,-1.0351 0.27343,-0.7958 0.77143,-1.4501 1.42067,-1.865 0.63955,-0.4101 1.25474,-0.586 2.03586,-0.5762 0.57123,0 1.03017,0.093 1.53295,0.2978 0.20021,0.083 0.37103,0.1416 0.37592,0.1368 0.01,0 0.11719,-0.2197 0.23927,-0.4687 0.25874,-0.5224 0.25874,-0.5224 -0.17094,-0.6885 -0.63466,-0.2489 -1.12287,-0.3466 -1.83088,-0.3661 -0.37555,-0.01 -0.79066,3e-4 -0.92731,0.02 z m -0.61029,-1.367 c -1.33275,0.2783 -2.38252,0.9228 -3.36384,2.0799 -0.66882,0.786 -1.19132,1.9821 -1.35234,3.1002 -0.21967495,1.5526 0.14645,3.0221 1.11797,4.4771 0.27343,0.4101 0.33197,0.4687 0.62009,0.6152 0.55654,0.2929 1.08381,0.4589 1.89431,0.5908 0.083,0.015 0.15624,0.019 0.15624,0.01 0,-0.01 -0.12208,-0.1123 -0.27833,-0.2246 -0.43935,-0.3321 -1.14736,-1.0791 -1.46462,-1.5478 -0.78601,-1.1474 -1.03018,-1.9968 -0.97642,-3.3834 0.0196,-0.5615 0.0537,-0.7909 0.15135,-1.1083 0.64923,-2.1237 2.41178,-3.5786 4.35494,-3.5981 l 0.40029,0 0.0293,-0.3174 c 0.0196,-0.1757 0.044,-0.4199 0.0635,-0.5516 l 0.0293,-0.2295 -0.48331,0 c -0.26853,0 -0.66894,0.044 -0.89841,0.088 z"/></svg></td>
                    <td>BitTorrent</td>
                    <td><a href="https://downloads.ubuntusway.com/latest/<?php echo $latest_torrent ?>"><?php echo $latest_torrent ?></a></td>
                    <td><?php echo $torrent_size ?></td>
                </tr>
                <tr>
                    <td><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="raspberry-pi" class="svg-inline--fa fa-raspberry-pi fa-w-13" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 407 512"><path fill="currentColor" d="M372 232.5l-3.7-6.5c.1-46.4-21.4-65.3-46.5-79.7 7.6-2 15.4-3.6 17.6-13.2 13.1-3.3 15.8-9.4 17.1-15.8 3.4-2.3 14.8-8.7 13.6-19.7 6.4-4.4 10-10.1 8.1-18.1 6.9-7.5 8.7-13.7 5.8-19.4 8.3-10.3 4.6-15.6 1.1-20.9 6.2-11.2.7-23.2-16.6-21.2-6.9-10.1-21.9-7.8-24.2-7.8-2.6-3.2-6-6-16.5-4.7-6.8-6.1-14.4-5-22.3-2.1-9.3-7.3-15.5-1.4-22.6.8C271.6.6 269 5.5 263.5 7.6c-12.3-2.6-16.1 3-22 8.9l-6.9-.1c-18.6 10.8-27.8 32.8-31.1 44.1-3.3-11.3-12.5-33.3-31.1-44.1l-6.9.1c-5.9-5.9-9.7-11.5-22-8.9-5.6-2-8.1-7-19.4-3.4-4.6-1.4-8.9-4.4-13.9-4.3-2.6.1-5.5 1-8.7 3.5-7.9-3-15.5-4-22.3 2.1-10.5-1.3-14 1.4-16.5 4.7-2.3 0-17.3-2.3-24.2 7.8C21.2 16 15.8 28 22 39.2c-3.5 5.4-7.2 10.7 1.1 20.9-2.9 5.7-1.1 11.9 5.8 19.4-1.8 8 1.8 13.7 8.1 18.1-1.2 11 10.2 17.4 13.6 19.7 1.3 6.4 4 12.4 17.1 15.8 2.2 9.5 10 11.2 17.6 13.2-25.1 14.4-46.6 33.3-46.5 79.7l-3.7 6.5c-28.8 17.2-54.7 72.7-14.2 117.7 2.6 14.1 7.1 24.2 11 35.4 5.9 45.2 44.5 66.3 54.6 68.8 14.9 11.2 30.8 21.8 52.2 29.2C159 504.2 181 512 203 512h1c22.1 0 44-7.8 64.2-28.4 21.5-7.4 37.3-18 52.2-29.2 10.2-2.5 48.7-23.6 54.6-68.8 3.9-11.2 8.4-21.3 11-35.4 40.6-45.1 14.7-100.5-14-117.7zm-22.2-8c-1.5 18.7-98.9-65.1-82.1-67.9 45.7-7.5 83.6 19.2 82.1 67.9zm-43 93.1c-24.5 15.8-59.8 5.6-78.8-22.8s-14.6-64.2 9.9-80c24.5-15.8 59.8-5.6 78.8 22.8s14.6 64.2-9.9 80zM238.9 29.3c.8 4.2 1.8 6.8 2.9 7.6 5.4-5.8 9.8-11.7 16.8-17.3 0 3.3-1.7 6.8 2.5 9.4 3.7-5 8.8-9.5 15.5-13.3-3.2 5.6-.6 7.3 1.2 9.6 5.1-4.4 10-8.8 19.4-12.3-2.6 3.1-6.2 6.2-2.4 9.8 5.3-3.3 10.6-6.6 23.1-8.9-2.8 3.1-8.7 6.3-5.1 9.4 6.6-2.5 14-4.4 22.1-5.4-3.9 3.2-7.1 6.3-3.9 8.8 7.1-2.2 16.9-5.1 26.4-2.6l-6 6.1c-.7.8 14.1.6 23.9.8-3.6 5-7.2 9.7-9.3 18.2 1 1 5.8.4 10.4 0-4.7 9.9-12.8 12.3-14.7 16.6 2.9 2.2 6.8 1.6 11.2.1-3.4 6.9-10.4 11.7-16 17.3 1.4 1 3.9 1.6 9.7.9-5.2 5.5-11.4 10.5-18.8 15 1.3 1.5 5.8 1.5 10 1.6-6.7 6.5-15.3 9.9-23.4 14.2 4 2.7 6.9 2.1 10 2.1-5.7 4.7-15.4 7.1-24.4 10 1.7 2.7 3.4 3.4 7.1 4.1-9.5 5.3-23.2 2.9-27 5.6.9 2.7 3.6 4.4 6.7 5.8-15.4.9-57.3-.6-65.4-32.3 15.7-17.3 44.4-37.5 93.7-62.6-38.4 12.8-73 30-102 53.5-34.3-15.9-10.8-55.9 5.8-71.8zm-34.4 114.6c24.2-.3 54.1 17.8 54 34.7-.1 15-21 27.1-53.8 26.9-32.1-.4-53.7-15.2-53.6-29.8 0-11.9 26.2-32.5 53.4-31.8zm-123-12.8c3.7-.7 5.4-1.5 7.1-4.1-9-2.8-18.7-5.3-24.4-10 3.1 0 6 .7 10-2.1-8.1-4.3-16.7-7.7-23.4-14.2 4.2-.1 8.7 0 10-1.6-7.4-4.5-13.6-9.5-18.8-15 5.8.7 8.3.1 9.7-.9-5.6-5.6-12.7-10.4-16-17.3 4.3 1.5 8.3 2 11.2-.1-1.9-4.2-10-6.7-14.7-16.6 4.6.4 9.4 1 10.4 0-2.1-8.5-5.8-13.3-9.3-18.2 9.8-.1 24.6 0 23.9-.8l-6-6.1c9.5-2.5 19.3.4 26.4 2.6 3.2-2.5-.1-5.6-3.9-8.8 8.1 1.1 15.4 2.9 22.1 5.4 3.5-3.1-2.3-6.3-5.1-9.4 12.5 2.3 17.8 5.6 23.1 8.9 3.8-3.6.2-6.7-2.4-9.8 9.4 3.4 14.3 7.9 19.4 12.3 1.7-2.3 4.4-4 1.2-9.6 6.7 3.8 11.8 8.3 15.5 13.3 4.1-2.6 2.5-6.2 2.5-9.4 7 5.6 11.4 11.5 16.8 17.3 1.1-.8 2-3.4 2.9-7.6 16.6 15.9 40.1 55.9 6 71.8-29-23.5-63.6-40.7-102-53.5 49.3 25 78 45.3 93.7 62.6-8 31.8-50 33.2-65.4 32.3 3.1-1.4 5.8-3.2 6.7-5.8-4-2.8-17.6-.4-27.2-5.6zm60.1 24.1c16.8 2.8-80.6 86.5-82.1 67.9-1.5-48.7 36.5-75.5 82.1-67.9zM38.2 342c-23.7-18.8-31.3-73.7 12.6-98.3 26.5-7 9 107.8-12.6 98.3zm91 98.2c-13.3 7.9-45.8 4.7-68.8-27.9-15.5-27.4-13.5-55.2-2.6-63.4 16.3-9.8 41.5 3.4 60.9 25.6 16.9 20 24.6 55.3 10.5 65.7zm-26.4-119.7c-24.5-15.8-28.9-51.6-9.9-80s54.3-38.6 78.8-22.8 28.9 51.6 9.9 80c-19.1 28.4-54.4 38.6-78.8 22.8zM205 496c-29.4 1.2-58.2-23.7-57.8-32.3-.4-12.7 35.8-22.6 59.3-22 23.7-1 55.6 7.5 55.7 18.9.5 11-28.8 35.9-57.2 35.4zm58.9-124.9c.2 29.7-26.2 53.8-58.8 54-32.6.2-59.2-23.8-59.4-53.4v-.6c-.2-29.7 26.2-53.8 58.8-54 32.6-.2 59.2 23.8 59.4 53.4v.6zm82.2 42.7c-25.3 34.6-59.6 35.9-72.3 26.3-13.3-12.4-3.2-50.9 15.1-72 20.9-23.3 43.3-38.5 58.9-26.6 10.5 10.3 16.7 49.1-1.7 72.3zm22.9-73.2c-21.5 9.4-39-105.3-12.6-98.3 43.9 24.7 36.3 79.6 12.6 98.3z"></path></svg></td>
                    <td>Raspberry Pi</td>
                    <td><a href="https://downloads.ubuntusway.com/raspberrypi/latest/<?php echo $latest_rpi ?>"><?php echo $latest_rpi ?></a></td>
                    <td><?php echo $rpi_size ?></td>
                </tr>
                </table>
                <table>
                <tr>
                    <td><?php
if ($lang == "ru") {
  echo "Контрольные суммы для последнего выпуска:";
} else {
  echo "Checksums for latest release:";
}
?></td>
                    <td><a href="https://downloads.ubuntusway.com/latest/<?php echo $latest_md5 ?>">MD5</a></td>
                    <td><a href="https://downloads.ubuntusway.com/latest/<?php echo $latest_sha256 ?>">SHA256</a></td>
                </tr>
                <tr>
                    <td><?php
if ($lang == "ru") {
  echo "Контрольные суммы для Raspberry Pi выпуска:";
} else {
  echo "Checksums for Raspberry Pi release:";
}
?></td>
                    <td><a href="https://downloads.ubuntusway.com/raspberrypi/latest/<?php echo $rpi_md5 ?>">MD5</a></td>
                    <td><a href="https://downloads.ubuntusway.com/raspberrypi/latest/<?php echo $rpi_sha256 ?>">SHA256</a></td>
                </tr>
                </table><br><br>
                <center><a href="https://mirror.lebedinets.ru/ubuntusway/"><?php
if ($lang == "ru") {
  echo "Альтернативное зеркало";
} else {
  echo "Alternative mirror";
}
?></a></center>
            </div>
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
