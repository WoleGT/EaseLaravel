@foreach ($posts as $post)
  <div class="blog-post">
    <h2>{{ $post->title }}</h2>
    <small>Published on {{ $post->created_at->format('F j, Y') }}</small> {{-- e.g. July 21, 2025 --}}
    <p>{{ Str::limit($post->body, 100) }}</p>
    <a href="{{ route('blog.show', $post->id) }}">Read More</a>
  </div>
@endforeach
