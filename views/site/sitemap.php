<?php
    /** @var $categories */
    /** @var $products */
    header("Content-type: text/xml");
    echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://xn--80atadot1h.xn--j1amh/</loc>
        <lastmod>2022-04-01T17:09:32+01:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://xn--80atadot1h.xn--j1amh/delivery/</loc>
        <lastmod>2022-04-01T17:09:33+01:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://xn--80atadot1h.xn--j1amh/contacts/</loc>
        <lastmod>2022-04-01T17:09:36+01:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <?php foreach ($categories as $category): ?>
        <url>
            <loc>https://xn--80atadot1h.xn--j1amh/products/category/<?= $category['url'] ?>/</loc>
            <lastmod>2022-04-01T17:09:36+01:00</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    <?php endforeach; ?>
    <?php foreach ($products as $product): ?>
        <url>
            <loc>https://xn--80atadot1h.xn--j1amh/products/<?= $product['url'] ?>/</loc>
            <lastmod>2022-04-01T17:09:36+01:00</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    <?php endforeach; ?>

</urlset>
