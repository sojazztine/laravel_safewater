<div>
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->title }} <br>
                <a href="{{route('posts.show', $post->id) }}">show</a>
                <a href="{{ route('posts.edit', $post->id)}}">edit</a>
                <form method="POST" action="{{ route('posts.delete', $post->id) }}">
                    @csrf
                    @method('delete')
                    <button>Delete</button>
                <form>
            </li>
        @endforeach
    </ul>
</div>
    