@extends('layouts.app')

@section('content')
<div class="jumbotron" style="height:70vh;background-image:url('/home.jpg');background-size:cover;background-attachment:fixed;background-position:cover;margin-bottom:0px">
</div>
<div class="primaryback">
    <Div class="container">
        <br><br>
        <h2 style="color:white">Buscá un curso para vos!</h2>
        <div class="card" style="border:none">

            <div class="card-header" style="height:10px;background-color:gray">
               
            </div>

            <div class="card-body">
              <h4>Qué temáticas te interesa?</h4>
              <div class="row">
                  <div class="col-md-11">
                        <select class="form-control"  style="width:100%">
                                <option>1</option>
                                <option>2</option>
                            </select>
                  </div>
                  <div class="col-md-1">
                     S
                  </div>

    
       
      </div>
            </div>
        </div>
        <br><br>
    </Div>

</div>
@endsection