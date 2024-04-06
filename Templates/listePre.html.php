<section class="home-section">
    <div class="title">
        <div class="left">Presence</div>
        <div class="right">Presence - Liste</div>
    </div>

    <div class="content">
        <!-- partie2 lister apprenants -->
        <div id="container">
            <!-- start presence  -->
            <div id="container-presence">
                <!-- start presence  -->
                <div class="presence">
                    <div class="boite status flex-cc">
                        <select name="select-status" id="select-status">
                            <option value="">Status</option>
                            <option value="present"><span>present</span></option>
                            <option value="absent">absent</option>
                        </select>
                    </div>
                    <div class="boite reference flex-cc">
                        <select name="select-ref" id="select-ref">
                            <option value="">Reférenciel</option>
                            <option value="web">dev web</option>
                            <option value="data">dev data</option>
                            <option value="dig">ref dig</option>
                            <option value="awf">awf</option>
                            <option value="hack">hackeuse</option>
                        </select>
                    </div>
                    <div class="boite clandrier flex-cc">
                        <input type="date" name="" id="">
                    </div>
                    <div class="boite boutton flex-cc" style="background: #029386;">
                        <button>rafraichir</button>
                    </div>
                </div>
                <table class="table">

                    <thead>
                        <tr>
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Référentiel</th>
                            <th>Durée</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <!-- Contenu du tableau -->
                    <tbody>
                        <?php
                        $presence = listPresence();
                        foreach ($presence as $student) {
                        ?>
                            <tr>
                                <td><?= $student["matricule"]; ?></td>
                                <td><?= $student["nom"]; ?></td>
                                <td><?= $student["prenom"]; ?></td>
                                <td><?= $student["telephone"]; ?></td>
                                <td><?= $student["referenciel"]; ?></td>
                                <td><?= $student["duree"]; ?></td>
                                <td><?= $student["present"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
