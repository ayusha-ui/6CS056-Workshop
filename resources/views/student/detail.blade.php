
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Details</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #222;
        }

        .page {
            max-width: 800px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .header {
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 8px;
            font-size: 28px;
        }

        .header p {
            margin: 0;
            color: #666;
        }

        .details-container {
            background: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            overflow: hidden;
        }

        .detail {
            display: flex;
            padding: 18px 25px;
            border-bottom: 1px solid #eee;
        }

        .detail:last-child {
            border-bottom: none;
        }

        .label {
            width: 180px;
            font-weight: bold;
            color: #555;
        }

        .value {
            flex: 1;
            color: #222;
        }

        .actions {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 18px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
        }

        .btn-secondary {
            color: #555;
            border: 1px solid #ccc;
            background: white;
        }

        .btn-secondary:hover {
            background: #f5f5f5;
        }

        @media (max-width: 600px) {
            .page {
                margin: 25px auto;
            }

            .detail {
                display: block;
            }

            .label {
                width: auto;
                margin-bottom: 6px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="header">
        <h1>Student Details</h1>
        <p>View information about this student.</p>
    </div>

    <div class="details-container">

        <div class="detail">
            <div class="label">Student ID</div>
            <div class="value">{{ $student->id }}</div>
        </div>

        <div class="detail">
            <div class="label">Name</div>
            <div class="value">{{ $student->name }}</div>
        </div>

        <div class="detail">
            <div class="label">Email</div>
            <div class="value">{{ $student->email }}</div>
        </div>

        <div class="detail">
            <div class="label">Phone</div>
            <div class="value">{{ $student->phone }}</div>
        </div>

        <div class="detail">
            <div class="label">Address</div>
            <div class="value">{{ $student->address }}</div>
        </div>

        <div class="detail">
            <div class="label">Date of Birth</div>
            <div class="value">{{ $student->date_of_birth }}</div>
        </div>

    </div>

    <div class="actions">
        <a href="/students" class="btn btn-secondary">
            Back to Students
        </a>
    </div>

</div>

</body>
</html>
