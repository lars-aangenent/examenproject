<?php
include "navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="container">
    <form action="" method="post" enctype="text/plain">
        <div class="mb-3">
            <label  class="form-label">Uw email address</label>
            <input type="email" class="form-control" placeholder="Jouw email" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label" >Onderwerp</label>
            <input type="text" name="Onderwerp" class="form-control">
        </div>
        <div class="mb-3">
            <label  class="form-label" >Bericht</label>
            <textarea class="form-control"  name="Bericht" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
        <input class="btn btn-success" type="submit" value="Verstuur">
        </div>
    </form>
</div>
</body>
</html>