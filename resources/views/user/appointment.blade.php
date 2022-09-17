<div class="page-section" id="apps">
    <div class="container">
      
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="post">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address.." name="email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="date">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
              <option >Select Doctor</option>
              @foreach ($doctor as $do)                 
              <option value="{{$do->name}}">{{$do->name}}--Expert--{{$do->speciality}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number.." name="phone">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>
        <div class="col-12 text-center mt-4 wow zoomIn">
            {{-- <a href="blog.ht" class="btn btn-primary"></a> --}}
            <button type="submit" class="btn btn-secondary bg-dark mb-4">Submit Request</button>
          </div>

        {{-- <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button> --}}
      </form>
    </div>
  </div> <!-- .page-section -->