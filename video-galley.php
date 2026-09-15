<?php
include("application-top.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Falta SEZ,Special Economic Zones in India,SEZ,Falta Special Economic Zone,FSEZ">
  <meta name="title" content="Falta SEZ">
  <meta name="description" content="Falta Special Economic Zone">
  <title><?php echo htmlspecialchars($gbl_row["org_name"] ?? 'Falta SEZ'); ?> | Video Gallery</title>

  <link href="images/favicon.png" rel="shortcut icon" type="image/png">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <style>
    /* ==== General Section ==== */
    .category-section {
      padding: 5px 0;
      background: linear-gradient(180deg, #f8f9fb 0%, #ffffff 100%);
    }

    /* ==== Accordion Panels ==== */
    .panel-group {
      margin-top: 30px;
    }

    .panel {
      border: none;
      border-radius: 12px;
      margin-bottom: 20px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.08);
      overflow: hidden;
      transition: all 0.3s ease;
    }

    .panel:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
    }

    .panel-heading {
      padding: 0;
      border: none;
      border-radius: 12px 12px 0 0;
      background: linear-gradient(90deg, #007bff 0%, #007bff 100%);
      color: #fff;
    }

    .panel-heading .panel-title a {
      display: block;
      padding: 16px 20px;
      font-size: 1.2rem;
      font-weight: 600;
      text-decoration: none;
      color: #fff;
      position: relative;
    }

    .panel-heading:hover {
      background: linear-gradient(90deg, #00b894 0%, #007bff 100%);
    }

    .panel .meta {
      background: #f0f4f8;
      color: #555;
      padding: 10px 20px;
      border-top: 1px solid #e3e6ea;
      font-size: 0.9rem;
    }

    /* ==== Accordion Body ==== */
    .panel-body {
      background: #fff;
      padding: 25px;
      border-top: none;
    }

    /* ==== Video Wrapper ==== */
    .video-wrapper {
      position: relative;
      width: 100%;
      max-width: 720px;
      margin: 0 auto;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
      background: #000;
    }

    .video-wrapper video {
      width: 100%;
      height: auto;
      display: block;
      border-radius: 10px;
    }

    .video-caption {
      text-align: center;
      margin-top: 12px;
      font-size: 0.95rem;
      color: #555;
    }

    .no-cats {
      text-align: center;
      padding: 40px;
      color: #999;
    }

    /* Responsive Tweaks */
    @media (max-width: 768px) {
      .panel-heading .panel-title a {
        font-size: 1rem;
        padding: 14px 16px;
      }

      .video-wrapper {
        max-width: 100%;
      }
    }
  </style>
</head>

<body>

  <div class="page-wrapper event-single-page">
    <?php include("includes/header.php"); ?>

    <!-- Page Title -->
    <section class="repo page-title">
      <div class="container">
        <div class="text-center title-box">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="photo-gallery-mod.php">Media</a></li>
            <li class="active">Video Gallery</li>
          </ol>
          <h1><span>Video</span> Gallery</h1>
        </div>
      </div>
    </section>

    <!-- Accordion Section -->
    <section class="category-section">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">

            <?php
            $videos = fsez_video_items();
            $videoDir = "videos/";

            if (empty($videos)) {
              echo '<div class="no-cats">No videos available.</div>';
            } else {
              echo '<div class="panel-group" id="videoAccordion" role="tablist" aria-multiselectable="true">';

              foreach ($videos as $index => $video) {
                $src = fsez_upload_href($videoDir, $video["file"]);
                if ($src === "") {
                  continue;
                }
                $panelNum   = $index + 1;
                $collapseId = 'collapse-' . $panelNum;
                $headingId  = 'heading-' . $panelNum;

                $title   = htmlspecialchars($video["title"],   ENT_QUOTES, "UTF-8");
                $date    = htmlspecialchars($video["date"],    ENT_QUOTES, "UTF-8");
                $file    = $video["file"];
                $caption = htmlspecialchars($video["caption"] ?? "", ENT_QUOTES, "UTF-8");

                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $mimeMap = array(
                  "mp4"  => "video/mp4",
                  "webm" => "video/webm",
                  "ogg"  => "video/ogg",
                );
                $mime = isset($mimeMap[$ext]) ? $mimeMap[$ext] : "video/mp4";

                echo '<div class="panel panel-default">';
                echo '  <div class="panel-heading" role="tab" id="' . $headingId . '">';
                echo '    <h4 class="panel-title">';
                echo '      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#videoAccordion"';
                echo '         href="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">';
                echo '        ' . $title;
                echo '      </a>';
                echo '    </h4>';
                echo '  </div>';
                echo '  <div class="meta"><strong>1</strong> Video | Added on: ' . $date . '</div>';

                echo '  <div id="' . $collapseId . '" class="collapse panel-collapse" role="tabpanel" aria-labelledby="' . $headingId . '">';
                echo '    <div class="panel-body">';
                $vttFile = pathinfo($file, PATHINFO_FILENAME) . ".vtt";
                $vttLocal = $videoDir . $vttFile;
                $hasVtt = is_file($vttLocal);
                $vttSrc = $hasVtt ? $vttLocal : "";

                echo '      <div class="video-wrapper">';
                echo '        <video controls preload="none" aria-label="' . $title . '">';
                echo '          <source src="' . htmlspecialchars($src, ENT_QUOTES, "UTF-8") . '" type="' . $mime . '">';
                if ($vttSrc !== "") {
                  echo '          <track kind="captions" src="' . htmlspecialchars($vttSrc, ENT_QUOTES, "UTF-8") . '" srclang="en" label="English captions" default>';
                }
                echo '          Your browser does not support the video tag.';
                echo '        </video>';
                echo '      </div>';
                if (!empty($video["transcript"])) {
                  echo '      <div class="video-transcript"><h3>Transcript</h3><p>' . htmlspecialchars($video["transcript"], ENT_QUOTES, "UTF-8") . '</p></div>';
                } elseif (!$hasVtt) {
                  echo '      <p class="video-no-captions">Captions are not yet available for this video. Email <a href="mailto:fsez@nic.in">fsez@nic.in</a> for a transcript.</p>';
                }
                if (!empty($caption)) {
                  echo '      <p class="video-caption">' . $caption . '</p>';
                }
                echo '    </div>';
                echo '  </div>';
                echo '</div>';
              }

              echo '</div>';
            }
            ?>

          </div>
        </div>
      </div>
    </section>

    <?php include("includes/footer.php"); ?>
  </div>

  <!-- JS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(function() {
      // Smooth animation for collapse icons
      $('#videoAccordion').on('show.bs.collapse', function(e) {
        $(e.target).prev('.panel-heading').find('.panel-title a').removeClass('collapsed');
      });
      $('#videoAccordion').on('hide.bs.collapse', function(e) {
        $(e.target).prev('.panel-heading').find('.panel-title a').addClass('collapsed');
      });

      // Pause video when accordion closes
      $('#videoAccordion').on('hide.bs.collapse', function(e) {
        var video = $(e.target).find('video')[0];
        if (video) {
          video.pause();
        }
      });
    });
  </script>
</body>

</html>
