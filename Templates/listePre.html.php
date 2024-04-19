<section class="home-section">
    <div class="title">
        <div class="left">Presence</div>
        <div class="right">Presence - Liste</div>
    </div>

    <div class="content">
        <!-- partie2 lister apprenants -->
        <div id="container">
            <!-- start presence  -->
            <form id="container-presence" action="" method="post">
                <input type="hidden" name="recherche" value="filter_presence">
                <!-- start presence  -->
                <div class="presence">
                    <div class="boite status flex-cc">
                        <select name="status" id="select-status">
                            <option value="status">Status</option>
                            <option value="present"><span>present</span></option>
                            <option value="absent">absent</option>
                        </select>
                    </div>
                    <div class="boite reference flex-cc">
                        <select  name="referenciel" id="select-ref">
                            <option value="referenciel">Reférenciel</option>
                            <option value="dev_web">dev_web</option>
                            <option value="data">data</option>
                            <option value="ref_dig">ref_dig</option>
                            <option value="aws">aws</option>
                            <option value="hackeuse">hackeuse</option>
                        </select>
                    </div>
                    <div class="boite clandrier flex-cc">
                        <input type="date" name="" id="">
                    </div>
                    <div class="boite boutton flex-cc" style="background: #029386;">
                        <button type="submit">rafraichir</button>
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
                        
                        //$presence = listPresence();

                        // $status = $_POST["status"] ?? "status";
                        // $presenceFilter= filterPresence($status);



                        // $ref = $_POST["referentiel"] ?? "referentiel";
                        // $presenceFilter= filterPresence($status, $ref);

                        $valeur1 = $_POST['status'] ?? 'status';
            
                        $valeur2 = $_POST['referentiel'] ?? 'referentiel';
                        $presences = filterPresence($valeur1, $valeur2);

                        //var_dump($presenceFilter);
                        foreach ($presences as $student) {
                        ?>
                            <tr>
                                <td><?= $student["matricule"]; ?></td>
                                <td><?= $student["nom"]; ?></td>
                                <td><?= $student["prenom"]; ?></td>
                                <td><?= $student["telephone"]; ?></td>
                                <td><?= $student["referenciel"]; ?></td>
                                <td><?= $student["duree"]; ?></td>
                                <td><?= $student["status"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>
