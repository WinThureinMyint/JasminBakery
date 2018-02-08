@extends('layouts.app')

@section('link')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
<style>
    .item1 {
        grid-area: myArea;
    }

    .grid-container {
        display: grid;
        grid-template-areas: 'myArea . .';
        grid-gap: 20px;
        background-color: #f3ebcb;
        padding: 10px;
    }

    /*.grid-container > div {*/
    /*background-color: rgba(255, 255, 255, 0.8);*/
    /*text-align: center;*/
    /*padding: 20px 0;*/
    /*font-size: 30px;*/
    /*}*/
</style>
@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="grid-container">

                    <a href="#null" onclick="printContent('printTable')">Click to print table</a>
                    <button onClick="window.print()">Print this page</button>
                    {{--@foreach($product as $product)--}}
                        {{--<div class="w3-row-padding">--}}
                            {{--<div class="w3-third w3-container w3-margin-bottom">--}}
                                {{--<img src="{{asset('/images/'.$product->photo->file)}}" alt="Norway" style="width:100%"--}}
                                     {{--class="w3-hover-opacity">--}}
                                {{--<div class="w3-container w3-white">--}}
                                    {{--<p><b>{{$product->name}}</b></p>--}}
                                    {{--<p><b>{{$product->price}}</b></p>--}}
                                    {{--<p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta--}}
                                        {{--lectus vitae, ultricies congue gravida diam non fringilla.</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                    <div class="item1">
                        <table class="table" id="printTable">
                            @foreach($product as $product)
                                <tr>
                                    <td align="center"><img src="{{asset('/images/'.$product->photo->file)}}"
                                                            style="width: 100px;height: 100px"></td>
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

@section('script')
    <script type="text/javascript">
        <!--
        function printContent(id) {
            str = document.getElementById(id).innerHTML
            newwin = window.open('', 'printwin', 'left=100,top=100,width=400,height=400')
            newwin.document.write('<HTML>\n<HEAD>\n')
            newwin.document.write('<TITLE>Print Page</TITLE>\n')
            newwin.document.write('<script>\n')
            newwin.document.write('function chkstate(){\n')
            newwin.document.write('if(document.readyState=="complete"){\n')
            newwin.document.write('window.close()\n')
            newwin.document.write('}\n')
            newwin.document.write('else{\n')
            newwin.document.write('setTimeout("chkstate()",2000)\n')
            newwin.document.write('}\n')
            newwin.document.write('}\n')
            newwin.document.write('function print_win(){\n')
            newwin.document.write('window.print();\n')
            newwin.document.write('chkstate();\n')
            newwin.document.write('}\n')
            newwin.document.write('<\/script>\n')
            newwin.document.write('</HEAD>\n')
            newwin.document.write('<BODY onload="print_win()">\n')
            newwin.document.write(str)
            newwin.document.write('</BODY>\n')
            newwin.document.write('</HTML>\n')
            newwin.document.close()
        }

        //-->
    </script>

@endsection
