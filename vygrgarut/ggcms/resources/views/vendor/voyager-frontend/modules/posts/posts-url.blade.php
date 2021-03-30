
@empty($posts)
    <p>There are currently no posts.</p>
@else
    @foreach($posts as $post)
        
    <li><a href="{{ route('voyager-blog.blog.post', ['slug' => $post->slug]) }}" style="color:black">{{ $post->title }}</a></li>
    @endforeach
@endempty