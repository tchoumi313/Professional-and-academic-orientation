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
                    <h2>Laravel 9 filiere CRUD Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('filieres.create') }}"> Add New filiere</a>
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
                @forelse($filieres as $filiere)
                    <tr>
                        <td>{{ $filiere->id }}</td>
                        <td><img src="{{ Storage::url($filiere->imagePath) }}" height="75" width="75" alt="" />
                        </td>
                        <td>{{ $filiere->name }}</td>
                        <td>{{ $filiere->description }}</td>

                        <th><embed src="{{ Storage::url($filiere->pdfFilePath) }}" height="100" width="100"> </th>
                        <td>
                            <form action="{{ route('filieres.destroy', ['filiere' => $filiere->id]) }}" method="POST">

                                <a class="btn btn-primary"
                                    href="{{ route('filieres.edit', ['filiere' => $filiere->id]) }}">Edit</a>

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
                                Aucune filiere Pour le moment
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

        {!! $filieres->links() !!}
</body>

</html>
