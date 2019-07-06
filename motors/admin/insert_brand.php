<?php
if(!isset($_SESSION['user_email'])){
    header('location: login.php?not_admin=You are not Admin!');
}
$con = mysqli_connect("localhost", "root", "", "tech_box_db");
if (!$con)
    die("Connection failed");
?>

<?php


if (isset($_POST['insert_brand'])) {
    
    $brand_title = test_input($_POST['brand_title']);
    if (!preg_match("/[a-zA-Z0-9]+/", $brand_title) || strlen($brand_title) < 2) {
        $response = array(
            "type" => "warning",
            "message" => "Enter Valid brand."
        );
    } 
	else{
		$insert_brand = "insert into brands(brand_title) VALUES ('$brand_title');";
        $insert_brand = mysqli_query($con, $insert_brand);
        if ($insert_brand) {
             //header("location: ".$_SERVER['PHP_SELF']);
             $response = array(
             "type" => "success",
             "message" => "brand uploaded successfully."
             );
        }
	}
}
	
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span>
    Brand </h1>
<?php if (!empty($response)) { ?>
	<div class="alert alert-<?php echo $response["type"]; ?>">
		<?php echo $response["message"]; ?>
	</div>
<?php } ?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
            <label for="cat_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Brand </span>
                Title:</label>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                </div>
                <input type="text" class="form-control" id="brand_title" name="brand_title"
                       placeholder="Enter Brand"
                      <?php
                    if (@$response["type"] == "warning") {
                        echo "value='$brand_title'";
                    }
                    ?>
                >
            </div>
        </div>
	</div>
    <div class="row my-3">
        <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
        <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
            <button type="submit" name="insert_brand" class="btn btn-primary btn-block"><i class="fas fa-plus"></i>
                Insert Now
            </button>
        </div>
    </div>
</form>
