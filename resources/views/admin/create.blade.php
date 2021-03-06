@extends('layout.admin')
@section('content')
    <div class="card-title">
        <h4>ایجاد کاربر جدید</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="basic-form p-10">
                    @include('partials.errors')
                    @include('partials.success')
                    <form method="post" action="{{ route('admin.users.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="userFullName">نام و نام خانوادگی</label>
                            <input id="userFullName" name="userFullName" type="text"
                                   class="form-control input-default hasPersianPlaceHolder"
                                   value="{{ old('userFullName') }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="userEmail">آدرس ایمیل</label>
                            <input id="userEmail" name="userEmail" type="email"
                                   class="form-control input-default hasPersianPlaceHolder">
                        </div>
                        <div class="form-group">
                            <label for="userPassword">کلمه عبور :</label>
                            <input id="userPassword" name="userPassword" type="password"
                                   class="form-control input-default hasPersianPlaceHolder">
                        </div>
                        <div class="form-group">
                            <label for="userRole">نقش کاربری :</label>
                            <select id="userRole" class="form-control persianText" name="userRole">
                                @foreach($userRoles as $roleID => $roleTitle)
                                    <option value="{{ $roleID }}">{{ $roleTitle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userGender">جنسیت :</label>
                            <select id="userGender" class="form-control persianText" name="userGender">
                                @foreach($userGender as $genderID => $genderTitle)
                                    <option value="{{ $genderID }}">{{ $genderTitle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userPlan">طرح :</label>
                            <select id="userPlan" class="form-control persianText" name="userPlan">
                                @foreach($userPlan as $planID => $planTitle)
                                    <option value="{{ $planID }}">{{ $planTitle }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="userGroup">نوع کاربر :</label>
                            <select id="userGroup" class="form-control persianText" name="userGroup">
                                @foreach($userGroups as $userGroup)
                                    <option value="{{ $userGroup->role_id }}">{{ $userGroup->role_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group m-t-20">
                            <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection