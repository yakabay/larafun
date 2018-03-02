<div class="post-preview">
    <a href="/posts/{{ $post->id }}">
        <h2 class="post-title">
            {{ $post->title }}
        </h2>
        <h3 class="post-subtitle">
            {{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}
        </h3>
    </a>
    <p class="post-meta">Posted by
        <a href="/about">{{ $post->user->name }}</a>
        on {{ $post->created_at->toFormattedDateString() }}</p>
</div>
<hr>