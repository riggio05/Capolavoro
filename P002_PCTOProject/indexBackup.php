<?php
require 'vendor/autoload.php';
$f3 = \Base::instance();
$db = new DB\SQL('mysql:host=localhost;port=3306;dbname=pctodatabase', 'root', '');

$f3->route(
    'GET /',
    function () {
        $view = new View();
        echo $view->render('home.php');
    }
);

$f3->route(
    'GET /student/signupview',
    function ($f3) {
        $view = new View();
        echo $view->render('signupS.php');
    }
);

$f3->route(
    'GET /administrator/signupview',
    function ($f3) {
        $view = new View();
        echo $view->render('signupA.php');
    }
);

$f3->route(
    'GET /student/home',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'student') {
            $view = new View();
            echo $view->render('homeS.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /administrator/home',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'admin') {
            $view = new View();
            echo $view->render('homeA.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /student/aziende',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'student') {
            $view = new View();
            echo $view->render('aziendeS.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /administrator/aziende',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'admin') {
            $view = new View();
            echo $view->render('aziendeA.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /administrator/studenti',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'admin') {
            $view = new View();
            echo $view->render('studentiA.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /administrator/studenti/edit',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'admin') {
            $view = new View();
            echo $view->render('modificaStudente.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /student/diariodibordo',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'student') {
            $view = new View();
            echo $view->render('diarioDiBordo.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /student/account',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'student') {
            $view = new View();
            echo $view->render('accountS.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /administrator/studenti/visita',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'admin') {
            $view = new View();
            echo $view->render('infoStudenteA.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /student/aziende/visita',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'student') {
            $view = new View();
            echo $view->render('infoAziendaS.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /administrator/aziende/visita',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'admin') {
            $view = new View();
            echo $view->render('infoAziendaA.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

$f3->route(
    'GET /administrator/studenti/visita/diariodibordo',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'admin') {
            $view = new View();
            echo $view->render('diarioDiBordoA.php');
        } else {
            echo ('Non sei autorizzato ad accedere a questa pagina');
        }
    }
);

function stampaAziende($db)
{
    $agency = "SELECT * FROM agency";
    $agencyResult = $db->query($agency);

    if ($agencyResult) {
        $data = $agencyResult->fetchAll(PDO::FETCH_ASSOC);

        if ($data) {
            header('Content-Type: application/json');
            echo json_encode($data);
        } else {
            echo "Errore nella decodifica del JSON.";
        }
    } else {
        // Se non ci sono aziende nel database
        echo json_encode(array('message' => 'Nessuna azienda trovata nel database.'));
    }
}

function stampaStudenti($db)
{
    $studentQuery = "SELECT * FROM student";
    $studentStatement = $db->query($studentQuery);

    if ($studentStatement) {
        $data = $studentStatement->fetchAll(PDO::FETCH_ASSOC);

        if ($data) {
            echo json_encode($data);
        } else {
            echo "Errore nella decodifica del JSON.";
        }
    } else {
        // Se non ci sono studenti nel database
        echo json_encode(array('message' => 'Nessuna azienda trovata nel database.'));
    }
}

function stampaStudente($db, $f3) //permette allo studente di visualizzare le proprie info
{
    $student = "SELECT * FROM student WHERE id = :id";
    $id = $f3->get('SESSION.id');
    $stmt = $db->prepare($student);
    $stmt->execute(array(':id' => $id));

    // Ottieni i risultati
    $studentResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($studentResult) {
        echo json_encode($studentResult);
    } else {
        // Se non ci sono risultati
        echo json_encode(array('message' => 'Nessuno studente trovato nel database.'));
    }
}

function stampaStudentInfo($db, $f3)
{
    $studentId = $f3->get('GET.id');
    $student = "SELECT student.name AS name, student.surname, student.mail, student.address, student.CAP, student.subject, student.class_name, student.school_year, agency.name AS agency
    FROM student LEFT JOIN stage ON student.id = stage.student LEFT JOIN agency ON stage.agency = agency.id WHERE student.id = :id";
    $stmt = $db->prepare($student);
    $stmt->execute(array(':id' => $studentId));
    $studentResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($studentResult) {
        header('Content-Type: application/json');
        echo json_encode($studentResult);
    } else {
        echo json_encode(array('message' => 'Nessuno studente trovato nel database.'));
    }
}


function stampaAgencyInfo($db, $f3)
{
    $aziendaId = $f3->get('GET.id');
    $agency = "SELECT * FROM agency WHERE id = :id";
    $stmt = $db->prepare($agency);
    $stmt->execute(array(':id' => $aziendaId));

    $agencyResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($agencyResult) {
        header('Content-Type: application/json');
        echo json_encode($agencyResult);
    } else {
        echo json_encode(array('message' => 'Nessuna agenzia trovato nel database.'));
    }
}

function stampaDiarioDiBordo($db, $f3)
{
    $studentId = $f3->get('GET.id');
    $logbook = "SELECT * FROM logbook WHERE student = :id";
    $stmt = $db->prepare($logbook);
    $stmt->execute(array(':id' => $studentId));

    $logbookResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($logbookResult) {
        header('Content-Type: application/json');
        echo json_encode($logbookResult);
    } else {
        echo json_encode(array('message' => 'Nessun diario di bordo trovato nel database.'));
    }
}

$f3->route(
    'POST /student/login',
    function ($f3) use ($db) {
        $email = $f3->get('POST.email');
        $password = $f3->get('POST.password');
        $sql_select = "SELECT * FROM student WHERE mail = :email";
        $studentResult = $db->exec($sql_select, array(':email' => $email));

        if (!empty($studentResult)) {
            $studentData = $studentResult[0]; // Assume solo un risultato per l'email
            if (password_verify($password, $studentData["password"])) {
                $f3->set('SESSION.type', 'student');
                $f3->set('SESSION.logged', true);
                $f3->set('SESSION.id', $studentData['id']);
                header("location: http://localhost/P002_PCTOProject/student/home");
                exit;
            } else {
                echo "Password errata";
            }
        } else {
            echo ('Account non trovato');
        }
    }
);



$f3->route(
    'POST /student/signup',
    function ($f3) use ($db) {
        $nome = $f3->get('POST.name');
        $cognome = $f3->get('POST.surname');
        $email = $f3->get('POST.email');
        $password = $f3->get('POST.password');
        $classe = $f3->get('POST.class');
        $indirizzo = $f3->get('POST.address');
        $CAP = $f3->get('POST.CAP');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Verifica se l'email è già presente nel database
        $query_check_email = "SELECT COUNT(*) AS email_count FROM student WHERE mail = :email";
        $email_count = $db->exec($query_check_email, array(':email' => $email));
        $email_count = $email_count[0]['email_count']; // conteggio effettivo

        if ($email_count > 0) {
            echo "Mail già esistente, inserire un altro indirizzo mail";
        } else {
            $query_max_id = "SELECT id AS max_id FROM student ORDER BY id DESC LIMIT 1";
            $max_id_result = $db->exec($query_max_id);
            $max_id_row = $max_id_result[0];
            $max_id = $max_id_row['max_id'];
            $new_id = $max_id + 1;

            $insert = "INSERT INTO student (id, name, surname, mail, password, address, CAP, class_name, school_year)
           VALUES (:new_id, :nome, :cognome, :email, :hashed_password, :indirizzo, :CAP, :classe, '2023-2024')";

            $result2 = $db->exec(
                $insert,
                array(
                    ':new_id' => $new_id,
                    ':nome' => $nome,
                    ':cognome' => $cognome,
                    ':email' => $email,
                    ':hashed_password' => $hashed_password,
                    ':indirizzo' => $indirizzo,
                    ':CAP' => $CAP,
                    ':classe' => $classe
                )
            );
            header("location: http://localhost/P002_PCTOProject/student/home");
            $f3->set('SESSION.id', $new_id);
            $f3->set('SESSION.logged', true);
            $f3->set('SESSION.type', 'student');
        }
    }
);


$f3->route(
    'POST /administrator/login',
    function ($f3) use ($db) {
        $email = $f3->get('POST.email');
        $password = $f3->get('POST.password');
        $sql_select = "SELECT * FROM administrator WHERE mail = :email";
        $adminResult = $db->exec($sql_select, array(':email' => $email));

        if (!empty($adminResult)) {
            $adminData = $adminResult[0];
            if (password_verify($password, $adminData["password"])) {
                $f3->set('SESSION.id', $adminData['id']);
                $f3->set('SESSION.logged', true);
                $f3->set('SESSION.type', 'admin');
                header("location: http://localhost/P002_PCTOProject/administrator/home");
            } else {
                echo "Password errata";
            }
        } else {
            echo ('Account non trovato');
        }
    }
);

$f3->route(
    'POST /administrator/signup',
    function ($f3) use ($db) {
        $nome = $f3->get('POST.name');
        $cognome = $f3->get('POST.surname');
        $email = $f3->get('POST.email');
        $password = $f3->get('POST.password');
        $classe = $f3->get('POST.class');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Verifica se l'email è già presente nel database
        $query_check_email = "SELECT COUNT(*) AS email_count FROM administrator WHERE mail = :email";
        $email_count = $db->exec($query_check_email, array(':email' => $email));
        $email_count = $email_count[0]['email_count']; // conteggio effettivo

        if ($email_count > 0) {
            echo "Mail già esistente, inserire un altro indirizzo mail";
        } else {
            $query_max_id = "SELECT id AS max_id FROM administrator ORDER BY id DESC LIMIT 1";
            $max_id_result = $db->exec($query_max_id);
            $max_id_row = $max_id_result[0];
            $max_id = $max_id_row['max_id'];
            $new_id = $max_id + 1;

            $insert = "INSERT INTO administrator (id, name, surname, mail, password, class_name, school_year)
            VALUES (:new_id, :nome, :cognome, :email, :hashed_password, :class, '2023-2024')";
            $result2 = $db->exec(
                $insert,
                array(
                    ':new_id' => $new_id,
                    ':nome' => $nome,
                    ':cognome' => $cognome,
                    ':email' => $email,
                    ':class' => $classe,
                    ':hashed_password' => $hashed_password
                )
            );

            header("location: http://localhost/P002_PCTOProject/administrator/home");
            $f3->set('SESSION.id', $new_id);
            $f3->set('SESSION.logged', true);
            $f3->set('SESSION.type', 'admin');
        }
    }
);

//EDIT
$f3->route(
    'POST /administrator/studenti/editConfirm',
    function ($f3) use ($db) {
        $studenteId = $f3->get('POST.studentId');
        $nome = $f3->get('POST.name');
        $cognome = $f3->get('POST.surname');
        $materia = $f3->get('POST.subject');
        $voto = $f3->get('POST.mark');
        $classe = $f3->get('POST.class');
        $annoScolastico = $f3->get('POST.schoolYear');

        // Query SQL per aggiornare gli attributi dello studente nel database
        $query = "UPDATE student SET name=?, surname=?, subject=?, mark=?, class_name=?, school_year=? WHERE id=?";
        $stmt = $db->prepare($query);
        $success = $stmt->execute([$nome, $cognome, $materia, $voto, $classe, $annoScolastico, $studenteId]);

        if ($success) {
            echo "Aggiornamento del record dello studente riuscito.";
        } else {
            echo "Errore durante l'aggiornamento del record dello studente: " . $stmt->errorInfo()[2];
        }
    }
);


//DA RIGUARDARE
$f3->route(
    'POST /student/diariodibordo',
    function ($f3) use ($db) {
        $studente = $f3->get('SESSION.id');
        $data = $f3->get('POST.date');
        $inizioMattina = $f3->get('POST.startMorning');
        $fineMattina = $f3->get('POST.endMorning');
        $inizioPomeriggio = $f3->get('POST.startAfternoon');
        $finePomeriggio = $f3->get('POST.endAfternoon');
        $descrizione = $f3->get('POST.description');
        $ruolo = $f3->get('POST.role');

        // Controllo se lo studente ha già inserito un record per lo stesso giorno
        $checkQuery = "SELECT COUNT(*) AS count FROM logbook WHERE student = :studente AND day = :data";
        $checkResult = $db->exec($checkQuery, array(':studente' => $studente, ':data' => $data));
        $count = $checkResult[0]['count'];

        if ($count > 0) {
            // Se esiste già un record per lo stesso giorno
            echo "Hai già inserito un record per questo giorno nel diario di bordo.";
        } else {
            // Ottiengo l'ID massimo o impostalo a 0 se non ci sono record
            $query_max_id = "SELECT COALESCE(MAX(id), 0) AS max_id FROM logbook";
            $max_id_result = $db->exec($query_max_id);
            $max_id = $max_id_result[0]['max_id'];
            $new_id = $max_id + 1;

            $insert = "INSERT INTO logbook (id, day, start_morning, end_morning, start_afternoon, end_afternoon, description, role, student)
                    VALUES (:new_id, :data, :inizioMattina, :fineMattina, :inizioPomeriggio, :finePomeriggio, :descrizione, :ruolo, :studente)";
            $result2 = $db->exec(
                $insert,
                array(
                    ':new_id' => $new_id,
                    ':data' => $data,
                    ':inizioMattina' => $inizioMattina,
                    ':fineMattina' => $fineMattina,
                    ':inizioPomeriggio' => $inizioPomeriggio,
                    ':finePomeriggio' => $finePomeriggio,
                    ':descrizione' => $descrizione,
                    ':ruolo' => $ruolo,
                    ':studente' => $studente
                )
            );
            // Messaggio di conferma 
            echo "Record inserito con successo nel diario di bordo.";
        }
    }
);

$f3->route(
    'GET /api/student/aziende/preferiti',
    function ($f3) use ($db) {
        $studentId = $f3->get('SESSION.id');
        $favourite = "SELECT agency.*
        FROM favourites
        JOIN agency ON favourites.agency = agency.id
        WHERE favourites.student = :id";

        $stmt = $db->prepare($favourite);
        $stmt->execute(array(':id' => $studentId));
        $favouriteResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($favouriteResult) {
            header('Content-Type: application/json');
            echo json_encode($favouriteResult);
        } else {
            echo json_encode(array('message' => 'Nessun preferito trovato nel database.'));
        }
    }
);

$f3->route(
    'GET /student/aziende/visita/preferiti',
    function ($f3) use ($db) {
        $studente = $f3->get('SESSION.id');
        $azienda = $f3->get('GET.id');

        $countQuery = "SELECT COUNT(*) AS count FROM favourites WHERE student = :studente";
        $countResult = $db->exec($countQuery, array(':studente' => $studente));
        $currentCount = $countResult[0]['count'];

        if ($currentCount >= 3) {
            // Se lo studente ha già 3 aziende nei preferiti
            echo "Hai già raggiunto il limite massimo di aziende nei preferiti.";
        } else {
            // Se l'azienda è già stata inserita nei preferiti
            $checkQuery = "SELECT COUNT(*) AS count FROM favourites WHERE student = :studente AND agency = :azienda";
            $checkResult = $db->exec($checkQuery, array(':studente' => $studente, ':azienda' => $azienda));
            $count = $checkResult[0]['count'];

            if ($count > 0) {
                // Se l'azienda è già nei preferiti
                echo "Questa azienda è già nei tuoi preferiti.";
            } else {
                // aggiungo l'azienda ai preferiti
                $insert = "INSERT INTO favourites (student, agency) VALUES (:studente, :azienda)";
                $result2 = $db->exec($insert, array(':studente' => $studente, ':azienda' => $azienda));
                echo "Azienda aggiunta ai preferiti con successo.";
            }
        }
    }
);

$f3->route(
    'GET /api/preferiti',
    function ($f3) use ($db) {
        $studentId = $f3->get('GET.id');
        $favourite = "SELECT agency.*
        FROM favourites
        JOIN agency ON favourites.agency = agency.id
        WHERE favourites.student = :id";

        $stmt = $db->prepare($favourite);
        $stmt->execute(array(':id' => $studentId));
        $favouriteResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($favouriteResult) {
            header('Content-Type: application/json');
            echo json_encode($favouriteResult);
        } else {
            echo json_encode(array('message' => 'Nessun preferito trovato nel database.'));
        }
    }
);
$f3->route(
    'POST /student/aziende/visita/recensione',
    function ($f3) use ($db) {
        $studentId = $f3->get('SESSION.id');
        $azienda = $f3->get('POST.idAzienda');
        $recensione = $f3->get('POST.review');
        $voto = $f3->get('POST.rating');

        // Verifica se lo studente ha già lasciato una recensione per questa azienda
        $checkReviewQuery = "SELECT COUNT(*) AS num_reviews FROM review WHERE student = :studente AND agency = :azienda";
        $stmt = $db->prepare($checkReviewQuery);
        $stmt->execute(array(':studente' => $studentId, ':azienda' => $azienda));
        $numReviews = $stmt->fetch(PDO::FETCH_ASSOC)['num_reviews'];

        if ($numReviews > 0) {
            // Lo studente ha già lasciato una recensione per questa azienda, quindi non può farne un'altra
            echo ('Hai già lasciato una recensione per questa azienda.');
            return;
        }

        // Inserimento della nuova recensione nel database
        $query_max_id = "SELECT COALESCE(MAX(id), 0) AS max_id FROM review";
        $max_id_result = $db->exec($query_max_id);
        $max_id = $max_id_result[0]['max_id'];
        $new_id = $max_id + 1;

        $insert = "INSERT INTO review (id, mark, comment, student, agency)
                VALUES (:new_id, :voto, :commento, :studente, :azienda)";
        $result2 = $db->exec(
            $insert,
            array (
                ':new_id' => $new_id,
                ':voto' => $voto,
                ':commento' => $recensione,
                ':studente' => $studentId,
                ':azienda' => $azienda
            )
        );

        // Risposta JSON che conferma il successo dell'inserimento della recensione
        echo json_encode(array('message' => 'Recensione inserita con successo.'));
    }
);


$f3->route(
    'GET /api/aziende/visita/recensione',
    function ($f3) use ($db) {
        $azienda = $f3->get('GET.id');

        $reviews = "SELECT review.*, student.name, student.surname
        FROM review
        JOIN student ON review.student = student.id
        WHERE review.agency = :agency";

        $stmt = $db->prepare($reviews);
        $stmt->execute(array(':agency' => $azienda));
        $reviewsResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($reviewsResult) {
            header('Content-Type: application/json');
            echo json_encode($reviewsResult);
        } else {
            echo json_encode(array('message' => 'Nessuna recensione trovata nel database.'));
        }
    }
);

$f3->route(
    'POST /administrator/studenti/visita/assegnaAzienda',
    function ($f3) use ($db) {
        $azienda = $f3->get('POST.idAzienda');
        $studente = 
        $amministratore = $f3->get('SESSION.id');

        echo $studente;
    }
);



$f3->route('GET /student/accountS', function ($f3) use ($db) {
    stampaStudente($db, $f3);
});

$f3->route('GET /student/aziendeS', function ($f3) use ($db) {
    stampaAziende($db);
});

$f3->route('GET /administrator/aziendeA', function ($f3) use ($db) {
    stampaAziende($db);
});

$f3->route('GET /administrator/studentiA', function ($f3) use ($db) {
    stampaStudenti($db);
});

$f3->route(
    'GET /api/administrator/studenti/visita',
    function ($f3) use ($db) {
        stampaStudentInfo($db, $f3);
    }
);

$f3->route(
    'GET /api/student/aziende/visita',
    function ($f3) use ($db) {
        stampaAgencyInfo($db, $f3);
    }
);

$f3->route(
    'GET /api/administrator/aziende/visita',
    function ($f3) use ($db) {
        stampaAgencyInfo($db, $f3);
    }
);

$f3->route(
    'GET /api/administrator/studenti/visita/diariodibordo',
    function ($f3) use ($db) {
        stampaDiarioDiBordo($db, $f3);
    }
);

$f3->run();
