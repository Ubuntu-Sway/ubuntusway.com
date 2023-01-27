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
  $downloads_dir = "/var/www/downloads";
  $downloads_json = file_get_contents("$downloads_dir/downloads.json");

  $downloads = json_decode($downloads_json, true);

  $download_labels = array(
    "iso" => array(
      "icon" => "/images/icons/download.svg",
      "label" => "Direct download"
    ),
    "torrent" => array(
      "icon" => "/images/icons/torrent.svg",
      "label" => "BitTorrent"
    ),
    "rpi" => array(
      "icon" => "/images/icons/raspberry.svg",
      "label" => "Raspberry Pi"
    ),
  );
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
    <title>Ubuntu Sway Remix :: Alternative downloads</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/downloads.css">
    <link rel="shortcut icon" href="/images/logo.png">
    <link rel="stylesheet" href="/dist/photoswipe.css">
    <link rel="canonical" href="https://ubuntusway.com/downloads.html">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Alternative downloads</h1>
            <p>Download via BitTorrent or Raspberry Pi images</p>
            <br /><br />
            <a href="/" class="download-button">Back to Home Page</a>
        </div>
        <div class="content">
            <div class="downloads" id="downloads">
<?php
  foreach ($downloads as $download) {
    $title = $download["title"];
    $links = $download["links"];
    $keys  = array_keys($links);
    $hashes = "";

    foreach ($keys as $key) {
      if ($key == "md5" || $key == "sha256" || $key == "rpi_md5" || $key == "rpi_sha256") {
        $link = $links[$key];
        $download_url = "https://downloads.ubuntusway.com/$link";
        $hashes .= "<small><a href=\"$download_url\">[ $key ]</a></small> ";
      }
    }

    echo "<h2>$title</h2>$hashes<table>";
    foreach ($keys as $key) {
      if (array_key_exists($key, $download_labels)) {
        $link = $links[$key];
        $icon = $download_labels[$key]["icon"];
        $label = $download_labels[$key]["label"];
        $path = "$downloads_dir/$link";
        $filename = basename($path);
        $download_url = "https://downloads.ubuntusway.com/$link";
        $filesize = humanFileSize(filesize($path));

        echo "<tr><td><img src=\"$icon\" class=\"download-icon\"></td><td>$label</td><td><a href=\"$download_url\">$filename</a></td><td>$filesize</td></tr>";
      }
    }
    echo "</table>";
  }
?>
            </div>
        </div>
        <div class="footer">
            <img src="/images/welcome.png" class="footer-image" /><br />
            <small>Ubuntu is a Trademark of Canonical Ltd.</small>
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
</body>
</html>
