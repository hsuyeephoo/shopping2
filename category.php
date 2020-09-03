<?php
include "user_auth.php";
include "admin_auth.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include"navbar.php"?>
<div class="container">
    <div class="page-header">
        <h5><i class="glyphicon glyphicon-th-list"></i> Categories</h5>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <p style="margin-bottom: 30px">
               <i class="glyphicon glyphicon-plus-sign"></i> New categories
            </p>
            <form>
                <div class="form-group">
                    <labe for="category_name" >Category Name</labe>
                    <input type="text" name="category_name" id="category_name" required class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>

            </form>
        </div>
        <div class="col-sm-8">
           <p>
               <i class="glyphicon glyphicon-list-alt"></i>
               Available Categories
           </p>
        </div>

    </div>
</div>

<script src="bootstrap/js/jQuery.js" ></script>
<script src="bootstrap/js/bootstrap.js" ></script>
</body>
</html>

