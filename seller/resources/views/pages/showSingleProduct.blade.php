
{{--{{$product->p_id}}--}}
{{-- <br>--}}
{{--{{$product->p_name}} <br>--}}
{{--{{$product->p_type}} <br>--}}
{{--{{$product->p_des}} <br>--}}
{{--{{$product->p_price}} <br>--}}
{{--{{$product->p_status}} <br> <br> <br>--}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('updateProduct')}}" method="POST">
    @csrf
    <table>
{{--        <tr>--}}
{{--            <td>Product name:</td>--}}
{{--            <td><input type="text" name="p_name" value="{{$product->p_name}}"></td>--}}
{{--        </tr>--}}


        <tr>
            <td>Product id:</td>
            <td><input type="text" name="p_id" value="{{$product->p_id}}"></td>
            <br>
        </tr>

        <tr>
            <td>Product type:</td>
            <td><input type="text" name="p_type" value="{{$product->p_type}}"></td>
        </tr>

        <tr>
            <td>Product description:</td>
            <td><input type="text" name="p_des" value="{{$product->p_des}}"></td>
        </tr>

        <tr>
            <td>Product price:</td>
            <td><input type="text" name="p_price" value="{{$product->p_price}}"></td>
            <br>
        </tr>

{{--        <tr>--}}

{{--            <select name="p_status" class="form-select" >--}}
{{--                <option selected value="available">Available</option>--}}
{{--                <option value="stockOut">Stock out</option>--}}
{{--                <option value="comingSoon">Coming Soon</option>--}}
{{--            </select>--}}

{{--        </tr>--}}






        <tr>
            <td><input type="submit" value="Submit">
        </tr>

    </table>
</form>



<a href="/delete_single_product/{{$product->p_id}}">Delete</a>

{{--Product ID:   {{$product->p_id}} <br>--}}
{{--Product name: {{$product->p_name}} <br>--}}
{{--Product type: {{$product->p_type}} <br>--}}
{{--Product description:  {{$product->p_des}} <br>--}}
{{--Product price: {{$product->p_price}} <br>--}}
{{--Product status :{{$product->p_status}} <br> <br> <br>--}}
