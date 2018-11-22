<div class="col-lg-12">
    <div class="padding-top-2x mt-2 hidden-lg-up"></div>
    <div class="table-responsive">
        <table class="table table-hover margin-bottom-none text-right">
            <thead>
            <tr>
                <th>عنوان تیکت</th>
                <th>زمان ارسال | بروزرسانی</th>
                <th>متن تیکت</th>
                <th>اولویت</th>
                <th>وضعیت</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets as $ticket)
                <tr>
                    <td><a class="text-medium navi-link"
                           href="{{ route('ticket.review',[$ticket->ticket_id]) }}">{{ $ticket->ticket_title }}</a></td>
                    <td>{{ $ticket->updated_at->toDateString() }}
                        <br>
                        {{ $ticket->created_at->toDateString() }}</td>
                    <td>{{ $ticket->ticket_content }}</td>
                    <td><span class="text-warning">{{ $ticket->ticket_priority }}</span></td>
                    <td>
                        <span class="text-primary">
                            @if($ticket->ticket_status == 0)
                                در انتظار پاسخ
                            @elseif($ticket->ticket_status == 1)
                                پاسخ داده شد
                            @elseif($ticket->ticket_status == 2)
                                بسته شد
                            @endif
                        </span>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <hr class="mb-4">
    <div class="text-right">
        <a href="{{ route('users.profile.tickets.new',[\Illuminate\Support\Facades\Auth::user()->user_id]) }}">
            <button class="btn btn-primary margin-bottom-none" data-toggle="modal" data-target="#openTicket">ثبت یک تیکت
                جدید
            </button>
        </a>
    </div>
</div>