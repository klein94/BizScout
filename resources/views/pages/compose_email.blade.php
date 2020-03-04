@extends('layouts.app', ['page' => __('Compose Email'), 'pageSlug' => 'compose_email'])


@section('content')

<div class="row">
    <div class="col-8">
        <div class="card ">
            <div class="card-header">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif


                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                            <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <div class="table-responsive">
                    <form method = "POST" action="email">
                        {{ csrf_field() }}
                        <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" name="emailTo" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Select Campaign</option>
                            <option>Example Campaign 1</option>
                            <option>Example Campaign 2</option>
                            <option>Example Campaign 3</option>
                            <option>Example Campaign 4</option>
                            <option>Example Campaign 4</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" id="biSave">Submit</button>
                        <button type="submit" class="btn btn-danger" id="biSave" > Clear</button>
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection 