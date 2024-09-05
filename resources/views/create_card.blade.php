<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Create Product</title>
</head>
<body>
    <h1>Create a New Product</h1>

    <!-- Display validation errors, if any -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Display success message, if any -->
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <!-- The form -->
    <form action="{{ route('cardDetails.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card shadow-sm rounded">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Add New Card Details</h5>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image:</label>
                        <input type="file" class="form-control" name="imagePath" id="image">
                    </div>
                    <div class="col-md-6">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" class="form-control" name="ptitle" id="title">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="pname" id="name">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Price:</label>
                        <input type="text" class="form-control" name="pprice" id="price">
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    

</body>
</html>
