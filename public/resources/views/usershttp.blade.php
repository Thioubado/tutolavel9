<h1>Lesson of HTTP</h1>
<table border='1'>
    <tr>
        <td>id</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Email</td>
        <td>Avatar</td>
    </tr>


    @foreach($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['last_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src={{$item["avatar"]}} /></td>
   </tr>

    @endforeach

</table>    