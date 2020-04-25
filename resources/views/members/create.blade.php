<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create member</title>
</head>

<body>
    <form action="{{ route('members.store') }}" method="post">
        @csrf
        <span>Name:</span>
        <input type="text" name="name" id="">
        <span>Email:</span>
        <input type="text" name="email" id="">
        <span>Contact:</span>
        <input type="text" name="contact" id="">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
