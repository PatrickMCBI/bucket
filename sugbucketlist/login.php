<?php include 'includes/head.php';
include 'includes/nav.php';
?>

<section class="layout-pt-lg layout-pb-lg bg-blue-2">
  <div class="container">
    <div class="row justify-center">
      <div class="col-xl-6 col-lg-7 col-md-9">
        <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
          <form @submit="login" class="row y-gap-20">
            <div class="col-12">
              <h1 class="text-22 fw-500">Welcome back</h1>
              <p class="mt-10">Don't have an account yet? <a href="signup.php" class="text-blue-1">Sign up for free</a></p>
            </div>

            <div class="col-12">

              <div class="form-input ">
                <input type="text" name="email" required>
                <label class="lh-1 text-14 text-light-1">Email</label>
              </div>

            </div>

            <div class="col-12">

              <div class="form-input ">
                <input type="password" name="password" required>
                <label class="lh-1 text-14 text-light-1">Password</label>
              </div>

            </div>

            <div class="col-12">
              <a href="#" class="text-14 fw-500 text-blue-1 underline">Forgot your password?</a>
            </div>

            <div class="col-12">

              <a href="#!" @click="clickSubmit" class="button py-20 -dark-1 bg-blue-1 text-white">
                Sign In <div class="icon-arrow-top-right ml-15"></div>
              </a>
              <button type="submit" class="mb-0" id="submit-button"></button>
            </div>
          </form>

          <div class="row y-gap-20 pt-30">
            <div class="col-12">
              <div class="text-center px-30">By creating an account, you agree to our Terms of Service and Privacy Statement.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>

</main>

<?php include 'includes/scripts.php'; ?>
</body>


</html>