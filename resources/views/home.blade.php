@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($records as $record)
                        <tr>
                            <td>{{$record->id}}</td>
                            <td>{{$record->name}}</td>
                            <td>{{$record->contact}}</td>
                            <td>{{$record->email}}</td>
                            <td>
                                <form action="{{route('vcard.destroy', ['vcard'=>$record->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                            </form>
                            <a href="{{route('vcard.edit',['vcard'=>$record->id])}}" class="btn btn-info btn-sm">edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection