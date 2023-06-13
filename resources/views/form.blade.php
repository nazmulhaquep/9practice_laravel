<!DOCTYPE html>
<html>
<head>
    <title>Generate Bar Code in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<div class="container mt-4">
<h1 class="text-center">Generate Bar Code in Laravel </h1>
    <form method="post" action="{{url('/generate-barcode')}}">
       @csrf
        <div class="col-md-6 offset-3">
            <label for="code">Code</label>
            <select id="code" class="form-select" name="code" aria-label="Default select example">
                <option value="" selected>Select Code</option>
                @foreach($data as $da)
                    <option value="{{$da->id.$da->code}}">{{$da->id.$da->code}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-6 offset-3">
        <label for="code">Limit</label>
            <input type="number" class="form-control" name="limit" placeholder="Limit"  aria-describedby="basic-addon1">
        </div> 
        <div class="col-md-6 offset-5 mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>    

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>