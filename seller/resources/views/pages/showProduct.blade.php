
@foreach($products as $product)
    <a href="/view_single_product/{{$product->p_id}}">view this product</a>
    <br>

    Product ID:   {{$product->p_id}} <br>
    Product name: {{$product->p_name}} <br>
{{--    Product type: {{$product->p_type}} <br>--}}
{{--    Product description:  {{$product->p_des}} <br>--}}
    Product price: {{$product->p_price}} <br> <br> <br>
{{--    Product status :{{$product->p_status}} <br> <br> <br>--}}

@endforeach
