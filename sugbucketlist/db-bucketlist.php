<?php include 'includes/admin-header.php';
?>


<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
  <?php include 'includes/side-bar.php'; ?>

  <div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
      <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
        <div class="col-auto">

          <h1 class="text-30 lh-14 fw-600">Wishlist</h1>
          <div class="text-15 text-light-1">Places haven't yet visited or plan to visit. </div>

        </div>

        <div class="col-auto">

        </div>
      </div>


      <div class="py-30 px-30 rounded-4 bg-white shadow-3">
        <div class="tabs -underline-2 js-tabs">
          <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

            <div class="col-auto">
              <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Place</button>
            </div>

          </div>

          <div class="tabs__content pt-30 js-tabs-content">

            <div class="tabs__pane -tab-item-1 is-tab-el-active">
              <div class="row y-gap-20">

                <div class="col-12">
                  <div class="">
                    <div class="row x-gap-20 y-gap-30">
                      <div class="col-md-auto">

                        <div class="cardImage ratio ratio-1:1 w-200 md:w-1/1 rounded-4">
                          <div class="cardImage__content">

                            <img class="rounded-4 col-12 js-lazy" src="#" data-src="img/hotels/2.jpg" alt="image">


                          </div>

                          <div class="cardImage__wishlist">
                            <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                              <i class="icon-heart text-12"></i>
                            </button>
                          </div>


                        </div>

                      </div>

                      <div class="col-md">
                        <h3 class="text-18 lh-14 fw-500">Fort San Pedro</h3>

                        <div class="d-flex x-gap-5 items-center pt-10">

                          <i class="icon-star text-10 text-yellow-1"></i>

                          <i class="icon-star text-10 text-yellow-1"></i>

                          <i class="icon-star text-10 text-yellow-1"></i>

                          <i class="icon-star text-10 text-yellow-1"></i>

                          <i class="icon-star text-10 text-yellow-1"></i>

                        </div>

                        <div class="row x-gap-10 y-gap-10 items-center pt-20">
                          <div class="col-auto">
                            <p class="text-14">
                              Fort San Pedro is a military defense structure in Cebu, Philippines, built by the Spanish under the command of Miguel López de Legazpi, first governor of the Captaincy General of the Philippines. 
                              <div class="mapFilter-map">
        <div class="map js-map"></div>
      </div>
    </div>

   
  </div>
   <div id="show-map">

    </div>

  <!-- JavaScript -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.0.15/dist/index.min.js"></script>

  <script src="js/vendors.js"></script>
  <script src="js/main.js"></script>

  <script>

let place = encodeURIComponent("Fort San Pedro");

let url = `https://nominatim.openstreetmap.org/search/${place}?format=json&addressdetails=1&limit=1&polygon_svg=1`
  fetch(url, {
      method: "GET"
      
  })
  .then(function(response){
      return response.json();
  })
  .then(function(data){

    document.querySelector("#show-map").innerHTML = `<a href="https://www.openstreetmap.org/search?whereami=1&query=${data[0].lat}%2C${data[0].lon}#map=19/${data[0].lat}/${data[0].lon}">Show Map</a>`;
    console.log(data)
  });
</script>
</body>

</html>
                            </p>
                          </div>

                          <div class="col-auto">
                            <div class="size-3 rounded-full bg-light-1"></div>
                          </div>

                          <div class="col-auto">
                            <p class="text-14">2 km to city center</p>
                          </div>
                        </div>

                        <div class="row x-gap-10 y-gap-10 pt-20">

                        </div>
                      </div>

                      <div class="col-md-auto text-right md:text-left">
                        <div class="d-flex flex-column justify-between h-full">
                          <div class="row x-gap-10 y-gap-10 justify-end items-center md:justify-start">
                            <div class="col-auto">
                              <div class="text-14 lh-14 fw-500">Exceptional</div>
                              <div class="text-14 lh-14 text-light-1">3,014 reviews</div>
                            </div>
                            <div class="col-auto">
                              <div class="flex-center text-white fw-600 text-14 size-40 rounded-4 bg-blue-1">4.8</div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div class="pt-30">
          <div class="row justify-between">
            <div class="col-auto">
              <button class="button -blue-1 size-40 rounded-full border-light">
                <i class="icon-chevron-left text-12"></i>
              </button>
            </div>

            <div class="col-auto">
              <div class="row x-gap-20 y-gap-20 items-center">

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">1</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">3</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">5</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">...</div>

                </div>

                <div class="col-auto">

                  <div class="size-40 flex-center rounded-full">20</div>

                </div>

              </div>
            </div>

            <div class="col-auto">
              <button class="button -blue-1 size-40 rounded-full border-light">
                <i class="icon-chevron-right text-12"></i>
              </button>
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

</html>