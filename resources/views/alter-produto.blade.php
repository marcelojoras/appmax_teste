<!DOCTYPE html>
<html>
 <head>
  <title>Controle de estoque</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Controle de estoque</h3><br />

   @if(isset(Auth::user()->email))
    <div class="success-block">
     <strong>Bem vindo! {{ Auth::user()->name }}</strong>
     <br />
     <a href="{{ url('/main/logout') }}">Sair</a>
     <br>
     <br>
     <br>
     <center><b>Alterar produto</b></center>
     <br>
      <form method="post" 
            action="{{route('product.update', $product->id)}}"
            enctype="multipart/form-data">
          {!! method_field('put') !!}
          {{ csrf_field() }}
          <div class="col-md-6">              
              <div class="form-group">
                  <label for="name">Nome</label>
                  <input type="text" name="name" 
                         class="form-control" 
                         value="{{$product->name}}"
                         required>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label for="sku">SKU</label>
                  <input type="text" name="sku" 
                         class="form-control" 
                         value="{{$product->sku}}"
                         required>
              </div>
          </div>
          <div class="col-md-6">
              <div class="form-group">
                  <label for="quantity">Quantidade</label>
                  <input type="number" name="quantity" 
                         class="form-control" 
                         value="{{$product->quantity}}"
                         required>
              </div>    
          </div>                                   
          <div class="col-md-12">                   
              <button type="reset" class="btn btn-default">
                  Limpar
              </button>
              <button type="submit" 
                      class="btn btn-warning" id="black">
                  Alterar
              </button>
          </div>
      </form>
    </div>
   @else
    <script>window.location = "/main";</script>
   @endif
   
   <br />
  </div>
 </body>
</html>