<?php
/* =========================================================================
 *  destination.php   –   lists packages that belong to a single destination
 * ========================================================================= */
require_once 'config.php';          //   gives us $conn, validate_image(), etc.
/* -----------------------------------------------------------------
 *  1) Validate and sanitise input
 * ----------------------------------------------------------------- */
if (!isset($_GET['country']) || trim($_GET['country']) === '') {
    /*  If somebody loads the file without ?country=xxx just redirect
        them to your normal packages page.                              */
    header('Location: ./?page=packages');
    exit;
}

$country = trim($_GET['country']);
$country_safe = $conn->real_escape_string($country);
echo htmlspecialchars($country_safe);

/* -----------------------------------------------------------------
 *  2) Build & run the query  (only ACTIVE rows)
 * ----------------------------------------------------------------- */
$sql = "SELECT * FROM packages
        WHERE title LIKE '%{$country_safe}%'
        ORDER BY RAND()";


$packages = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo htmlspecialchars($country); ?> Packages</title>
  <a href="./?page=view_package&id=<?php echo md5($row['id']); ?>"
                   class="btn btn-warning mt-auto">
                  View Package <i class="fa fa-arrow-right"></i>
                </a>
  <!-- include Bootstrap, FontAwesome, your CSS, etc. exactly the way
       your other pages do (omitted here for brevity) -->
 
  <a href="./?page=view_package&id=<?php echo md5($row['id']); ?>"
                   class="btn btn-warning mt-auto">
                  View Package <i class="fa fa-arrow-right"></i>
                </a>
</head>

<body id="page-top">

<!-- ============ CONTENT ============ -->
<section class="page-section bg-dark" id="destination-packages">
  <div class="container">


    <h2 class="text-center text-uppercase text-white mb-0">
      <?php echo htmlspecialchars($country); ?> Packages
    </h2>

    <div class="d-flex w-100 justify-content-center mb-4">
      <hr class="border-warning" style="border:3px solid" width="15%">
    </div>

    <?php if ($packages && $packages->num_rows): ?>
      <div class="row g-3 justify-content-center">
        <?php while ($row = $packages->fetch_assoc()): ?>
          <?php
            /* ------- determine cover photo (existing logic) ---------- */
            $cover = '';
            $dir   = base_app . './uploads/package_' . $row['id'];
            if (is_dir($dir)) {
                $imgs = array_diff(scandir($dir), ['.','..']);
                $first = reset($imgs);
                $cover = $first ? './uploads/package_'.$row['id'].'/'.$first : '';
            }
            $row['description'] = strip_tags(
                                   stripslashes(
                                     html_entity_decode($row['description'])));
          ?>
          <div class="col-md-4">
            <div class="card h-100 shadow">
              <img src="<?php echo validate_image($cover); ?>"
                   class="card-img-top"
                   style="height:200px;object-fit:cover"
                   alt="<?php echo $row['title']; ?>">

              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-2 truncate-1">
                  <?php echo $row['title']; ?>
                </h5>

                <p class="card-text flex-grow-1 truncate">
                  <?php echo $row['description']; ?>
                </p>

                <a href="./?page=view_package&id=<?php echo md5($row['id']); ?>"
                   class="btn btn-warning mt-auto">
                  View Package <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <h4 class="text-center text-white">
        No packages found for <?php echo htmlspecialchars($country); ?>.
      </h4>
    <?php endif; ?>

    <div class="d-flex w-100 justify-content-end mt-4">
      <!-- back to ALL packages -->
      <a href="./?page=packages" class="btn btn-flat btn-warning">
        Show All Packages <i class="fa fa-arrow-right"></i>
      </a>
    </div>

  </div>
</section>
<!-- /* if you have a common footer */ ?> -->
<!--   include JS files (Bootstrap bundle, jQuery) as in your other pages -->
</body>
</html>