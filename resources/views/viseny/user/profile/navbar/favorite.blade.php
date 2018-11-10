<nav class="list-group text-right">
    <a class="list-group-item with-badge "
       href="{{ route('users.profile.orders',[\Illuminate\Support\Facades\Auth::user()]) }}"><i class="icon-bag"></i>
        سفارشات من</a>
    <a class="list-group-item"
       href="{{ route('users.profile.account',[\Illuminate\Support\Facades\Auth::user()]) }}"><i class="icon-head"></i>
        پروفایل کاربری</a>
    <a class="list-group-item" href="{{ route('users.profile.addresses',[\Illuminate\Support\Facades\Auth::user()]) }}"><i
                class="icon-map"></i> آدرسهای من</a>
    <a class="list-group-item with-badge active"
       href="{{ route('users.profile.favorites',[\Illuminate\Support\Facades\Auth::user()]) }}"><i
                class="icon-heart"></i> علاقه مندی
        ها</a>
    <a class="list-group-item with-badge"
       href="{{ route('users.profile.tickets',[\Illuminate\Support\Facades\Auth::user()]) }}"><i class="icon-tag"></i>
        لیست تیکت ها</a>
</nav>