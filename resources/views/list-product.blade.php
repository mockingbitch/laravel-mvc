
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Created At</th>
    <th></th>
    <th></th>
  </tr>

  @foreach ($p as $p_item)
  <tr>
    <td>{{$p_item->id}}</td>
    <td>{{$p_item->name}}</td>
    <td>{{$p_item->description}}</td>
    <td>{{$p_item->price}}</td>
    <td>{{$p_item->created_at}}</td>
    <td>Sua</td>
    <td>Xoa</td>
  </tr>
  @endforeach

</table>

</body>
</html>
