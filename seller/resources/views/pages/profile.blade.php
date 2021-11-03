<h1> Seller Profile</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif




<form action="{{route('profileUpdate')}}" method="POST">
    @csrf
    <table>



        <tr>
            <td>Name:</td>
            <td><input type="text" name="s_name" value=" {{$seller->s_name}}"></td>
        </tr>



<tr>
        <td>Password:</td>
        <td><input type="password" name="s_password" value=" {{$seller->s_password}}"></td>
        </tr>



        <tr>
            <td>Mobile No:</td>

    <td><input type="text" name="s_phone" value="{{$seller->s_phone}}"></td>
        </tr>

    </table>
   <td>Gender:  {{$seller->s_gender}} </td>
<table>

        <td>Date of Birth:</td>
        <td> <input type="date" id="birthday" name="s_dob" value="{{$seller->s_dob}}">
        </td>

        <br>

        <tr>
            <td><input type="submit" value="Update Profile">
        </tr>

    </table>
</form>


