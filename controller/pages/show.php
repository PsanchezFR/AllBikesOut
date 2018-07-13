
<container>
    <div class="row">
        <div class="col-6 m-0 p-0">
            <button type="button" class="btn btn-danger btn-lg btn-block m-0">Défaillant</button>
        </div>
        <div class="col-6 m-0 p-0 ">
            <button type="button" class="btn btn-primary btn-lg btn-block m-0">Perdu</button>
        </div>
    </div>
    <div class="d-flex flex-column bd-highlight mb-3">
        <div class="p-2 bg-light text-center border-0">Défaillances</div>
    <?php
    if(isset($_POST['velo'])){
        $_SESSION['velo'] = $_POST['velo'];
    }

        $request = $bdd -> prepare("SELECT defaillance.nom_defaillance FROM ve_to_de INNER JOIN defaillance ON ve_to_de.id_defaillance = defaillance.id_defaillance WHERE ve_to_de.id_velo = :velo");
        $request -> bindParam ('velo', $_SESSION['velo']);
        $request -> execute();
        $defaillances = $request->fetchAll(PDO::FETCH_CLASS, 'model\defaillance');
        $_SESSION['defaillances'] = $defaillances;

    $_SESSION['velo'];
    $_SESSION['defaillances'];

    foreach ($_SESSION['defaillances'] as $key => $value){
        $subkey = 'nom_defaillance';
        echo" <div class='p-2 bd-highlight d-flex flex-row justify-content-between'>$value->nom_defaillance";
        echo" <div class='text-right'>";
        echo" <i class='fas fa-star'></i>";
        echo" <i class='fas fa-star'></i>";
        echo" <i class='fas fa-star'></i>";
        echo" <i class='fas fa-star'></i>";
        echo" </div>";
        echo" </div>";
    }
    ?>


    </div>
<!--    <hr>-->
<!--    <h2>formulaire defailllance velo</h2>-->
<!--    <form>-->
<!--        <div class="form-row align-items-center">-->
<!--            <div class="col-auto">-->
<!--                <label class="sr-only" for="inlineFormInput">Name</label>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-auto my-1 p-2">-->
<!--            <div class="form-check  d-flex flex-row align-items-center">-->
<!--                <input class="form-check-input" type="checkbox" id="autoSizingCheck1">-->
<!--                <label class="form-check-label pl-2" for="autoSizingCheck1">Fixation selle</label>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-auto my-1 p-2">-->
<!--            <div class="form-check d-flex flex-row align-items-center">-->
<!--                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">-->
<!--                <label class="form-check-label pl-2" for="autoSizingCheck2">Fixation guidon</label>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-auto my-1 p-2">-->
<!--            <div class="form-check d-flex flex-row align-items-center">-->
<!--                <input class="form-check-input" type="checkbox" id="autoSizingCheck3">-->
<!--                <label class="form-check-label pl-2" for="autoSizingCheck3">Fixation guidon</label>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <button type="submit" class="btn btn-secondary btn-lg btn-block">Valider</button>-->
<!--    </form>-->
<!--    <div class="text-center">-->
<!--        <li class="form-check-input dropdown-toggle" type="checkbox" data-toggle="dropdown">Fixation pédale-->
<!--            <span class="caret"></span></li>-->
<!--        <ul class="dropdown-menu">-->
<!--            <input class="form-check-input" type="checkbox" id="autoSizingCheck4"> <label class="form-check-label pl-2" for="autoSizingCheck4">Fixation guidon</label>-->
<!--            <li><a href="#">HTML</a></li>-->
<!--            <li><a href="#">CSS</a></li>-->
<!--            <li><a href="#">JavaScript</a></li>-->
<!--        </ul>-->
<!--    </div>-->
</container>
