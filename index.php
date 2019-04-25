<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Caveat+Brush&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Caveat&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cherry+Swash&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cormorant+Upright&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <title>Oprawa Ślubu</title>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>

    <script src="https://use.fontawesome.com/a9c409a688.js"></script>

    <script>
        function zamawianie() {
            var x = document.getElementById("hidden_form");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
        $("#scroll-next").click(function() {
            var cls = $(this).closest(".section").next().offset().top;
            $("html, body").animate({
                scrollTop: cls
            }, "slow");
        });
        $("a[href='#bottom']").click(function() {
            $("html, body").animate({
                scrollTop: $(document).height()
            }, "slow");
            return false;
        });

        $(document).ready(function() {

            $('#navitems ul li a#dynamic').click(function() {

                var strona = $(this).attr('href');
                $('#all').load(strona + '.php');
                return false;



            })


        })

        function onSubmitMyForm() {

            var rzeczyZFormularza = $("#formularz_opinia :input").serializeArray();
            var jqxhr = $.post($("#formularz_opinia").attr("action"), rzeczyZFormularza)
                .done(function(info) {
                    if (info != '') {
                        alert("Dziękujemy za dodanie opinii :)");
                        $("#kom2").append(info);
                        $('#form_opinia').find('input:text, textarea, email').val('');
                        $('#form_opinia').find('input[type=email]').val('');
                    } else
                        alert("Błąd dodawania komentarza,wypelnij wszystkie pola");

                })
                .fail(function() {
                    alert("error");
                })

        };

        function onSubmit2() {
            var rzeczyZFormularza = $("#zam_opr :input").serializeArray();
            var jqxhr = $.post($("#zam_opr").attr("action"), rzeczyZFormularza)
                .done(function(info) {
                    if (info != '') {


                        $("#form-messages").html(info);
                        $('#zam_opr').find('input:text, input:password, textarea').val('');
                        $('#zam_opr').find('input[type=email]').val('');
                        $('#zam_opr').find('input[type=number]').val('');
                        $('#zam_opr').find('input[type=tel]').val('');
                        $('#zam_opr').find('input[type=data]').val('');

                    } else
                        alert("serwer odpowiedział z błędem");

                })
                .fail(function() {
                    alert("error");
                })
        }



        jQuery(document).ready(function() {

            var offset = 250;

            var duration = 300;

            jQuery(window).scroll(function() {

                if (jQuery(this).scrollTop() > offset) {

                    jQuery(".back-to-top").fadeIn(duration);

                } else {

                    jQuery(".back-to-top").fadeOut(duration);

                }

            });



            jQuery(".back-to-top").click(function(event) {

                event.preventDefault();

                jQuery("html, body").animate({
                    scrollTop: 0
                }, duration);

                return false;

            })

        });
    </script>
</head>


<body>
    <div id="all">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
            <a class="navbar-brand" href="#"><img src="images/logo2.png" alt="Wedding trio" width="100"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navitems" aria-controls="navitems" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse" id="navitems">

                <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="podstrony">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Strona główna<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#oferta">O nas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#ttlo">Repertuar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#galeria">Galeria zdjęć</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#opinie">Opinie klientów</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#zamow_nas">Zamów oprawę</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="logowanie" id="dynamic">Panel klienta</a>
                    </li>
                </ul>

            </div>
        </nav>
        <header id="header" class="d-flex  align-items-center ">
            <div class="container text d-flex justify-content-center">
                <!-- ///-fluid d-flex align-items-center justify-content-center"-->

                <div class="row text-center">
                    <div class="col-12">

                        <h1 class="shadowtxt antiqtxt" id="present_one">
                            Wedding Trio
                        </h1>
                        <h2 id="present2">
                            Oprawa muzyczna ślubu

                        </h2>

                        <button type="button" class="btn btn-secondary text-center" id="headerbtn" onClick="document.getElementById('oferta').scrollIntoView({behavior: 'smooth'});">Poznaj naszą ofertę</button>

                    </div>

                </div>


            </div>


        </header>

        <div class="container-fluid allelem">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Wokalno-instrumentalna oprawa ceremonii ślubnej.</h1>
                    <p class="lead"><br> Trio, dzięki któremu zawsze będziecie miło i ze wzruszeniem wspominać ten niezapomniany dzień</p>
                </div>
            </div>
        </div>



        <div class="container-fluid padding" id="oferta">

            <div class="row">

                <div class="col-12 col-md-6 ">
                    <article>
                        <h2 style="font-size:2.6em ">Nasza oferta</h2>
                        <p>

                            Oferujemy Państwu wokalno-instrumentalną oprawę ceremonii ślubnej. W skład zespołu wchodzi altówka, gitara i damski wokal. Istnieje możliwość poszerzenia składu o kolejne instrumenty takie jak klawisze, skrzypce, flet poprzeczny czy instrumenty perkusyjne. Zagramy każdy utwór, jaki tylko sobie wymarzycie i sprawimy, że dzień ślubu będzie najbardziej niesamowitym i niezapomnianym dniem Waszego życia!


                        </p>

                    </article>
                </div>
                <div class="col-12 col-md-6 ">

                    <img src="images/trio.jpg" class="images-fluid img-thumbnail" alt="trio zdjecie">


                </div>
            </div>


        </div>
        <div id="tlo" class=" p-5">
            <div id="ttlo">
                <h1 class="text-center antiqtxt shadowtxt">Repertuar</h1>
                <hr/>
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4">
                        <div id="lista">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action" id="list-na-wejscie" data-toggle="list" href="#list-nw" role="tab" aria-controls="list-nw">Utwory na wejście Państwa Młodych</a>
                                <a class="list-group-item list-group-item-action" id="list-na-ofiarowanie" data-toggle="list" href="#list-of" role="tab" aria-controls="list-of">Ofiarowanie</a>
                                <a class="list-group-item list-group-item-action" id="list-czesci-stale" data-toggle="list" href="#list-cs" role="tab" aria-controls="list-cs">Części stałe mszy</a>
                                <a class="list-group-item list-group-item-action" id="list-komunia" data-toggle="list" href="#list-kom" role="tab" aria-controls="list-kom">Komunia i dziękczynienie</a>
                                <a class="list-group-item list-group-item-action" id="list-modlitwa" data-toggle="list" href="#list-mod" role="tab" aria-controls="list-mod">Modlitwa pod ołtarzem</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 col-md-8" id="listarep">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active mt-4" id="list-nw" role="tabpanel" aria-labelledby="list-na-wejscie">

                                <ul>
                                    <li>"Ave Maria"</li>
                                    <li>"Kanon D-dur"
                                    </li>
                                    <li>
                                        "Bo jak śmierć potężna jest milość"

                                    </li>
                                    <li>
                                        "Hallelujah - polska wersja"
                                    </li>
                                    <li>
                                        "Niech milość twa"
                                    </li>

                                </ul>


                            </div>
                            <div class="tab-pane fade mt-4" id="list-of" role="tabpanel" aria-labelledby="list-na-ofiarowanie">
                                <ul>
                                    <li>"Ofiaruję Tobie Panie mój"</li>
                                    <li>"Powietrzem moim jest"
                                    </li>
                                    <li>
                                        "Twoja miłość jak ciepły deszcz"

                                    </li>
                                    <li>
                                        "Chlebie najcichszy"
                                    </li>
                                </ul>


                            </div>
                            <div class="tab-pane fade mt-4" id="list-kom" role="tabpanel" aria-labelledby="list-komunia">
                                <ul>
                                    <li>
                                        "Wśród tylu dróg"
                                    </li>
                                    <li>

                                        "Panie proszę przyjdź"

                                    </li>

                                    <li>

                                        "Witaj pokarmie"
                                    </li>
                                    <li>
                                        "Wspaniały dawco miłości"
                                    </li>
                                    <li>
                                        "Panie dobry jak chleb"
                                    </li>
                                    <li>

                                        "Oblubieniec"
                                    </li>

                                </ul>

                            </div>
                            <div class="tab-pane fade mt-4" id="list-cs" role="tabpanel" aria-labelledby="list-czesci-stale">
                                <ul>
                                    <li>
                                        "Psalm"
                                    </li>
                                    <li>

                                        "Święty, święty święty"

                                    </li>

                                    <li>

                                        "Baranku Boży"
                                    </li>

                                </ul>
                            </div>
                            <div class="tab-pane fade mt-4" id="list-mod" role="tabpanel" aria-labelledby="list-modlitwa">

                                <ul>
                                    <li>
                                        "Schowaj mnie"
                                    </li>
                                    <li>
                                        "Ty tylko mnie poprowadź"

                                    </li>
                                    <li>
                                        "Ave Maria" ( altówka +gitara+ wokal lub gitara +altówka)

                                    </li>
                                    <li>

                                        ”Maryjo śliczna Pani”
                                    </li>
                                    <li>
                                        "Gdy klęcze przed Tobą – Ave Maria"

                                    </li>
                                    <li>
                                        ”Ave Maria Jasnogórska”
                                    </li>
                                </ul>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="galeria">
            <div class="p-2">
                <h1 class="text-center">Galeria zdjęć</h1>
            </div>
            <hr/>
            <div class="row">




                <div class="col-12 col-lg-4 gallery ">
                    <div class="galimg m-3 ">

                        <a href="images/1p.jpg" data-lightbox="mygallery"><img src ="images/1p.jpg" alt="1" class="images-fluid img-thumbnail" ></a>
                    </div>

                </div>

                <div class="col-12 col-lg-4 gallery">
                    <div class="galimg m-3">
                        <a href="images/4.jpg" data-lightbox="mygallery"><img src="images/4.jpg"  alt="2" class="images-fluid img-thumbnail"></a>

                    </div>

                    <div class="galimg m-3">

                        <a href="images/3.jpg" data-lightbox="mygallery"><img src ="images/3.jpg" alt="3" class="images-fluid img-thumbnail"></a>

                    </div>
                </div>

                <div class="col-12 col-lg-4 gallery">
                    <div class="galimg m-3">

                        <a href="images/4p.jpg" data-lightbox="mygallery"><img src ="images/4p.jpg" alt="4" class="images-fluid img-thumbnail"></a>

                    </div>
                </div>
                <div class="col-12 col-lg-4 gallery">
                    <div class="galimg m-3">
                        <a href="images/5.jpg" data-lightbox="mygallery"><img src="images/5.jpg"  alt="2" class="images-fluid img-thumbnail"></a>

                    </div>
                </div>
                <div class="col-12 col-lg-4 gallery">
                    <div class="galimg m-3">
                        <a href="images/6.jpg" data-lightbox="mygallery"><img src="images/6.jpg"  alt="2" class="images-fluid img-thumbnail"></a>

                    </div>
                </div>
                <div class="col-12 col-lg-4 gallery">
                    <div class="galimg m-3">
                        <a href="images/7.jpg" data-lightbox="mygallery"><img src="images/7.jpg"  alt="2" class="images-fluid img-thumbnail"></a>

                    </div>
                </div>



            </div>

        </div>
        <div class="container-fluid padding" id="opinie">
            <div class="text-center">
                <h1>Zostaw swoją opinię</h1>
            </div>
            <hr/>
            <div class="row">

                <div class="col-12 col-md-6 ">

                    <div id="form_opinia" class="m-5">
                        <form onsubmit="onSubmitMyForm(); return false" action="dodawanie.php" method="POST" id="formularz_opinia">
                            <div class="form-group">
                                <label for="i">Imię</label>
                                <input type="text" class="form-control" name="imie" id="i" required>
                            </div>
                            <div class="form-group">
                                <label for="e">Email</label>
                                <input type="email" class="form-control " name="email" id="e" required>
                            </div>
                            <div class="form-group">
                                <label for="k">Napisz opinię</label>
                                <textarea class="form-control" id="k" name="komentarz" rows="3" maxlength="3000" required></textarea><br>
                                <input type="submit" id="opinia" class="btn btn-secondary">

                            </div>
                        </form>



                    </div>


                </div>
                <div class="col-12 col-md-6 ">
                    <h2 class="text-center">Oceny klientów</h2>
                    <div id="kom2" class="p-2">
                        <?php
                    require("wybieranie.php");
                    ?>



                    </div>


                </div>
            </div>


        </div>

        <hr/>
        <div class="container-fluid p-4" id="zamow_nas">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="text-center">Nie czekaj</h1>

                    <h2 class="text-center">Zamów nas już dziś</h2>


                    <button class="btn secondary-btn m-4" onclick="zamawianie()" id="colors">Zamów oprawę</button>

                </div>
            </div>
        </div>

        <section id="hidden_form" class="container pt-2">
            <h2 class="text-center">Zamów oprawę</h2>

            <form id="zam_opr" onsubmit="onSubmit2(); return false" action="rejestracja.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="imie">Imię</label>
                        <input type="text" class="form-control" id="imie" name="imie" placeholder="Imię" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nazwisko">Nazwisko</label>
                        <input type="text" id="nazwisko" class="form-control" name="nazwisko" placeholder="Nazwisko" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="telefon">Numer telefonu</label>
                        <input type="tel" class="form-control" id="telefon" name="telefon" placeholder="Numer telefonu" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="data">Data ślubu</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Miejsce">Miejsce ślubu</label>
                        <input type="text" id="Miejsce" class="form-control" name="miejsce" placeholder="Miejsce ślubu" required>
                    </div>
                    <div class="col-6">
                        <div class="form-group col-xs-4">
                            <label for="ilosc_piesni">Ilość pieśni</label>
                            <input type="number" class="form-control" id="ilosc_piesni" name="ilosc_piesni" placeholder="Ilość pieśni" required>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="uwagi">Sugestie dotyczące repertuaru</label>
                        <textarea class="form-control" id="uwagi" name="uwagi" rows="5" cols="70" maxlength="1000" placeholder="Uwagi">
                    </textarea>
                    </div>
                </div>
                <div class="container-fluid">
                    <h2 class="text-center">Dane logowania</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="haslo">Hasło</label>
                            <input type="password" class="form-control" id="haslo" name="haslo" placeholder="Hasło" required>
                        </div>
                    </div>
                </div>





                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
        Zgadzam się na przetwarzanie moich danych osobowych
      </label>
                    </div>
                </div>
                <input type="submit" id="zamowienie" class="btn btn-secondary" value="Zamów oprawę">
            </form>

            <div class="conteiner-fluid text-center m-3" id="form-messages"></div>


        </section>
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <a href="#" class="back-to-top" style="display: inline;">
 
<i class="fas fa-arrow-up"></i>
 
</a>

                </div>
            </div>
        </div>
        <footer>
            <div class="row">

                <div class="col-sm-4 justify-content-center mb-4">
                    <img src="images/logo2.png" height="100" class="mx-auto d-block" alt="logo">

                </div>
                <div class="col-sm-4 mb-4">
                    <h4 class="text-center"><strong>Znajdź nas:</strong></h4>
                    <div class="d-flex justify-content-center">

                        <div style="font-size:2em; color:#3b5998" class="m-2"> <a href="https://www.facebook.com/MPWtrio/" class="fab fa-facebook-f"></a></div>
                        <div style="font-size:2em; color:tomato" class="m-2"><a href="google.pl/weddingtrio" class="fab fa-google-plus-g"></a></div>
                        <div style="font-size:2em; color:tomato" class="m-2"><a href="https://www.youtube.com/channel/UCZQdUtOF0sYTiTA1SSnYa1Q" class="fab fa-youtube"></a></div>
                    </div>
                </div>
                <div class="col-sm-4 justify-content-center align-items-center text-center">
                    <h4><strong> Kontakt:</strong></h4>
                    <p>Email: Weddingtrio@gmail.com</p>
                    <p>Telefon: 889 665 446</p>

                </div>

            </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


</body>

</html>