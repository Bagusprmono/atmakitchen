<?php

$detail = [
    "name" => "Atma Kitchen",
    "tagline" => "Bakery and resto",
    "logo" => "img/Atma.png"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atma Kitchen | {{ $judul }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" href="<?php echo $detail["logo"];?>" type="image/x-icon" />
    <style>

        .logo-kitchen {
            width: 4rem;
            height: 4rem;
            margin-left: 5px;
        }

        .navbar {
            background-color: #7AA2E3;
        }

        .nav-home-btn {
            text-decoration: none;
            color: #FFFFFF;
        }

        .nav-link {
            color: #FFFFFF
        }

        footer {
            background-color: #232D3F;
            padding: 1rem;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- Navbar Section -->
    <div class="navbar">
        <ul class="nav justify-content-start">
            <a href="./" class=" px-3 d-flex align-items-center nav-home-btn">
                <img src="<?php echo $detail["logo"]; ?>" class="logo-kitchen">
                <div>
                    <p class="mt-1 fs-5 fw-bold"><?php echo $detail["name"]; ?></p>
                    <p class="small"><?php echo $detail["tagline"]; ?></p>
                </div>
            </a>

        </ul>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./catalog">Catalog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>