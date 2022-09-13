<!doctype html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <!-- Page Container -->

    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      @include('admin.overlay')
      <!-- END Side Overlay -->

      <!-- Sidebar -->
      
      <!-- Sidebar Start -->
                @include('admin/sidebar')
      <!-- END Sidebar -->

        <!-- Header -->
          <header id="page-header">           
            <div class="content-header">              

                @include('admin.header')
                
            </div>
        <!-- END Header Content -->

        <!-- Header Search -->
       @include('admin.search')
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        {{-- <div id="page-header-loader" class="overlay-header bg-header-dark">
          <div class="bg-white-10">
            <div class="content-header">
              <div class="w-100 text-center">
                <i class="fa fa-fw fa-sun fa-spin text-white"></i>
              </div>
            </div>
          </div>
        </div> --}}
       
        <!-- END Header Loader -->
      </header>
      <!-- END Header -->
      

      <!-- Main Container -->
      <main id="main-container">        
        <div class="content">
          <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">

            <div class="content">
                <!-- Elements -->
                <div class="block block-rounded">
                  
                    
                  
                  <div class="block-content">
                    <h1 class="m-4 " style="text-align: center">Add Doctors Information</h1>
                        <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                          <!-- Basic Elements -->                                               
                            <div class="">
                              <div class="mb-4">
                                <label class="form-label" for="example-text-input">Name</label>
                                <input type="text" class="form-control" id="example-text-input" name="name" placeholder="Doctors name">
                              </div>
                              <div class="mb-4">
                                <label class="form-label" for="example-email-input">Phone</label>
                                <input type="text" class="form-control" id="example-email-input" name="phone" placeholder="Phone number">
                              </div> 
                              <div class="mb-4">
                                <label class="form-label" for="example-email-input">Room Number</label>
                                <input type="number" class="form-control" id="example-email-input" name="phone" placeholder="Room number"     value="1" min="1">
                              </div>
                              <div class="mb-4">
                                <label class="form-label" for="example-select">Speciality</label>
                                <select class="form-select" id="example-select" name="example-select">
                                  <option selected>Open this select menu</option>
                                  <option value="1">Option #1</option>
                                  <option value="2">Option #2</option>                              
                                </select>                                                              
                             </div>   
                             <div class="row push">
                                <div class="col-lg-8 col-xl-5 overflow-hidden">
                                    <div class="mb-2">
                                      <label class="form-label" for="example-file-input">File Input</label>
                                      <input class="form-control" type="file" id="example-file-input">
                                    </div>                      
                                </div>                     
                             </div> 
                            
                             <button type="button" class="btn btn-secondary bg-dark mb-4">Submit</button>
                                                                          
                        </form>
                 </div>
             </div>
         </div>
                    

                      
                        
                        







            
          </div>
        </div>        
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      @include('admin/footer')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->
   
    <script src="admin/assets/js/dashmix.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="admin/assets/js/plugins/chart.js/chart.min.js"></script>

    <!-- Page JS Code -->
    <script src="admin/assets/js/pages/be_pages_dashboard.min.js"></script>
  </body>
</html>
