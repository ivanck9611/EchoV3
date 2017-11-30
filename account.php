<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {margin:10;}

.icon-bar {
    width: 100%;
    overflow: auto;
}

.icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 12px 0;
    transition: all 0.3s ease;
    color: black;
    font-size: 20px;
}

.icon-bar a:hover {
    background-color: #666666;
}

.active {
    background-color: #999999 !important;
}
</style>
<body>

<div class="icon-bar">
  <a href="Myprofile.php" target = "myframe"><i class="fa fa-address-book-o"><br>My Profile</i></a>
  <a href="Changepassword.php" target = "myframe"><i class="fa fa-unlock-alt"><br>Change Password</i></a>
  <a href="MyOrder.php" target = "myframe"><i class="fa fa-edit"><br>My Order</i></a>
</div>

</body>
</html>
