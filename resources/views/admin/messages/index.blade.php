@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Xabarlar</h1></div>

                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Ism</th>
                            <th>Tel raqami</th>
                            <th class="col-1" >Email</th>
                            <th>Qachon</th>
                            <th class="col-1">Fan</th>
                            <th class="col-1">Xabar</th>

                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $counter => $message)
                            <tr>
                                <th>{{$message->id}}</th>
                                <td>{{$message->name}}</td>
                                <td>{{$message->phone}}</td>
                                <td>{{$message->email}}</td>
                                <td>{{$message->created_at}}</td>
                                <td>{{$message->subject}}</td>
                                <td>{{$message->message}}</td>
                                <td class="col-md-3">
                                    <form action="{{ route('admin.messages.destroy',$message->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


@endsection
