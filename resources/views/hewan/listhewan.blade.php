<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Shelter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <h1>SINGARAJA SHELTER</h1>
    </header>
    <div class="about-shelter">
        <h2>Tentang Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perferendis totam eligendi reiciendis suscipit dolor quas ratione ab error! Optio sunt ab quam? Voluptate id itaque dolor placeat, optio officia!</p>
    </div>
    <div class="addopt-gallery">
        <h2>Addopt Us!</h2>
    </div>
    <div class="dashboard-content">
            @foreach ($hewan as $hewan)
            <ul>
                <div class="dashboard-card">
                    <img src="image/cute-dog-house-waiting-be-adopted-by-someone.jpg" class="card-image">
                    <div class="card-detail">
                        <h4>{{ $hewan->nama }} ({{ $hewan->umur }})</h4>
                        <p> {{ $hewan->jenis }}</p>
                        <p><b>Kondisi:</b></p>
                        <p>{{ $hewan->kondisi }}</p>
                        <p><b>Syarat Adopsi:</b></p>
                        <p>{{ $hewan->syarat }}</p>
                    </div>
                    <div class="details">
                        <a href="/addopt">request addopt</a>
                    </div>
                </div>
            </ul>
            @endforeach  
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/toshelter" class="btn btn-primary" role="button">Request to Shelter</a>
        <a href="#" class="btn btn-danger" role="button">Donate</a>
    </div>
</body>
</html>