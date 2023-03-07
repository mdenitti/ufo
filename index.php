<?php require 'header.php' ?>

        <div class="row blue">
            <div class="col">
        
                <h6>Fill out the form below to submit your UFO sighting
                - <?php echo getDateInDutch()?>
                </h6>

                <form method="post" action="process.php" enctype="multipart/form-data" class="bg-dark p-2 text-dark bg-opacity-10 rounded mb-2">
                    <input class='form-control' type="text" name="name" placeholder="Name"><hr>
                    <input class='form-control' type="email" name="email" placeholder="Email" required><hr>
                    <input class='form-control' type="text" name="location" placeholder="Location"><hr>
                    <input class='form-control' type="date" name="date" placeholder="Date"><hr>
                    <input class='form-control' type="time" name="time" placeholder="Time"><hr>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="scary">
                          Does the alien look scary?
                    </div>
                    <textarea class='form-control' name="message"></textarea><br>
                    <input class="form-control" type="file" name="alienImg"><hr>
                    <input class='btn btn-primary' type="submit" value="Submit">
                </form>
            </div>
            <div class='col'>
            <h1>Welcome to our UFO Alien Online Hotline!</h1>
      <p>Are you someone who has witnessed a UFO sighting or an encounter with extraterrestrial beings? Or are you simply curious about the existence of UFOs and the possibility of intelligent life beyond our planet?</p>
      <p>Our hotline is a place for individuals like you to share your experiences, seek support, and connect with others who have had similar encounters. Our team of experts is dedicated to providing a safe and confidential space for you to discuss your encounters with UFOs and alien life.</p>
      <p>Our hotline is available 24/7, so you can reach out to us anytime, anywhere. We believe that by sharing our experiences and knowledge, we can expand our understanding of the universe and our place within it.</p>
      <p>

            </div>
            
        </div>

 <?php require 'footer.php' ?>