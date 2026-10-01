
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Student</title>

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

        .form-container {
            background: white;
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 6px;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-group {
            flex: 1;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-size: 14px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        input:focus,
        textarea:focus {
            outline: none;
            border-color: #333;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .errors {
            background: #fff1f1;
            border: 1px solid #e0b4b4;
            color: #a00000;
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 4px;
        }

        .errors strong {
            display: block;
            margin-bottom: 8px;
        }

        .errors ul {
            margin: 0;
            padding-left: 20px;
        }

        .actions {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: 10px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .btn {
            padding: 10px 18px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-primary {
            background: #222;
            color: white;
            border: 1px solid #222;
        }

        .btn-primary:hover {
            background: #444;
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

            .form-container {
                padding: 20px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="header">
        <h1>Create Student</h1>
        <p>Add a new student to the system.</p>
    </div>

    @if($errors->any())
        <div class="errors">
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-container">

        <form action="/student" method="POST">

            @csrf

            <div class="form-row">

                <div class="form-group">
                    <label for="name">Full Name</label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Enter full name"
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter email address"
                    >
                </div>

            </div>

            <div class="form-row">

                <div class="form-group">
                    <label for="phone">Phone</label>

                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        value="{{ old('phone') }}"
                        placeholder="Enter phone number"
                    >
                </div>

                <div class="form-group">
                    <label for="date_of_birth">Date of Birth</label>

                    <input
                        type="date"
                        id="date_of_birth"
                        name="date_of_birth"
                        value="{{ old('date_of_birth') }}"
                    >
                </div>

            </div>

            <div class="form-group">

                <label for="address">Address</label>

                <textarea
                    id="address"
                    name="address"
                    placeholder="Enter address"
                >{{ old('address') }}</textarea>

            </div>

            <div class="actions">

                <button type="submit" class="btn btn-primary">
                    Create Student
                </button>

                <a href="/students" class="btn btn-secondary">
                    Cancel
                </a>

            </div>

        </form>

    </div>

</div>

</body>
</html>
