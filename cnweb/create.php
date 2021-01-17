<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$ten = $noicap = $danhhieu = $namnhan = "";
$ten_err = $noicap_err = $danhhieu_err = $namnhan_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_ten = trim($_POST["ten"]);
    if(empty($input_ten)){
        $ten_err = "Mời nhập tên.";
    } elseif(!filter_var($input_ten, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $ten_err = "Vui lòng thử lại.";
    } else{
        $ten = $input_ten;
    }
    
    // Validate address
    $input_noicap = trim($_POST["noicap"]);
    if(empty($input_noicap)){
        $noicap_err = "Mời nhập địa chỉ";     
    } else{
        $noicap = $input_noicap;
    }
    $input_danhhieu = trim($_POST["danhhieu"]);
    if(empty($input_danhhieu)){
        $danhhieu_err = "Mời nhập giải";     
    } else{
        $danhhieu = $input_danhhieu;
    }
    // Validate salary
    $input_namnhan = trim($_POST["namnhan"]);
    if(empty($input_namnhan)){
        $namnhan_err = "Mời nhập năm nhận";     
    } elseif(!ctype_digit($input_namnhan)){
        $namnhan_err = "Vui lòng thử lại.";
    } else{
        $namnhan = $input_namnhan;
    }
    
    // Check input errors before inserting in database
    if(empty($ten_err) && empty($noicap_err) && empty($danhhieu_err) && empty($danhhieu_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO chungchi (ten, noicap, danhhieu, namnhan) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_ten, $param_noicap, $param_danhhieu, $param_namnhan);
            
            // Set parameters
            $param_ten = $ten;
            $param_noicap = $noicap;
            $param_danhhieu = $danhhieu;
            $param_namnhan = $namnhan;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
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
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm </title>
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
                        <h2>Thêm danh hiệu</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                        <input type="submit" class="btn btn-primary" value="Gửi">
                        <a href="index.php" class="btn btn-default">Hủy</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>