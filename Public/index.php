<?php
        // Appel du models pour charger les données depuis le models
        require_once "../Models/fonction.php";

        // Vérifier si une action est spécifiée dans l'URL
        $action = isset($_GET['page']) ? $_GET['page'] : 'connexion';
        // Afficher la page correspondante en fonction de l'action
        switch ($action) {
            case "listeApprenant.html":
                // inclusion du header
                include "../Templates/Partial/header.php";
                include "../Templates/listeApprenant.html.php";
                // inclusion du footer
                include_once "../Templates/Partial/footer.php";
                break;
            case 'listePre':
                // inclusion du header
                include "../Templates/Partial/header.php";
                include "../Templates/listePre.html.php";
                // inclusion du footer
                include_once "../Templates/Partial/footer.php";
                // inclusion du footer
                include_once "../Templates/Partial/footer.php";
                break;
            case 'list-promos':
                // inclusion du header
                include "../Templates/Partial/header.php";
                include "../Templates/list-promos.php";
                // inclusion du footer
                include_once "../Templates/Partial/footer.php";
                break;
            default:
                // inclusion du header
                include "../Templates/connexion.php";
                break;
        }
?>
