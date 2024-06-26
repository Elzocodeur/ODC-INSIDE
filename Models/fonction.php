<?php  

// Nombre d'éléments par page
// define('ELEMENTS_PAR_PAGE', 5);


// Fonction pour une redirection
// function redirect($url)
// {
//     header('Location: '.$url);
//     exit();
// }

// fonction pour affivher tous les etudiants


function findAllStudents(){
                    $student = [
                        [ "image" => 'img1.png',
                        "nom" => 'elimane',
                        "prenom" => 'nging',
                        "email" => 'elimane@nging',
                        "genre" => 'M',
                        "telephone" => '775433567',
                        "action" => false
                        
                    ],
                        [ "image" => 'img1.png',
                            "nom" => 'seydina',
                            "prenom" => 'mhd',
                            "email" => 'moussa',
                            "genre" => 'M',
                            "telephone" => '777723657',
                            "action" => false
                            
                        ],
                        [ "image" => 'img1.png',
                            "nom" => 'pathe',
                            "prenom" => 'pathe',
                            "email" => 'pathe',
                            "genre" => 'M',
                            "telephone" => '774562398',
                            "action" => true
                            
                        ], 
                        [ "image" => 'img1.png',
                            "nom" => 'modou',
                            "prenom" => 'modou',
                            "email" => 'modou',
                            "genre" => 'M',
                            "telephone" => '77298367',
                            "action" => false
                            
                        ],
                        [ "image" => 'img1.png',
                            "nom" => 'andaw',
                            "prenom" => 'andaw',
                            "email" => 'andaw',
                            "genre" => 'M',
                            "telephone" => '771230987',
                            "action" => true
                            
                        ],
                        [ "image" => 'img1.png',
                            "nom" => 'issa',
                            "prenom" => 'issa',
                            "email" => 'issa',
                            "genre" => 'M',
                            "telephone" => '77987223546',
                            "action" => false
                            
                    ],
                    
                    [ "image" => 'img1.png',
                    "nom" => 'modou',
                    "prenom" => 'ndiaye',
                    "email" => 'modou@gmail?com',
                    "genre" => 'M',
                    "telephone" => '77536399',
                    "action" => false
                    
                ],
                [ "image" => 'img1.png',
                "nom" => 'modou',
                "prenom" => 'ndiaye',
                "email" => 'modou@gmail?com',
                "genre" => 'M',
                "telephone" => '773252599',
                "action" => false

                ],
                [ "image" => 'img1.png',
                "nom" => 'modou',
                "prenom" => 'ndiaye',
                "email" => 'modou@gmail?com',
                "genre" => 'M',
                "telephone" => '777777799',
                "action" => false

                ]
                    ];

        return $student;

}







function listPresence(){  
    $presence  = [
        [
            "matricule" => 'p7_devdat_2024_129',
            "nom" => 'Sow',
            "prenom" => 'Fatou',
            "telephone" => '771234567',
            "referenciel" => 'dev_web',
            "duree" => '05:30',
            "status" => "present"
        ],
        [
            "matricule" => 'p8_devdat_2024_130',
            "nom" => 'Ba',
            "prenom" => 'Mamadou',
            "telephone" => '778765432',
            "referenciel" => 'data',
            "duree" => '07:15',
            "status" => "present"
        ],
        [
            "matricule" => 'p9_devdat_2024_131',
            "nom" => 'Diallo',
            "prenom" => 'Aïssatou',
            "telephone" => '776543210',
            "referenciel" => 'dev_web',
            "duree" => '06:00',
            "status" => "absent"
        ],
        [
            "matricule" => 'p10_devdat_2024_132',
            "nom" => 'Kane',
            "prenom" => 'Modou',
            "telephone" => '770987654',
            "referenciel" => 'data',
            "duree" => '05:45',
            "status" => "present"
        ],
        [
            "matricule" => 'p11_devdat_2024_133',
            "nom" => 'Thiam',
            "prenom" => 'Aïcha',
            "telephone" => '779876543',
            "referenciel" => 'data',
            "duree" => '06:30',
            "status" => "absent"
        ],
        [
            "matricule" => 'p11_devdat_2024_133',
            "nom" => 'Thiam',
            "prenom" => 'Aïcha',
            "telephone" => '779876543',
            "referenciel" => 'dev_web',
            "duree" => '06:30',
            "status" => "absent"
        ],
        [
            "matricule" => 'p11_devdat_2024_133',
            "nom" => 'Thiam',
            "prenom" => 'Aïcha',
            "telephone" => '779876543',
            "referenciel" => 'aws',
            "duree" => '06:30',
            "status" => "absent"
        ],
        [
            "matricule" => 'p11_devdat_2024_133',
            "nom" => 'Thiam',
            "prenom" => 'Aïcha',
            "telephone" => '779876543',
            "referenciel" => 'aws',
            "duree" => '06:30',
            "status" => "absent"
        ],
        [
            "matricule" => 'p11_devdat_2024_133',
            "nom" => 'Thiam',
            "prenom" => 'Aïcha',
            "telephone" => '779876543',
            "referenciel" => 'hack',
            "duree" => '06:30',
            "status" => "absent"
        ]
    ];
    
    return $presence;
}


