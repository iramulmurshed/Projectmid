@extends('layout.outsideApp')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('signup')}}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="s_name"></td>
            </tr>


            <tr>
                <td>Email:</td>
                <td><input type="text" name="s_email"></td>
            </tr>


            <td>Password:</td>
            <td><input type="password" name="s_password"></td>
            </tr>


            <tr>
                <td>Mobile No:</td>
                <td><input type="text" name="s_phone"></td>
                <br>
            </tr>

        </table>

        <tr>


            <select name="s_gender" id="s_id">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>

        </tr>

        <table>


            <br>
            <td>Date of Birth</td>
            <td><input type="date" id="birthday" name="s_dob">
            </td>

            <br>

            <tr>
                <td><input type="submit" value="Submit"> <input type="reset" value="Reset">
            </tr>


        </table>
    </form>



@endsection
