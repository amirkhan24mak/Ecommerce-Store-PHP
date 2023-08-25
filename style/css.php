<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

<style>
        :root {
            font-size: 16px;
            font-family: 'Open Sans';
            --text-primary: #b6b6b6;
            --text-secondary: #ececec;
            --bg-primary: #23232e;
            --bg-secondary: #141418;
            --transition-speed: 600ms;
        }

        body {
            color: black;
            background-color: white;
            margin: 0;
            padding: 0;
        }

        body::-webkit-scrollbar {
            width: 0.25rem;
        }

        body::-webkit-scrollbar-track {
            background: #1e1e24;
        }

        body::-webkit-scrollbar-thumb {
            background: #6649b8;
        }

        main {
            margin-left: 5rem;
            padding: 1rem;
        }

        .navbar {
            position: fixed;
            background-color: var(--bg-primary);
            transition: width 600ms ease;
            overflow: scroll;
        }

        .navbar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100%;
        }

        .nav-item {
            width: 100%;
        }

        .nav-item:last-child {
            margin-top: auto;
        }

        .nav-link {
            display: flex;
            align-items: center;
            height: 5rem;
            color: var(--text-primary);
            text-decoration: none;
            filter: grayscale(100%) opacity(0.7);
            transition: var(--transition-speed);
        }

        .nav-link:hover {
            filter: grayscale(0%) opacity(1);
            background: var(--bg-secondary);
            color: var(--text-secondary);
        }

        .link-text {
            display: none;
            margin-left: 1rem;
        }

        .nav-link svg {
            width: 2rem;
            min-width: 2rem;
            margin: 0 1.5rem;
        }

        .fa-primary {
            color: #ff7eee;
        }

        .fa-secondary {
            color: #df49a6;
        }

        .fa-primary,
        .fa-secondary {
            transition: var(--transition-speed);
        }

        .logo {
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 1rem;
            text-align: center;
            color: var(--text-secondary);
            background: var(--bg-secondary);
            font-size: 1.3rem;
            letter-spacing: 0.3ch;
            width: 100%;
        }

        .logo svg {
            transform: rotate(0deg);
            transition: var(--transition-speed);
        }

        .logo-text {
            display: inline;
            position: absolute;
            left: -999px;
            transition: var(--transition-speed);
        }

        .navbar:hover .logo svg {
            transform: rotate(-180deg);
        }

        /* Small screens */
        @media only screen and (max-width: 600px) {
            .navbar {
                bottom: 0;
                width: 100vw;
                height: 5rem;
            }

            .logo {
                display: none;
            }

            .navbar-nav {
                flex-direction: row;
            }

            .nav-link {
                justify-content: center;
            }

            main {
                margin: 0;
            }
        }

        /* Large screens */
        @media only screen and (min-width: 600px) {
            .navbar {
                top: 0;
                width: 5rem;
                height: 100vh;
            }

            .navbar:hover {
                width: 16rem;
            }

            .navbar:hover .link-text {
                display: inline;
            }

            .navbar:hover .logo svg {
                margin-left: 11rem;
            }

            .navbar:hover .logo-text {
                left: 0px;
            }
        }

        .dark {
            --text-primary: #b6b6b6;
            --text-secondary: #ececec;
            --bg-primary: #23232e;
            --bg-secondary: #141418;
        }

        .light {
            --text-primary: #1f1f1f;
            --text-secondary: #000000;
            --bg-primary: #ffffff;
            --bg-secondary: #e4e4e4;
        }

        .solar {
            --text-primary: #576e75;
            --text-secondary: #35535c;
            --bg-primary: #fdf6e3;
            --bg-secondary: #f5e5b8;
        }

        .theme-icon {
            display: none;
        }

        .dark #darkIcon {
            display: block;
        }

        .light #lightIcon {
            display: block;
        }

        .solar #solarIcon {
            display: block;
        }
    </style>