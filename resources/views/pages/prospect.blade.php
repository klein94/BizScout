@extends('layouts.app', ['page' => __('prospects'), 'pageSlug' => 'prospects'])


@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title"> BizScout Leads</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th class="text-center">
                  Busine Name
                </th>
                <th class="text-center">
                  Status
                </th>
                <th class="text-center">
                  Prospect Details
                </th>
                <th class="text-center">
                  Action
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  Kc Cups Coffee
                </td>
                <td class="text-center">
                <button type="submit" class="btn-2 btn-outline-default waves-effect">Default</button>
                  
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task" data-toggle="modal" data-target="#ContactPopUp">
                    View
                      <i class="tim-icons icon-zoom-split"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Minerva Hooper
                </td>
                <td class="text-center">
                 <button type="submit" class="btn btn-fill btn-success">Contact</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    View
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Sage Rodriguez
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">Contacted</button>
                </td>
                <td class="text-center">
                 <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Philip Chaney
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">Contacted</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">DELETE</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Doris Greene
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">Contacted</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Mason Porter
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">Contact</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  Jon Porter
                </td>
                <td class="text-center">
                 <button type="submit" class="btn btn-fill btn-warning">Contacted</button>
                </td>
                <td class="text-center">
                  <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                    Check Status
                      <i class="tim-icons icon-pencil"></i>
                  </button>
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-success">EDIT</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  
<div class="modal fade" id="ContactPopUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Business Details</h5>
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
        <h5 class="modal-title" id="exampleModalLabel">Business Details</h5>
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
  @endsection 