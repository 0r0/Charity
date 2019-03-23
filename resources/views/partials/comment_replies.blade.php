@foreach($comments as $comment)
    <div class="display-comment"  @if($comment->parent_id != null) style="margin-right:40px;" @endif>
        @if($comment->volunteer_id)
            <strong>{{ $comment->volunteer->userName }}</strong>
        @elseif($comment->charity_id)
            {{--@php echo '@';@endphp--}}
            <strong>{{ $comment->charity->userName }}({{ $comment->charity->firstName}} {{$comment->charity->lastName}})</strong>
        @endif
        <p>{{ $comment->body }}</p>
        {{--{{$comment}}--}}

    <form method="post" action="{{ route('reply.add') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment_body" class="form-control"/>
            <input type="hidden" name="project_id" value="{{ $project_id }}"/>
            <input type="hidden" name="comment_id" value="{{ $comment->id }}"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default"><i class="fa fa-reply"></i>پاسخ</button>
            {{--<a  class="comment-reply-link btn btn-default" href="#comment-7811">--}}
            {{-->پاسخ</a>--}}
        </div>
    </form>
    </div>
    {{--{{$comment->replies}}--}}
    {{--@if($comment->replies)--}}
    @include('partials.comment_replies', ['comments' => $comment->replies])
    {{--@endif--}}
@endforeach
