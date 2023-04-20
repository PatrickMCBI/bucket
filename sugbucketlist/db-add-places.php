<?php 
  include 'includes/admin-header.php';
  include('upload_file.php'); 
?>

<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
  <?php include 'includes/side-bar.php'; ?>

  <div class="dashboard__main">
    <div class="dashboard__content bg-light-2">
      <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
        <div class="col-auto">

          <h1 class="text-30 lh-14 fw-600">Add Places</h1>
          <div class="text-15 text-light-1">Mga lugar nga bag ong discoverS</div>

        </div>

        <div class="col-auto">

        </div>
      </div>


      <div class="py-30 px-30 rounded-4 bg-white shadow-3">
        <div class="tabs -underline-2 js-tabs">
          <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

            <div class="col-auto">
              <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">Upload Places</button>
            </div>

            <div class="col-auto">
              <a href="" class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-2">List Places</a>
              <!-- <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-2">List Places</button> -->
            </div>
<!-- 
            <div class="col-auto">
              <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-3">3. Pricing</button>
            </div>

            <div class="col-auto">
              <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-4">4. Attributes</button>
            </div> -->

          </div>

          <div class="tabs__content pt-30 js-tabs-content">
            <div class="tabs__pane -tab-item-1 is-tab-el-active">
              <form method="post" enctype="multipart/form-data">
              <div class="col-xl-10">
                <div class="text-18 fw-500 mb-10"> Content Creator</div>
                <div class="row x-gap-20 y-gap-20">
                  <div class="col-12">

                    <div class="form-input ">
                      <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'] ?>">
                      <input type="text" name="title" required>
                      <label class="lh-1 text-16 text-light-1"> Place Name</label>
                    </div>

                  </div>
                  <div class="col-12">

                    <div class="form-input ">
                      <textarea required rows="5" name="description" required></textarea>
                      <label class="lh-1 text-16 text-light-1">Description</label>
                    </div>

                  </div>
                  <div class="col-12">

                    <div class="form-input ">
                      <input type="file" name="file_name[]" accept="video/*,image/*" multiple required>
                      <!-- <label class="lh-1 text-16 text-light-1">Youtube Video</label> -->
                    </div>

                  </div>
                </div>

