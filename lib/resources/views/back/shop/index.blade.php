@extends('layouts.backlayout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="form-element segments-page">

        <div class="product product-home popular-product segments">
            <div class="container-pd">
                <?php $i=1?>
                @foreach ($PRODUCTS as $PRODUCT)
                        <div class="col-12">
                            <div class="content b-shadow">
                                <img src="{{url('/storage/images/productimage/'.$PRODUCT->image.'')}}" alt="">
                                <a href="#"><p>{{$PRODUCT->name}}</p></a>
                                <h5>
                                    <?php
                                        $level = auth()->user()->level;
                                        $itemCategory = $PRODUCT->category;
                                        $resultLevel = '';
                                        
                                        $objs = json_decode($level, JSON_UNESCAPED_UNICODE);
                                                                
                                        foreach ($objs as $key => $value) {
                                            if($key == $itemCategory)
                                            {
                                                $resultLevel = $value;
                                            }
                                        }
                                    ?>
                                    @switch($resultLevel)
                                        @case("A")
                                        {{$PRODUCT->a_price}}
                                            @break
                                        @case("B")
                                        {{$PRODUCT->b_price}}
                                            @break
                                        @case("C")
                                        {{$PRODUCT->c_price}}
                                            @break
                                        @case("D")
                                        {{$PRODUCT->d_price}}
                                            @break
                                        @case("E")
                                        {{$PRODUCT->e_price}}
                                            @break
                                        @case("F")
                                        {{$PRODUCT->f_price}}
                                            @break
                                        @default
                                    @endswitch
                                </h5>
                                <form action="{{url('/admin/add-to-cart/'.$PRODUCT->id.'')}}" method="POST">
                                    {{ csrf_field() }}
                                    
                                    <div class="input-group">
                                        <input style="width:15%" type="button" value="-" class="button-minus" data-field="quantity">
                                        <input style="width:70%" type="number" step="1" max="" value="1" name="number" class="quantity-field">
                                        <input style="width:15%" type="button" value="+" class="button-plus" data-field="quantity">
                                    </div>
  
                                    <input type="submit" class="btn waves-effect button-full" value="加入購物車">
                                </form>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>

    </div>
    <!-- /.content-wrapper -->
@endsection
