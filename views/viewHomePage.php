<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Accueil</title>
    <link rel="stylesheet" href="./homePageView.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    
    <div class="container">

        <div id="buttonsRound">
            <div id="btnImc">
                <div class="insideButtonsRound">
                    <p>IMC : </p>
                    <p id="imcNumber"></p>
                    <p id="imcType">Normal</p>
                    <button type="button" name="btnDetails" id="btnDetails" data-bs-toggle="modal" data-bs-target="#modalDetailsImc">Détails</button>
                </div>
            </div>
            <div id="btnCalories">
                <div class="insideButtonsRound">
                    <p>Calories/j</p>
                    <p id="numberCalories">360</p>
                    <p>kcal</p>
                </div>
            </div>
        </div>
        <!-- ..............................Modal -->

        <div class="modal fade" id="modalDetailsImc" tabindex="-1" aria-labelledby="modalDetailsImc" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ton IMC</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modalImc-body">
                        <img src="./assets/img/imc.png" id="modalImcImage">
                        <p> indice de masse corporelle (IMC) est une mesure simple qui permet d'estimer rapidement la corpulence d'une personne </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="desktopVersion">
            <div id="buttonsMeals">
                <div id="breakfast" class="allBtnMeal">
                    <button type="button" name="btnBreakfast" id="btnBreakfast" class="btnMeal" data-bs-toggle="modal" data-bs-target="#modalMeals">
                        <img src="./assets/img/breakfast.png" class="imgMeal">
                    </button>
                    <p>Petit-déjeuner</p>
                </div>
                <div id="diner" class="allBtnMeal">
                    <button type="button" name="btnDiner" id="btnDiner" class="btnMeal" data-bs-toggle="modal" data-bs-target="#modalMeals">
                        <img src="./assets/img/diner.png" class="imgMeal">
                    </button>
                    <p>Diner</p>
                </div>
                <div id="lunch" class="allBtnMeal">
                    <button type="button" name="btnLunch" id="btnLunch" class="btnMeal" data-bs-toggle="modal" data-bs-target="#modalMeals">
                        <img src="./assets/img/salad.png" class="imgMeal">
                    </button>
                    <p>Déjeuner</p>
                </div>

                <div id="snack" class="allBtnMeal">
                    <button type="button" name="btnSnack" id="btnSnack" class="btnMeal" data-bs-toggle="modal" data-bs-target="#modalMeals">
                        <img src="./assets/img/tea.png" class="imgMeal">
                    </button>
                    <p>Encas</p>
                </div>
            </div>

            <!-- .................................Modal buttons Meals -->
            <div class="modal fade" id="modalMeals" tabindex="-1" aria-labelledby="modalMeals" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="dateMealModal">Date du jour</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modalMeal-body">
                            <form method="post" action="" id="formMeal">
                                <div id="numberOfCalories">
                                    <label for="numberCaloriesForm" class="form-label">Nombre de calories</label>
                                    <input type="text" class="form-control" id="numberCaloriesForm" name="calories" placeholder="Indique le nombre de calories de ton repas">
                                </div>
                                <div id="mealDetails">
                                    <label for="mealDescriptionForm" class="form-label">Nombre de calories</label>
                                    <textarea type="text" class="form-control" id="mealDescriptionForm" name="description" placeholder="Qu'a-tu mangé ?"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btnModalMealForm" data-bs-dismiss="modal">Valider</button>
                            <button type="button" class="btnModalMealForm">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- .........................................Modal alerte nombre calories dépassées -->

            <div id="graphCalories">
                <p>GRAPH</p>
            </div>
        </div>
        <div id="historic">
            <button type="button" name="btnHistoric" id="btnHistoric">
                Voir mes repas
            </button>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>