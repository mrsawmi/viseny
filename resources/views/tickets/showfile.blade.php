@extends('layout.admin')
@section('content')
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form p-10">
                    <img src="{{ asset('/storage/ticketAttach/'. $file->ticket_attach) }}" width="500px"
                         height="500px"
                          alt="">
                </div>
            </div>
        </div>
    </div>
@endsection