@extends('layout.admin')
@section('content')
    <form method="post" action="{{ route('admin.ticket') }}" enctype="multipart/form-data" role="form">
        <input type="hidden" name="token" value="{{ $ticket->ticket_id }}"/>

        <div class="row">
            <div class="form-group col-sm-4">
                <label for="ticketName">نام :</label>
                <input type="text" name="ticketName" id="ticketName" value="{{ $ticket->ticket_user_id->user_fullName }}"
                       class="form-control input-default hasPersianPlaceHolder"
                       readonly/>
            </div>
            <div class="form-group">
                <label for="ticketEmail"> آدرس ایمیل :</label>
                <input type="email" name="ticketEmail" id="ticketEmail" value="{{ old('ticket_email') }}"
                       class="form-control input-default hasPersianPlaceHolder" readonly/>
            </div>
        </div>
        <div class="form-group">
            <label for="ticketTitle">موضوع :</label>
            <input type="text" name="ticketTitle" id="ticketTitle"
                   value="{{ old('ticket_title') }}"
                   class="form-control input-default hasPersianPlaceHolder"
            />
        </div>
        <div class="form-group">
            <label for="relatedTablo">محصول مربوطه :</label>
            <select name="relatedTablo" id="relatedTablo" class="form-control persianText">
                <option value="">هیچکدام</option>
                @foreach($ticketTablo as $ticketID => $ticketTitle)
                    <option value="{{ $ticketID }}">{{ $ticketTitle }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-3">
            <label for="ticketPriority">اولویت</label>
            <select name="ticketPriority" id="ticketPriority" class="form-control">
                <option value="High">
                    زیاد
                </option>
                <option value="Medium" selected="selected">
                    متوسط
                </option>
                <option value="Low">
                    کم
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="ticketContent"> پیام :</label>
            <textarea name="ticketContent" id="ticketContent" rows="12" class="form-control input-default"></textarea>
        </div>

        <div class="row form-group">
            <div class="col-sm-12">
                <label for="ticketAttach">ضمیمه ها :</label>
            </div>
            <div class="col-sm-9">
                <input type="file" name="ticketAttach" id="ticketAttach" class="form-control input-default"/>
            </div>
            <div class="col-xs-12 ticket-attachments-message text-muted">
                پسوند های مجاز: .jpg, .gif, .jpeg, .png
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-b-10 m-l-5">ثبت اطلاعات
        </button>
        <a href="" class="btn btn-default">لغو</a>
    </form>
@endsection