<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Sep 2021 11:49:12 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotelbookinginkenya::  Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ihealth.style.min.css">
</head>
<body>

<div id="ihealth-layout" class="theme-tradewind">

    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index-2.html" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <i class="icofont-heart-beat fs-2"></i>
                </span>
                <span class="logo-text">I-Health</span>
            </a>
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                    <a class="m-link active" data-bs-target="#dashboard" href="#">
                        <i class="icofont-ui-home fs-5"></i> <span>Dashboard</span></a>
                    <!-- Menu: Sub menu ul -->
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Doctor" href="#">
                        <i class="icofont-doctor-alt fs-5"></i>  <span>Hotels</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Doctor">
                        <li><a class="ms-link" href="{{url('addHotel')}}">Hotels Listing</a></li>
                        <li><a class="ms-link" href="{{url('admin/listing')}}">Add Hotel</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Patient" href="#">
                        <i class="icofont-blind fs-5"></i> <span>Patient</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Patient">
                        <li><a class="ms-link" href="patient-list.html">Patient List</a></li>
                        <li><a class="ms-link" href="patient-add.html">Add Patient</a></li>
                        <li><a class="ms-link" href="patient-profile.html">Patient Profile</a></li>
                        <li><a class="ms-link" href="patient-invoices.html">Patient Invoices</a></li>
                    </ul>
                </li>
                <li><a class="m-link" href="accidents.html"><i class="icofont-stretcher fs-5"></i> <span>Accidents</span></a></li>
                <li><a class="m-link" href="labs.html"><i class="icofont-blood-test fs-5"></i> <span>Labs</span></a></li>
                <li><a class="m-link" href="department.html"><i class="icofont-hospital fs-5"></i> <span>Department</span></a></li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                            class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Componentsone">
                        <li><a class="ms-link" href="invoices.html"><span>Invoices</span> </a></li>
                        <li><a class="ms-link" href="payments.html"><span>Payments</span> </a></li>
                        <li><a class="ms-link" href="expenses.html"><span>Expenses</span> </a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app" href="#">
                        <i class="icofont-code-alt fs-5"></i> <span>App</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="app">
                        <li><a class="ms-link" href="calendar.html">Calandar</a></li>
                        <li><a class="ms-link" href="chat.html"> Communication</a></li>
                    </ul>
                </li>
                <li><a class="m-link" href="ui-elements/ui-alerts.html"><i class="icofont-paint fs-5"></i> <span>UI Components</span></a></li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#page" href="#">
                        <i class="icofont-page fs-5"></i> <span>Pages Example</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="page">
                        <li><a class="ms-link" href="table.html">Table Example</a></li>
                        <li><a class="ms-link" href="forms.html"> Forms Example</a></li>
                        <li><a class="ms-link" href="icon.html"> Icons Example</a></li>
                        <li><a class="ms-link" href="contact.html"> Contact Example</a></li>
                    </ul>
                </li>

            </ul>

            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">

                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="d-flex">
                            <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                                <i class="icofont-info-square fs-5"></i>
                            </a>
                        </div>
                        <div class="dropdown notifications zindex-popover">
                            <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="icofont-alarm fs-5"></i>
                                <span class="pulse-ring"></span>
                            </a>
                            <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                                <div class="card border-0 w380">
                                    <div class="card-header border-0 p-3">
                                        <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                            <span>Notifications</span>
                                            <span class="badge text-white">06</span>
                                        </h5>
                                    </div>
                                    <div class="tab-content card-body">
                                        <div class="tab-pane fade show active">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Chloe Walkerr</span> <small>2MIN</small></p>
                                                            <span class="">Added Appointment 2021-06-19 <span class="badge bg-success">Book</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <div class="avatar rounded-circle no-thumbnail">AH</div>
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Hill</span> <small>13MIN</small></p>
                                                            <span class="">Lab sample collection</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Melanie	Oliver</span> <small>1HR</small></p>
                                                            <span class="">Invoice Create Patient Room A-803</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Boris Hart</span> <small>13MIN</small></p>
                                                            <span class="">Medicine Order to Medical</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Alan	Lambert</span> <small>1HR</small></p>
                                                            <span class="">Leave Apply</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                            <span class="">Patient Food Order Room A-809</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">John Quinn</span></p>
                                <small>Admin Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="assets/images/profile_av.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">John	Quinn</span></p>
                                                <small class="">Johnquinn@gmail.com</small>
                                            </div>
                                        </div>

                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="virtual.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-video-chat fs-5 me-3"></i>I-Health Virtual</a>
                                        <a href="patient-invoices.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-dollar fs-5 me-3"></i>Patient Invoices</a>
                                        <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                        <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="setting ms-2">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#Settingmodal"><i class="icofont-gear-alt fs-5"></i></a>
                        </div>
                    </div>

                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>

                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row g-3 mb-3 row-deck">
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Hospitality Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 row-deck">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-patient-file fs-3 text-secondary"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Total Appointment</h6>
                                                <span class="text-muted">400</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-crutch fs-3 color-lightblue"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Total Patients</h6>
                                                <span class="text-muted">117</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-doctor fs-3 color-light-orange"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Patients per Doctor</h6>
                                                <span class="text-muted">16</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-king-monster fs-3 color-careys-pink"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Covid Patients </h6>
                                                <span class="text-muted">144</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-doctor-alt fs-3 color-lavender-purple"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Total Doctor</h6>
                                                <span class="text-muted">200</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-nurse-alt fs-3 color-light-success"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Total Nurse </h6>
                                                <span class="text-muted">84</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header py-3 d-flex  bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Hospital Room Booking Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="room_book">
                                    <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 row-cols-lg-6 g-3">
                                        <div class="room col">
                                            <input type="checkbox" id="1A" checked/>
                                            <label for="1A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room A-101</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="1B" />
                                            <label for="1B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room B-102</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="1C" />
                                            <label for="1C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room C-103</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" disabled id="1D" />
                                            <label for="1D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Occupied</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="1E" />
                                            <label for="1E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room D-104</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="1F" checked/>
                                            <label for="1F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room E-105</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="2A" />
                                            <label for="2A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room F-106</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="2B" />
                                            <label for="2B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room G-107</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="2C" checked/>
                                            <label for="2C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room H-108</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="2D" />
                                            <label for="2D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room I-109</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="2E" checked/>
                                            <label for="2E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room J-110</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="2F" />
                                            <label for="2F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room K-111</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="3A" checked/>
                                            <label for="3A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room L-112</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="3B" />
                                            <label for="3B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room M-113</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="3C" />
                                            <label for="3C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room N-114</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="3D" />
                                            <label for="3D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room O-115</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="3E" checked/>
                                            <label for="3E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room P-116</span></label>
                                        </div>
                                        <div class="room col">
                                            <input type="checkbox" id="3F" />
                                            <label for="3F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room Q-117</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-xl-8 col-lg-12 flex-column">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Addmission by Division</h6>
                            </div>
                            <div class="card-body">
                                <div id="hiringsources"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Patients Information</h6>
                            </div>
                            <div class="card-body">
                                <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Patients</th>
                                        <th>Adress</th>
                                        <th>Admited</th>
                                        <th>Discharge</th>
                                        <th>Progress</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar3.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Molly </span></td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>May 13, 2021</td>
                                        <td>May 16, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Admit</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar1.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Brian</span></td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>May 13, 2021</td>
                                        <td>May 22, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Discharge</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar2.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Julia</span></td>
                                        <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>May 17, 2021</td>
                                        <td>May 16, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Discharge</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar4.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Sonia</span></td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>May 13, 2021</td>
                                        <td>May 23, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Admit</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar5.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Adam H</span></td>
                                        <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>May 18, 2021</td>
                                        <td>May 18, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Admit</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar9.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Alexander</span></td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>May 13, 2021</td>
                                        <td>May 22, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Discharge</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar11.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Gabrielle</span></td>
                                        <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>May 17, 2021</td>
                                        <td>May 16, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Discharge</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar12.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Grace</span></td>
                                        <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>May 17, 2021</td>
                                        <td>May 16, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Discharge</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar8.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Ryan </span></td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>May 13, 2021</td>
                                        <td>May 16, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-info">Admit</span></td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/xs/avatar7.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Christian</span></td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>May 13, 2021</td>
                                        <td>May 22, 2021</td>
                                        <td>
                                            <div class="progress" style="height: 3px;">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-success">Discharge</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 flex-column">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Make appointment</h6>
                            </div>
                            <div class="card-body">
                                <div class="wrapper">
                                    <div id="calendar">
                                        <div class="monthChange"></div>
                                        <div class='timepicker'>
                                            <div class="owl">
                                                <div>06:00</div>
                                                <div>07:00</div>
                                                <div>08:00</div>
                                                <div>09:00</div>
                                                <div>10:00</div>
                                                <div>11:00</div>
                                                <div>12:00</div>
                                                <div>13:00</div>
                                                <div>14:00</div>
                                                <div>15:00</div>
                                                <div>16:00</div>
                                                <div>17:00</div>
                                                <div>18:00</div>
                                                <div>19:00</div>
                                                <div>20:00</div>
                                            </div>
                                            <div class="fade-l"></div>
                                            <div class="fade-r"></div>
                                        </div>
                                    </div>
                                    <div class="inner-wrap">
                                        <form>
                                            <div class="mb-3">
                                                <input type="text" class="form-control" id="ps-name" placeholder="Enter Name">
                                            </div>
                                            <div class="mb-3">
                                                <input type="email" class="form-control" id="ps-email" placeholder="Enter Email">
                                            </div>
                                            <select class="form-select mb-3" aria-label="Default select example">
                                                <option selected>Select Doctor</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary disabled request"> Request appointment <span>On</span>
                                                <span class="day fw-bold text-dark"></span>
                                                <span>At</span>
                                                <span class="time fw-bold text-dark"></span>
                                                <i class="icofont-dotted-right fs-3"></i>
                                            </button>
                                        </form>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="card bg-secondary position-relative">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold text-white ">Doctor Of the Month</h6>
                            </div>
                            <div class="card-body text-center p-4 text-white">
                                <img src="assets/images/profile_av.png" alt="" class="rounded-circle mb-3 img-thumbnail avatar xl shadow-sm">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="mb-2 me-3">
                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-primary"></i></a>
                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-primary"></i></a>
                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-primary"></i></a>
                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-primary"></i></a>
                                        <a href="#" class="rating-link active"><i class="bi bi-star-half text-primary"></i></a>
                                    </span>
                                </div>
                                <h5 class="mb-0">Manuella Nevoresky</h5><span class="small">Cardiologists</span>
                                <div class="d-flex justify-content-center pt-3">
                                    <div class="opration d-flex justify-content-start align-content-center p-3">
                                        <i class="icofont-operation-theater fs-1"></i>
                                        <div class="opt_ineer text-start ps-3">
                                            <span class="d-block">12</span>
                                            <span class="d-block">Oprations</span>
                                        </div>
                                    </div>
                                    <div class="pations-visit d-flex justify-content-start align-content-center p-3 border-start">
                                        <i class="icofont-crutch fs-1"></i>
                                        <div class="opt_ineer text-start ps-3">
                                            <span class="d-block">35</span>
                                            <span class="d-block">Patient</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cup">
                                    <i class="icofont-award"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .row end -->
            </div>
        </div>

        <!-- Modal Custom Settings-->
        <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog  modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Custom Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom_setting">
                        <!-- Settings: Color -->
                        <div class="setting-theme pb-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                            <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                <li data-theme="indigo"><div class="indigo"></div></li>
                                <li data-theme="tradewind" class="active"><div class="tradewind"></div></li>
                                <li data-theme="monalisa"><div class="monalisa"></div></li>
                                <li data-theme="blue"><div class="blue"></div></li>
                                <li data-theme="cyan"><div class="cyan"></div></li>
                                <li data-theme="green"><div class="green"></div></li>
                                <li data-theme="orange"><div class="orange"></div></li>
                                <li data-theme="blush"><div class="blush"></div></li>
                                <li data-theme="red"><div class="red"></div></li>
                            </ul>
                        </div>
                        <div class="sidebar-gradient py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                            <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="CheckGradient">
                                <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                            </div>
                        </div>
                        <!-- Settings: Template dynamics -->
                        <div class="dynamic-block py-3">
                            <ul class="list-unstyled choose-skin mb-2 mt-1">
                                <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                            </ul>
                            <div class="dt-setting">
                                <ul class="list-group list-unstyled mt-1">
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label>Primary Color</label>
                                        <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label>Secondary Color</label>
                                        <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 1</label>
                                        <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 2</label>
                                        <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 3</label>
                                        <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 4</label>
                                        <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 5</label>
                                        <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Settings: Font -->
                        <div class="setting-font py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                            <ul class="list-group font_setting mt-1">
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                        <label class="form-check-label" for="font-poppins">
                                            Poppins Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                        <label class="form-check-label" for="font-opensans">
                                            Open Sans Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                        <label class="form-check-label" for="font-montserrat">
                                            Montserrat Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                        <label class="form-check-label" for="font-mukta">
                                            Mukta Google Font
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Light/dark -->
                        <div class="setting-mode py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                            <ul class="list-group list-unstyled mb-0 mt-1">
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-switch">
                                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-high-contrast mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                        <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-rtl mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary lift">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js -->
<script src="assets/bundles/apexcharts.bundle.js"></script>
<script src="assets/plugin/jqueryuicalandar/jquery-ui.min.js"></script>
<script src="assets/plugin/owlcarousel/owl.carousel.js"></script>
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="http://pixelwibes.com/template/ihealth/html/js/template.js"></script>
<script src="http://pixelwibes.com/template/ihealth/html/js/page/index.js"></script>
<script>
    $('#myDataTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
</script>
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Sep 2021 11:49:12 GMT -->
</html>
