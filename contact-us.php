<!-- Header -->
<?php $title = "Home";
include 'include/header.php'; ?>

<section>
    <div class="contact-us">
        <!-- <div class="bg-danger">gdgadlg</div>  -->
        <div class="container pt10">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <h1>Contact Us</h1>
                    <p class="pt-2 pb-3">Reach out to us today and let's collaborate in crafting your perfect wooden masterpiece. Your vision, our expertise – let's create together.</p>

                </div>
                <div class="col-12 d-flex align-items-end justify-content-end"><img src="images/scroll-down.png" class="scroll-down" alt=""></div>
            </div>
        </div>
    </div>
</section>


<section class="mt-5">
    <div class="container pt10 pt-5">
        <div class="row mt-5">
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26544561.76004812!2d-116.97235650850439!3d35.694161883996756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1690512144705!5m2!1sen!2s" class="map" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-md-0 mt-4">
                        <div class="contact-form text-center pt-4 pl-4 pr-4 ">
                            <h3>
                                Get In Touch!
                            </h3>
                            <p>Reach out to us today and let's collaborate in crafting your perfect wooden masterpiece. Your vision, our expertise – let's create together.</p>


                            <form class="" method="POST" id="quoteForm" autocomplete="off">
                                <div class="group-form mb-2">
                                    <input type="text" name="quote[name]" placeholder="First Name" class="form-controls">
                                    <!-- <input type="text" name="quote[name]" placeholder="Last Name" class="form-controls"> -->
                                </div>
                                <div class="group-form ">
                                    <input type="email" name="quote[email]" placeholder="Email" class="form-controls mb-2">
                                    <input type="number" name="quote[phone]" placeholder="Phone Number" class="form-controls mb-2">
                                </div>
                                <div class="group-form">
                                    <textarea cols="30" rows="5" name="quote[message]" placeholder="Comment" class="form-controls mb-2"></textarea>
                                </div>

                                <button type="submit" name="quote" class="frombtn mb-4   btn-submit">Submit now</button>

                            </form>
                        </div>


                    </div>
                </div>



            </div>
        </div>

    </div>
</section>










<!-- Footer -->
<?php include 'include/footer.php'; ?>