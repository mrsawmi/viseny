@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>نقش جدید :</h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <form method="post" action="{{ route('admin.role.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="roleName">نام نقش :</label>
                <input id="roleName" name="roleName" type="text"
                       class="form-control input-default hasPersianPlaceHolder"
                       value="{{ old('roleName') }}">
            </div>
            <div class="form-group m-t-20">
                <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
                </button>
            </div>
        </form>
        <div class="card-title">
            <h4>لیست نقش ها :</h4>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام نقش :</th>
                    <th> عملیات :</th>
                </tr>
                </thead>
                <tbody>
                @foreach($userRoles as $userRole)
                    <tr>
                        <th scope="row">{{ $userRole->role_id }}</th>
                        <td>{{ $userRole->role_name }} </td>
                        <td>
                            <a href="{{ route('admin.role.delete',$userRole->role_id) }}">
                                حذف&nbsp;
                            </a>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection