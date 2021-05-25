<div class="container">
	<div class="form">
	<div>
	</div>
		<form method="POST" action="register">
			@csrf
			<div>
				name: <input type="text" name="name"><br />
			</div>
			<div>
				Email: <input type="email" name="email"><br />
			</div>
			<div>
				Phone: <input type="password" name="password"><br />
			</div>
			<div>
				Phone: <input type="telephone" name="phone"><br />
			</div>
			<div>
				Age: <input type="number" name="age"><br />
			</div>
			<div>
				 <input type="submit" name="save">
			</div>
		</form>
	</div>
</div>