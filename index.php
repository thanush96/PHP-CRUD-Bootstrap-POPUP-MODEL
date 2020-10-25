<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PHP CRUD with Bootstrap model</title>
</head>

<body>
    <!--POP UP Modal -->
    <div class="modal fade" id="studentaddmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="studentaddmodellabel">Add Student Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertdata.php" method="POST">
                    <div class="modal-body">
                        <!-- Form -->
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="Enter your Firs Name">
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Enter your Last Name">
                        </div>

                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" name="course" class="form-control" placeholder="Enter your Course">
                        </div>

                        <div class="form-group">
                            <label>Contect</label>
                            <input type="number" name="contact" class="form-control" placeholder="Enter your Phone Number">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2>PHP CRUD Bootstrap MODEL (POP UP MODEL)</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodel">
                        ADD DATA
                    </button>
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js" integrity="sha512-1lagjLfnC1I0iqH9plHYIUq3vDMfjhZsLy9elfK89RBcpcRcx4l+kRJBSnHh2Mh6kLxRHoObD1M5UTUbgFy6nA==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>