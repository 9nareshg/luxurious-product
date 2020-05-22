<?php
	include('include_file/functions/functions.php');
?>
<!-- head -->
<header>
	<div class="page-base">
		<div class="logo">
			
		</div>
		<div class="search">
			<div class="s-heading"></div>
			<div class="s-input">
				<form method="get" action="result.php" enctype="multipart/form-data" autocomplete="off">
					<input type="text" name="search" placeholder="Search for your favourites products">
					<button type="submit">
						<img src="img/search-icon.svg">
					</button>
				</form>	
			</div>
		</div>
		<div class="register">
			<span class="signup">Sign Up</span>
			<span class="seperate">|</span>
			<span class="login">Login</span>
		</div>
	</div>
</header>

<!-- menubar -->
<nav>
	<div class="page-base">
		<ul>
			<?php
				get_main_cat();
			?>
		</ul>
	</div>
</nav>