// fonction pour filtrer les presences status
//         function filteredPresence($status = 'status') {

//             $presences = listPresence();

//             if ($status == 'status') {
//                 return $presences;
//             }
//             $filtrerPresence = [];
            
//             foreach ($presences as $presence) {
//                 if ($presence['status'] == $status) {

//                     $filtrerPresence[] = $presence;
//                 }
//             }

//             return $filtrerPresence;
//  }


function filterPresence($status='status', $ref='referentiel'){
    $presences = listPresence();
    if($status == 'status' && $ref == 'referentiel'){
        return $presences;
    }

    $presencesFilter = [];
    
    foreach($presences as $presence){
        if($status != 'status' && $ref != 'referentiel'){
            // Si les deux valeurs sont sélectionnées, filtrez en fonction des deux
            if($presence['status'] == $status && $presence['referentiel'] == $ref){
                $presencesFilter[] = $presence;
            }
        } else if($status != 'status') {
            // Si seul le statut est sélectionné, filtrez en fonction du statut uniquement
            if($presence['status'] == $status){
                $presencesFilter[] = $presence;
            }
        } else if($ref != 'referentiel') {
            // Si seul le référentiel est sélectionné, filtrez en fonction du référentiel uniquement
            if($presence['referentiel'] == $ref){
                $presencesFilter[] = $presence;
            }
        }
    }

    return $presencesFilter;
}


// fonction pour lister toutes les promotions 
function findAllPromo() {

    $promos = [
        [
            "libelle" => "Promotion 1",
            "dateDebut" => "2022-01-01",
            "dateFin" => "2022-10-30",
            "action" => false
        ],

        [
            "libelle" => "Promotion 2",
            "dateDebut" => "2022-01-01",
            "dateFin" => "2022-10-30",
            "action" => true
        ],

        [
            "libelle" => "Promotion 3",
            "dateDebut" => "2022-01-01",
            "dateFin" => "2022-10-30",
            "action" => false
        ],

        [
            "libelle" => "Promotion 4",
            "dateDebut" => "2022-01-01",
            "dateFin" => "2022-10-30",
            "action" => true
        ],

        [
            "libelle" => "Promotion 5",
            "dateDebut" => "2022-01-01",
            "dateFin" => "2022-10-30",
            "action" => false
        ],

        [
            "libelle" => "Promotion 6",
            "dateDebut" => "2022-01-01",
            "dateFin" => "2022-10-30",
            "action" => true
        ]
    ];

    return $promos;
}

// Fonction pour afficher les pages de la liste d'étudiants
/* function getPages($students) {
    $totalStudents = count($students);
    $totalPages = ceil($totalStudents / ELEMENTS_PAR_PAGE);
    return $totalPages;
} */


// Fonction pour récupérer la liste d'étudiants paginée
/* function getStudentsPerPage($students, $page) {
    $totalStudents = count($students);
    $totalPages = ceil($totalStudents / ELEMENTS_PAR_PAGE);
    $offset = ($page - 1) * ELEMENTS_PAR_PAGE;
    return array_slice($students, $offset, ELEMENTS_PAR_PAGE);
}
 */


?>
