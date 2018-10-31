<div class="row padding-top-2x mb-3">
    <div class="col-lg-12 offset-lg-1">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link" href="#description" data-toggle="tab" role="tab"
                                    aria-selected="false">
                    توضیحات </a></li>
            <li class="nav-item"><a class="nav-link active" href="#reviews" data-toggle="tab" role="tab"
                                    aria-selected="true">دیدگاه شما</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade" id="description" role="tabpanel">
                <p style="text-align:justify">{{ $product->tablo_caption }}</p>
            </div>
            <div class="tab-pane fade active show" id="reviews" role="tabpanel">
                <!-- Review-->
                @foreach($comments as $comment)
                    @if($comment->comment_status == 1)
                        <div class="comment">
                            <div class="comment-author-ava"><img
                                        src="{{ asset('viseny/img/reviews/comments-ico.jpg') }}" alt="Review author">
                            </div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">{{ $comment->comment_title }}</h4>

                                </div>
                                <div class="rating-stars"><span class="fa fa-thumbs-o-up fa-2x"></span>
                                </div>
                                <p class="comment-text text-right">{{ $comment->comment_content }}</p>
                                <div class="comment-footer"><span
                                            class="comment-meta">{{ $comment->comment_author }}</span>
                                    | <span
                                            class="comment-meta">{{ $comment->created_at }}</span></div>
                            </div>
                        </div>
                @endif
            @endforeach
            <!-- Review Form-->
                <h5 class="mb-30 padding-top-1x text-right">افزودن دیدگاه جدید</h5>
                <form class="row" method="post" action="{{ route('admin.comment.store') }}">
                    {{ csrf_field() }}
                    <div class="col-sm-6">
                        <div class="form-group text-right">
                            <label for="review_name">نام شما :</label>
                            <input class="form-control form-control-rounded" type="text" name="userCommentName"
                                   id="review_name" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group text-right">
                            <label for="review_email">آدرس ایمیل :</label>
                            <input class="form-control form-control-rounded" type="email" name="userCommentEmail"
                                   id="review_email" required="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="text-right">
                            <label for="review_subject">عنوان :</label>
                            <input class="form-control form-control-rounded" type="text" id="review_subject"
                                   required="">
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <div class="form-group text-right">
                            <label for="review_text">متن دیدگاه :</label>
                            <textarea class="form-control form-control-rounded" name="userCommentContent"
                                      id="review_text" rows="8"
                                      required=""></textarea>
                        </div>
                    </div>
                    <div class="col-12 text-right">
                        <button class="btn btn-outline-primary" type="submit">ارسال دیدگاه</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>