<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <h4 class="text-center">Ajouter un nouveau Enregistrement</h4>
            <hr>
            <!-- Form -->
            <form action="add" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" name="name" placeholder="Entrer le nom" value="{{ old('name') }}">
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="fcolor">Couleur Favorite</label>
                    <input type="text" class="form-control" name="fcolor" placeholder="Entrez la couleur favorite" value="{{ old('fcolor') }}">
                    @error('fcolor') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Entrer le email" value="{{ old('email') }}">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                </div>
            </form>

            <!-- Table -->
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Couleur Favorite</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->fcolor }}</td>
                            <td>{{ $item->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
