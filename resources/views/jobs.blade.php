<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Jobs</title>
</head>
<body>

    <p><a href="#">Home Jobs</a></p>

    <h1>Available Jobs</h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="#">{{ $job->title }} - {{ $job->salary }}</a>
            </li>
        @endforeach
    </ul>

</body>
</html>