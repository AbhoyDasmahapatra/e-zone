<?php
include('header_link.php');
include('menubar.php');
?>


<!-- Contact Me  -->
<!-- <form action=""> -->
    <div class="container-fluid">
        <div class="row contact" style="margin-top: 50px; ">
            <div class="col-11 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <p class="sm-title">
                        <h2 class="fw-bold fs-1" style="color: #ffc800">Contact Me</h2>
                        </p>
                        <h3 class="lg-title">Let's discuss about your project</h3>
                        <p class="text"></p>
                        <section class="iconSection">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                            </div>
                            <p class="icon-text"> +91 9002135026</p>
                        </section>
                        <section class="iconSection">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                            </div>
                            <p class="icon-text">abhoy2004das@gmail.com</p>
                        </section>
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d639912.4505855407!2d87.04538361089138!3d22.077332723767352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1d2d0043863bdd%3A0xc12f394cb7077897!2sAbhoy%20House!5e0!3m2!1sen!2sin!4v1726132448962!5m2!1sen!2sin" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-md-6 pt-4">
                        <p class="c-text fw-bold fs-1" style="color: #ffc800 ">Send me <span>Message</span> here</p>
                        <div class="mb-3 mt-3">
                            <form action="https://api.web3forms.com/submit" method="POST">
                                <input type="hidden" name="access_key" value="acaa8355-4d1b-4b7e-9c71-ce0ff0a6bc94">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control"  name="message"  id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <!-- <input type="submit" value="submit"> -->
                        <button class="btn btn-danger"><input class="px-4 py-2 rounded-pill fw-bold" type="submit"  value="submit"style="background-color: #ffc800;" value="submit" onclick="return formCheck();"> </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </form> -->
<!-- Contact Me -->

<?php
include('footer_link.php');
include('footer.php');
?>