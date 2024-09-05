<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{ route('cardDetails.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="image">Image:</label>
        <input type="file" name="imagePath" id="image">
    </div>
    <div>
        <label for="title">Title:</label>
        <input type="text" name="ptitle" id="title">
    </div>
    <div>
        <label for="name">Name:</label>
        <input type="text" name="pname" id="name">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" name="pprice" id="price">
    </div>
    <button type="submit">Submit</button>
</form>


</body>
</html>