<!-- 
                <div class="mt-30">
                  <div class="fw-500">Banner Image</div>

                  <div class="row x-gap-20 y-gap-20 pt-15">
                    <div class="col-auto">
                      <div class="w-200">
                        <div class="d-flex ratio ratio-1:1">
                          <div class="flex-center flex-column text-center bg-blue-2 h-full w-1/1 absolute rounded-4 border-type-1">
                            <div class="icon-upload-file text-40 text-blue-1 mb-10"></div>
                            <div class="text-blue-1 fw-500">Upload Images</div>
                          </div>
                        </div>
                        <div class="text-center mt-10 text-14 text-light-1">PNG or JPG no bigger than 800px wide and tall.</div>
                      </div>
                    </div>


                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="mt-30">
                  <div class="fw-500">Gallery</div>

                  <div class="row x-gap-20 y-gap-20 pt-15">
                    <div class="col-auto">
                      <div class="w-200">
                        <div class="d-flex ratio ratio-1:1">
                          <div class="flex-center flex-column text-center bg-blue-2 h-full w-1/1 absolute rounded-4 border-type-1">
                            <div class="icon-upload-file text-40 text-blue-1 mb-10"></div>
                            <div class="text-blue-1 fw-500">Upload Images</div>
                          </div>
                        </div>
                        <div class="text-center mt-10 text-14 text-light-1">PNG or JPG no bigger than 800px wide and tall.</div>
                      </div>
                    </div>


                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>


                <div class="border-top-light mt-30 mb-30"></div>

                <div class="text-18 fw-500 mb-10">Rates </div>
                <div class="row x-gap-20 y-gap-20">
                  <div class="col-12">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Ratings</label>
                    </div>

                  </div>
                </div>

                <div class="mt-20">
                  <div class="fw-500 mb-20">Policy</div>

                  <div class="overflow-scroll scroll-bar-1">
                    <table class="table-5 -border-bottom col-12">
                      <thead class="bg-light-2">
                        <tr>
                          <th>Title</th>
                          <th>Content</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td class="col-5">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Eg: What kind of footwear is most suitable?</label>
                            </div>

                          </td>
                          <td class="col-7">

                            <div class="form-input ">
                              <textarea required rows="5"></textarea>
                              <label class="lh-1 text-16 text-light-1">Content</label>
                            </div>

                          </td>
                          <td class="col-auto">
                            <button class="flex-center bg-light-2 rounded-4 size-35">
                              <i class="icon-trash-2 text-16 text-light-1"></i>
                            </button>
                          </td>
                        </tr>

                        <tr>
                          <td class="col-5">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Eg: What kind of footwear is most suitable?</label>
                            </div>

                          </td>
                          <td class="col-7">

                            <div class="form-input ">
                              <textarea required rows="5"></textarea>
                              <label class="lh-1 text-16 text-light-1">Content</label>
                            </div>

                          </td>
                          <td class="col-auto">
                            <button class="flex-center bg-light-2 rounded-4 size-35">
                              <i class="icon-trash-2 text-16 text-light-1"></i>
                            </button>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                  <div class="d-flex justify-end">
                    <button class="button -md -blue-1 bg-blue-1-05 text-blue-1 mt-20">Add Item</button>
                  </div>
                </div>

 
                <div class="col-auto">
                  <h4 class="text-16 fw-500">Post</h4>
                  <div class="text-14 mt-5">PNG or JPG no bigger than 800px wide and tall.</div>

                  <div class="d-inline-block mt-15">
                    <input type="file" class="chooseImage" hidden>
                    <button class="button h-50 px-24 -dark-1 bg-blue-1 text-white imageBtn">
                      <i class="icon-upload-file text-20 mr-10"></i>
                      Browse
                    </button>
                  </div>
                </div>
              </div>

                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="d-flex ratio ratio-1:1 w-200">
                        <img src="img/avatars/3.png" alt="image" class="img-ratio rounded-4">

                        <div class="d-flex justify-end px-10 py-10 h-100 w-1/1 absolute">
                          <div class="size-40 bg-white rounded-4">
                            <i class="icon-trash text-16"></i>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div> -->
              </div>
             
              <div class="d-inline-block pt-30">

                <input class="button h-40 px-24 -dark-1 bg-blue-1 text-white" type="submit" name="submit" value=" Save Changes" />
                 
              </div>
              </form>
            </div>

            <div class="tabs__pane -tab-item-2">
              <div class="col-xl-10">
                <div class="text-18 fw-500 mb-10">Location</div>
                <div class="row x-gap-20 y-gap-20">
                  <div class="col-12">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Location</label>
                    </div>

                  </div>
                  <div class="col-12">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Real address</label>
                    </div>

                  </div>
                  <div class="col-lg-4 col-md-6">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Map Latitude</label>
                    </div>

                  </div>
                  <div class="col-lg-4 col-md-6">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Map Longitude</label>
                    </div>

                  </div>
                  <div class="col-lg-4 col-md-6">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Map Zoom</label>
                    </div>

                  </div>
                </div>

                <div class="d-flex ratio ratio-4:1 mt-30">
                  <div class="d-flex px-20 py-20 bg-light-2 h-full w-1/1 absolute rounded-4">
                    <div class="">

                      <div class="form-input bg-white">
                        <input type="text" required>
                        <label class="lh-1 text-16 text-light-1">Search by name...</label>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="text-18 fw-500 mb-10 mt-30">Surroundings</div>
                <div class="row x-gap-20 y-gap-20">
                  <div class="col-12">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Hotel rating standard</label>
                    </div>

                  </div>
                </div>


                <div class="mt-30">
                  <div class="fw-500 mb-20">Education</div>

                  <div class="overflow-scroll scroll-bar-1">
                    <table class="table-5 -border-bottom col-12">
                      <thead class="bg-light-2">
                        <tr>
                          <th>Name</th>
                          <th>Content</th>
                          <th>Distance</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-6">

                            <div class="form-input ">
                              <textarea required rows="5"></textarea>
                              <label class="lh-1 text-16 text-light-1">Content</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Select Country</label>
                            </div>

                          </td>
                          <td class="col-auto">
                            <button class="flex-center bg-light-2 rounded-4 size-35">
                              <i class="icon-trash-2 text-16 text-light-1"></i>
                            </button>
                          </td>
                        </tr>

                        <tr>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-6">

                            <div class="form-input ">
                              <textarea required rows="5"></textarea>
                              <label class="lh-1 text-16 text-light-1">Content</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Select Country</label>
                            </div>

                          </td>
                          <td class="col-auto">
                            <button class="flex-center bg-light-2 rounded-4 size-35">
                              <i class="icon-trash-2 text-16 text-light-1"></i>
                            </button>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                  <div class="d-flex justify-end">
                    <button class="button -md -blue-1 bg-blue-1-05 text-blue-1 mt-20">Add Item</button>
                  </div>
                </div>

                <div class="mt-30">
                  <div class="fw-500 mb-20">Health</div>

                  <div class="overflow-scroll scroll-bar-1">
                    <table class="table-5 -border-bottom col-12">
                      <thead class="bg-light-2">
                        <tr>
                          <th>Name</th>
                          <th>Content</th>
                          <th>Distance</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-6">

                            <div class="form-input ">
                              <textarea required rows="5"></textarea>
                              <label class="lh-1 text-16 text-light-1">Content</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Select Country</label>
                            </div>

                          </td>
                          <td class="col-auto">
                            <button class="flex-center bg-light-2 rounded-4 size-35">
                              <i class="icon-trash-2 text-16 text-light-1"></i>
                            </button>
                          </td>
                        </tr>

                        <tr>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-6">

                            <div class="form-input ">
                              <textarea required rows="5"></textarea>
                              <label class="lh-1 text-16 text-light-1">Content</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Select Country</label>
                            </div>

                          </td>
                          <td class="col-auto">
                            <button class="flex-center bg-light-2 rounded-4 size-35">
                              <i class="icon-trash-2 text-16 text-light-1"></i>
                            </button>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                  <div class="d-flex justify-end">
                    <button class="button -md -blue-1 bg-blue-1-05 text-blue-1 mt-20">Add Item</button>
                  </div>
                </div>

                <div class="mt-30">
                  <div class="fw-500 mb-20">Transportation</div>

                  <div class="overflow-scroll scroll-bar-1">
                    <table class="table-5 -border-bottom col-12">
                      <thead class="bg-light-2">
                        <tr>
                          <th>Name</th>
                          <th>Content</th>
                          <th>Distance</th>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-6">

                            <div class="form-input ">
                              <textarea required rows="5"></textarea>
                              <label class="lh-1 text-16 text-light-1">Content</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Select Country</label>
                            </div>

                          </td>
                          <td class="col-auto">
                            <button class="flex-center bg-light-2 rounded-4 size-35">
                              <i class="icon-trash-2 text-16 text-light-1"></i>
                            </button>
                          </td>
                        </tr>

                        <tr>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-6">

                            <div class="form-input ">
                              <textarea required rows="5"></textarea>
                              <label class="lh-1 text-16 text-light-1">Content</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Sunny beach</label>
                            </div>

                          </td>
                          <td class="col-2">

                            <div class="form-input ">
                              <input type="text" required>
                              <label class="lh-1 text-16 text-light-1">Select Country</label>
                            </div>

                          </td>
                          <td class="col-auto">
                            <button class="flex-center bg-light-2 rounded-4 size-35">
                              <i class="icon-trash-2 text-16 text-light-1"></i>
                            </button>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                  <div class="d-flex justify-end">
                    <button class="button -md -blue-1 bg-blue-1-05 text-blue-1 mt-20">Add Item</button>
                  </div>
                </div>


                <div class="d-inline-block pt-30">

                  <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Save Changes <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>
            </div>

            <div class="tabs__pane -tab-item-3">
              <div class="col-xl-9 col-lg-11">
                <div class="row x-gap-20 y-gap-20">
                  <div class="col-12">
                    <div class="text-18 fw-500 mb-10">Pricing</div>


                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Hotel Price</label>
                    </div>


                    <div class="d-flex mt-20">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 lh-11 ml-10">Enable extra price</div>

                    </div>


                    <div class="fw-500 mt-30">Enable service fee</div>

                    <div class="d-flex mt-10">
                      <div class="form-checkbox ">
                        <input type="checkbox" name="name">
                        <div class="form-checkbox__mark">
                          <div class="form-checkbox__icon icon-check"></div>
                        </div>
                      </div>

                      <div class="text-15 lh-11 ml-10">Enable extra price</div>

                    </div>

                  </div>
                </div>

                <div class="text-18 fw-500 mb-10 pt-30">Check in / Check out time</div>
                <div class="row x-gap-20 y-gap-20">

                  <div class="col-md-6">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Time for check in</label>
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Time for check out</label>
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Minimum advance reservations</label>
                    </div>

                  </div>

                  <div class="col-md-6">

                    <div class="form-input ">
                      <input type="text" required>
                      <label class="lh-1 text-16 text-light-1">Minimum day stay requirements</label>
                    </div>

                  </div>

                </div>

                <div class="d-inline-block mt-30">

                  <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Save Changes <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>
            </div>

            <div class="tabs__pane -tab-item-4">
              <div class="col-xl-9 col-lg-11">
                <div class="row x-gap-100 y-gap-15">
                  <div class="col-12">
                    <div class="text-18 fw-500">Property Type</div>
                  </div>


                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Holiday homes</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Holiday homes</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Holiday homes</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Holiday homes</div>

                        </div>

                      </div>
                    </div>
                  </div>

                </div>

                <div class="row x-gap-100 y-gap-15 pt-30">
                  <div class="col-12">
                    <div class="text-18 fw-500">Facilities</div>
                  </div>


                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>
                    </div>
                  </div>

                </div>

                <div class="row x-gap-100 y-gap-15 pt-30">
                  <div class="col-12">
                    <div class="text-18 fw-500">Hotel Services</div>
                  </div>


                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                    <div class="row y-gap-15">
                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Apartments</div>

                        </div>

                      </div>

                      <div class="col-12">

                        <div class="d-flex items-center">
                          <div class="form-checkbox ">
                            <input type="checkbox" name="name">
                            <div class="form-checkbox__mark">
                              <div class="form-checkbox__icon icon-check"></div>
                            </div>
                          </div>

                          <div class="text-15 lh-11 ml-10">Boats</div>

                        </div>

                      </div>
                    </div>
                  </div>

                </div>

                <div class="d-inline-block mt-30">

                  <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Save Changes <div class="icon-arrow-top-right ml-15"></div>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <footer class="footer -dashboard mt-60">
        <div class="footer__row row y-gap-10 items-center justify-between">
          <div class="col-auto">
            <div class="row y-gap-20 items-center">
              <div class="col-auto">
                <div class="text-14 lh-14 mr-30">© 2022 GoTrip LLC All rights reserved.</div>
              </div>

              <div class="col-auto">
                <div class="row x-gap-20 y-gap-10 items-center text-14">
                  <div class="col-auto">
                    <a href="#" class="text-13 lh-1">Privacy</a>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="text-13 lh-1">Terms</a>
                  </div>
                  <div class="col-auto">
                    <a href="#" class="text-13 lh-1">Site Map</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-auto">
            <div class="d-flex x-gap-5 y-gap-5 items-center">
              <button class="text-14 fw-500 underline">English (US)</button>
              <button class="text-14 fw-500 underline">USD</button>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</div>
<?php include 'includes/admin-footer.php'; ?>
<!-- JavaScript -->
<script src="../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
<script src="../../../unpkg.com/%40googlemaps/markerclusterer%402.0.15/dist/index.min.js"></script>

<script src="js/vendors.js"></script>
<script src="js/main.js"></script>
</body>


<!-- Mirrored from creativelayers.net/themes/gotrip-html/db-vendor-add-hotel.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 10:10:10 GMT -->

</html>