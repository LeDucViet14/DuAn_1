<main>
        <div class="my-5 px-4">
            <h2 class="text-center fw-bold h-font">OUR ROOMS</h2>
            <div class="h-line bg-dark"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4>FILTERS</h4>
                            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch"
                                id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size:18px ;">CHECK AVAILABILITY</h5>
                                    <label class="form-label">Check in</label>
                                    <input type="date" class="form-control shadow-none mb-3">
                                    <label class="form-label">Check out</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size:18px ;">FACILITIES</h5>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1"> facility 1</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f2"> facility 2</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f3"> facility 3</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f4" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f4"> facility 4</label>
                                    </div>
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size:18px ;">GUESTS</h5>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <label class="form-label"> Children</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                        <div>
                                            <label class="form-label"> Adults</label>
                                            <input type="number" class="form-control shadow-none">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 shadow border-0" >
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="room">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <?php foreach($rooms as $room){
                                    echo '<h5 class="mb-3">'.$room['name'].'</h5>';
                                } ?>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <?php
                                        foreach($features as $feature){
                                            echo '<span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                                    '.$feature['name'].'
                                                </span>';
                                        }
                                    ?>
                                </div>
                                <div class="facilities mb-3">
                                    <h6 class="mb-1">Facilities</h6>
                                    <?php
                                        foreach($facilities as $facility){
                                            echo '<span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                                    '.$facility['name'].'
                                                </span>';
                                        }
                                    ?>
                                    
                                    
                                </div>
                                <div class="guests">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                        <?php echo $room['children'] ?> Children
                                    </span>
                                    <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                        <?php echo $room['adult'] ?> Adults
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                                <h6 class="mb-4">$<?php echo $room['price'] ?> per night</h6>
                                <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
                                <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a>
                            </div>
                        </div>
                    </div>

                   

                </div>
            </div>
        </div>


    </main>