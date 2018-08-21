<?php
    try {
        $bdd = new PDO("mysql:host=localhost;dbname=quiz;charset=utf8", "root", "");
    }

    catch(Exception $e) {
        die('Erreur : ' . $e->getMessage());
        die("Erreur mysql : " . $database->errorInfo()[2]);
    }

    $requete = $bdd->query("SELECT * FROM question WHERE categories= " . $_POST['categorie'] . " ORDER BY rand() LIMIT 0,1");
    $question = $request->fetchAll();

    while () {
        echo "<div class='col-12' id='question-container'>
            <div class='card mb-0 message'>
                <div class='card-body'>
                    <p class='my-0'>
                        <strong style='color:" . $question['question'] . "'>
                            " . htmlspecialchars($question['choix1']) . "
                        </strong>
                        : " . htmlspecialchars($question['choix2']) . " 
                        <span class='badge badge-secondary float-right createdat'>" . $question['choix3'] . "</span>
                    </p>
                </div>
            </div>
        </div>";
    }
?>