<div class="col-lg-4">
    <aside class="user-info-wrapper">
        <div class="user-cover" style="background-image: url(img/account/user-cover-img.jpg);">
            <div class="info-label" data-toggle="tooltip" title=""
                 data-original-title="شما در حال حاضر {{ $user->user_point }} امتیاز برای مصرف در فروشگاه دارید"><i
                        class="icon-medal"></i>
            </div>
        </div>
        @if(!empty($user->user_img))
            <div class="user-info">
                <div class="user-avatar"><a class="edit-avatar" href="#"></a><img
                            src="{{ asset('/storage/profile/'.$user->user_img) }}" alt="User">
                </div>
                @else
                    <div class="user-avatar"><a class="edit-avatar" href="#"></a><img
                                src="{{ asset('/storage/profile/default.png') }}" alt="User">
                    </div>
                @endif
                <div class="user-data">
                    <h4>{{ $user->user_fullName }}</h4><span>: تاریخ عضویت {{ $user->created_at }}</span>
                </div>
            </div>
    </aside>
    <nav class="list-group text-right">
        <a class="list-group-item with-badge " href="account-orders.html"><i class="icon-bag"></i> سفارشات من</a>
        <a class="list-group-item active" href="account-profile.html"><i class="icon-head"></i> پروفایل کاربری</a>
        <a class="list-group-item" href="account-address.html"><i class="icon-map"></i> آدرسهای من</a>
        <a class="list-group-item with-badge" href="account-wishlist.html"><i class="icon-heart"></i> علاقه مندی ها</a>
        <a class="list-group-item with-badge" href="account-tickets.html"><i class="icon-tag"></i> لیست تیکت ها</a>
    </nav>
</div>