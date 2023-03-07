<?php require 'header.php' ?>

<div class="row">
    <div class="col">


        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-img">
                    <img src="assets/images/Taken.png" alt="taken">
                </div>
                <div class="col-lg-6 col-form">
                    <h6>Fill out the form below to submit your UFO sighting
                        -
                        <?php echo getDateInDutch() ?>
                    </h6>
                    <form method="post" action="process.php" enctype="multipart/form-data"
                        class=" input-form rounded mb-2">
                        <input class='form-control form-input-field' type="text" name="name" placeholder="Name">

                        <input class='form-control form-input-field' type="email" name="email" placeholder="Email">

                        <input class='form-control form-input-field' type="text" name="location" placeholder="Location">

                        <input class='form-control form-input-field' type="date" name="date" placeholder="Date">

                        <input class='form-control form-input-field' type="time" name="time" placeholder="Time">

                        <div class="form-check form-input-field">
                            <input class="form-check-input " type="checkbox" name="scary">
                            Does the alien look scary?
                        </div>
                        <textarea class='form-control form-input-field' name="message"
                            placeholder="Describe your encounter!"></textarea><br>
                        <input class="form-control form-input-field" type="file" name="alienImg">
                        <hr>
                        <div class="submit">
                            <input class='btn btn-primary submit-button' type="submit" value="Submit">

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require 'footer.php' ?>