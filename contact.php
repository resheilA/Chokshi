<?php include("header.php"); ?>
<!-- contacts -->
<section class="w3l-contact mt-5">
  <div class="contacts-9 py-5 mt-5">
    <div class="container py-lg-3">
      <div class="row top-map">
        <div class="cont-details col-md-5">
          <div class="heading mb-lg-4 mb-4">
            <h3 class="head">Contact us </h3>
          </div>
          <div class="cont-top">
            <div class="cont-left">
              <span class="fa fa-phone"></span>
            </div>
            <div class="cont-right">
              <p><a href="tel:+44-99-555-42">+44-99-555-42</a></p>

            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-envelope-o"></span>
            </div>
            <div class="cont-right">
              <p><a href="mailto:mailid@mail.com" class="mail">mailid@mail.com</a></p>
            </div>
          </div>
          <div class="cont-top mt-4">
            <div class="cont-left">
              <span class="fa fa-map-marker"></span>
            </div>
            <div class="cont-right">
              <p>Market Business, 208 Trainer Avenue street, Illinois, UK - 62617.</p>
            </div>
          </div>
        </div>
        <div class="map-content-9 col-md-7 mt-5 mt-md-0">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post">
            <div class="form-group row">
              <div class="col-md-6">
                <label class="contact-textfield-label" for="w3lName">First Name</label>
                <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="" required="">
              </div>
              <div class="col-md-6 mt-md-0 mt-3">
                <label class="contact-textfield-label" for="w3lName">Last Name</label>
                <input type="text" class="form-control" name="w3lName" placeholder="" required="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label class="contact-textfield-label" for="w3lSender">Your Email ID</label>
                <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="" required="">
              </div>
              <div class="col-md-6 mt-md-0 mt-3">
                <label class="contact-textfield-label" for="w3lPhone">Phone Number</label>
                <input type="tel" class="form-control" name="w3lPhone" id="w3lPhone" placeholder="" required="">
              </div>
            </div>
            <div class="form-group">
              <label class="contact-textfield-label" for="w3lSubject">Subject</label>
              <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="" required="">
            </div>
            <div class="form-group">
              <label class="contact-textfield-label" for="w3lMessage">Message</label>
              <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="" required=""></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-contact">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3059445135!2d-74.25986613799748!3d40.69714941774136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e3!4m0!4m0!5e0!3m2!1sen!2sin!4v1570181661801!5m2!1sen!2sin"
      allowfullscreen=""></iframe>
  </div>
</section>
<?php include("footer.php"); ?>