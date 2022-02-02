<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day-13</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>

            <ul class="navbar-nav ml-auto">
                <li><a href="" class="nav-link text-white">Series</a></li>
                <li><a href="" class="nav-link">String</a></li>
                <li><a href="" class="nav-link">Array</a></li>
            </ul>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">My Series</div>

                        <div class="card-body">
                            <form action="action.php" method="POST">

                                <div class="form-group row">
                                    <label for="" class="col-3 col-form-label">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="starting_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-3 col-form-label">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="ending_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-3 col-form-label">Your Choice</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" name="odd_even" value="even"> Even + </label>
                                        <label><input type="radio" name="odd_even" value="odd"> ODD - </label>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-3 col-form-label">Number Range</label>
                                    <div class="col-md-9">
<!--                                        <input type="number" value="--><?php //echo isset($series)? $series : ''?><!-- class="form-control">-->
                                        <textarea  class="form-control" cols="65" rows="5" ><?php echo isset($output) ? $output : ''?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="submit" class="btn btn-outline-success" value="Submit">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>












    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>
