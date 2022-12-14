<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->

    <base href="/public">
    @include('admin.css')
    <style type="text/css">

        .div_center{
            text-align: center;
            padding-top: 40px ;
        }
        .h2_font{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color{

            color: black;
        }
        lable{
            display: inline-block;
            width:200px;
        }
        .div_design{

            padding-bottom: 15px;
        }

    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


                @if(session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert"  aria-hidden="true" >x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif


                <div class="div_center" >
                    <h1 class="h2_font"> Update Product</h1>
                    <form action="{{url('/update_product_confrim',$product->id)}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="div_design">
                            <lable> Product Title:</lable>
                            <input class="text_color" type="text" name="title" placeholder="Write a Title" required=""
                                   value="{{$product->title}}">
                        </div>

                        <div class="div_design">
                            <lable> Product Description:</lable>
                            <input class="text_color" type="text" name="description" placeholder="Write a Description" required=""
                                   value="{{$product->description}}" >
                        </div>

                        <div class="div_design">
                            <lable> Product Price:</lable>
                            <input class="text_color" type="number" name="price"  placeholder="Write a Price" required=""
                                   value="{{$product->price}}">
                        </div>

                        <div  class="div_design">
                            <lable> Discount Price:</lable>
                            <input class="text_color" type="number" name="dis_price" placeholder="Write a Discount"
                                   value="{{$product->discount_price}}" >
                        </div>

                        <div  class="div_design">
                            <lable> Product Quantity:</lable>
                            <input class="text_color" type="number" name="quantity" min="0" placeholder="Write a Quantity" required=""
                                   value="{{$product->quantity}}" >
                        </div>




                        <div  class="div_design">
                            <lable> Product Catagory:</lable>
                            <select class="text_color" name="catagory" required="">
                                <option value="{{$product->catagory}}" selected="" >{{$product->catagory}}</option>
                                @foreach($catagory as $catagory)
                                    <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>

                                @endforeach

                            </select>
                        </div>
                        <div  class="div_design">
                            <lable>Curent Product Image </lable>
                 <img style="margin: auto;" height="100"  width="100" src="/product/{{$product->image}}">
                        </div>

                        <div  class="div_design">
                            <lable>Change Product Image Here</lable>
                            <input  type="file" name="image" placeholder="Write a Title">
                        </div>

                        <div  class="div_design">
                            <input type="submit" value="Update Product" class="btn btn-primary" >
                        </div>

                    </form>
                </div>


            </div>


        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.script')
<!-- End custom js for this page -->
</body>
</html>
