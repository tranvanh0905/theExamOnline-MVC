<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông tin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">TheExamOnline Vanh</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a href="#" class="p-2 text-dark">Trang chủ</a>
            <a href="#" class="p-2 text-dark">Thêm câu hỏi</a>
        </nav>
    </div>
    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card-header col-md-4">
                <img src="https://www.fancyhands.com/images/default-avatar-250x250.png" width="50%" alt="">
                <h4 class="my-0 font-weight-normal mb-2">Tài khoản : <?= $userLogin->username; ?></h4>
                <h5 class="my-0 font-weight-normal mb-2">Email : <?= $userLogin->email; ?></h5>
                <h5 class="my-0 font-weight-normal mb-2">Số điện thoại : <?= $userLogin->phone_number; ?></h5>
                <h5 class="my-0 font-weight-normal mb-2">Ngày sinh : <?= $userLogin->birthdate; ?></h5>
            </div>
            <div class="card-body col-md-8 d-flex flex-wrap">
                <div class="col-md-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-success">PHP</strong>
                            <h3 class="mb-9">Bài test 1</h3>
                            <button class="btn btn-lg btn-primary btn-block">Làm ngay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>