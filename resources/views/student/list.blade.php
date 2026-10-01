
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Students</title>

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
            max-width: 1100px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 6px;
            font-size: 28px;
        }

        .header p {
            margin: 0;
            color: #666;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
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

        .success {
            background: #eef8f0;
            border: 1px solid #b9d9bd;
            color: #27632a;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .table-container {
            background: white;
            border: 1px solid #ddd;
            border-radius: 6px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f8f8f8;
            text-align: left;
            padding: 14px 16px;
            font-size: 14px;
            border-bottom: 1px solid #ddd;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
        }

        tbody tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: #fafafa;
        }

        .actions {
            white-space: nowrap;
        }

        .action-link {
            margin-right: 12px;
            color: #333;
            text-decoration: none;
        }

        .action-link:hover {
            text-decoration: underline;
        }

        .delete-button {
            background: none;
            border: none;
            padding: 0;
            color: #b00000;
            cursor: pointer;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }

        .delete-button:hover {
            text-decoration: underline;
        }

        .empty {
            text-align: center;
            color: #666;
            padding: 30px;
        }

        @media (max-width: 700px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .page {
                margin: 25px auto;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <div class="header">

        <div>
            <h1>Students</h1>
            <p>Manage student records.</p>
        </div>

        <a href="/student/create" class="btn btn-primary">
            Create Student
        </a>

    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-container">

        <table>

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @forelse($students as $student)

                    <tr>

                        <td>{{ $student->id }}</td>

                        <td>{{ $student->name }}</td>

                        <td>{{ $student->email }}</td>

                        <td>{{ $student->phone }}</td>

                        <td class="actions">

                            <a
                                href="/students/{{ $student->id }}"
                                class="action-link"
                            >
                                View
                            </a>

                            <a
                                href="/students/{{ $student->id }}/edit"
                                class="action-link"
                            >
                                Edit
                            </a>

                            <form
                                action="/students/{{ $student->id }}"
                                method="POST"
                                style="display: inline;"
                            >

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="delete-button"
                                >
                                    Delete
                                </button>

                            </form>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="5" class="empty">
                            No students found.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>

</html>

