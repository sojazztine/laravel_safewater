<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <h2>Image Upload</h2>
    @if(session('success'))
    <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

    <h3>Uploaded Images:</h3>

    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
        @foreach ($images as $image)
        <div>
            <img src="{{ asset('images/img/' . $image->image) }}" width="200px" style="border-radius: 8px; box-shadow: 2px 2px 5px rgba(0,0,0,0.2);">
        </div>
        @endforeach
    </div>

    @if($images->isEmpty())
    <p>No images uploaded yet.</p>
    @endif

</body>

</html>