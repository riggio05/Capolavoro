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
    'GET /account/logout',
    function ($f3) {
        $f3->clear('SESSION');
        header("Location: http://localhost/P002_PCTOProject/");
        exit;
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
    'GET /student/diariodibordo/visualizza',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'student') {
            $view = new View();
            echo $view->render('diarioDiBordoS.php');
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
    'GET /administrator/account',
    function ($f3) {
        $tipo = $f3->get('SESSION.type');
        if (isset($tipo) && $f3->get('SESSION.type') === 'admin') {
            $view = new View();
            echo $view->render('accountA.php');
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

function verifyStudentAgency($db, $studentId)
{
    $check = "SELECT COUNT(*) AS count FROM stage WHERE student = :student";
    $result = $db->exec($check, array(':student' => $studentId));

    return ($result[0]['count'] > 0);
}

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
            header('Content-Type: application/json');
            echo json_encode($data);
        } else {
            echo "Errore nella decodifica del JSON.";
        }
    } else {
        // Se non ci sono studenti nel database
        echo json_encode(array('message' => 'Nessuna azienda trovata nel database.'));
    }
}


//STAMPA ACCOUNT STUDENTE
function stampaStudente($db, $f3) //permette allo studente di visualizzare le proprie info
{
    $student = "SELECT student.id, student.name AS name, student.surname, student.mail, student.address, student.CAP, student.subject, student.class_name, student.school_year, agency.name AS agency
    FROM student 
    LEFT JOIN stage ON student.id = stage.student 
    LEFT JOIN agency ON stage.agency = agency.id WHERE student.id = :id";
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

//STAMPA ACCOUNT ADMIN
function stampaAdmin($db, $f3)
{
    $student = "SELECT * FROM administrator WHERE id = :id";
    $id = $f3->get('SESSION.id');
    $stmt = $db->prepare($student);
    $stmt->execute(array(':id' => $id));

    // Ottieni i risultati
    $studentResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($studentResult) {
        echo json_encode($studentResult);
    } else {
        // Se non ci sono risultati
        echo json_encode(array('message' => 'Nessun amministratore trovato nel database.'));
    }
}

function stampaStudentInfo($db, $f3)
{
    $studentId = $f3->get('GET.id');
    $student = "SELECT student.id, student.name AS name, student.surname, student.mail, student.address, student.CAP, student.subject, student.class_name, student.school_year, agency.name AS agency
    FROM student 
    LEFT JOIN stage ON student.id = stage.student 
    LEFT JOIN agency ON stage.agency = agency.id WHERE student.id = :id";
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
    $agency = "SELECT agency.id, agency.name, agency.description, agency.address, agency.CAP, agency.img, tutor.name AS nameTutor, tutor.surname AS surnameTutor, tutor.phone
    FROM agency 
    LEFT JOIN tutor ON tutor.agency = agency.id
    WHERE agency.id = :id";
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
        $mail = $f3->get('POST.email');
        $password = $f3->get('POST.password');
        $sql_select = "SELECT * FROM student WHERE mail = :mail";
        $studentResult = $db->exec($sql_select, array(':mail' => $mail));

        if (!empty($studentResult)) {
            $studentData = $studentResult[0]; // Assume solo un risultato per l'mail
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
        $mail = $f3->get('POST.email');
        $password = $f3->get('POST.password');
        $classe = $f3->get('POST.class');
        $indirizzo = $f3->get('POST.address');
        $CAP = $f3->get('POST.CAP');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Verifica se l'mail è già presente nel database
        $query_check_mail = "SELECT COUNT(*) AS mail_count FROM student WHERE mail = :mail";
        $mail_count = $db->exec($query_check_mail, array(':mail' => $mail));
        $mail_count = $mail_count[0]['mail_count']; // conteggio effettivo

        if ($mail_count > 0) {
            echo "Mail già esistente, inserire un altro indirizzo mail";
        } else {
            $query_max_id = "SELECT id AS max_id FROM student ORDER BY id DESC LIMIT 1";
            $max_id_result = $db->exec($query_max_id);
            $max_id_row = $max_id_result[0];
            $max_id = $max_id_row['max_id'];
            $new_id = $max_id + 1;

            $insert = "INSERT INTO student (id, name, surname, mail, password, address, CAP, class_name, school_year)
           VALUES (:new_id, :nome, :cognome, :mail, :hashed_password, :indirizzo, :CAP, :classe, '2023-2024')";

            $result2 = $db->exec(
                $insert,
                array(
                    ':new_id' => $new_id,
                    ':nome' => $nome,
                    ':cognome' => $cognome,
                    ':mail' => $mail,
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
        $mail = $f3->get('POST.email');
        $password = $f3->get('POST.password');
        $sql_select = "SELECT * FROM administrator WHERE mail = :mail";
        $adminResult = $db->exec($sql_select, array(':mail' => $mail));

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
        $mail = $f3->get('POST.email');
        $password = $f3->get('POST.password');
        $classe = $f3->get('POST.class');
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Verifica se l'mail è già presente nel database
        $query_check_mail = "SELECT COUNT(*) AS mail_count FROM administrator WHERE mail = :mail";
        $mail_count = $db->exec($query_check_mail, array(':mail' => $mail));
        $mail_count = $mail_count[0]['mail_count']; // conteggio effettivo

        if ($mail_count > 0) {
            echo "Mail già esistente, inserire un altro indirizzo mail";
        } else {
            $query_max_id = "SELECT id AS max_id FROM administrator ORDER BY id DESC LIMIT 1";
            $max_id_result = $db->exec($query_max_id);
            $max_id_row = $max_id_result[0];
            $max_id = $max_id_row['max_id'];
            $new_id = $max_id + 1;

            $insert = "INSERT INTO administrator (id, name, surname, mail, password, class_name, school_year)
            VALUES (:new_id, :nome, :cognome, :mail, :hashed_password, :class, '2023-2024')";
            $result2 = $db->exec(
                $insert,
                array(
                    ':new_id' => $new_id,
                    ':nome' => $nome,
                    ':cognome' => $cognome,
                    ':mail' => $mail,
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
        $studenteId = $f3->get('POST.idStudente');
        $nome = $f3->get('POST.nome');
        $cognome = $f3->get('POST.cognome');
        $indirizzo = $f3->get('POST.indirizzo');
        $CAP = $f3->get('POST.cap');
        $materia = $f3->get('POST.materia');
        $classe = $f3->get('POST.classe');
        $annoScolastico = $f3->get('POST.anno_scolastico');

        // Query SQL per aggiornare gli attributi dello studente nel database
        $query = "UPDATE student SET name=?, surname=?, address=?, CAP=?, subject=?, class_name=?, school_year=? WHERE id=?";
        $stmt = $db->prepare($query);
        $success = $stmt->execute([$nome, $cognome, $indirizzo, $CAP, $materia, $classe, $annoScolastico, $studenteId]);

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

        // Verifico se lo studente è assegnato a un'azienda
        if (!verifyStudentAgency($db, $studente)) {
            echo "Non sei assegnato a nessuna azienda e quindi non puoi inserire un record nel diario di bordo.";
            return;
        }

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
    'GET /api/student/diariodibordo',
    function ($f3) use ($db) {
        $studente = $f3->get('SESSION.id');

        $query = "SELECT * FROM logbook WHERE student = :student";
        $stmt = $db->prepare($query);
        $stmt->execute(array(':student' => $studente));
        $logbookResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($logbookResult) {
            header('Content-Type: application/json');
            echo json_encode($logbookResult);
        } else {
            echo json_encode(array('message' => 'Nessun diario trovato nel database.'));
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

        $response = array();

        //calcolo quante azienda ha nei preferiti lo studente
        $countQuery = "SELECT COUNT(*) AS count FROM favourites WHERE student = :studente";
        $countResult = $db->exec($countQuery, array(':studente' => $studente));
        $currentCount = $countResult[0]['count'];

        //verifico se l'azienda è già nei preferiti
        $verifyQuery = "SELECT * FROM favourites WHERE student = :studente AND agency = :azienda";
        $verifyResult = $db->exec($verifyQuery, array(':studente' => $studente, ':azienda' => $azienda));

        if ($verifyResult) {

            $deleteQuery = "DELETE FROM favourites WHERE student = :studente AND agency = :azienda";
            $db->exec($deleteQuery, array(':studente' => $studente, ':azienda' => $azienda));
            $response['message'] = "Azienda rimossa dai preferiti.";

        } else if($currentCount >= 3){
            $response['message'] = "Hai già raggiunto il limite massimo di aziende nei preferiti.";
        } else {
            $insertQuery = "INSERT INTO favourites (student, agency) VALUES (:studente, :azienda)";
                $db->exec($insertQuery, array(':studente' => $studente, ':azienda' => $azienda));
                $response['message'] = "Azienda aggiunta ai preferiti con successo.";
        }
        echo json_encode($response);
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
            array(
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
        $azienda = $f3->get('POST.aziendaId');
        $studente = $f3->get('POST.studentId');
        $amministratore = $f3->get('SESSION.id');

        // Controlla se lo studente è già stato assegnato ad un'azienda
        $check = "SELECT COUNT(*) AS count FROM stage WHERE student = :student";
        $result1 = $db->exec($check, array(':student' => $studente));

        if ($result1[0]['count'] > 0) {
            // Se lo studente è già stato assegnato ad un'azienda, aggiorna l'azienda
            $update = "UPDATE stage SET agency = :agency, administrator = :administrator WHERE student = :student";
            $result2 = $db->exec(
                $update,
                array(
                    ':agency' => $azienda,
                    ':administrator' => $amministratore,
                    ':student' => $studente
                )
            );
            echo json_encode(array('message' => 'Azienda aggiornata con successo.'));
        } else {
            // Se lo studente non è stato assegnato, inserisci il nuovo record
            $insert = "INSERT INTO stage (administrator, student, agency)
                       VALUES (:administrator, :student, :agency)";
            $result2 = $db->exec(
                $insert,
                array(
                    ':administrator' => $amministratore,
                    ':student' => $studente,
                    ':agency' => $azienda
                )
            );
            echo json_encode(array('message' => 'Azienda assegnata con successo.'));
        }
    }
);

$f3->route(
    'DELETE /student/diariodibordo/visita/elimina/@id',
    function ($f3) use ($db) {
        $idDiario = $f3->get('PARAMS.id');
        $idStudente = $f3->get('SESSION.id');

        $delete = "DELETE FROM logbook
        WHERE student = :idStudente AND id = :idDiario";

        $stmt = $db->prepare($delete);
        $stmt->execute(array(':idStudente' => $idStudente, ':idDiario' => $idDiario));
        $deleteResult = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // if ($deleteResult) {
        //     echo json_encode(array('message' => 'Diario eliminato con successo'));
        // } else {
        //     echo json_encode(array('message' => 'Diario non eliminato'));
        // }
    }
);

$f3->route('GET /student/accountS', function ($f3) use ($db) {
    stampaStudente($db, $f3);
});

$f3->route('GET /administrator/accountA', function ($f3) use ($db) {
    stampaAdmin($db, $f3);
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




/////////////

$f3->route('GET /api/student-login', function ($f3) use ($db) {
    // Recupera le credenziali dall'URL
    $mail = $f3->get('GET.email');
    $password = $f3->get('GET.password');

    // Effettua la query per verificare le credenziali
    $studentQuery = "SELECT * FROM student WHERE mail = :mail AND password = :password";
    $studentResult = $db->exec($studentQuery, array(':mail' => $mail, ':password' => $password));

    // Verifica se le credenziali sono corrette
    if ($studentResult) {
        // Login studente riuscito
        $response = array('success' => true, 'message' => 'Login studente riuscito', 'student' => $studentResult);
    } else {
        // Credenziali non valide
        $response = array('success' => false, 'message' => 'Credenziali non valide');
    }

    // Restituisci la risposta come JSON
    header('Content-Type: application/json');
    echo json_encode($response);

    // echo $response['student']['id'];
});

$f3->route('GET /api/informazioniUtente', function ($f3) use ($db) {
    // echo json_encode(["messaggio"  => "riuscito"]); 
    $mail = $f3->get('GET.email');

    $userInfoQuery = "SELECT * FROM student WHERE mail = :mail";
    $userInfoResult = $db->exec($userInfoQuery, array(':mail' => $mail));

    $userInfo = $userInfoResult;

    echo json_encode($userInfo);
});

$f3->route('GET /api/aziende', function ($f3) use ($db) {
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
});

$f3->route('POST /api/diary-entry', function ($f3) use ($db) {
    // Ottieni i dati dal corpo della richiesta
    $data = json_decode($f3->get('BODY'), true);

    // Estrai i dati dal payload
    $idStudente = $data['studentId']; // Usa l'ID dello studente dal payload
    $date = $data['date'];
    $morningStart = $data['morningStart'];
    $morningEnd = $data['morningEnd'];
    $afternoonStart = $data['afternoonStart'];
    $afternoonEnd = $data['afternoonEnd'];
    $description = $data['description'];
    $role = $data['role'];

    $query_max_id = "SELECT COALESCE(MAX(id), 0) AS max_id FROM logbook";
    $max_id_result = $db->exec($query_max_id);
    $max_id = $max_id_result[0]['max_id'];
    $new_id = $max_id + 1;

    // Query per inserire la voce del diario nel database
    $insertQuery = "INSERT INTO logbook (id, day, start_morning, end_morning, start_afternoon, end_afternoon, description, role, student) 
                    VALUES (:id, :day, :start_morning, :end_morning, :start_afternoon, :end_afternoon, :description, :role, :student)";

    $result = $db->exec($insertQuery, array(
        ':id' => $new_id,
        ':day' => $date,
        ':start_morning' => $morningStart,
        ':end_morning' => $morningEnd,
        ':start_afternoon' => $afternoonStart,
        ':end_afternoon' => $afternoonEnd,
        ':description' => $description,
        ':role' => $role,
        ':student' => $idStudente,
    ));

    // Verifica se l'inserimento è andato a buon fine
    if ($result) {
        $response = array('success' => true, 'message' => 'Voce del diario salvata con successo');
    } else {
        $response = array('success' => false, 'message' => 'Errore durante il salvataggio della voce del diario');
    }

    // Restituisci la risposta come JSON
    header('Content-Type: application/json');
    echo json_encode($response);
});

$f3->route('GET /api/diary-entries', function ($f3) use ($db) {
    // Ottieni l'ID dello studente dai parametri della query
    $studentId = $f3->get('GET.studentId');

    // Query per ottenere tutte le voci del diario di uno studente
    $query = "SELECT * FROM logbook WHERE student = :studentId";
    $entries = $db->exec($query, array(':studentId' => $studentId));

    // Restituisci le voci del diario come JSON
    header('Content-Type: application/json');
    echo json_encode($entries);
});

$f3->route('PUT /api/diary-entry/@id', function ($f3, $params) use ($db) {
    // Ottieni l'ID della voce del diario dai parametri della route
    $diaryEntryId = $params['id'];

    // Ottieni i dati dal corpo della richiesta
    $data = json_decode($f3->get('BODY'), true);

    // Estrai i dati dal payload
    $date = $data['date'];
    $morningStart = $data['morningStart'];
    $morningEnd = $data['morningEnd'];
    $afternoonStart = $data['afternoonStart'];
    $afternoonEnd = $data['afternoonEnd'];
    $description = $data['description'];
    $role = $data['role'];

    $updateQuery = "UPDATE logbook 
                    SET day = :day, 
                        start_morning = :start_morning, 
                        end_morning = :end_morning, 
                        start_afternoon = :start_afternoon, 
                        end_afternoon = :end_afternoon, 
                        description = :description, 
                        role = :role 
                    WHERE id = :id";

    $result = $db->exec($updateQuery, array(
        ':day' => $date,
        ':start_morning' => $morningStart,
        ':end_morning' => $morningEnd,
        ':start_afternoon' => $afternoonStart,
        ':end_afternoon' => $afternoonEnd,
        ':description' => $description,
        ':role' => $role,
        ':id' => $diaryEntryId,
    ));

    // Verifica se l'aggiornamento è andato a buon fine
    if ($result) {
        $response = array('success' => true, 'message' => 'Voce del diario aggiornata con successo');
    } else {
        $response = array('success' => false, 'message' => 'Errore durante l\'aggiornamento della voce del diario');
    }

    // Restituisci la risposta come JSON
    header('Content-Type: application/json');
    echo json_encode($response);
});

$f3->route('DELETE /api/diary-entry/@id', function ($f3, $params) use ($db) {
    $entryId = $params['id'];

    // Query per eliminare la voce del diario dal database
    $deleteQuery = "DELETE FROM logbook WHERE id = :id";
    $result = $db->exec($deleteQuery, array(':id' => $entryId));

    // Verifica se l'eliminazione è andata a buon fine
    if ($result) {
        $response = array('success' => true, 'message' => 'Voce del diario eliminata con successo');
    } else {
        $response = array('success' => false, 'message' => 'Errore durante l\'eliminazione della voce del diario');
    }

    // Restituisci la risposta come JSON
    header('Content-Type: application/json');
    echo json_encode($response);
});


$f3->run();
