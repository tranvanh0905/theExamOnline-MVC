<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="col-lg-4 mx-auto formLogin">
            <form action="./register" method="POST" novalidate>
                <input type="hidden" name="role" value="1">
                <div class="form-group">
                    <label class="label">Tên người dùng : </label>
                    <input type="text" class="form-control" name="username" placeholder="Nhập tên người dùng ...">
                </div>
                <div class="form-group">
                    <label class="label">Mật khẩu người dùng : </label>
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu người dùng ...">
                </div>
                <div class="form-group">
                    <label class="label">Email : </label>
                    <input type="text" class="form-control" name="email" placeholder="Nhập email người dùng ...">
                </div>
                <div class="form-group">
                    <label class="label">Số điện thoại : </label>
                    <input type="text" class="form-control" name="phone_number" placeholder="Nhập SĐT người dùng ...">
                </div>
                <div class="form-group">
                    <label class="label">Ngày sinh : </label>
                    <input type="date" class="form-control" name="birthdate">
                </div>
                <button class="form-control">Đăng ký</button>
            </form>
        </div>
    </div>
</body>
</html>