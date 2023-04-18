<?php include 'includes/admin-header.php';
?>


<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">

  <?php include 'includes/side-bar.php';
  ?>
  <div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
      <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
        <div class="col-auto">

          <h1 class="text-30 lh-14 fw-600">Dashboard</h1>
          <div class="text-15 text-light-1">akoy bahala</div>

        </div>

        <div class="col-auto">

        </div>
      </div>


      <div class="row y-gap-30">
        <div class="col-xl-12 col-md-12">
          <div class="py-30 px-30 rounded-4 bg-white shadow-3">
            <div class="d-flex justify-between items-center">
              <h2 class="text-18 lh-1 fw-500">
                Recent Bookings
              </h2>

              <div class="">
                <a href="#" class="text-14 text-blue-1 fw-500 underline">View All</a>
              </div>
            </div>

            <div class="overflow-scroll scroll-bar-1 pt-30">
              <table class="table-2 col-12">
                <thead class="">
                  <tr>
                    <th>#</th>
                    <th>Item</th>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Status</th>
                    <th>Created At</th>
                  </tr>
                </thead>
                <tbody>

                  <tr>
                    <td>#1</td>
                    <td>New York<br> Discover America</td>
                    <td class="fw-500">$130</td>
                    <td>$0</td>
                    <td>
                      <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</div>
                    </td>
                    <td>04/04/2022<br>08:16</td>
                  </tr>

                  <tr>
                    <td>#2</td>
                    <td>New York<br> Discover America</td>
                    <td class="fw-500">$130</td>
                    <td>$0</td>
                    <td>
                      <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</div>
                    </td>
                    <td>04/04/2022<br>08:16</td>
                  </tr>

                  <tr>
                    <td>#3</td>
                    <td>New York<br> Discover America</td>
                    <td class="fw-500">$130</td>
                    <td>$0</td>
                    <td>
                      <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-red-3 text-red-2">Rejected</div>
                    </td>
                    <td>04/04/2022<br>08:16</td>
                  </tr>

                  <tr>
                    <td>#4</td>
                    <td>New York<br> Discover America</td>
                    <td class="fw-500">$130</td>
                    <td>$0</td>
                    <td>
                      <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</div>
                    </td>
                    <td>04/04/2022<br>08:16</td>
                  </tr>

                  <tr>
                    <td>#5</td>
                    <td>New York<br> Discover America</td>
                    <td class="fw-500">$130</td>
                    <td>$0</td>
                    <td>
                      <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</div>
                    </td>
                    <td>04/04/2022<br>08:16</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


      <?php include 'includes/admin-footer.php'; ?>
    </div>
  </div>
</div>

<!-- JavaScript -->
<script src="../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
<script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.0.15/dist/index.min.js"></script>

<script src="js/vendors.js"></script>
<script src="js/main.js"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/gotrip-html/db-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 10:10:05 GMT -->

</html>