<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget">
            <h5>Newslest Product</h5>
            <ul class="regular">
              <li><a href="#">Work for us</a></li>
            </ul>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <h5>Sitemap</h5>
            <ul class="regular">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            </ul>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <!-- logo -->
            <a class="brand logo" href="/">
							<h3>Bakery Shop</h3>
						</a>
            <!-- end logo -->
            <address>
							<strong>Registered Companyname, Inc.</strong><br>
							 8895 Somename Ave, Suite 600<br>
							 San Francisco, CA 94107<br>
							<abbr title="Phone">P:</abbr> (123) 456-7890
						</address>
          </div>
        </div>
      </div>
    </div>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
              &copy; {{ date('Y') }} Bakery Shop - All right reserved
            </p>
          </div>
          <div class="span6">
            <div class="credits">
              Designed by <a href="https://facebook.com/niko.melonnt">Nikko Melonnt</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript Library Files -->
  <script src="{{ url('assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/jquery.easing.js') }}"></script>
  <script src="{{ url('assets/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ url('assets/js/modernizr.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap.js') }}"></script>
  <script src="{{ url('assets/js/jquery.elastislide.js') }}"></script>
  <script src="{{ url('assets/js/sequence/sequence.jquery-min.js') }}"></script>
  <script src="{{ url('assets/js/sequence/setting.js') }}"></script>
  <script src="{{ url('assets/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('assets/js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('assets/js/portfolio/setting.js') }}"></script>
  <script src="{{ url('assets/js/application.js') }}"></script>
  <script src="{{ url('assets/js/jquery.flexslider.js') }}"></script>
  <script src="{{ url('assets/js/hover/jquery-hover-effect.js') }}"></script>
  <script src="{{ url('assets/js/hover/setting.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ url('assets/js/custom.js') }}"></script>

  <script>
    function loadMore(page)
    {
      $.ajax({
          url:'?page=' + page,
          type:'get',
          beforeSend: function() 
          {
            $(".ajax-load").show(); 
          }
      })
      .done(function(data)
        {
          if(data.html == ""){
            $('.ajax-load').html("<center>No more records found..</center>");
            return;
          }
          $('.ajax-load').hide();
          $("#post-data").append(data.html);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError){
          alert("Server not responding! please try again.");
        });
    }

    var page = 1;
    $(window).scroll(function() {
      if($(window).scrollTop() + $(window).height() >= $(document).height()){
        page++;
        loadMore(page);
      }
    })
  </script>

  <script>
   $(".minus").click(function(){
      var id = $(this).attr('data-id');
      var qty = $("#qty"+id).val();
      if(qty >0){
        qty--;
        $("#qty"+id).val(qty);
        var getPrice = $("#price"+id).val();
        getPrice = parseFloat(getPrice).toFixed(2);
        var totalAmt = getPrice*qty;
        $("#total"+id).text(totalAmt);
      }
  });
  $(".plus").click(function(){
      var id = $(this).attr('data-id');
      var qty = $("#qty"+id).val();
      qty++;
      $("#qty"+id).val(qty);
      var getPrice = $("#price"+id).val();
      getPrice = parseFloat(getPrice).toFixed(2);
      var totalAmt = getPrice*qty;
      $("#total"+id).text(totalAmt);
      
  });
  </script>

</body>

</html>