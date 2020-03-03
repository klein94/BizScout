@extends('layouts.app', ['page' => __('Compose Email'), 'pageSlug' => 'compose_email'])


@section('content')

<div class="row">
    <div class="col-8">
        <div class="card ">
            <div class="card-header">
                <div class="card-body">
                    <div class="table-responsive">
                    <form>
                        <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Select Campaign</option>
                            <option>Campaign 1</option>
                            <option>Campaign 2</option>
                            <option>Campaign 3</option>
                            <option>Campaign 4</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" id="biSave"><i class="fas icon-simple-add">Submit</i></button>
                        <button type="submit" class="btn btn-danger" id="biSave" ><i class="icon-simple-remove"></i>Clear</button>
                    
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection 