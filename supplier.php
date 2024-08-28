<!-- Header -->
<?php $title = "Home";
include 'include/header.php'; ?>

<section>
    <div class="supplier-banner">
        <!-- <div class="bg-danger">gdgadlg</div>  -->
        <div class="container pt10">
            <div class="row">
                <div class="col-12 mt-5 text-center">
                    <h1>SUPPLIER DETAILS</h1>
                    <p class="pt-2 pb-3">Professional member of the American Society of Interior Designers with more than <br>
                        35 years experience in Industrial and Interior Design</p>
                </div>
                <div class="col-12 d-flex align-items-end justify-content-end"><img src="images/scroll-down.png" class="scroll-down" alt=""></div>
            </div>
        </div>
    </div>
</section>

<section class="mt10 pt-5">
    <div class="container mt10 mt-5 formbg">
        <div class="row mt-5">

            <div class="col-lg-8 col-md-8 col-12 pt-5 pl-5 pr-5 pb-5">
                <h2>Supplier Details</h2>
                <form class="" method="POST" id="quoteForm" autocomplete="off">
                    <div class="group-form mb-2 d-lg-flex d-md-flex">
                        <div style="width: 100%;" class="mr-2">
                            <label for="for" class="mt-2">Name</label>
                            <input type="text" name="quote[name]" placeholder="Enter Name" class="form-controls mt-2">
                        </div>

                        <div style="width: 100%;">
                            <label for="for" class="mt-2">Company Name</label>
                            <input type="text" name="quote[name]" placeholder="Enter Company Name" class="form-controls mt-2">
                        </div>
                    </div>
                    <div class="group-form " class="mt-2">
                        <label for="for">What do you Supply?</label><br>
                        <input type="email" name="quote[email]" placeholder="Type here..." class="form-controls mb-2 mt-2">
                    </div>

                    <div class="group-form mb-2 d-lg-flex d-md-flex">
                        <div style="width: 100%;" class="mr-2">
                            <label for="for" class="mt-2">Email</label>
                            <input type="email" name="quote[email]" placeholder="Email" class="form-controls mb-2 mt-2">
                        </div>

                        <div style="width: 100%;">
                            <label for="for" class="mt-2">Phone Number</label>
                            <input type="number" name="quote[phone]" placeholder="Enter Phone" class="form-controls mb-2 mt-2">
                        </div>
                    </div>
                    <div class="group-form" class="mt-2">
                        <label for="for">Company Introduction</label>
                        <textarea cols="30" rows="4" name="quote[message]" placeholder="Type here..." class="form-controls mb-2 mt-2"></textarea>
                    </div>

                    <button type="submit" name="quote" class="frombtn mb-4   btn-submit">Submit now</button>

                </form>
            </div>

            <div class="col-lg-4 col-md-4 col-12 pt-lg-5 pt-md-5  pb-5 pr-5 pl-5">
                <h2>Urgent Requirement</h2>
                <div class="row">
                    <div class="col-12 detail-box pt-3 pb-3 pr-3 pl-3 mt-3">
                        <h5>Sofa and Armchair Upholstery</h5>
                        <p>
                            Quantity: 25<br>
                            Extra Details: Contact : 0508950097 for more details
                        </p>

                    </div>
                    <div class="col-12 detail-box pt-3 pb-3 pr-3 pl-3 mt-3">
                        <h5>Sofa and Armchair Upholstery</h5>
                        <p>
                            Quantity: 25<br>
                            Extra Details: Contact : 0508950097 for more details
                        </p>

                    </div>
                    <div class="col-12 detail-box pt-3 pb-3 pr-3 pl-3 mt-3">
                        <h5>Sofa and Armchair Upholstery</h5>
                        <p>
                            Quantity: 25<br>
                            Extra Details: Contact : 0508950097 for more details
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












<!-- Footer -->
<?php include 'include/footer.php'; ?>