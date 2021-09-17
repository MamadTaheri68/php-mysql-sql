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

                    <!-- checkbox & Radio -->
                    <form action="process.php" method="post">
            
                        <div class="form-check">
                            <input class="form-check-input" name="php" type="checkbox" id="checkbox1">
                            <label class="form-check-label mr-3" for="checkbox1">
                                PHP
                            </label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" name="laravel" type="checkbox" value="Laravel" id="checkbox2">
                            <label class="form-check-label mr-3" for="checkbox2">
                                Laravel
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Vue" id="radio1">
                            <label class="form-check-label mr-3" for="radio1">
                                Vue.js
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="React" value="React.js" id="radio2" >
                            <label class="form-check-label mr-3" for="radio2">
                                React.js
                            </label>
                        </div>

                        <button type="submit" name="send" class="btn btn-outline-primary btn-block mt-4">ارسال</button>
                    </form>

                    <!-- Textarea -->
                    <form action="process.php" method="post">

                        <div class="form-group">
                            <label for="exampleTextarea">Example textarea</label>
                            <textarea class="form-control" name="textarea" value="area" id="exampleTextarea" rows="3">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            </textarea>
                        </div>

                        <button type="submit" name="send" class="btn btn-outline-primary btn-block mt-4">ارسال</button>
                    </form>


                    <!-- Select -->
                    <form action="process.php" method="post">

                        <div class="form-group">
                            <label for="exampleSelect">Example multiple select</label>
                            <select multiple class="form-control" name="select[]" id="exampleSelect">
                                <option value="mamad">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <button type="submit" name="send" class="btn btn-outline-primary btn-block mt-4">ارسال</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>