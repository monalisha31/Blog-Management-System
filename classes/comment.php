<?php




	class Comment {
		private $con;

		public function __construct($con) {
			$this->con = $con;
		}

		public function addComments($id, $name, $email, $body) {
			if(!empty($body)) {
				$query = mysqli_query($this->con, "INSERT INTO comment VALUES(NULL,'$name','$email','$body','Unapproved','$id');");
				if(!$query) {
					die("Failed " . mysqli_error($this->con));
				}
			}else{
				return false;
			}
		}
				public function getApprovedComments($id) {
			$query = mysqli_query($this->con, "SELECT * FROM comment WHERE post_id=$id AND Co_status='Approved'");
			$str = "";
			while($row = mysqli_fetch_assoc($query)) {
				$id = $row['Co_id'];
				$post_id = $row['post_id'];
				$name = $row['Co_name'];
				$body = $row['Co_body'];
?>
				    <li class="depth-1 comment">

                         

                            <div class="comment__content">

                                <div class="comment__info">
                                    <div class="comment__author"><?php echo $name; ?></div>

                                </div>

                                <div class="comment__text">
                                <p><?php echo $body; ?></p>
                                </div>

                            </div>

                        </li>
		<?php	}

		}
			public function getComments()
		{
			global $role;
			$query = mysqli_query($this->con, "SELECT * FROM comment ORDER BY Co_id DESC LIMIT 20");
			$str = "";
			while ($row = mysqli_fetch_array($query))
			{
				$id = $row['Co_id'];
				$name = $row['Co_name'];
				$body = $row['Co_body'];
				$email = $row['Co_email'];
				$status = $row['Co_status'];
				$post_id = $row['post_id'];
		if($role !== "Admin"){
				$str .= "<tr>
									<td>$id</td>
									<td>$name</td>
									<td>$email</td>
									<td>$body</td>
									<td>$status</td>
									<td>$post_id</td>
								</tr>";
					}else {
						$str .= "<tr>
											<td>$id</td>
											<td>$name</td>
											<td>$email</td>
											<td>$body</td>
											<td>$status</td>
											<td>$post_id</td>
											<td><a href='comment.php?app=$id' class='btn btn-primary'>Approve</a></td>
											
											<td><a href='comment.php?del_com=$id' class='btn btn-danger'>Delete</a></td>
										</tr>";
					}
					

					
			}
			echo $str;
		}

		}