<?php
  $latest_iso = basename(glob("/var/www/downloads/latest/*.iso")[0]);
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="shortcut icon" href="/images/logo.png">
    <link rel="stylesheet" href="/dist/photoswipe.css">
    <link rel="canonical" href="https://ubuntusway.com/">
</head>
<body>
    <a href="https://github.com/Ubuntu-Sway" class="github-corner" aria-label="View source on GitHub"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
    <div class="container">
        <div class="header">
            <img src="images/logo.png" alt="Ubuntu Sway Remix" class="header-logo" />
            <h1>Ubuntu Sway Remix</h1>
            <p>Ubuntu with <a href="https://swaywm.org/">Sway</a> Wayland compositor</p>
            <br /><br />
            <a href="https://downloads.ubuntusway.com/latest/<?php echo $latest_iso ?>" class="download-button" id="download-link">Download Now</a>
            <a href="/downloads.php" class="download-button">Alternative downloads</a>
            <br /><br /><br />
            <a href="https://matrix.to/#/#ubuntusway:matrix.org" style="margin: 2px">Matrix Chat</a>
            <a href="https://mas.to/web/@ubuntusway" style="margin: 2px">Mastodon</a>
            <a href="https://github.com/Ubuntu-Sway/Ubuntu-Sway-Remix/wiki" style="margin: 2px">Wiki</a>
        </div>
        <div class="content">
            <div class="screenshots">
                <h2>Screenshots</h2>
                <a href="/images/screenshots/desktop.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/desktop.png" class="screenshot" /></a>
                <a href="/images/screenshots/neofetch.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/neofetch.png" class="screenshot" /></a>
                <a href="/images/screenshots/cleandesktop.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/cleandesktop.png" class="screenshot" /></a>
                <a href="/images/screenshots/appmenu.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/appmenu.png" class="screenshot" /></a>
                <a href="/images/screenshots/installer.png" data-pswp-width="1920" data-pswp-height="1080" target="_blank"><img src="/images/thumbs/installer.png" class="screenshot" /></a>
            </div><br />
            <p>This project is an attempt to provide a user-friendly desktop based on Sway - a popular tiling window manager (compositor) using the modern Wayland graphics stack. Ubuntu Sway Remix is great for both beginners who want to get familiar with the keyboard-oriented interface of tiling window managers and advanced GNU/Linux users who want a powerful, user-friendly and minimalistic interface. Ubuntu Sway contains popular console-based applications and utilities (CLI) along with graphical user interface (GUI) applications to meet the needs of most users.</p>
            <p>Features:</p>
            <ul>
              <li>Solid Ubuntu base</li>
              <li>No Snap's!</li>
              <li>Very cool tiling Wayland compositor with amazing community</li>
              <li>Lightweight, easy to install, simple to use</li>
              <li>Popular console-based apps along with GUI apps</li>
              <li>Many customizations for comfortable use of Sway</li>
              <li>Ready to use out of the box</li>
            </ul>
            <p>System requirements:</p>
            <ul>
              <li>CPU: Dual-core CPU with 1.6 GHz</li>
              <li>RAM: 1 GB</li>
              <li>Storage space: 20 GB</li>
              <li>GPU: Any Intel or AMD gpu (Nvidia cards required additional settings and <b>NOT</b> officially supported.
                  <a href="https://github.com/Ubuntu-Sway/Ubuntu-Sway-Remix/wiki/Nvidia-cards" style="margin: 2px">See</a> for details.)</li>
            </ul>
            <p>Raspberry Pi:</p>
            <ul>
              <li>Supported models: 3b, 3b+, 4 and 400 (arm64 only)</li>
              <li>microSD card: 8 GB required</li>
              <li>Required good CPU heatsink</li>
            </ul>
            <p>Installation:</p>
            <ul>
              <li>Download image from downloads page</li>
              <li>Create bootable USB stick using <a href="https://www.balena.io/etcher/" style="margin: 2px">Etcher</a> or similar tool</li>
              <li>Click "Run Calamares installer" in Ubuntu Sway Welcome app (on Ubuntu Sway Remix 22.04 the installer will run automatically after boot to desktop)</li>
              <li>Follow through installation process. Installation is pretty straightforward and takes 10-20 minutes depending on your storage device speed.
                  Check out our <a href="https://github.com/Ubuntu-Sway/Ubuntu-Sway-Remix/wiki/FAQ" style="margin: 2px">FAQ</a> for additional hints.</li>
              <li><b>NOTE:</b> there are currently problems installing using partition encryption. Use at your own risk!</li>
            </ul>
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
