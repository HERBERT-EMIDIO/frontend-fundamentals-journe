<?php
/* ==========================================================================
   [ BACK-END LOGIC ]
   Variables and Data Structures (Simulating a Database)
   ==========================================================================
*/

$shopName = "Brew & Beans";
$foundingYear = 2025;
$welcomeMessage = "Welcome to " . $shopName . "!";

// ARRAY: This is how Laravel receives data from the Database
// Este array simula os dados que virão do banco de dados no Laravel
$products = [
    [
        "name"  => "Dark Roast",
        "price" => 4.00,
        "description" => "Deep, smoky, and intense flavor.",
        "image" => "https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?q=80&w=500"
    ],
    [
        "name"  => "Caramel Macchiato",
        "price" => 5.50,
        "description" => "Sweet caramel with creamy milk.",
        "image" => "https://images.unsplash.com/photo-1534706936160-d5ee67737249?q=80&w=500"
    ],
    [
        "name"  => "Vanilla Latte",
        "price" => 4.75,
        "description" => "Smooth vanilla with a velvety finish.",
        "image" => "https://images.unsplash.com/photo-1541167760496-162955ed8a9f?q=80&w=500"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $shopName; ?> | Premium Coffee Shop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header>
        <div class="header-container">
            <h1><?php echo $shopName; ?></h1>
            <nav class="main-navigation">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="home" class="hero-section">
            <div class="hero-content">
                <h2><?php echo $welcomeMessage; ?></h2>
                <p>The best beans, roasted to perfection since <?php echo $foundingYear; ?>.</p>
                <button class="btn-primary">View Menu</button>
            </div>
        </section>

        <section id="menu" class="menu-section">
            <header class="section-header">
                <h2>Our Specialties</h2>
            </header>

            <div class="menu-grid">

                <?php 
                /* FOREACH LOOP: Automation
                   Para cada item dentro do array $products, o PHP vai gerar o HTML abaixo.
                */
                foreach($products as $item): 
                ?>
                <article class="product-card">
                    <div class="product-image">
                        <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                    </div>
                    <h3><?php echo $item['name']; ?></h3>
                    <p><?php echo $item['description']; ?></p>
                    <span class="price">$<?php echo number_format($item['price'], 2); ?></span>
                </article>
                <?php endforeach; ?>

            </div>
        </section>

    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; <?php echo date("Y"); ?> <?php echo $shopName; ?>. All rights reserved.</p>
            <div class="signature">
                <p>Created with <i class="fa-solid fa-mug-hot"></i> by <a href="https://github.com/HERBERT-EMIDIO"
                        target="_blank">Herbert Emidio</a></p>
            </div>
        </div>
    </footer>

</body>

</html>