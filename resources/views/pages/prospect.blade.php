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
                  Verification
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
                  <button type="submit" class="btn btn-fill btn-warning">Unclaim</button>
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
                  Minerva Hooper
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
                  Sage Rodriguez
                </td>
                <td class="text-center">
                  <button type="submit" class="btn btn-fill btn-warning">Unclaim</button>
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
                  <button type="submit" class="btn btn-fill btn-warning">Unclaim</button>
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
                  <button type="submit" class="btn btn-fill btn-warning">Unclaim</button>
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
                 <button type="submit" class="btn btn-fill btn-warning">Unclaim</button>
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
  @endsection 