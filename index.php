<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <style>
        body{
  font-family: 'Raleway', sans-serif;
}
html,body, .container-fluid, .sidebar2,.main-content{
  height:100%;
}
.sidebar2 {
    background-color: #1a1f27;
    padding: 0px !important;
    box-shadow: 2px 2px 5px #262a35;
    z-index: 1000;
    height: 100%;
    position: fixed;

}
.logo {
    min-height:200px;
    color:#afb1b5;
}
.logo>img {
    margin-top: 30px;
    padding: 1px;
    border: 3px solid #F17153;
    border-radius: 100%;
    background-color: #fff;
}
.btn.Add-friend
{
  background-color:#F17153;

  border: 1px solid #50e6df;
  color:#eee;
}
.btn.Add-friend:hover,.btn.Add-friend:active,.btn.Add-friend:active:focus,.btn.Add-friend:active:hover,.btn.Add-friend:visited,.btn.Add-friend:focus
{
  background-color:#F17153;
  border: 0.5px solid transparent;
  color:white;
  outline:none;
  font-weight:600;
}
.coins
{
  display:inline-block;
  font-size:20px;
font-family:'"Helvetica Neue",Helvetica,Arial,sans-serif';
}
.list {
    color: #eee;
    list-style: none;
    padding-left: 0px;
}
li:nth-child(odd) {
    background-color:#13171d;
}
li>i {margin-right:15px;
}
.list> li {
    padding: 15px 0px 15px 40px;
    font-size: 16px;
    font-weight:lighter;
}
.list>li:hover {

    color: white;
    box-shadow:1px 1px 10px 1px #50e6df inset;
    transition: padding-left 0.2s linear;
    padding-left: 60px;

}
body
{
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMXu9UkhQLAHO2_svA9Xcr5rDtpGfK0xa8DYtBuKzIb3H0t-10");
    background-size:cover;
    
   }
.main-content{ 
    color:#fff; 
    text-align:center;
}

    </style>
    <title>Sidebar2</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Inspiration from: https://dribbble.com/shots/1428271-iOS7-Challenge-App-->
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3 sidebar2" style="width:20%">
                <div class="logo text-center" style="width:150px; margin-left: auto;margin-right: auto;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_Y6tuunqopQ5ln54INlgteTXM64P6eDF8mcJNfCW4-OBPsrrZ" class="img-responsive center-block" alt="Logo">
                  <h4>NHÀ THUỐC</h4>
                  <h4 style="color: red; font-size: 20px">CHỮ THẬP ĐỎ</h4>

<!--                      <div>
                    <button type="button" class="btn btn-default Add-friend">
  <i class="fa fa-rocket" aria-hidden="true"></i> LAUNCH A CHALLENGE
</button></div>-->

                </div>
                <br>

                <div class="left-navigation">

                    <ul class="list">

                        <li>Danh mục Dược phẩm</li>
                        <li>Nhập hàng</li>
                        <li>Xuất hàng</li>
                       <li>Quản lí User</li>
                       <li>Đăng xuất</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-8 main-content"  style="width:80%">
                <!--Central content goes here-->
<!--                <h1>CHƯƠNG TRÌNH QUẢN LÝ NHÀ THUỐC</h1>-->
                <?php include "danhmuc.php" ?>
            </div>
        </div>
    </div>
</body>