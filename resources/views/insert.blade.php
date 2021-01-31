@extends('base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h2 class="display-4">Creaet Vcard</h2>
                        <form action="{{route('vcard.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="p-0 m-0 small text-muted">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="p-0 m-0 small text-muted">Contact</label>
                                <input type="text" class="form-control" name="contact">
                            </div>
                            <div class="mb-3">
                                <label for="" class="p-0 m-0 small text-muted">Email</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection