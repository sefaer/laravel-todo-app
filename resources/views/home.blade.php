<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAPTIKLARIM </title>
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
></script>
</head>
<body class="bg-primary">
    <div class ="container mt-5">
        <div class ="card shadow-sm">
            <div class ="card-body">
                <h3>Yapılacaklar Listesi</h3>
                <form action="{{route('store')}}" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control" placeholder="Yapılacaklarıma ekle">
                        <button type="submit" class="btn btn-dark "><i class="fas fa-plus"></i></button>

                    </div>
                </form>
                @if (count($todolists))
                        <ul class="list-group list-group-flush mt-3">
                            @foreach ($todolists as $todolist)
                                <li class="list-group-item list-group-item-primary">
                                    <form action="{{ route('destroy', $todolist->id) }}" method="POST">
                                        {{$todolist->content}}
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-link btn-sm float-end"><i class ="fas fa-trash"></i> </button>
                                    </form>
                                    
                                </li>
                            @endforeach
                        </ul> 
                        @else 
                        <p class="text-center mt-3">Yapılacak bir şey yok! </p>  
                @endif
            </div>
            @if(count($todolists))
                <div class="card-footer">
                    {{count($todolists)}} adet yapılacak iş mevcut !
                </div>
            @else
            @endif
        </div>
    </div>
    
    
</body>
</html>