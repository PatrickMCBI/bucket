<?php 
  include 'includes/admin-header.php';

  session_start();


  $conn = new mysqli("localhost", "root", "",  "bucket_db");

  $db=$conn; // Enter your Connection variable;
  $userid = $_SESSION['user_id'];
  $displaybucketlist = display_bucketlist($userid);

  function display_bucketlist($userid){
    global $db;
    $query = "SELECT b.title, b.description, a.status FROM `bucket_list` as a JOIN `file_uploaded` as b ON a.places_id = b.id WHERE a.user_id = $userid";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
      $row= $result->fetch_all(MYSQLI_ASSOC);
      return $row;
    }else{

      echo "No files are stored in database  ";
    }
  }
?>
<style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

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
    </div>
    <table>
      <tr>
        <th>Place Name</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
      <?php 
      if(!empty($displaybucketlist)){
        foreach($displaybucketlist as $data){ ?>
        <tr>
          <td><?php echo $data['title']?></td>
          <td><?php echo $data['description']?></td>
          <?php if($data['status'] == 0) { ?>
            <td>Whishlist</td>

          <?php } else { ?>
            <td>done</td>
          <?php } ?>
          <?php if($data['status'] == 0) { ?>
            <td>
              <input type="submit" name="submit" value="mark as done" style="border: 1px solid green;">
            </td>

          <?php } else { ?>
            <td>done</td>
          <?php } ?>
        </tr>
    <?php          
            }
        }
    
    ?>
    </table>
    
  </div>
   <!-- <div id="show-map">

    </div> -->

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

