

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="ATNtoy/background.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Products Management</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Products Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


   	<?php
		
		if(isset($_GET["id"]))
		{
			$id = $_GET['id'];
			$result = pg_query($conn, "SELECT * from supplier where supplierid = '$id'");
			$row = pg_fetch_array($result, NULL, PGSQL_ASSOC);
			$supplierid = $row['supplierid'];
			$suppliername = $row['suppliername'];
	?>
<div class="container">
	<h2>Updating supplier</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtID" class="col-sm-2 control-label">Supplier ID(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtID" id="txtID" class="form-control" placeholder="supplier ID" readonly 
								  value='<?php echo $row['supplierid'] ?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtName" class="col-sm-2 control-label">Supplier Name(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtName" id="txtName" class="form-control" placeholder="supplier Name" 
								  value='<?php echo $row['suppliername'] ?>'>
							</div>
					</div>
                    
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input style="background-color: #3CC032;"type="submit"  class="site-btn" name="btnUpdate" id="btnUpdate" value="Update"/>
                              <input type="button" class="site-btn" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=shop'" />
                              	
						</div>
					</div>
				</form>
	</div>

	<?php
		if(isset($_POST['btnUpdate']))
		{
			$id = $_POST['txtID'];
			$name = $_POST['txtName'];
			$err="";
			if($name=="")
			{
				$err .= "</br>Enter name</br>";
			}
			if ($err !="")
			{
				echo $err;
			}
			else
			{
				pg_query($conn, "UPDATE supplier set suppliername = '$name' where supplierid = '$id'");
				echo '<meta http-equiv="refresh" content="0;URL =?page=shop"/>';
			}
		}
	?>

    <?php
		}
		else
		{
			echo '<meta http-equiv="refresh" content="0;URL =?page=pm"/>';
		}
	?>