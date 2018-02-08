@extends('layouts.app')
<style>
    .item1 {
        grid-area: myArea;
    }
    .grid-container {
        display: grid;
        grid-template-areas: 'myArea . .';
        grid-gap: 10px;
        background-color: #2196F3;
        padding: 10px;
    }
    .grid-container>div {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: center;
        padding:20px 0;
        font-size: 30px;
    }
</style>
@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="grid-container">

                    <div class="item1">
                        <table class = "table">
                            @foreach($product as $product)
                          <tr>
                            <td align="center"><img src="{{asset('/images/'.$product->photo->file)}}" style="width: 100px;height: 100px"></td>
                          </tr>
                          <tr>
                            <td align="center">{{$product->name}}</td>
                          </tr>
                          <tr>
                            <td align="center">{{$product->price}}</td>
                          </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection