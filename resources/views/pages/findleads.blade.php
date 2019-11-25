@extends('layouts.app', ['page' => __('findleads'), 'pageSlug' => 'findleads'])


@section('content')
<div class="row">
  
  <div class="col-md-6">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Find Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <h4>
            <strong> Business name:</strong> KC Cups Coffee Shop <br>
            <strong> E-mail:</strong> kc@gmail.com <br>
            <strong> Contact #:</strong> +63 945 256 9595 <br>
            <strong> Address:</strong> Matina Davao City 
          </h4>
          <button type="submit" class="btn btn-fill btn-success">Add To List</button>
          <button type="submit" class="btn btn-fill btn-success" data-toggle="modal" data-target="#ContactPopUp">Contact</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Find Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <h4>
            <strong> Business name:</strong> KC Cups Coffee Shop <br>
            <strong> E-mail:</strong> kc@gmail.com <br>
            <strong> Contact #:</strong> +63 945 256 9595 <br>
            <strong> Address:</strong> Matina Davao City 
          </h4>
          <button type="submit" class="btn btn-fill btn-success">Add To List</button>
          <button type="submit" class="btn btn-fill btn-success">Contact</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Find Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
           <h4>
            <strong> Business name:</strong> KC Cups Coffee Shop <br>
            <strong> E-mail:</strong> kc@gmail.com <br>
            <strong> Contact #:</strong> +63 945 256 9595 <br>
            <strong> Address:</strong> Matina Davao City 
          </h4>
          <button type="submit" class="btn btn-fill btn-success">Add To List</button>
          <button type="submit" class="btn btn-fill btn-success">Contact</button>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-6">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Find Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
           <h4>
            <strong> Business name:</strong> KC Cups Coffee Shop <br>
            <strong> E-mail:</strong> kc@gmail.com <br>
            <strong> Contact #:</strong> +63 945 256 9595 <br>
            <strong> Address:</strong> Matina Davao City 
          </h4>
          <button type="submit" class="btn btn-fill btn-success">Add To List</button>
          <button type="submit" class="btn btn-fill btn-success">Contact</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Find Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
           <h4>
            <strong> Business name:</strong> KC Cups Coffee Shop <br>
            <strong> E-mail:</strong> kc@gmail.com <br>
            <strong> Contact #:</strong> +63 945 256 9595 <br>
            <strong> Address:</strong> Matina Davao City 
          </h4>
          <button type="submit" class="btn btn-fill btn-success">Add To List</button>
          <button type="submit" class="btn btn-fill btn-success">Contact</button>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Find Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
           <h4>
            <strong> Business name:</strong> KC Cups Coffee Shop <br>
            <strong> E-mail:</strong> kc@gmail.com <br>
            <strong> Contact #:</strong> +63 945 256 9595 <br>
            <strong> Address:</strong> Matina Davao City 
          </h4>
          <button type="submit" class="btn btn-fill btn-success">Add To List</button>
          <button type="submit" class="btn btn-fill btn-success">Contact</button>
        </div>
      </div>
    </div>
  </div>

</div>


<div class="modal fade" id="ContactPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-success" id="biSave"><i class="fas fa-phone"></i></button>
        <button type="submit" class="btn btn-success" id="biSave" data-toggle="modal" data-target="#Message"><i class="fas fa-envelope"></i></button>
      </div>
    </div>
  </div>
</div>

    
<div class="modal fade" id="Message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
         <div class="form-group">
    <input type="number" class="form-control" id="MessageNumber" placeholder="Input number" disabled>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Input Message"></textarea>
  </div>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send <i class="far fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
</div>


    <!-- Contact end -->
  @endsection 