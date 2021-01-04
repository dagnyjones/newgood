<footer>
  <section class="services">
    <!--services-box---------->
    <div class="services-box">
      <i class="fas fa-align-justify"></i>
      <span>LINKS</span>
      <p>text</p>

    </div>
    <!--services-box---------->
    <div class="services-box">
      <i class="fas fa-align-justify"></i>
      <span>text</span>
      <p>text</p>
    </div>
    <!--services-box---------->
    <div class="services-box">
      <i class="fas fa-align-justify"></i>
      <span>text</span>
      <p>text</p>
    </div>

  </section>

</footer>










































<!-- script -->


<script type="text/javascript">
/*-----For Search Bar-----------------------------*/
$(document).on('click', '.search', function() {
  $('.search-bar').addClass('search-bar-active')
});

$(document).on('click', '.search-cancel', function() {
  $('.search-bar').removeClass('search-bar-active')
});


/*---For Login and Sign-up----------------------------*/
$(document).on('click', '.user,.already-account', function() {
  $('.form').addClass('login-active').removeClass('sign-up-active')
});

$(document).on('click', '.sign-up-btn', function() {
  $('.form').addClass('sign-up-active').removeClass('login-active')
});

$(document).on('click', '.form-cancel', function() {
  $('.form').removeClass('login-active').removeClass('sign-up-active')
});


/*----Full Page Slider---------------*/

$(document).ready(function() {
  $('#adaptive').lightSlider({
    adaptiveHeight: true,
    auto: true,
    item: 1,
    slideMargin: 0,
    loop: true
  });
});

/*--For-Product-SLider----------------*/
$(document).ready(function() {
  $('#autoWidth').lightSlider({
    autoWidth: true,
    loop: true,
    onSliderLoad: function() {
      $('#autoWidth').removeClass('cS-hidden');
    }
  });
});


/*--For-make-Menu-responsive------------*/
$(document).ready(function() {
  $('.toggle').click(function() {
    $('.toggle').toggleClass('active')
    $('.navigation').toggleClass('active')
  })
});
</script>
</body>

</html>