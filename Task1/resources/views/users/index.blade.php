<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Listing</title>
    <style>
h1 {
background-image: url("https://c4.wallpaperflare.com/wallpaper/980/345/279/laptop-cup-glasses-plant-wallpaper-preview.jpg");
background-size: cover;
background-repeat: no-repeat;
padding: 150px;
font-family: amasis mt pro;
font-size: 50px;
font-weight: normal;
color: #FFFFFF;
text-align: center;
}

#users {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
  padding: 10px;
}

#users tr:nth-child(even){background-color: #ebebeb;}

#users th {
  padding-top: 15px;
  padding-bottom: 15px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

a:link, a:visited {
  background-color: #000000;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  float: right;
  border-radius: 5px
}

a:hover, a:active {
  background-color: #1A1110;
}
</style>
</head>
<body>
    <h1>User Listing</h1>
    <div>
    <a href="user/create">Add new user</a>
        <table id="users">
            @foreach($users as $user )
                <tr>
                    <td>{{$user->name}} {{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form method="post" action="{{route('user.delete', ['user' => $user])}}" onsubmit="return confirm('Please confirm that you would like to delete this user.');">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>