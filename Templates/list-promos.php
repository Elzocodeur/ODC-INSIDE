<section class="home-section">
    <div class="title">
        <div class="left">Promotions</div>
        <div class="right">Promos - Création</div>
    </div>
    <div class="conteneur">
        <div class="contain1">
            <span>Promotion :</span>
            <span>promotion 6</span>
        </div>
        <div class="contain2">
            <span>Référentiel :</span>
            <span>Dev Web/mobile</span>
        </div>
    </div>
    <div class="content">
        <div id="container">
            <div class="section1">
                <div class="container1">
                    <div class="tabpromos">
                        <table>
                            <thead>
                                <tr>
                                    <th>Libellé</th>
                                    <th>Date Début</th>
                                    <th>Date Fin</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (findAllPromo() as $promo): ?>
                                    <tr>
                                        <td style="display: flex; align-items: center;"><img style="height: 15%; width: 10%;" src="/Projet/images/image-removebg-preview.png" alt=""><?= $promo["libelle"] ?></td>
                                        <td style="text-align: center;"><?= $promo["dateDebut"] ?></td>
                                        <td style="text-align: center;"><?= $promo["dateFin"] ?></td>
                                        <!-- Remplacer $student['action'] par $promo['action'] -->
                                        <td><input type="checkbox" <?php if ($promo['action']) : ?> checked <?php endif; ?>></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <!--  <div class="footer-pres">
                        <span style="font-weight: 100; color: rgb(54, 54, 54); position: relative; left: 0.1%;">Items per page: </span>
                        <select name="itemsperpage" id="itemsperpage">
                            <option value="1">10</option>
                            <option value="2">20</option>
                            <option value="3">30</option>
                        </select>
                        <div class="navigation">
                            <span id="numview">1 - 10 of 100</span>
                            <button>I<i class="fa-solid fa-chevron-left"></i></button>
                            <button><i class="fa-solid fa-chevron-left"></i></button>
                            <button><i class="fa-solid fa-chevron-right"></i></button>
                            <button><i class="fa-solid fa-chevron-right"></i>I</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
