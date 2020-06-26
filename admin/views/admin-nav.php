<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="min-height: 80px;">
	<div class="container-fluid">
		<div class="navbar-header" style="min-height: 80px;">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			 <a class="navbar-brand" href="admin.php"> <span > <img src="img/BG/logo.png" class="img-responsive img-centered" alt=""></span> </a>
			<!--<span class="mynav"><a class="navbar-brand hidden-xs" href="admin.php">Motors </a></span>-->
		</div>
		<div class="collapse navbar-collapse " id="myNavbar">
			<ul class="nav navbar-nav">
				<li class='hidden'>
					<a href='#page-top'></a>
				</li>
				<li>
					<a href='admin.php?page=entries'><span class="mynav">All entries</span></a>
				</li>
				<li>
					<a href='admin.php?page=editor'><span class="mynav">Add New Car</span></a>
				</li>
				<li>
					<a href='admin.php?page=users'><span class="mynav">Create Admin User</span></a>
				</li>
				<li>
					<a href='index.php'><span class="mynav">Home</span></a>
				</li>

			</ul>
			<form class="navbar-form nav navbar-nav navbar-right" method='post' action='admin.php'>

				<span class="mynav">Logged in as administrator</span>

				<button type='submit' class='btn btn-primary' name='logout' value='log out'>
					Log out
				</button>
			</form>
		</div>
	</div>
</nav>
<div>
	<br>
	<br>
	<br>
	<br>
</div>

