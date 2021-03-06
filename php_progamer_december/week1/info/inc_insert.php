<?php
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['start'][] = $_POST;
    header("location:inc_insert.php");
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post" class="col-sm-12">
    <legend>Tài Khoản Đăng Nhập</legend>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" type="text" name="email" placeholder="Email....">
    </div>

    <div class="form-group">
        <label for="">Mật khẩu</label>
        <input class="form-control" type="password" name="password" placeholder="password...">
    </div>

    <button name="submit" type="submit" class="btn btn-primary">Thêm</button>

    <button class="btn btn-warning"><a href="inc_search.php" style="text-decoration: none; color: #111111">Tìm kiếm</a></button>
</form>
<br>
<table class="table table-hover col-sm-10 table-bordered" style="margin: 0 auto">
    <thead>
    <tr>
        <th>Email</th>
        <th>Password</th>
        <th>edit</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION['start'] as $key => $value) { ?>
        <tr>
            <td><?php echo $value['email'] ?></td>
            <td><?php echo $value['password'] ?></td>
            <td><a href="inc_edit.php?id=<?php echo $key ?>">Sửa</a></td>
            <td><a href="inc_delete.php?id=<?php echo $key ?>">Xóa</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
