<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Blog Post Form - Laravel 9 CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add New Post</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('filieres.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>filiere Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="filiere Name">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>filiere Description:</strong>
                        <textarea class="form-control" style="height:150px" name="description" placeholder="filiere Description"></textarea>
                        @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>filiere Pdf:</strong>
                    <input type="file" name="pdfFilePath" class="form-control" placeholder="filiere pdf">
                    @error('pdfFilePath')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>filiere Image:</strong>
                    <input type="file" name="imagePath" class="form-control" placeholder="filiere image">
                    @error('imagePath')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Faculte:</strong>
                    <select name="faculte_id" id="faculte_id" class="form-control" required>
                        @foreach ($facultes as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <button type="submit" class="btn btn-primary ml-3">Submit</button>

    </div>

    </form>

</body>

</html>
