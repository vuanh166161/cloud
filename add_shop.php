
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="ATNtoy/background.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shop Management</h2>
                        <div class="breadcrumb__option">
                            <a href="?page=content">Home</a>
                            <span>Shop Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

	    
	<?php
		include_once("connection.php");
		if(isset($_POST['btnAdd']))
		{
			$id = $_POST['txtID'];
			$name = $_POST['txtName'];
			$err = "";
			if($id=="")
			{
				$err .= "Enter shop ID</br>";
			}
			if($name=="")
			{
				$err .= "Enter shop name</br>";
			}
			if($err != "")
			{
				echo $err;
			}
			else
			{
				$sql = "select * from shop where shop_id ='$id' and shop_name = '$name'";
				$result = pg_query($conn, $sql);
				if(pg_num_rows($result)=="0")
				{
					pg_query($conn, "insert into shop (shop_id, shop_name) values ('$id', '$name')");
					echo '<meta http-equiv="refresh" content="0;URL =?page=branch"';
				}
				else
				{
					echo "Data duplicated";
				}
			}
		}
	?>

<div class="container">
	<h2>Adding shop</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtID" class="col-sm-2 control-label">Shop ID(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtID" id="txtID" class="form-control" placeholder="shop ID" value='<?php echo isset($_POST["txtID"])?($_POST["txtID"]):"";?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txName" class="col-sm-2 control-label">Shop Name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtName" id="txtName" class="form-control" placeholder="shop Name" value='<?php echo isset($_POST["txtName"])?($_POST["txtName"]):"";?>'>
							</div>
					</div>
                    
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input style="background-color: #3CC032;"type="submit"  class="site-btn" name="btnAdd" id="btnAdd" value="Add new"/>
                              <input type="button" class="site-btn" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=branch'" />
                              	
						</div>
					</div>
				</form>
	</div>