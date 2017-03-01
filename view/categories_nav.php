<ul class="nav">
            <?php foreach ($products as $product) : ?>
            <li>
                <a href="?action=view_product&product_id=
                    <?php echo $product['productID']; ?>">
                    <?php echo $product['productName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>