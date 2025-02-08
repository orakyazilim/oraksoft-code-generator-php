<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 5 Composer</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">-->

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title text-center">Excel Dosyası Yükle</h3>
                </div>

                <div class="card-body">

                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="excelFile" class="form-label">Excel Dosyası Seçin:</label>
                            <input type="file" class="form-control" name="excelFile" id="excelFile" accept=".xlsx, .xls, .csv" required>
                            <div class="form-text">Sadece .xlsx, .xls veya .csv dosyaları yükleyebilirsiniz.</div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Yükle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>-->



<!--<div class="container">-->
<!--    <h1 class="text-center text-primary mt-5">Hello, Bootstrap 5 Merhaba!</h1>-->
<!---->
<!--    <form action="process.php" method="POST">-->
<!--        <label for="name">Adınız:</label>-->
<!--        <input type="text" id="name" name="name" required>-->
<!---->
<!--        <label for="email">Email:</label>-->
<!--        <input type="email" id="email" name="email" required>-->
<!---->
<!--        <button type="submit">Gönder</button>-->
<!--    </form>-->
<!--</div>-->

<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

