<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Available Jobs</title>
</head>
<body>

    <p><a href="/">← Back to Home Dashboard</a></p>
    <h1>Available Jobs</h1>

    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job->id }}">{{ $job->title }}</a>
            </li>
        @endforeach
    </ul>

</body>
</html>