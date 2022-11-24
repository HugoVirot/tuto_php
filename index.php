<?php
// si on a reçu le formulaire, on teste ce qu'il contient
// IS SET = est défini => vérifie l'existence de la variable
if (isset($_POST['email'])) {
    var_dump($_POST);
}

// afficher nombres de 1 à 100

// boucle for : (index ; condition de maintien; évolution de $i à la fin de chaque boucle)
// for ($i = 1; $i < 101; $i++){
//     echo $i . " ";
// }

// tableau classique
$tableau = ['Cédrick', 1512, true, 8989.44];

// foreach ($variabledutableau as $aliasdechaqueélément)
foreach ($tableau as $cle => $valeur) {
    echo $cle . " " . $valeur . "<br>";
}

// tableau associatif (couples clé => valeur)
$eleves = [
    [
        'nom' => 'Atayi',
        'prenom' => 'Nicolas'
    ],
    [
        'nom' => 'Ponet',
        'prenom' => 'Cédrick'
    ],
];

// foreach ($eleves as $eleve){
//     echo "nom : " . $eleve['nom'] . ', prénom : ' . $eleve['prenom'] . '<br>';
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tuto php</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <h1>Tuto PHP</h1>

    <main>

        <div class="container">
            <!-- action = page de destination / méthode : méthode HTTP utilisée -->
            <form action="index.php" method="POST">

                <!-- input caché -->
                <input type="hidden" value="je suis un input caché" name="inputSecret">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <!-- name => très important, permet de récupérer l'info -->
                    <!-- required => très important, permet d'obliger à remplir l'input -->
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="truc@machin.fr">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" required id="exampleInputPassword1">
                </div>

                
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input name="prenom" type="text" class="form-control" required id="prenom" placeholder="Paul">
                </div>
                <!-- 
                <div class="mb-3 form-check">

                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="checkbox">

                    <label class="form-check-label" for="exampleCheck1">Check me out</label>

                </div>

                <fieldset>
                    <legend>Select a maintenance drone:</legend>

                    <div>
                        <input type="radio" id="huey" name="drone" value="huey" checked>
                        <label for="huey">Huey</label>
                    </div>

                    <div>
                        <input type="radio" id="dewey" name="drone" value="dewey">
                        <label for="dewey">Dewey</label>
                    </div>

                    <div>
                        <input type="radio" id="louie" name="drone" value="louie">
                        <label for="louie">Louie</label>
                    </div>
                </fieldset> -->

                <!-- submit => très important, permet de valider le formulaire -->
                <button type="submit" class="btn btn-primary">Valider</button>

            </form>

        </div>

    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>