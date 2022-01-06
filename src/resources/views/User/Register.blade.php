<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container m-4">
        @if(!session('Hello'))
        <form action="{{ route('kayitol') }}" class="" method="post">
            @csrf
        <div class="form-group col-4" >
        <div class="mb-3">
            <label for="adsoyad" class="form-label">Ad Soyad</label>
            <input type="text" name="name" class="form-control" id="adsoyad" placeholder="İsmail YILDIZ">
        </div>
        <div class="mb-3">
            <label for="mail" class="form-label">Eposta</label>
            <input type="email" name="email" class="form-control" id="mail" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="parola" class="form-label">Parola</label>
            <input type="password" name="password" class="form-control" id="parola" placeholder="parola">
        </div>
        <div class="mb-3">
            
            <input type="submit" name="kayit" class="form-control btn btn-success" value="Kaydet">
        </div>   
    </div>
</form>
@else 
    kayit başarılı
@endif
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>