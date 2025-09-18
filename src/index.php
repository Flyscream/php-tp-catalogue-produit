<?php

$catalogue = [  
    0 => [  
        "id" => 1,  
        "nom" => "T-shirt coton bio",  
        "description" => "T-shirt en coton 100% biologique, coupe unisexe.",  
        "prix" => 19.99,  
        "categorie" => "Vêtements",  
        "image" => "t-shirt.jpg",  
        "stock" => 50  
    ],  
    1 => [  
        "id" => 2,  
        "nom" => "Mug personnalisé",  
        "description" => "Mug en céramique personnalisable avec votre photo.",  
        "prix" => 12.50,  
        "categorie" => "Objets",  
        "image" => "mug.jpg",  
        "stock" => 20  
    ],  
    2 => [  
        "id" => 3,  
        "nom" => "Carnet de notes",  
        "description" => "Carnet de notes A5 avec couverture rigide et papier recyclé.",  
        "prix" => 8.75,  
        "categorie" => "Papeterie",  
        "image" => "carnet.jpg",  
        "stock" => 100  
    ],  
    3 => [  
        "id" => 4,  
        "nom" => "Sac en toile",  
        "description" => "Sac en toile réutilisable, idéal pour les courses.",  
        "prix" => 5.00,  
        "categorie" => "Accessoires",  
        "image" => "sac.jpg",  
        "stock" => 75  
    ]  
];

// Code à écrire
$NombreArticles = count($catalogue);
for($ListCount = 0; $ListCount < $TotArticle; $ListCount++){
    echo "le produit: " . $catalogue [$ListCount] . "le prix" . $catalogue []
}