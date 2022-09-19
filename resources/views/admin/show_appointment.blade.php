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
           <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0    text-center text-md-start">         
                             <!-- Elements -->
                <div class="block block-rounded">                                
                  <div class="block-content">
                    @if(session()->has('message'))
  
                    <div class="alert alert-success alert-dismissible fade show">
                      <button type="button" class="btn-close" aria-label="Close">X</button>
                        {{session()->get('message')}}
        
                    </div>
                    @endif
                  <h1 class="m-4 " style="text-align: center">Doctor Speciality list</h1>
                          <div>             
                             <table class="table table-bordered table-striped table-vcenter">
                                <thead>
                                  <tr>                                
                                    <th >Patient Name</th>
                                    <th >Email</th>
                                    <th >Phone</th>
                                    <th >Doctor Name</th>
                                    <th >Date</th>
                                    <th >Message</th>
                                    <th >Status</th>
                                    <th class="text-center" >Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($apps as $appoint) 
                                  <tr>                                
                                    <td>{{$appoint->name}}</td>
                                    <td>{{$appoint->email}}</td>
                                    <td>{{$appoint->phone}}</td>
                                    <td>{{$appoint->doctor}}</td>
                                    <td>{{$appoint->date}}</td>
                                    <td>{{$appoint->message}}</td>
                                    <td>{{$appoint->status }}</td>
                                    
                                    <td class="text-center">
                                      <div class="btn-group">
                                        <a href="{{url('approved_appoint',$appoint->id)}}">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Approved">
                                          <i class="fa fa-check"></i>
                                        </button></a>
                                        <a href="{{url('cancel_appoint',$appoint->id)}}">
                                        <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Cancel">
                                          <i class="fa fa-times"></i>
                                        </button></a>
                                      </div>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>  
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
   
    @include('admin/script')
  </body>
</html>

