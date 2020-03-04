@extends('layouts.app', ['page' => __('Email Campaign'), 'pageSlug' => 'email_campaign'])


@section('content')
<div class="row">
  
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
    <button type="submit" class="btn btn-fill btn-primary"  data-toggle="modal" data-target="#AddEmail">Add</button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="">
                  Campaign Name
                </th>
                <th colspan="4"></th>

                
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExample Campaign Name 1
                </td>
                
                <td class="text-center"> 
                 
                  <button type="submit" class="btn btn-fill btn-success" data-target="#EmailTemplate" data-toggle="modal" data-target="#EmailTemplate"><i class="tim-icons icon-pencil"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-warning"><i class="tim-icons icon-trash-simple"></i></button>
                </td>
              </tr>
               <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExample Campaign Name 2
                </td>
                
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-warning"><i class="tim-icons icon-trash-simple"></i></button>
                </td>
              </tr> <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExample Campaign Name 3
                </td>
                
                <td class="text-center">
                <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-warning"><i class="tim-icons icon-trash-simple"></i></button>
                </td>
              </tr> <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExample Campaign Name 4
                </td>
                
                <td class="text-center">
                <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-warning"><i class="tim-icons icon-trash-simple"></i></button>
                </td>
              </tr> <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspExample Campaign Name 5
                </td>
                
                <td class="text-center">
                <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-warning"><i class="tim-icons icon-trash-simple"></i></button>
                </td>
              </tr> <tr>
                <td class="" colspan="5">
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCompaign Name
                </td>
                
                <td class="text-center">
                <button type="submit" class="btn btn-fill btn-success"><i class="tim-icons icon-pencil"></i></button>
                  |
                  <button type="submit" class="btn btn-fill btn-warning"><i class="tim-icons icon-trash-simple"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  

    <!-- Contact -->
    <div class="modal fade" id="ContactPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center>
          Are you sure you want to submit? 
        </center>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="biSave">Yes <i class="fal fa-file-check"></i></button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">No <i class="far fa-file-times"></i></button>
      </div>
    </div>
  </div>
</div>
    <!-- Contact end -->

  <!-- ADD EMAIL CAMPAIGN MODAL -->
  <div class="modal fade" id="AddEmail" tabindex="-1" role="dialog" aria-labelledby="AddEmail" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Campaign Name</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="col-sm-5">
        <div class="form-group">
            <input type="text" value="" placeholder="Input Campaign" class="form-control" />
        </div>
      </div>

      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-success" id="biSave">Add</button>
        <button type="submit" class="btn btn-danger" id="biSave" data-toggle="modal" data-target="#Close">Clear</button>
      </div>
    </div>
  </div>
</div>

<!-- EMAIL CONTENT TEMPLATE MODAL -->
<div class="modal fade" id="EmailTemplate" tabindex="-1" role="dialog" aria-labelledby="EmailContent" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Email Template</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Campaign Name</label>
              <input type="text" class="form-control" id="CampaignName" placeholder="Campaign Name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>

      </div>
      <div class="modal-footer">
         <button type="submit" class="btn btn-success" id="biSave">Submit</button>
        <button type="submit" class="btn btn-danger" id="biSave" data-toggle="modal" data-target="#Close">Clear</button>
      </div>
    </div>
  </div>
</div>
  @endsection 