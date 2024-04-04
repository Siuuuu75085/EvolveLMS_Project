<?php
include('./admininclude/header.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, 
        initial-scale=1.0" />
        <meta http-quiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="../css/all.min.css">

        <!-- Google Font -->

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="../css/adminstyle.css">

    </head>

    </body>
        <!-- Top Navbar -->
        <nav class=<"navbar navbar-dark fixed-top p-0 stream_socket_shutdown"
        style="background-color: #225470;">
            <a class="navbar-brank col-sm-3 col-md-2 mr-0"
            href="adminDashboard.php">E-learning <small
            class="text-while">Admin
                Area</small></a>

        <!--Slide Bar -->
        <div class="container-fluid mb-5" style="margin-top:50px;">
            <div class="row">
                <nav class="col-sm-3 col-md-2 bg-light slidebar py-5
                d-print-none">
                    <div class="slidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="adminDashboard.php">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="courses.php">
                                    <i class"fab fa-accessible-icon"></i>
                                    Courses
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class"fab fa-accessible-icon"></i>
                                    Lessons
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class"fab fa-accessible-icon"></i>
                                    Students
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class"fab fa-accessible-icon"></i>
                                    Sell Report
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class"fab fa-accessible-icon"></i>
                                    Payment Status                                  
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class"fab fa-accessible-icon"></i>
                                    Feedback
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class"fab fa-accessible-icon"></i>
                                    Change Password
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class"fab fa-accessible-icon"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                
<div class="col-sm-9 mt-5">
    <!--Table-->
    <p class=" bg-dark text-white p-2">Course Ordered</p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Course ID</th>
                <th scope="col">Student Email</th>
                <th scope="col">Order Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
            <tr>
        <thead>
        <tbody>
            <tr>
                <th scope="row">22</th>
                <td>Learn Guitar</td>
                <td>GeekyShows</td>
                <td>
                    <button
                        type="submit"
                        class="btn btn-info mr-3"
                        name="view"
                        value="View"
                    >
                        <i class="fas fa-pen"></t>
                    </button>
                    <button
                        type="submit"
                        class="btn btn-secondary"
                        name="delete"
                        value="Delete"
                    >
                        <i class="fas fa-trash-alt"></t>
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<!--div Row close from heder -->
<div>
<a class="btn btn-danger box" href="addCourse.php"><i class="fas fa-plus fa-2x"
></i></a>
</div>
</div>
<!--div Conatiner-fluid from heder -->




<?php
include('./admininclude/footer.php');
?>