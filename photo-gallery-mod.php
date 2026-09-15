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
  <title><?php echo htmlspecialchars($gbl_row["org_name"] ?? 'Falta SEZ'); ?> | Photo Gallery</title>

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

    .gallery-image-wrapper {
      margin-bottom: 20px;
      transition: transform .2s ease;
    }

    .gallery-image-wrapper img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .gallery-image-wrapper img:hover {
      transform: scale(1.04);
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
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
            <li class="active">Photo Gallery</li>
          </ol>
          <h1><span>Photo</span> Gallery</h1>
        </div>
      </div>
    </section>

    <!-- Accordion Section -->
    <section class="category-section">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">

            <?php
            if (!isset($con) || !$con) {
              echo '<div class="alert alert-danger">Database connection error.</div>';
            } else {
              $cat_sql = "
                SELECT c.category_id, c.category_name, c.added_on,
                (SELECT COUNT(*) FROM fsez_gallery_images i WHERE i.category_id = c.category_id AND i.status = 1) AS image_count
                FROM fsez_gallery_categories c
                WHERE c.status = 1
                ORDER BY c.added_on DESC";
              $cat_res = mysqli_query($con, $cat_sql);

              if (!$cat_res) {
                echo '<div class="alert alert-danger">Error fetching categories: ' . htmlspecialchars(mysqli_error($con)) . '</div>';
              } elseif (mysqli_num_rows($cat_res) == 0) {
                echo '<div class="no-cats">No categories available.</div>';
              } else {
                echo '<div class="panel-group" id="galleryAccordion" role="tablist" aria-multiselectable="true">';

                while ($cat = mysqli_fetch_assoc($cat_res)) {
                  $id = (int)$cat['category_id'];
                  $name = htmlspecialchars($cat['category_name'], ENT_QUOTES, 'UTF-8');
                  $added_on = !empty($cat['added_on']) ? date('M d, Y', strtotime($cat['added_on'])) : '-';
                  $count = (int)$cat['image_count'];

                  $panelId = 'panel-' . $id;
                  $collapseId = 'collapse-' . $id;
                  $headingId = 'heading-' . $id;

                  echo '<div class="panel panel-default">';
                  echo '  <div class="panel-heading" role="tab" id="' . $headingId . '">';
                  echo '    <h2 class="panel-title">';
                  echo '      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#galleryAccordion" href="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">';
                  echo '        ' . $name;
                  echo '      </a>';
                  echo '    </h2>';
                  echo '  </div>';
                  echo '  <div class="meta"><strong>' . $count . '</strong> Image' . ($count != 1 ? 's' : '') . ' | Added on: ' . $added_on . '</div>';

                  echo '  <div id="' . $collapseId . '" class="collapse panel-collapse" role="tabpanel" aria-labelledby="' . $headingId . '">';
                  echo '    <div class="panel-body">';

                  // Fetch images for this category
                  $img_sql = "SELECT * FROM fsez_gallery_images WHERE category_id = " . $id . " AND status = 1 ORDER BY added_on DESC";
                  $img_res = mysqli_query($con, $img_sql);

                  if ($img_res && mysqli_num_rows($img_res) > 0) {
                    echo '<div class="row">';
                    while ($img = mysqli_fetch_assoc($img_res)) {
                      $fname = $img['gallery_image'] ?? '';
                      $alt_text = htmlspecialchars(fsez_gallery_image_alt($id), ENT_QUOTES, 'UTF-8');
                      $src = fsez_upload_href("admin/upload_gallery_images", $fname);
                      if ($src === "") {
                        continue;
                      }

                      echo '<div class="col-xs-6 col-sm-4 gallery-image-wrapper">';
                      echo '  <a href="' . htmlspecialchars($src, ENT_QUOTES, 'UTF-8') . '" target="_blank" rel="noopener noreferrer" title="Opens in a new window">';
                      echo '    <img src="' . htmlspecialchars($src, ENT_QUOTES, 'UTF-8') . '" alt="' . $alt_text . '">';
                      echo '  </a>';
                      echo '</div>';
                    }
                    echo '</div>';
                  } else {
                    echo '<div class="no-cats">No images found for this category.</div>';
                  }

                  if ($img_res) mysqli_free_result($img_res);

                  echo '    </div>'; // panel-body
                  echo '  </div>'; // collapse
                  echo '</div>'; // panel
                }

                echo '</div>'; // panel-group
                mysqli_free_result($cat_res);
              }
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
      $('#galleryAccordion').on('show.bs.collapse', function(e) {
        $(e.target).prev('.panel-heading').find('.panel-title a').removeClass('collapsed');
      });
      $('#galleryAccordion').on('hide.bs.collapse', function(e) {
        $(e.target).prev('.panel-heading').find('.panel-title a').addClass('collapsed');
      });
    });
  </script>
</body>

</html>
