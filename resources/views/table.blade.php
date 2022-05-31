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
    <th>sr no</th>
    <th>name</th>
    <th>email</th>
    <th>adhar</th>
    <th>mobile</th>
    <th>Password</th>
    <th>your Query</th>
  </tr>
  @foreach ($contacts as $a)


<tr>
    <td>{{$a->id}}</td>
    <td>{{$a->name}}</td>
    <td>{{$a->email}}</td>
    <td>{{$a->adhar}}</td>
    <td>{{$a->mobile}}</td>
    <td>{{$a->pwd}}</td>
    <td>{{$a->text}}</td>
</tr>
@endforeach
</table>

</body>
</html>

