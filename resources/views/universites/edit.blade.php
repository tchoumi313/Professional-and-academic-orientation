<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Blog universite Form - Laravel CRUD Tutorial</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-2">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit universite</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('universites.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('universites.update', ['universite' => $universite->id]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>universite Name:</strong>
                        <input type="text" name="name" value="{{ $universite->name }}" class="form-control"
                            placeholder="universite Name">
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>universite Description:</strong>
                        <textarea class="form-control" style="height:150px" name="description"
                            placeholder="universite Description">{{ $universite->description }}</textarea>
                        @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>universite Location:</strong>
                        <textarea class="form-control" style="height:150px" name="location"
                            placeholder="universite location">{{ $universite->location }}</textarea>
                        @error('location')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>universite Pdf:</strong>
                        <input type="file" name="pdfFilePath" class="form-control" placeholder="universite pdf">
                        @error('pdfFilePath')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">

                        <embed src="{{ Storage::url($universite->pdfFilePath) }}" height="400" width="400">

                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>universite Image:</strong>
                        <input type="file" name="imagePath" class="form-control" placeholder="universite image">
                        @error('imagePath')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">

                        <img src="{{ Storage::url($universite->imagePath) }}" height="200" width="200" alt="" />


                    </div>
                </div>

                <button type="submit" class="btn btn-primary ml-3">Submit</button>

            </div>

        </form>
    </div>

</body>

</html>
