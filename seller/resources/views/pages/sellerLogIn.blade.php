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

<form action="{{route('login')}}" method="post">
    @csrf
    <table>


        <tr>
            <td>Email:</td>
            <td><input type="text" name="s_email"></td>
        </tr>


        <td>Password:</td>
        <td><input type="password" name="s_password"></td>
        </tr>


        <tr>
            <td><input type="submit" value="Login">
        </tr>
        </table>

        </form>


@endsection
