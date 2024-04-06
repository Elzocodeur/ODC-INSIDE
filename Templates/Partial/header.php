<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Public/css/stylesConnexion.css">
    <link rel="stylesheet" href="../Public/css/style.css">
    <!-- A revoir le css  -->
    <link rel="stylesheet" href="../Public//css/style.css">
    <link rel="stylesheet" href="../Public/css/promotion.css">
    <link rel="stylesheet" href="../Public/css/promotions.css">
    
    <!-- inclusion css liste Apprenant -->
    <link rel="stylesheet" href="../Public/css/listeA.css">

    <!-- inclusion css liste Presence -->
    <link rel="stylesheet" href="../Public/css/presence.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/d2ba3c872c.js" crossorigin="anonymous"></script>
</head>

<body>
    <input type="checkbox" id="menu_checkbox">
    <header class="header">
        <div class="flex-left">
            <label for="menu_checkbox">
                <div><i class="fa fa-bars" aria-hidden="true"></i></div>
                <div><i class="fa-solid fa-circle-arrow-right"></i></div>
            </label>
            <div class="icons">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                    <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                </svg>
                </div>
            </div>
            <form action="#" method="post" class="search-form">
                <input type="text" name="search_box" required placeholder="Rechercher par matricule" maxlength="100">
                <button type="submit" class="fas fa-search"></button>
            </form>
        </div>
        <div class="flex-right">
            <input type="date" name="dateofbirth" id="dateofbirth" value="2024-04-01">
            <div class="profil">
                <img src="../Public/images/icon.png" class="image" alt="">
                <div class="info">
                    <p>Mamadou Gueye</p>
                    <small>Admin <i class="fa fa-angle-down" aria-hidden="true"></i></small>
                </div>
            </div>
            <!-- <div class="hoverable">
                <a href="profile.html" class="btn">Voir profile</a>
                <div class="flex-btn">
                    <a href="login.html" class="option-btn">Se déconnecter</a>
                </div>
            </div> -->
        </div>
    </header>
    <div class="side-bar">

        <div id="close-btn">
            <i class="fas fa-times"></i>
        </div>

        <div class="profile">
            <img src="../Public/images/images.png" class="image" alt="">
            <h3 class="menu">- MENU</h3>
        </div>

        <nav class="navbar">
            <a href="#"><i class="fa fa-align-right" aria-hidden="true"></i><span>Dashboard</span></a>
            <a href="index.php?page=list-promos"><i class="fa fa-list-alt" aria-hidden="true"></i></i><span>Promos</span></a>
            <a href="#"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></i><span>Réferenciels</span></a>
            <a href="index.php?page=listeApprenant.html"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </i><span>Utilisateurs</span></a>
            <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </i><span>Visiteurs</span></a>
            <a href="index.php?page=listePre"><i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </i><span>Présence</span></a>
            <a href="#"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i></i><span>Evénements</span></a>
        </nav>
    </div>