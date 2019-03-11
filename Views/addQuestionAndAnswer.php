<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thi trắc nhiệm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="col-lg-4 mx-auto formLogin">
            <form action="./addQuestion" method="POST" novalidate>
                <div class="form-group">
                    <label class="label">Môn học :  </label>
                    <select class="form-control" name="id_exam">
                        <?php foreach($exam as $item): ?>
                        <option value="<?= $item->id; ?>"><?= $item->title; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="label">Câu hỏi :  </label>
                    <input type="text" class="form-control" name="title" placeholder="Nhập câu hỏi ...">
                </div>
                <div class="form-group">
                    <label class="label">Trả lời 1 :  </label>
                    <input type="text" class="form-control" name="content[]" placeholder="Nhập câu trả lời ...">
                </div>
                <div class="form-group">
                    <label class="label">Trả lời 2 :  </label>
                    <input type="text" class="form-control" name="content[]" placeholder="Nhập câu trả lời ...">
                </div>
                <div class="form-group">
                    <label class="label">Trả lời 3 :  </label>
                    <input type="text" class="form-control" name="content[]" placeholder="Nhập câu trả lời ...">
                </div>
                <div class="form-group">
                    <label class="label">Trả lời 4 :  </label>
                    <input type="text" class="form-control" name="content[]" placeholder="Nhập câu trả lời ...">
                </div>
                <button  class="form-control">Thêm câu hỏi </button>
            </form>
        </div>
    </div>
</body>
</html>