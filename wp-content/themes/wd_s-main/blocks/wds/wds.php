<style>
	.section-about-wds {
		background: #d6d5d5;
		display: flex;
		justify-content: center;
	}

	img.w-100 {
		max-width: 100px;

	}


	.section-about-wds .container {
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 50px 0;
		gap: 50px;
	}

	.d-flex.align-items-center {
		text-align: center;
	}
	.container a {text-decoration: none;}

	.titleSection {
		color: #000000;
	}

	.about-description {
		color: #000000;
	}

	</style>
<?php
/**
 * WDS Block Template.
 */
//
$id = 'wds';
$wds_posts = get_field('wds_fields');

?>
		<section class="section-about-wds" id="<?php echo $id; ?>">
			<div class="container">
				<?php
				foreach($wds_posts as $wds_post){
				?>
						<a href="<?php echo $wds_post['link']; ?>">
				<div class="d-flex align-items-center">


				<img src="<?php echo $wds_post['image']; ?>" alt="" class="w-100">

				<div class="titleSection">
					<h3>
					<?php
					echo $wds_post['title'];
					?>
					</h3>
				</div>

					<div class="about-description">

							<p><?php echo $wds_post['text']; ?></p>

					</div>

				</div>
						</a>
					<?php
				}
				?>
			</div>
		</section>

