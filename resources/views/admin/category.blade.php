<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')

    <style type="text/css">
    input[type='text']
    {
        width: 400px;
        height: 50px;
    }

    .div_dig
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px;
    }
    </style>
  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h1 style="color: white">Add Category</h1>

            <div class="div_dig">
            <form>
                <div>
                    <input type="text" name="category">
                    <input class="btn btn-primary" type="submit" value="Add category">

                </div>
            </form>
        </div>


          </div>
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="/admincss/vendor/jquery/jquery.min.js"></script>
    <script src="/admincss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/admincss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admincss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/admincss/vendor/chart.js/Chart.min.js"></script>
    <script src="/admincss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/admincss/js/charts-home.js"></script>
    <script src="/admincss/js/front.js"></script>
  </body>
</html>
