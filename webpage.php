<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Welcome to My PHP Website</h1>
        <nav>
            <a href="?page=home">Home</a>
            <a href="?page=about">About</a>
        </nav>
    </header>

    <main>
        <?php
        $page = $_GET['page'] ?? 'home';

        if ($page == 'about') {
            echo "<h2>About Us</h2><p>This is the about page content.</p>";
        } else {
            echo "<h2>Home Page</h2><p>This is the home page content.</p>";
        }
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Website. All rights reserved.</p>
    </footer>

</body>
</html>
