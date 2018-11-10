@include('viseny.layouts.header')
@include('viseny.layouts.login-model')
@include('viseny.layouts.canvas-category')
@include('viseny.layouts.canvas-mobile')
@include('viseny.layouts.topbar')
@include('viseny.layouts.navbar-header')
<br>
<br>
<div class="container padding-bottom-3x mb-10">
    <section class="pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
        @foreach($teamUsers as $user)
            <div class="col-form-legend">
                <aside class="user-info-wrapper">
                    <div class="user-cover" style="background-image: url(/storage/profile/user_cover.jpg);">
                    </div>
                    <div class="user-info">
                        <div class="user-avatar">
                            @if(!is_null($user->user_img))
                                <img src="{{ asset('/storage/profile/'.$user->user_img) }}" alt="User">
                            @else
                                <img src="{{ asset('/storage/profile/default.png') }}">
                            @endif
                        </div>
                        <div class="user-data">
                            <h4>{{ $user->user_fullName }}</h4>
                            <span class="text-left">{{ $user->role->role_name }}</span>
                        </div>
                    </div>
                </aside>
            </div>
        @endforeach
    </section>
</div>
<br>
<br>
@include('viseny.layouts.footer')