<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&family=Ubuntu:ital,wght@0,700;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/400media.css">
    <link rel="stylesheet" href="assets/css/600media.css">
    <link rel="stylesheet" href="assets/css/767media.css">
    <link rel="stylesheet" href="assets/css/900media.css">
    <link rel="stylesheet" href="assets/css/1300media.css">
    <link rel="stylesheet" href="assets/css/big_media.css">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="logo_brand">
                <img clsss="navbar-brand" src="assets/img/RUS.png" alt="" style="max-width:80px;">
                <h3 class="navbar-brand" style="padding-top:10px">RUS</h3>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"> Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" aria-current="page" href="#service_section"> Our
                            Services</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#contact" tabindex="-1"
                            aria-disabled="true">Contact</a> </li>
                    <li class="nav-item"> <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">
                            Products</a> </li>
                </ul>
                <p id="dummmy"> </p>
            </div>
            <div class="nav_list1">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#"> Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" aria-current="page" href="#empty"> Our Services</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#contact" tabindex="-1"
                            aria-disabled="true">Contact</a> </li>

                </ul>
            </div>
            <div class="nav_list" id="">
                <ul class="navbar-nav ">
                    <li> <a class="nav-link active" aria-current="page" href="#"> <i class="fas fa-home-lg-alt"></i>
                        </a> </li>
                    <li> <a class="nav-link" aria-current="page" href="#empty"> <i class="fas fa-cubes"></i></a> </li>
                    <li> <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true"><i
                                class="fas fa-phone-alt"></i></a> </li>

                </ul>

            </div>
            <!-- Button trigger modal -->
            <!-- Button trigger modal -->
            <!-- Button trigger modal -->
            <a class="feedback" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Help
            </a>

            <!-- Modal -->

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Fill this for Support</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="assets/php/help.php" method="POST">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name:</label>
                                    <input type="text" class="form-control" name="human_name" id="human_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="order_id" class="col-form-label">Order id:</label>
                                    <input type="text" class="form-control" name="Order_id" id="Order_id" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <textarea class="form-control" name="message_text" id="message_text"
                                        required></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" onclick="help_submit()">Send
                                        message</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <a class="login" data-bs-toggle="modal" data-bs-target="#loginpop"
                    href='#login-pop' style="color:#000;">Login</a>

            <div class="modal" id="loginpop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="assets/php/login.php" method="POST">

                                <div class="d-flex align-items-center mb-3 pb-1" style="background-color:#fff;">
                                    <img clsss="navbar-brand" src="assets/img/RUS.png" alt="" style="max-width:80px;">
                                    <span class="h1 fw-bold mb-0">RUS</span>
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                    account</h5>

                                <div class="form-outline mb-4">
                                    <input type="text" name="login_id" required id="login_id"
                                        class="form-control form-control-lg" />
                                    <label class="form-label" for="e_mail">Email address/Phone
                                        Number</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" required name="login_pswd" id="login_pswd"
                                        class="form-control form-control-lg" />
                                    <label class="form-label" for="form2Example27">Password</label>
                                </div>

                                <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                </div>

                                <a class="small text-muted" href="#!">Forgot password?</a>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                        href="registration-form.php" target='_blank' style="color: #393f81;">Register
                                        here</a></p>
                                <a href="#!" class="small text-muted">Terms of use.</a>
                                <a href="assets/policy/privacy.html" class="small text-muted">Privacy policy</a>
                            </form>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </nav>
    <!-- loginpage -->


    <!-- loginpage-end -->

    <div class="top_section">

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/slide1.jpg" class="d-block w-100" style="max-width:600px;max-height:541px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slide2.jpg" class="d-block w-100" style="max-width:600px;max-height:541px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slide3.jpg" class="d-block w-100" style="max-width:600px;max-height:541px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slide4.jpg" class="d-block w-100" style="max-width:600px;max-height:541px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/slide5.jpg" class="d-block w-100" style="max-width:600px;max-height:541px;" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



        <div class="qscard">
            <div class="card-header bg-primary">
                <h3>Quick Service</h3>
            </div>
            <div class="card-body">

                <form action="assets/php/qs_data.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" id="fullname" name="fullname" required
                            placeholder="Full Name(required)">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="mail" name="mail" required
                            placeholder="Enter email(required)">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phonenum" name="phonenum" required
                            placeholder="Phone Number(required)">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="address" name="address" required rows="3"
                            placeholder="Address"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pincode" name="pincode" required
                            placeholder="Pincode(required)">
                    </div>
                    <div class="select">
                        <div class="form-group">
                            <select class="formcontrol" id="deviceselect" name="deviceselect" required>
                                <option value="Select_Device">Select Device</option>
                                <option value="desktop">Desktop Monitor</option>
                                <option value="desktop">CPU</option>
                                <option value="SMPS">SMPS</option>
                                <option Value="laptop">Laptop</option>
                                <option value="UPS">UPS</option>
                                <option value="Tv" title="LED/LCD/Smart/CRT">TV</option>
                                <option value="audio" title="Speaker/Soundbar/Woofer/Bluetooth Speaker">Audio Devices
                                </option>

                                <option value="amplifiers">Amplifiers</option>
                                <option value="Inverter" title="Online/Offline">Inverter</option>
                                <option value="Stabilizers">Stabilizers</option>
                                <option value="audio">Amplifier</option>
                                <option value="avr">AVR</option>
                                <option value="dvd">DVD player</option>
                            </select>

                        </div>
                        <div class="form-group">

                            <select class="formcontrol2" id="brandname" name="brandname" required>
                                <option>Select Brand</option>
                            </select>

                        </div>

                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="problemdescription" name="problemdescription" rows="3"
                            placeholder="Describe the problem briefly"></textarea>
                    </div>
                    <div class="form-group form-check">
                        
                        <label class="form-check-label" for="exampleCheck1">Read our <a
                                href="assets/policy/privacy.php" target="_blank" data-bs-toggle="modal4"
                                data-bs-target="#exampleModal">
                                Privacy Statement</a> before checking
                            out</label>
                    </div>
                    <div class="qs_btn">
                        <button type="submit" class="btn btn-primary w-100" onclick="qssubmit()">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="service_process">
        <div class="process_header">
            <h3>OUR SERVICE PROCESS</h3>
            <div class="line"></div>
        </div>
        <div class="process_icons">

            <i class="far fa-diagnoses"><br><span>1.Diagnose</span> </i>
            <i class="fal fa-money-check-edit"><br> <span>2.Quotation</span></i>
            <i class="far fa-toolbox"><br> <span>3.Repair</span></i>
            <i class="fal fa-badge-check"><br> <span>4.QC</span></i>
            <i class="fal fa-truck-loading"><br> <span>5.Delivery</span></i>
        </div>
    </div>
    <div id="empty">

    </div>
    <div class="ourservice">
        <h3 id="service_section">Our Services</h3>
        <div class="line1"></div>
    </div>

    <div class="slate-group">
        <div class="slate_panel">
            <div class="slate1">

                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> No Display</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Restart/auto off</li>
                    <li><i class="fad fa-chevron-right"></i> Hardware Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> OS Installation</li>

                </ul>
                <h5 class="slate-title">Desktop Computer</h5>

            </div>
            <div class="slate_img">
                <img src="assets/img/computer.png" style="max-width:250px;max-height:175px;" alt="">


            </div>
        </div>
        <div class="slate_panel">
            <div class="slate_img">
                <img src="assets/img/laptop.png" style="max-width:250px;max-height:175px;" alt="">


            </div>
            <div class="slate2">
                <h5 class="slate-title">Laptop Computer</h5>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> No Display</li>
                    <li><i class="fad fa-chevron-right"></i> Display Broken</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Blue Screen Error</li>
                    <li><i class="fad fa-chevron-right"></i> HardDisk Failure</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                    <li><i class="fad fa-chevron-right"></i> OS Installation</li>
                    <li><i class="fad fa-chevron-right"></i> Sysytem Malfunction</li>

                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Audio Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Display Broken</li>
                    <li><i class="fad fa-chevron-right"></i> Hinge Replacement</li>
                    <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> Skin Change</li>

                </ul>
            </div>

        </div>
        <div class="slate_panel">
            <div class="slate3">
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> No Sound</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> No Display</li>
                    <li><i class="fad fa-chevron-right"></i> Auto on/off</li>
                    <li><i class="fad fa-chevron-right"></i> Half Display</li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> Malfunction</li>
                    <li><i class="fad fa-chevron-right"></i> Other Problem</li>

                </ul>
                <h5 class="slate-title">Television</h5>
            </div>
            <div class="slate_img">
                <img src="assets/img/lcdtv.png" style="max-width:250px;max-height:175px;" alt="">


            </div>
        </div>
        <div class="slate_panel">
            <div class="slate_img">
                <img src="assets/img/smps.png" style="max-width:250px;max-height:175px;" alt="">


            </div>
            <div class="slate4">
                <h5 class="slate-title">Power Supplies</h5>
                <ul class="slate-text">
                
                    <li><i class="fad fa-chevron-right"></i> Motor Drivers</li>
                    <li><i class="fad fa-chevron-right"></i> SMPS</li>
                   
                    <li><i class="fad fa-chevron-right"></i> Medical Power SUpply</li>
                    <li><i class="fad fa-chevron-right"></i> Adapters</li>
                    <li><i class="fad fa-chevron-right"></i> Stabilizers</li>
                </ul>
                <ul class="slate-text">
                <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Overload Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Auto On/Off</li>
                    <li><i class="fad fa-chevron-right"></i> Physical Damages</li>
                </ul>
            </div>
        </div>
        <div class="slate_panel">
            <div class="slate5">
                <ul class="slate-text">
                <li><i class="fad fa-chevron-right"></i> Inverters
                        <ul class="subcard-text">
                            <li><i class="fad fa-chevron-double-right"></i> Online Inverter</li>
                            <li><i class="fad fa-chevron-double-right"></i> Offline Inverter</li>
                        </ul>
                    </li>
                    <li><i class="fad fa-chevron-right"></i> No Back Up</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    
                </ul>
                <ul class="slate-text">
                <li><i class="fad fa-chevron-right"></i> Auto On/Off</li>
                    <li><i class="fad fa-chevron-right"></i> Error Indication</li>
                    <li><i class="fad fa-chevron-right"></i> Overload</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                <li><i class="fad fa-chevron-right"></i> Physical Damages</li>


                </ul>
                <h5 class="slate-title">Back Up Units</h5>
            </div>
            <div class="slate_img">
                <img src="assets/img/Inverter.png" style="max-width:250px;max-height:175px;" alt="">


            </div>
        </div>
        <div class="slate_panel">
            <div class="slate_img">
                <img src="assets/img/Audio.png" style="max-width:250px;max-height:175px;" alt="">


            </div>
            <div class="slate6">
                <h5 class="slate-title">Audio Devices</h5>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> 2-way Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> 3-way Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> Woofer</li>
                    <li><i class="fad fa-chevron-right"></i> Sound Bars</li>
                    <li><i class="fad fa-chevron-right"></i> Tower Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> Amplifiers</li>
                    <li><i class="fad fa-chevron-right"></i> AV Receivers</li>
                    <li><i class="fad fa-chevron-right"></i> DVD Players</li>
                    <li><i class="fad fa-chevron-right"></i> Blueray Players</li>
                </ul>
                <ul class="slate-text">
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> No Audio</li>
                    <li><i class="fad fa-chevron-right"></i> Noise Problem</li>


                </ul>
            </div>
        </div>
    </div>


    <div class="card-group">
        <div class="card mb-3" style="max-width: 80%;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/computer.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Desktop Computer</h5>
                        <ul class="card-text">
                        <li><i class="fad fa-chevron-right"></i> No Display</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Restart/auto off</li>
                    <li><i class="fad fa-chevron-right"></i> Hardware Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> OS Installation</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 80%;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/laptop.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">laptop Computer</h5>
                        <ul class="card-text">
                        <li><i class="fad fa-chevron-right"></i> No Display</li>
                    <li><i class="fad fa-chevron-right"></i> Display Broken</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Blue Screen Error</li>
                    <li><i class="fad fa-chevron-right"></i> HardDisk Failure</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                    <li><i class="fad fa-chevron-right"></i> OS Installation</li>
                    <li><i class="fad fa-chevron-right"></i> Sysytem Malfunction</li>
                    <li><i class="fad fa-chevron-right"></i> Audio Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Display Broken</li>
                    <li><i class="fad fa-chevron-right"></i> Hinge Replacement</li>
                    <li><i class="fad fa-chevron-right"></i> Peripheral Changes</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> Skin Change</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 80%;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/lcdtv.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Television</h5>
                        <ul class="card-text">
                        <li><i class="fad fa-chevron-right"></i> No Sound</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> No Display</li>
                    <li><i class="fad fa-chevron-right"></i> Auto on/off</li>
                    <li><i class="fad fa-chevron-right"></i> Half Display</on</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Mother Board Service</li>
                    <li><i class="fad fa-chevron-right"></i> Malfunction</li>
                    <li><i class="fad fa-chevron-right"></i> Other Problem<
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="card-group">
        <div class="card mb-3" style="max-width: 80%;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/smps.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Power Supplies</h5>
                        <ul class="card-text">
                        <li><i class="fad fa-chevron-right"></i> Motor Drivers</li>
                    <li><i class="fad fa-chevron-right"></i> SMPS</li>
                   
                    <li><i class="fad fa-chevron-right"></i> Medical Power SUpply</li>
                    <li><i class="fad fa-chevron-right"></i> Adapters</li>
                    <li><i class="fad fa-chevron-right"></i> Stabilizers</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Overload Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                    <li><i class="fad fa-chevron-right"></i> Auto On/Off</li>
                    <li><i class="fad fa-chevron-right"></i> Physical Damages</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 80%;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/inverter.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Back-Ups Units</h5>
                        <ul class="card-text">
                        <li><i class="fad fa-chevron-right"></i> Inverters
                        <ul class="subcard-text">
                            <li><i class="fad fa-chevron-double-right"></i> Online Inverter</li>
                            <li><i class="fad fa-chevron-double-right"></i> Offline Inverter</li>
                        </ul>
                    </li>
                    <li><i class="fad fa-chevron-right"></i> No Back Up</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> Auto On/Off</li>
                    <li><i class="fad fa-chevron-right"></i> Error Indication</li>
                    <li><i class="fad fa-chevron-right"></i> Overload</li>
                    <li><i class="fad fa-chevron-right"></i> Heat Problem</li>
                <li><i class="fad fa-chevron-right"></i> Physical Damages</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 80%;border-radius:30px">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/Audio.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Audio Devices</h5>
                        <ul class="card-text">
                        <li><i class="fad fa-chevron-right"></i> 2-way Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> 3-way Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> Woofer</li>
                    <li><i class="fad fa-chevron-right"></i> Sound Bars</li>
                    <li><i class="fad fa-chevron-right"></i> Tower Speakers</li>
                    <li><i class="fad fa-chevron-right"></i> Amplifiers</li>
                    <li><i class="fad fa-chevron-right"></i> AV Receivers</li>
                    <li><i class="fad fa-chevron-right"></i> DVD Players</li>
                    <li><i class="fad fa-chevron-right"></i> Blueray Players</li>
                    <li><i class="fad fa-chevron-right"></i> No Power On</li>
                    <li><i class="fad fa-chevron-right"></i> No Audio</li>
                    <li><i class="fad fa-chevron-right"></i> Noise Problem</li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="logo_heading">
        <h3>Brands we support</h3>
        <div class="line"></div>
    </div>
    <div class="service_logos">
        <div class="computer_brands">
            <h3>Computer </h3>
            <div class="line1"></div>

            <img src="assets/img/all_brands.png" alt="" style="max-width:450px;">
        </div>
        <div class="inverter_brands">
            <h3>Power Supply and Back up</h3>
            <div class="line1"></div>

            <img src="assets/img/power_panel.png" alt="" style="max-width:450px;">
        </div>

        <div class="audio_brands">
            <h3>Audio Devices</h3>
            <div class="line1"></div>

            <img src="assets/img/audio_panel.png" alt="" style="max-width:450px;">
        </div>
        <div class="tv_brands">
            <h3>Television</h3>
            <div class="line1"></div>

            <img src="assets/img/tv_panel.png" alt="" style="max-width:450px;">
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted" style="margin-top:2em;">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block social">
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                <a href="http://" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>


            </div>
            <!-- Left -->

            <!-- Right -->
            <!-- <div>
                <label for="text" class="trackid">Track Your Service:</label>
                <input type="text">
                <button class="btn-success">Track</button>


            </div> -->

            <!-- Right -->
        </section>

        <p id="demo_222">

        </p>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <div class="footer-brand">
                            <img clsss="navbar-brand" src="assets/img/RUS.png" alt="" style="max-width:80px;">
                            <h3 class="navbar-brand">RUS</h3>
                        </div>
                        <p>

                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Button trigger modal -->
                        <p><a class="About" href="about.php" target="_blank" style="color:#11703C">
                            About
                        </a></p>
                        <p><a class="About" href="assets/policy/t&c.php" target="_blank" style="color:#11703C">
                            Terms and Condition
                        </a></p>
                        <p><a class="About" href="assets/policy/privacy.php" target="_blank" style="color:#11703C">
                            Privacy Statement
                        </a></p>
                        <p><a class="About" href="assets/policy/refund.php" target="_blank" style="color:#11703C">
                            Refund Policy
                        </a></p>
                        <p><a class="feedback" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Feedback
                        </a></p>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Kindly enter your feedback</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="assets/php/feedback.php" method="POST">
                                            <label for="Name">Name:</label>
                                            <input type="text" id="feedback_name" name="feedback_name">
                                            <textarea name="feedback_msg" id="feedback_msg" cols="40" rows="3"
                                                placeholder="Provide your feedback here"
                                                style="margin-top:10px;"></textarea>

                                            <div class="modal-footer">

                                                <button type="submit" class="btn btn-primary"
                                                    onclick="feedback_submit()">Send</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <p>
                            <a href="Vendor/index.php" target="_blank" class="text-reset">Vendor</a>
                        </p> -->


                    </div>
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <p>Rathnapuri,Coimbatore,<br>Tamil Nadu-641 027</p>



                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->

                        <p><i class="fas fa-phone-alt"></i>+91 7708758318</p>
                        <p><i class="fas fa-phone-alt"></i>+91 7358239431</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" id="contact">
                        <!-- Links -->



                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:rus.servicesindia@gmail.com" class="contactmail">info@ruselectronics.com</a>

                        </p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            <a href="mailto:rus.servicesindia@gmail.com"
                                class="contactmail">support@ruselectronics.com</a>
                        </p>

                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.5);color:#fff">
            ?? 2022 Copyright:
            <a class="text-reset fw-bold" href="https://www.ruselectronics.com/" target="_blank">ruselectronics.com</a>
            <a href='#top' style="float:right;color:#fff">Top</a>

        </div>

        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function qssubmit() {
    var fullname = document.getElementById("fullname").value;
    var mail = document.getElementById("mail").value;
    var phonenum = document.getElementById("phonenum").value;
    var address = document.getElementById("address").value;
    var pincode = document.getElementById("pincode").value;
    var deviceselect = document.getElementById("deviceselect").value;
    var brandname = document.getElementById("brandname").value;
    var problemdescription = document.getElementById("problemdescription").value;
    
    // alert(exampleCheck1);
    if (fullname != "" && mail != "" && phonenum != "" && address != "" && pincode != "" &&
        deviceselect != "" && brandname != "" && problemdescription != "" ) {
        alert("Submitted \n You get a call from RUS in 15 mins.\n Thank You");
        
    } else {
        swal({
            title: "Fields Empty!!",
            text: "Please fill the valid data!",
            icon: "warning",
            button: "Ok"
        });

    }


}
</script>
<script>
    $('#deviceselect').change(function() {
    var device = $('#deviceselect').val();


    $.ajax({
        type: 'POST',
        url: "assets/php/select_device.php",
        data: {
            device: device
        },
        dataType: "html",
        success: function(resultData) {
            // alert("Save Complete");
            $('#brandname').html(resultData);
        }
    });
});
$('#myModal').modal(options);
</script>

</html>