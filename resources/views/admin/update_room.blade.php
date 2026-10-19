<!DOCTYPE html>
<html>
<head> 
    <base href="/public">

   @include('admin.css')

    <style type="text/css">
        lable
        {
            display: inline-block;
            width: 200px;
        }
        .div_deg
        {
            padding-top: 30px;
        }
        .div_center
        {
            text-align: center;
            padding-top: 40px;

        }
    </style>
</head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_center">

                <h1 style="font-size: 30px;font-weight: bold">Update Room</h1>

                <form action="{{url('edit_room',$data->id)}}" method="Post"enctype="multipart/form-data">

                    @csrf

                    <div class="div_deg">
                        <lable>Room Title</lable>
                        <input type="text" name="title" value="{{$data->room_title}}">
                    </div>

                    <div class="div_deg">
                        <lable>Description</lable>
                        <textarea name="description">{{$data->description}}</textarea>
                    </div>

                    <div class="div_deg">
                        <lable>price</lable>
                        <input type="number" name="price" value="{{$data->price}}">
                    </div>

                    <div class="div_deg">
                        <lable>Room Type</lable>
                        <select name="type">
                            <option selected value="{{$data->room_type}}">{{$data->room_type}}</option>
                            <option value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                    </div>

                    <div class="div_deg">
                        <lable>Free Wifi</lable>
                        <select name="wifi">
                        <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="div_deg" >
                        <lable>Current Image</lable>
                        <img style="margin:auto;" width="100" src="/room/{{$data->image}}">
                    </div>

                    <div class="div_deg">
                        <lable>Upload Image</lable>
                        <input type="file" name="image">
                    </div>

                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Update Room">
                    </div>




                </form>





            </div>

    </div>
        </div>
            </div>

        @include('admin.footer')
  </body>
</html>