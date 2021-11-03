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

<form action="{{route('add_product')}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Product name:</td>
            <td><input type="text" name="p_name"></td>
        </tr>



<tr>
        <td>Product type:</td>
        <td><input type="text" name="p_type"></td>
        </tr>

        <tr>
            <td>Product description:</td>
            <td><input type="text" name="p_des"></td>
        </tr>

        <tr>
            <td>Product price:</td>
            <td><input type="text" name="p_price"></td>
            <br>
        </tr>

        <tr>




            <select name="p_status" class="form-select">
                <option selected value="available">Available</option>
                <option value="stockOut">Stock out</option>
                <option value="comingSoon">Coming Soon</option>
            </select>

        </tr>






        <tr>
            <td><input type="submit" value="Submit"> <input type="reset" value="Reset">
        </tr>



    </table>
</form>

@endsection

