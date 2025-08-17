<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        ::after,
        ::before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        h1 {
            font-weight: 600;
            font-size: 1.5rem;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }
        .wrapper{
            display:flex;
        }
        .main{
            min-height:100vh;
            width: 100%;
            overflow:hidden;
            transition:all 0.35 ease-in-out;
            background-color:#fafbfe;
        }
        #sidebar{
            width: 70px;
            min-width:70px;
            z-index: 1000;
            transition:all .25s ease-in-out;
            display:flex;
            flex-direction:column;
            background-color:#0e223e;
        }
        #sidebar.expand{
            width: 260px;
            min-width:260px;
        }
        #toggle-btn{
            background-color: transparent;
            cursor: pointer;
            border:0;
            padding:1rem 1.5rem;
        }
        #toggle-btn i{
            font-size:1.5rem;
            color:#fff;
        }
        .sidebar-logo{
            margin:auto 0;
        }
        .sidebar-logo a{
            color:#fff;
            font-size:1.15rem;
            font-weight:600;
        }
        #sidebar:not(.expand) .sidebar-logo,
        #sidebar:not(.expand) a.sidebar-link span{
            display:none;
        }
        .sidebar-nav{
            padding:2rem 0;
            flex:1 1 auto;
        }
        a.sidebar-link{
            padding: .625rem 1.625rem;
            color:#FFF;
            display:block;
            font-size:0.9rem;
            white-space:nowrap;
            border-left:3px solid transparent;
        }
        .sidebar-link i{
            font-size:1.1rem;
            margin-right: .75rem;
        }
        a.sidebar-link:hover{
            background-color: rgba(255,255,255,.075);
            border-left:3px solid #3b7ddd;
        }
        .sidebar-item{
            position: relative;
        }
        #sidebar:not(.expand) .sidebar-item .sidebar-dropdown{
            position: absolute;
            top:0;
            left:70px;
            background-color:#0e2238;
            padding:0;
            min-width:15rem;
            display:none;
        }
        #sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown{
            display:block;
            max-height:15rem;
            width: 100%;
            opacity: 1;
        }
        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after{
            border:solid;
            border-width:0 .075rem 0;
            content:"";
            display:inline-block;
            padding:2px;
            position:absolute;
            right:1.5rem;
            top:1.4rem;
            transform:rotate(-135deg);
            transition:all .2s ease-out;
        }
        #sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after{
            transform:rotate(45deg);
            transform:all .2s ease-out;
        }
        @media print{
            aside{
                display:none;
            }
        }
    </style>
  </head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                <i class="bi bi-grid-fill"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="index.php" target="blank">Trapezius.Trainer</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="dashboard.php" class="sidebar-link">
                            <i class="bi bi-house"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="admin.php" class="sidebar-link">
                            <i class="bi bi-people"></i>
                            <span>Week plan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="adminb.php" class="sidebar-link">
                            <i class="bi bi-people"></i>
                            <span>Month plan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="adminc.php" class="sidebar-link">
                            <i class="bi bi-people"></i>
                            <span>Year plan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="admind.php" class="sidebar-link">
                            <i class="bi bi-people"></i>
                            <span>Year-Member plan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link has-dropdown collapsed"data-bs-toggle="collapse" data-bs-target="#multi"               aria-expanded="false" aria-controls="multi">
                        <i class="bi bi-clipboard2-plus-fill"></i>
                        <span>Membership & Contact</span>
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse"data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed"data-bs-toggle="collapse" data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two data
                                </a>
                                <ul id="multi-two" class="sidebar-dropdown list-unstyled collape">
                                    <li class="sidebar-item">
                                        <a href="adminmember.php" class="sidebar-link">Membership</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="admincontak.php" class="sidebar-link">Contact Us</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link has-dropdown collapsed" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="bi bi-person-plus"></i>
                            <span>account</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse"data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="login.php" class="sidebar-link">Login</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="registrasi.php" class="sidebar-link">Register</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="logout.php" class="sidebar-link">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Logout</span>
                    </a>
                </div>
        </aside>
        <!-- Main Content -->
        <div class="main p-3">
            @yield('content')
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('js/navdashboard.js') }}"></script>
</body>
</html>