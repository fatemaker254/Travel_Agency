<?php
/* -----------------------------------------------------------------
 *  packages.php  – lists tour packages, with optional country filter
 * ----------------------------------------------------------------- */
require_once('config.php');     // <- makes $conn, helpers etc. available
?>

<section class="page-section bg-dark" id="packages">
  <div class="container">

    <!-- Title ------------------------------------------------------- -->
    <h2 class="text-center text-uppercase text-white mb-0">
      <?php
        echo isset($_GET['country']) && $_GET['country'] !== ''
             ? htmlspecialchars($_GET['country']).' Packages'
             : 'Tour Packages';
      ?>
    </h2>
    <div class="d-flex w-100 justify-content-center mb-4">
      <hr class="border-warning" style="border:3px solid" width="15%">
    </div>

    <?php
      /* ------------------------------------------------------------
       *  BUILD THE SQL
       * ------------------------------------------------------------ */
      $country = isset($_GET['country']) ? trim($_GET['country']) : '';

      // always show only active rows
      $where = " WHERE status = 1 ";

      // add a LIKE filter if a country was supplied
      if ($country !== '') {
          $safe = $conn->real_escape_string($country);
          $where .= " AND (title LIKE '%{$safe}%' OR tour_location LIKE '%{$safe}%')";
      }

      $sql       = "SELECT * FROM packages {$where} ORDER BY RAND()";
      $packages  = $conn->query($sql);
    ?>

    <!-- Cards grid --------------------------------------------------- -->
    <div class="row g-3 justify-content-center">
      <?php if ($packages && $packages->num_rows): ?>

        <?php while ($row = $packages->fetch_assoc()): ?>
          <?php
            /* -------- determine cover photo ------------------------ */
            $cover = '';
            if (is_dir(base_app.'./uploads/package_'.$row['id'])) {
                $imgs = array_diff(scandir(base_app.'./uploads/package_'.$row['id']), ['.','..']);
                $cover = $imgs ? './uploads/package_'.$row['id'].'/'.reset($imgs) : '';
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

      <?php else: ?>
        <h4 class="text-center text-white">
          No package found for <?php echo htmlspecialchars($country); ?>.
        </h4>
      <?php endif; ?>
    </div>

    <!-- Link to clear the filter ------------------------------------ -->
    <div class="d-flex w-100 justify-content-end mt-4">
      <a href="./?page=packages" class="btn btn-flat btn-warning">
        Show All Packages <i class="fa fa-arrow-right"></i>
      </a>
    </div>

  </div>
</section>