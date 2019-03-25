<div class="container mt-4">
	<div class="row">
		<div class="col col-md-4"></div>
		<div class="col col-md-4">
			<a href="index.php?action=viewUser"><button class="btn btn-success">Back</button></a>
			<div class="card">
				<div class="card-header text-center bg-info">Update User</div>
				<div class="card-body">
                <?php
                    include "connection.php";
                    $value=array();
                    foreach ($data['user_data'] as $item) {
                    $value=$item;
                ?>
					<form action="" method="POST">
						<div class="form-group">
							<input type="text" value="<?php echo $value['username'] ?>" name="username" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" value="<?php echo $value['name'] ?>" name="name" class="form-control">
						</div>
						<div class="form-group">
							<input type="password" value="<?php echo $value['password'] ?>" name="password" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" name="update" class='btn btn-primary'>Update User</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col col-md-4"></div>
	</div>
</div>
<?php
}