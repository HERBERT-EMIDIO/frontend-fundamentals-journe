<?php
/* ==========================================================================
   [ BACK-END LOGIC ]
   Variables and Data Structures.
   ==========================================================================
*/

$shopName = "Brew & Beans";
$foundingYear = 2025;
$welcomeMessage = "Welcome to " . $shopName . "!";

// ARRAY: Product data (Future Laravel Model data)
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

/* [ VIEW ASSEMBLY ]
   Assembling the page parts. 
   Note: We use '../' to go up one folder to reach 'resources'.
*/

// Step 1: Include the Header (Inicia o HTML e o Topo)
include '../resources/view/header.php'; 
?>

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
                /* LOOP: Automating card creation */
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

<?php 
// Step 2: Include the Footer (Fecha o HTML e o Rodapé)
include '../resources/view/footer.php'; 
?>