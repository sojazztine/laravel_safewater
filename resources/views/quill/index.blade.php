<h2>Saved Quill Contents</h2>
<ul>
    @foreach($contents as $content)
    <li><a href="{{ route('quill.show', $content->id) }}">View Content {{ $content->id }}</a></li>
    @endforeach
</ul>

<form action="{{ route('quill.destroy', $content->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded">
        Delete
    </button>
</form>