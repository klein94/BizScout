@extends('layouts.app', ['page' => __('findleads'), 'pageSlug' => 'findleads'])


<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function() {
      $('.place-id').each(function(i) {
          let place_id = $(this).attr('data');
          $.ajax({
              type: 'GET',
              url: 'contact/' + place_id,
              timeout: 5000,
              success: (data, textStatus ) => {
                  let jsonData = JSON.parse(data);
                  $(this).html(jsonData['contact']);
              },
              error: (xhr, textStatus, errorThrown) => {
                  $(this).html('none');
              }
          });
      });
      $('#inlineFormInputGroup').keyup(function(e) {
        if (e.keyCode == 13) {
          location.href = '/findleads/' + $(this).val();
        }
      });
      $('.btn-save').click(function() {
        let p = $(this).parent();
        $.ajax({
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/save',
            data: {
                name: $('input[name="name"]', p).val(),
                address: $('input[name="address"]', p).val(),
                contact: $('input[name="contact"]', p).val(),
                photo: $('input[name="photo"]', p).val()
            },
            success: (data, textStatus ) => {
                console.log(data);
            },
            error: (xhr, textStatus, errorThrown) => {
                // alert error
                alert('Transaction failed.');
                console.log(textStatus);
                console.log(xhr.responseText);
            }
        });
    });
  });
</script>

@section('content')
<div class="row">
  @foreach ($data as $item)
  <div class="col-md-6">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Find Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <h4>
            <strong> Business name:</strong> {{ $item['name'] }} <br />
            <strong> Contact #:</strong> <span class="place-id" data="{{ $item['contact'] }}">...</span><br />
            <strong> Address:</strong> {{ $item['address'] }} <br />
            <strong> View Image:</strong> 
              <a href="{{ $item['photo'] }}" target="_blank">Click Me!</a> 
          </h4>
          <input type="hidden" name="name" value="{{ $item['name'] }}" />
          <input type="hidden" name="address" value="{{ $item['address'] }}" />
          <input type="hidden" name="contact" value="{{ $item['contact'] }}" />
          <input type="hidden" name="photo" value="{{ $item['photo'] }}" />
          <button type="submit" class="btn btn-fill btn-success btn-save">Add To List</button>
          <button type="submit" class="btn btn-fill btn-success" data-toggle="modal" data-target="#ContactPopUp">Contact</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- <div class="col-md-6">
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
  </div> -->

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