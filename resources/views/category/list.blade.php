@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>دستع بندی جدید :</h4>
    </div>
    <div class="card-body">
        @include('partials.success')
        <form method="post" action="{{ route('admin.category.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="categoryName">نام دسته بندی :</label>
                <input id="categoryName" name="categoryName" type="text"
                       class="form-control input-default hasPersianPlaceHolder"
                       value="{{ old('categoryName') }}">
            </div>
            <div class="form-group m-t-20">
                <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
                </button>
            </div>
        </form>
        <div class="card-title">
            <h4>لیست دسته بندی ها :</h4>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>نام دسته بندی :</th>
                    <th> عملیات :</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->category_id }}</th>
                        <td>{{ $category->role_name }} </td>
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