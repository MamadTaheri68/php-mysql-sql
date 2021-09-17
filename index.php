<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <title>php-sandbox</title>

    <style>
        body {
            text-align: right !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-light">

        <div class="row d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="card">
                <div class="card-body" style="width: 400px">

                 <!-- File  -->
                 <form action="process.php" method="post" enctype="multipart/form-data">
        
                    <input type="file" name="file">

                    <button type="submit" name="send" class="btn btn-outline-primary">ارسال</button>

                 </form>
 

                </div>
            </div>
        </div>
    </div>
</body>