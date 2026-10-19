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
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <center>
                    <h1 style="font-size:30px; font-weight:bold;">Mail send to {{$data->name}}</h1>

                    <form action="{{url('mail',$data->id)}}" method="Post">

                    @csrf

                        <div class="div_deg">
                            <lable>Greeting</lable>
                            <input type="text" name="greeting">
                        </div>

                        <div class="div_deg">
                            <lable>Mail Body</lable>
                            <textarea name="body"></textarea>
                        </div>

                        <div class="div_deg">
                            <lable>Action Text</lable>
                            <input type="text" name="action_text">
                        </div>

                        <div class="div_deg">
                            <lable>Action Url</lable>
                            <input type="text" name="action_url">
                        </div>

                        <div class="div_deg">
                            <lable>End Line</lable>
                            <input type="text" name="endline">
                        </div>

                        
                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Send Mail">
                        </div>




                    </form>
                </center>

            </div>
        </div>
    </div>
      
        @include('admin.footer')
  </body>
</html>