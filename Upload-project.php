<!-- Header -->
<?php $title = "Home";
include 'include/header.php'; ?>

<section>
<div class="porfolio-banner">
     <!-- <div class="bg-danger">gdgadlg</div>  -->
    <div class="container pt10">
        <div class="row">
            <div class="col-12 mt-5 text-center"> <h1>Upload Project</h1>
 <p class="pt-2 pb-3">Professional member of the American Society of Interior Designers with more than <br>
35 years experience in Industrial and Interior Design</p>

</div>
            <div class="col-12 d-flex align-items-end justify-content-end"><img src="images/scroll-down.png" class="scroll-down" alt=""></div>
        </div>
    </div>
</div>
</section>

<section class="mt10 pt-5">
    <div class="container formbg mt10 mt-5">
        <div class="row">
            <div class="col-12">
            <form class=""  method="POST" id="quoteForm" autocomplete="off">
                            <div class="group-form mb-2 d-lg-flex d-md-flex">
                                <div style="width: 100%;" class="mr-2">
                                <label for="for" class="mt-2">Project Title</label>
                                <input type="text" name="quote[name]" placeholder="Enter Title" class="form-controls mt-2">
                                </div>
                            </div>
                                                      
                            <div class="group-form" class="mt-2">
                            <label for="for">Project Description</label>
                                <textarea cols="30" rows="4" name="quote[message]" placeholder="Type here..."
                                    class="form-controls mb-2 mt-2"></textarea>
                            </div>

                            <div class="upload-img m-auto text-center pt-5 pb-5">
                                <input type="file" id="img" name="img" accept="image/*">
                                <p>
                                <i class="fa-solid fa-camera"></i><br>
                                <label for="img">Select Images</label>
                                </p>
                                
                            </div>
                            
                                <button type="submit" name="quote" class="frombtn mb-4   btn-submit mt-3">Submit now</button>
                            
                        </form>
            </div>
        </div>
    </div>
</section>








<!-- Footer -->
<?php include 'include/footer.php'; ?>