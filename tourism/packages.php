<section class="page-section bg-dark" id="home">
	<div class="container">
		<h2 class="text-center">Tour Packages</h2>
		<div class="d-flex w-100 justify-content-center">
			<hr class="border-warning" style="border:3px solid" width="15%">
		</div>

		<!-- Search Input -->
		<div class="mb-4 text-center">
			<input type="text" id="searchInput" placeholder="Type & Enter for Search packages..." class="form-control w-50 mx-auto">
		</div>

		<div class="w-100" id="packageContainer">
			<?php
			$packages = $conn->query("SELECT * FROM `packages` order by rand() ");
			while ($row = $packages->fetch_assoc()):
				$cover = '';
				if (is_dir(base_app . './uploads/package_' . $row['id'])) {
					$img = scandir(base_app . './uploads/package_' . $row['id']);
					$k = array_search('.', $img);
					if ($k !== false)
						unset($img[$k]);
					$k = array_search('..', $img);
					if ($k !== false)
						unset($img[$k]);
					$cover = isset($img[2]) ? './uploads/package_' . $row['id'] . '/' . $img[2] : "";
				}
				$row['description'] = strip_tags(stripslashes(html_entity_decode($row['description'])));
				$review = $conn->query("SELECT * FROM `rate_review` where package_id='{$row['id']}'");
				$review_count = $review->num_rows;
				$rate = 0;
				while ($r = $review->fetch_assoc()) {
					$rate += $r['rate'];
				}
				if ($rate > 0 && $review_count > 0)
					$rate = number_format($rate / $review_count, 0, '.', '');

				$uid = uniqid();
				?>
				<div class="card d-flex w-100 rounded-0 mb-3 package-item text-block">
					<img class="card-img-top" src="<?php echo validate_image($cover) ?>" alt="<?php echo $row['title'] ?>"
						height="200rem" style="object-fit:cover">
					<div class="card-body">
						<h5 class="card-title truncate-1"><?php echo $row['title'] ?></h5>
						<div class="w-100 d-flex justify-content-start">
							<form action="">
								<div class="stars stars-small">
									<input disabled class="star star-5" id="star-5-<?php echo $uid ?>" type="radio"
										name="star-<?php echo $uid ?>" <?php echo $rate == 5 ? "checked" : '' ?> />
									<label class="star star-5" for="star-5-<?php echo $uid ?>"></label>
									<input disabled class="star star-4" id="star-4-<?php echo $uid ?>" type="radio"
										name="star-<?php echo $uid ?>" <?php echo $rate == 4 ? "checked" : '' ?> />
									<label class="star star-4" for="star-4-<?php echo $uid ?>"></label>
									<input disabled class="star star-3" id="star-3-<?php echo $uid ?>" type="radio"
										name="star-<?php echo $uid ?>" <?php echo $rate == 3 ? "checked" : '' ?> />
									<label class="star star-3" for="star-3-<?php echo $uid ?>"></label>
									<input disabled class="star star-2" id="star-2-<?php echo $uid ?>" type="radio"
										name="star-<?php echo $uid ?>" <?php echo $rate == 2 ? "checked" : '' ?> />
									<label class="star star-2" for="star-2-<?php echo $uid ?>"></label>
									<input disabled class="star star-1" id="star-1-<?php echo $uid ?>" type="radio"
										name="star-<?php echo $uid ?>" <?php echo $rate == 1 ? "checked" : '' ?> />
									<label class="star star-1" for="star-1-<?php echo $uid ?>"></label>
								</div>
							</form>
						</div>
						<p class="card-text truncate"><?php echo $row['description'] ?></p>
						<div class="w-100 d-flex justify-content-between">
							<span class="rounded-0 btn btn-flat btn-sm btn-primary"><i class="fa fa-tag"></i>
								<?php echo number_format($row['cost']) ?></span>
							<a href="./?page=view_package&id=<?php echo md5($row['id']) ?>"
								class="btn btn-sm btn-flat btn-warning">View Package <i class="fa fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<script>
	function filterContent() {
		const input = document.getElementById("searchInput").value.toLowerCase();
		const cards = document.querySelectorAll(".card");
		const textBlocks = document.querySelectorAll(".text-block");

		cards.forEach(card => {
			const text = card.innerText.toLowerCase();
			card.classList.toggle("hidden", !text.includes(input));
		});

		textBlocks.forEach(block => {
			const text = block.innerText.toLowerCase();
			block.classList.toggle("hidden", !text.includes(input));
		});
	}

	document.getElementById("searchInput").addEventListener("keydown", function (e) {
		if (e.key === "Enter") {
			filterContent();
		}
	});
</script>

<style>
	.hidden {
		display: none !important;
	}
</style>