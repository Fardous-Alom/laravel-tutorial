<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Product page</h1>
  <table border="1"> 
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Description</th>
      <th>Edit</th>
    </tr>
    @foreach ($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->quantity}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->description}}</td>
        </tr>
    @endforeach
  </table>
</body>
</html>