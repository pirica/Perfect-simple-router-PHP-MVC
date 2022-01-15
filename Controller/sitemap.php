<?php 
include '../Model/conn.php';
//example:
//$mysqlxml = "SELECT * FROM blog ORDER BY id DESC";
// $mysqlxml = "";
// $connxml = mysqli_query($conn, "$mysqlxml");  

header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://yousite.com</loc>        
        <lastmod>2022-01-03</lastmod>
        <priority>1.0</priority>
    </url>

    <?php            
        // while($xml=mysqli_fetch_object($connxml)) {        
        //     echo 
        //     "<url>
        //         <loc>https://warleyrodrigues.net/post?p=".$xml->id."</loc>        
        //         <lastmod>".$xml->oficialdata."</lastmod>
        //         <priority>1.0</priority>
        //     </url>"
            
        // ;}
    ?>   

</urlset>