<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 9 faculte CRUD Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('facultes.create') }}"> Add New faculte</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <th>S.No</th>
                <th>Image</th>
                <th>name</th>
                <th>Description</th>

                <th>PDF</th>
                <th width="280px">Action</th>
            </thead>
            <tbody>
                @forelse($facultes as $faculte)
                    <tr>
                        <td>{{ $faculte->id }}</td>
                        <td><img src="{{ Storage::url($faculte->imagePath) }}" height="75" width="75" alt="" />
                        </td>
                        <td>{{ $faculte->name }}</td>
                        <td>{{ $faculte->description }}</td>

                        <th><embed src="{{ Storage::url($faculte->pdfFilePath) }}" height="100" width="100"> </th>
                        <td>
                            <form action="{{ route('facultes.destroy', ['faculte' => $faculte->id]) }}" method="POST">

                                <a class="btn btn-primary"
                                    href="{{ route('facultes.edit', ['faculte' => $faculte->id]) }}">Edit</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <div class="text-center">
                                Aucune faculte Pour le moment
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

        {!! $facultes->links() !!}
</body>

</html>
