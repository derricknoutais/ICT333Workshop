<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <form action="/task" method="POST">
        @csrf
        <div class="form-group">
          <label for="">Title</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
          <label for="">Body</label>
          <textarea type="text" class="form-control" name="body" rows="5s"></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</body>
</html>