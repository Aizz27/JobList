<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $job->title }}</title>
</head>
<body>

    <p><a href="/jobs">← Back to All Jobs</a></p>

    <h1>Job Title: {{ $job->title }}</h1>
    
    <div style="background: #f4f4f4; padding: 15px; border-radius: 5px; display: inline-block;">
        <h3>Financial Details:</h3>
        <p><strong>Salary:</strong> ${{ number_format($job->salary, 2) }}</p>
    </div>

</body>
</html>