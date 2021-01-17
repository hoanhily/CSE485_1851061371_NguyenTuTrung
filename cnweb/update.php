<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$ten = $noicap = $danhhieu = $namnhan = "";
$ten_err = $noicap_err = $danhhieu_err = $namnhan_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
  
    $input_ten = trim($_POST["ten"]);
    if(empty($input_ten)){
        $ten_err = "Nhập tên chứng chỉ";
    } elseif(!filter_var($input_ten, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $ten_err = "Thử lại tên khác";
    } else{
        $ten = $input_ten;
    }
    
    $input_noicap = trim($_POST["noicap"]);
    if(empty($input_noicap)){
        $noicap_err = "Nhập nơi cấp";     
    } else{
        $noicap = $input_noicap;
    }
    

    $input_danhhieu = trim($_POST["danhhieu"]);
    if(empty($input_danhhieu)){
        $danhhieu_err = "Nhập danh hiệu";     
    } else{
        $danhhieu = $input_danhhieu;
    }
    $input_namnhan = trim($_POST["namnhan"]);
    if(empty($input_danhhieu)){
        $namnhan_err = "Nhập năm nhận";     
    } elseif(!ctype_digit($input_namnhan)){
        $namnhan_err = "Mời nhập lại";
    } else{
        $namnhan = $input_namnhan;
    }
    
    // Check input errors before inserting in database
    if(empty($ten_err) && empty($noicap_err) && empty($danhhieu_err) && empty($namnhan_err)){
        // Prepare an update statement
        $sql = "UPDATE chungchi SET ten=?, noicap=?, danhhieu=?, namnhan=? WHERE id=?";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_ten, $param_noicap, $param_danhhieu, $param_namnhan, $param_id);
            
            // Set parameters
            $param_ten = $ten;
            $param_noicap = $noicap;
            $param_danhhieu = $danhhieu;
            $param_namnhan = $namnhan;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM chungchi WHERE id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $ten = $row["ten"];
                    $noicap = $row["noicap"];
                    $danhhieu = $row["danhhieu"];
                    $namnhan = $row["namnhan"];

                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Có lỗi";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($conn);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cập nhật</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Cập nhật</h2>
                    </div>
                    <p>Vui lòng điền thông tin</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($ten_err)) ? 'has-error' : ''; ?>">
                            <label>Tên</label>
                            <input type="text" name="ten" class="form-control" value="<?php echo $ten; ?>">
                            <span class="help-block"><?php echo $ten_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($noicap_err)) ? 'has-error' : ''; ?>">
                            <label>Nơi cấp</label>
                            <textarea name="noicap" class="form-control"><?php echo $noicap; ?></textarea>
                            <span class="help-block"><?php echo $noicap_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($danhhieu_err)) ? 'has-error' : ''; ?>">
                            <label>Danh hiệu</label>
                            <textarea name="danhhieu" class="form-control"><?php echo $danhhieu; ?></textarea>
                            <span class="help-block"><?php echo $danhhieu_err;?></span>
                        </div>
                    
                        <div class="form-group <?php echo (!empty($namnhan_err)) ? 'has-error' : ''; ?>">
                            <label>Năm nhận</label>
                            <input type="text" name="namnhan" class="form-control" value="<?php echo $namnhan; ?>">
                            <span class="help-block"><?php echo $namnhan_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Gửi">
                        <a href="index.php" class="btn btn-default">Hủy</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>