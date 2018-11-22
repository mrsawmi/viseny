    <div class="col-lg-4">
        <aside class="user-info-wrapper">
            <div class="user-cover" style="background-image: url(/storage/profile/user_cover.jpg);">
                <div class="info-label" data-toggle="tooltip" title=""
                     data-original-title="شما در حال حاضر {{ \Illuminate\Support\Facades\Auth::user()->user_point }} امتیاز برای مصرف در فروشگاه دارید">
                    <i class="icon-medal"></i>{{ \Illuminate\Support\Facades\Auth::user()->user_point }} امتیاز
                </div>
            </div>
            @if(!empty(\Illuminate\Support\Facades\Auth::user()->user_img))
                <div class="user-info">
                    <div class="user-avatar">
                        <a id="fileupload" class="edit-avatar" href="#"></a><img
                                src="{{ asset('/storage/profile/'.\Illuminate\Support\Facades\Auth::user()->user_img) }}"
                                alt="User">
                    </div>
                    <div class="user-data">
                        <h4>{{ \Illuminate\Support\Facades\Auth::user()->user_fullName }}</h4>
                        <span>{{ \Illuminate\Support\Facades\Auth::user()->created_at->toDateString() }}</span>
                    </div>
                </div>
            @else
                <div class="user-info">
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a><img
                                src="{{asset('/storage/profile/default.png')}}"
                                alt="User">
                    </div>
                    <div class="user-data">
                        <h4>{{ \Illuminate\Support\Facades\Auth::user()->user_fullName }}</h4>
                        <span>عضو شده در:{{ \Illuminate\Support\Facades\Auth::user()->created_at->toDateString() }}</span>
                    </div>
                </div>
            @endif
        </aside>
       @include('viseny.user.profile.navbar.ticket')
    </div>
