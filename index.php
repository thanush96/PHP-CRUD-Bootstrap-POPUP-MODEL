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

    <!-- #################################################################################### -->

    <!-- Edit Student data POP UP model -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="studentaddmodellabel">Add Student Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="" method="POST">
                    <div class="modal-body">
                        <!-- Form -->
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="fname" id="fname"class="form-control" placeholder="Enter your Firs Name">
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter your Last Name">
                        </div>

                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" name="course" id="course" class="form-control" placeholder="Enter your Course">
                        </div>

                        <div class="form-group">
                            <label>Contect</label>
                            <input type="text" name="contact" id="contact" class="form-control" placeholder="Enter your Phone Number">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- #################################################################################################### -->
    <!-- DISPLAY BODY -->

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

            <div class="card">
                <div class="card-body">

                    <!-- DATABASE CONNECTION -->
                    <?php
                    $connection = mysqli_connect("localhost", "root", "");
                    $db = mysqli_select_db($connection, 'PHP-CRUD2');
                    $query = "SELECT * FROM student";
                    $query_run = mysqli_query($connection, $query);

                    ?>

                    <!-- Header -->
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Course</th>
                                <th scope="col">Contact</th>
                                <th scope="col">EDIT</th>
                            </tr>
                        </thead>

                        <!-- Run and Fetch -->
                        <?php

                        if ($query_run) {
                            foreach ($query_run as $row) {

                        ?>
                                <tbody>
                                    <tr>
                                        <td> <?php echo $row['id']; ?></td>
                                        <td> <?php echo $row['fname']; ?></td>
                                        <td> <?php echo $row['lname']; ?></td>
                                        <td> <?php echo $row['course']; ?></td>
                                        <td> <?php echo $row['contact']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success editbtn">
                                                EDIT
                                            </button>
                                        </td>

                                    </tr>
                                </tbody>
                        <?php
                            }
                        } else {
                            echo "No Record";
                        }

                        ?>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('.editbtn').on('click', function() {
                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#fname').val(data[1]);
                $('#lname').val(data[2]);
                $('#course').val(data[3]);
                $('#contact').val(data[4]);
            });
        });
    </script>

</body>

</html>