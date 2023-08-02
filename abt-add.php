<div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="info-div">
          <h3>Div 1</h3>
          <p>This is the content of the first div.</p>
          <div class="hidden-info">
            <p>Hidden information for the first div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quidem dolor expedita iste aperiam dolore vero inventore cumque at voluptates, ex commodi iusto voluptas odio saepe rerum labore, necessitatibus est..</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-div">
          <h3>Div 2</h3>
          <p>This is the content of the second div.</p>
          <div class="hidden-info">
            <p>Hidden information for the second div.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-div">
          <h3>Div 3</h3>
          <p>This is the content of the third div.</p>
          <div class="hidden-info">
            <p>Hidden information for the third div.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".info-div").on("click", function() {
        $(this).toggleClass("open");
      });
    });
  </script>