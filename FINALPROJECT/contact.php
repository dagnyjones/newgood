<?php
include ("includes/top.php");
include ("includes/header.php"); ?>


<body>
  <section class="background" style=" background-image:url('images/mountain.jpg');">
    <div class="contact-from d-flex justify-content-center title">


      <div class="col-md-4 col-md-offset-4 text-left mt-5">
        <div class=" col-md-12 under-box">
          <h1>Have a question?</h1>
          <h4 class="text-orange">We would love to hear from you!</h4>
          <p class="py-3 px-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, cumque natus debitis, distinctio eos
            dolorum officia tempora voluptas voluptatem, voluptatibus libero perferendis repellat sapiente nulla.
          </p>

          <form class="contact-form" action="handler/contact.php" method="POST">
            <div class="form-group ">
              <label for="name">
                <h4 class="label-text">NAME</h4>
              </label>
              <input type="text" name="email" placeholder="Email" class="form-control form-control-lg">
            </div>


            <div class="form-group">
              <label for="message">
                <h4>MESSAGE</h4>
              </label>
              <textarea name="msg" placeholder="Message" class="form-control form-control-lg" rows="7"></textarea>
            </div>

            <button type="submit" class="btn btn-secondary btn-lg text-center" name="submit">SEND</button>

          </form>


        </div>
      </div>



    </div>
  </section>


</body>

<?php include ("includes/footer.php"); ?>