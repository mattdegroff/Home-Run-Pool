	<?php
		include_once("details.php");
		include("update1.php");
	?>
	<style>
	<?php if (new DateTime() > $deadline) {
		echo '
		@media (min-width: 576px) {
			.cardscroll {

				overflow-y: scroll;
				overflow: auto;
			}

			.groupScroll {
				height: 21%;
			}

			.hrScroll {
				height: 21%;
			}
			.cardscroll::-webkit-scrollbar
			{
				width: 2px;
				background-color: transparent;
			}

			.cardscroll::-webkit-scrollbar-thumb
			{
				border-radius: 2px;
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
				background-color: #000;
			}}';
		}
		?>

		.card-deck .card {
    margin-left: 15px;
    margin-right: 15px;
}

.card-deck .card:not(:last-child) {
    margin-right: 15px;
}

.card-deck .card:not(:first-child) {
    margin-left: 15px;
}
	</style>

<div class="container">
	<h1 class="text-center"><?php echo substr($_GET["id"],0,4); ?></h1>
	<?php
		if (new DateTime() < $deadline) {
			if (new DateTime() < $groupDead) {
				echo '<div class="alert alert-success alert-dismissable text-center fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>Groups will be released at<br><strong>'.$groupDead->format('g:i A').'</strong> on <strong>'.$groupDead->format('F j, Y').'</strong></div>';
			} else {
				echo '<div class="alert alert-success alert-dismissable text-center fade show"><button type="button" class="close" data-dismiss="alert">&times;</button>Teams lock at<br><strong>'.$deadline->format('g:i A').'</strong> on <strong>'.$deadline->format('F j, Y').'</strong></div>';
			}
		}
		
		if (new DateTime() < $deadline && new DateTime() > $groupDead) {
			include("topRowBefore.php");
		} else if (new DateTime() > $deadline) {
			echo '<div class="row">';
			include("topRowAfter.php");
			echo '</div>';
		}
	?>
	<div class="row">
		<div class="container-fluid">
			<?php
				printGroups($deadline);
			?>
		</div>
	</div>
</div>
