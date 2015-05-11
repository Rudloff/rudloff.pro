<div class="header_wrapper">
	<div class="logo_wrapper">
		<header class="clearfix header">
			<a href="index.php" itemprop="url">
			<h1 itemprop="name" id="logo" class="logo zero"><img src="{{ themosis_assets() }}/images/Logo_Rudloff_orange.png" alt="{{ get_bloginfo('name') }}" /></h1>
			</a>
			<p id="slogan" itemprop="jobTitle" class="slogan large">{{ get_bloginfo('description') }}</p>
		</header>
		<nav class="nav clearfix" id="nav">
			<h3 class="none">Menu&nbsp;:</h3>
			{{ wp_nav_menu() }}
		</nav>
	</div>
</div>
