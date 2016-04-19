<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859-1">
    <title>Killer Contract 3 Generator</title>

    <!--
    see https://mail.google.com/mail/u/0/#label/!CLIENTS%2Finsign/14fd19fc5e6e8ab9?projector=1

    ajouter la clause extra dev et l etalement sur 3 mois

    https://www.1min30.com/inbound-marketing/necessite-clauses-contrat-projet-web-18875
    https://stuffandnonsense.co.uk/projects/contract-killer/

    https://github.com/SiamKreative/Contract-Killer-Generator
    http://www.docracy.com/7079/development-service-contract
    http://www.gethourglass.com/software-development-contract-template.html
    -->

    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    <link rel="dns-prefetch" href="//camo.githubusercontent.com">
    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//api.filestackapi.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css" class="inc_pdf">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,700,300">
    <link rel="stylesheet" type="text/css" href="css/app-screen-only.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">

</head>
<body>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <div class="sidebar-inner">
                <h3>G�n�rez votre propre contrat</h3>
                <p class="sidebar-description">Il suffit de remplir les champs ci-dessous et cliquez sur le bouton "Enregistrer au format PDF" pour enregistrer votre contrat en tant au format PDF.</p>
                <form id="form-customize" method="post" data-persist="garlic">
                    <div class="row">
                        <div class="col-lg-8 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Votre nom (de soci�t�)</label>
                                <input class="form-control" type="text" name="name" value="davask web limited" placeholder="Votre nom (de soci�t�)" required="true" readonly="true">
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-md hidden-sm">
                            <div class="form-group">
                                <!-- https://www.filepicker.com/documentation/file_ingestion/widgets/pick -->
                                <label class="sr-only">Ajouter votre logo</label>
                                <input type="filepicker" data-fp-apikey="AbIR0ecfCQWSKjBIyWN8Uz" data-fp-button-class="btn btn-default btn-block btn-fp" name="logo" data-fp-button-text="+ logo" data-fp-extensions=".png,.jpg,.jpeg,.gif" onchange="jQuery('#logo').attr({'src':event.fpfile.url});" readonly="true">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Votre adresse</label>
                                <input class="form-control" type="text" name="address" value="Room 747, 7/F, Star House, 3 Salisbury Road, Tsimshatsui, Kowloon, Hong Kong" placeholder="Votre adresse" required="true" readonly="true">
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Nom (de la soci�t�) du client</label>
                                <input class="form-control" type="text" name="customername" value="" placeholder="Nom (de la soci�t�) du client" required>
                            </div>
                        </div>
                        <div class="col-lg-4 hidden-md hidden-sm">
                            <div class="form-group">
                                <label class="sr-only">Ajouter le logo du client</label>
                                <input type="filepicker" data-fp-apikey="AbIR0ecfCQWSKjBIyWN8Uz" data-fp-button-class="btn btn-default btn-block btn-fp" name="logocustomer" data-fp-button-text="+ logo" data-fp-extensions=".png,.jpg,.jpeg,.gif" onchange="jQuery('#logocustomer').attr({'src':event.fpfile.url});">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Adresse du client</label>
                                <input class="form-control" type="text" name="customeraddress" value="" placeholder="Adresse du client" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Description de la t�che</label>
                                <input class="form-control" type="text" name="task" value="" placeholder="Description de la t�che" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Prix total</label>
                                <input class="form-control" type="text" name="total" value="" placeholder="Prix total" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Date</label>
                                <div class="input-group date">
                                    <input type="text" name="date" class="form-control" value="" placeholder="Date ( format JJ/MM/AAAA )"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Calendrier de paiement</label>
                                <textarea class="form-control" name="payment" placeholder="Calendrier de paiement" required>JJ/MM/AAAA : Montant de la trache 1, [...], JJ/MM/AAAA : Montant de la trache N</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-4 col-sm-4">
                            <div class="form-group">
                                <label class="sr-only">Les tribunaux charg�s de ce contrat</label>
                                <div class="input-group input-group-court">
                                    <input class="form-control" type="text" name="court" value="fran�ais" placeholder="Les tribunaux charg�s de ce contrat" required><span class="input-group-addon" title="Locate me" id="locateme"><i class="glyphicon glyphicon-screenshot"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="create-pdf-btn" class="btn btn-primary btn-lg btn-block">Enregistrer au format PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button>
                    <input id="input-html" type="hidden" name="html" value="">
                </form>

                <div class="sidebar-about hidden-md hidden-sm">
                    <h3>About</h3>
                    <p>
                        Cet outil est bas� sur le contrat populaire open-source pour les concepteurs et les d�veloppeurs Web par <a href="http://stuffandnonsense.co.uk/">Stuff & Nonsense</a>. Date de r�vision: <a href="">18/04/2016</a>.
                    </p>
                    <hr>
                    <p>
                        Fabriqu� avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> � Bangkok par <a href="http://twitter.com/siamkreative/">SiamKreative</a>.
                    </p>
                    <p>
                        Traduit et mis-�-jour avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> en Allemagne par <a href="https://twitter.com/davaskwebltd/">davask web limited</a>.
                    </p>
                </div>
            </div>
        </div>
        <div id="page-content-wrapper">
            <div class="page-content">
                <div class="container">

                    <div id="contract">
                        <h1>CONTRAT DE PRESTATIONS DE SERVICES</h1>
                        <div class="between">
                            <p class="newpage" data-pdf-endpage="2"></p>
                            <p>
                                Entre
                            </p>
                            <p>
                                La soci�t� <!-- <img id="logo" class="logo" src="img/logo_428x120.png" alt="">  --><span class="item name">davask web limited</span>, num�ro d'incorporation 1782706 sous <i>Companies Ordinance</i> � Hong Kong, repr�sent�e par <span class="item username">David Asquiedge</span>.
                            </p>
                            <p>
                                Ci-apr�s d�sign�e comme <b>" le prestataire "</b>
                            </p>
                            <p>
                                D'une part
                            </p>
                            <p>
                                et
                            </p>
                            <p>
                                <span class="item clientname">Alexandra Selly</span> agissant pour le compte de la soci�t� <!-- <img id="logocustomer" class="logocustomer" src="http://dummyimage.com/428x120/eee/333333.png&text=LOGO" alt=""> --> <span class="item customername">le nom de la soci�t� du client</span>
                            </p>
                            <p>
                                Ci-apr�s d�nomm�e <b>" le client "</b>
                            </p>
                            <p>
                                D'autre part
                            </p>
                            <p>
                                Ci-apr�s d�sign�es collectivement les <b>" Parties "</b> et individuellement la <b>" Partie ".</b>
                            </p>

                            <p>
                                AU PR�ALABLE, IL A �T� RAPPEL� CE QUI SUIT :
                            </p>
                            <p>
                                <span class="item name">davask web limited</span> est une soci�t� sp�cialis�e dans la conception, la r�alisation et la supervision d'applications web au sens large.
                            </p>
                            <p>
                                Le client souhaite faire appel � <span class="item name">davask web limited</span>.
                            </p>
                            <p>
                                Les parties se sont rapproch�es afin d'arr�ter aux termes du pr�sent contrat (ci-apr�s <b>" Contrat "</b>) les conditions et modalit�s de leur collaboration.
                            </p>
                            <p>
                                CECI ETANT EXPOS�, IL A �T� CONVENU ET ARRET� CE QUI SUIT :
                            </p>
                        </div>

                        <div class="summary">
                            <h2>ARTICLE 1 : OBJET DU CONTRAT</h2>
                            <p>
                                Le pr�sent Contrat a pour objet de d�finir les modalit�s de la collaboration entre <span class="item name">davask web limited</span> et le le client, et de d�finir les conditions dans lesquelles :
                                <ul>
                                    <li>
                                        <span class="item name">davask web limited</span> effectue pour le compte de <span class="item customername">le nom de la soci�t� du client</span> les prestations d�finies � l'Article 2 (ci-apr�s <b>" Prestation "</b>),
                                    </li>
                                    <li>
                                        <span class="item name">davask web limited</span> c�de � <span class="item customername">le nom de la soci�t� du client</span> l'int�gralit� des droits de propri�t� intellectuelle aff�rents
                                    </li>
                                </ul>
                                aux Prestations, sans exception ni r�serve.
                            </p>
                        </div>

                        <p class="newpage" data-pdf-endpage="8"></p>

                        <div class="agree">

                            <h2>ARTICLE 2 : MODALITES DE REALISATION DES PRESTATIONS</h2>

                            <h3>2.1 Commande de la Prestation</h3>
                            <p>
                                Le Client passe une commande (ci-apr�s <b>" Commande "</b>) au Prestataire pour <span class="item task">concevoir et d�velopper un site Web</span>.
                            </p>

                            <h3>2.2 Tarifs & Acompte</h3>
                            <p>
                                Le montant total (ci-apr�s <b>" Montant "</b>) de la Prestation est de <b class="item total"></b>toutes taxes incluses.
                            </p>
                            <p>
                                le Montant indiqu� ne prent pas en compte la majoration du mode de paiement choisi par le Client. La Charge du moyen de paiement reste a la charge du CLient ( A titre d'exemple, un paiement par carte bancaire via Paypal aura une majoration de 4.4 % + 0.35 euro soit 44.35 euros pour une facture de 1000 euros toutes taxes incluses )
                            </p>
                            <p>
                                Un accompte (ci-apr�s <b>" Accompte "</b>) de <b class="item deposit"></b> a �t� d�fini entre les parties.
                            </p>
                            <p>
                                La Commande est r�put�e accept�e et le contrat est conclu � r�ception de l'Accompte par le Prestataire sur son compte bancaire ou tout autre porte-monaie electronique (type paypal).
                            </p>
                            <p>
                                Le Prestataire aura 72 (soixantes douzes) heures pour effectuer un remboursement en cas de refus du contrat.
                            </p>
                            <p>
                                La prestation ne commencera qu'apres reception constatee de l'Accompte.
                            </p>
                            <p>
                                Dans le cas ou le Contrat prevoit un calendrier de paiement (ci-apr�s <b>" Calendrier "</b>), le Client s'engage a regle chaque echeance comme defini dans le Calendrier.
                            </p>

                            <h3>2.3 Prestations</h3>
                            <p>
                                Les Prestations faisant l'objet du pr�sent Contrat sont d�finies dans la Commande sur la base, de l'offre (ci-apr�s <b>" Offre "</b>) �mise par le Prestataire.
                            </p>
                            <p>
                                Le Prestataire doit apporter le plus grand soin ainsi que toutes les diligences � la r�alisation des Prestations qui lui sont confi�es conform�ment au pr�sent Contrat.
                            </p>
                            <p>
                                Il s'engage � mener � bonne fin les Prestations dans le respect des r�gles de l'art, des dispositions l�gales, r�glementaires et contractuelles et s'oblige, pour leur r�alisation, � respecter strictement les modalit�s pr�cis�es par le Client.
                            </p>
                            <p>
                                Le Prestataire assume, en ce qui concerne ses Prestations, toutes les obligations techniques, juridiques et administratives r�sultant du contrat, notamment en ce qui concerne les contraintes li�es aux conditions d'ex�cution. Il indique avoir pris toutes les pr�cautions et men� toutes les investigations utiles pour les appr�cier.
                            </p>
                            <p>
                                Le Prestataire agit en tant qu'entrepreneur ind�pendant et assume de ce fait toutes les charges occasionn�es par les Prestations, notamment le recrutement du personnel et versement des salaires et des charges y aff�rentes.
                            </p>
                            <p>
                                L'ensemble du personnel du Prestataire affect� � l'ex�cution de la Commande aura les qualifications, les comp�tences techniques et l'exp�rience requise pour le travail � r�aliser. Le Prestataire fournit seul les mat�riels n�cessaires � l'ex�cution de la Commande.
                            </p>

                            <h3>2.4 D�lai de r�alisation des Prestations</h3>
                            <p>
                                Le Prestataire s'engage � livrer les Prestations command�es par le CLient dans un d�lai indiqu� dans la Commande.
                            </p>

                            <p>
                                Le respect du planning �tabli par les Parties constitue une obligation essentielle du Prestataire qui s'engage � respecter les d�lais correspondant � la r�alisation des Prestations.
                            </p>

                            <p>
                                Le Prestataire s'engage � avertir imm�diatement et par �crit VISUAL LINK de tout �v�nement ou circonstance de nature � engendrer un retard dans l'ex�cution des Prestations.
                            </p>

                            <h3>2.5 Modifications</h3>
                            <p>
                                Les al�as habituels de la Prestation sont � la charge du Prestataire et sont inclus dans le prix contractuel.
                            </p>
                            <p>
                                Si le Client proc�de, au cours de la r�alisation de la Prestation par le Prestataire, � des modifications substantielles des �l�ments fournis dans la Commande, � savoir des modifications qui entrainent, pour le Prestataire, un investissement substantiel en temps et/ou en moyens (ci-apr�s <b>" Augmentation de la charge de travail"</b>), le Prestataire soumettra un avenant (ci-apr�s <b>"Avenant"</b>) a l'offre initiale definissant les modalit�s de r�mun�ration de l'Augmentation de la charge de travail du Prestataire ainsi que, le cas echeant, la mise a jour du calendrier de paiement.
                            </p>
                            <p>
                                Le Client aura 72 (soixante douze) heures pour refuser cette Avenant a reception de l Avenant. Sans refus de la part du Client, il s'engage a regle le montant restant en accord, le cas echeant, avec le nouveau calendrier de paiment.
                            </p>
                            <p>
                                Tout retard dans le reglement du calendrier de paiment de la part du Client offre la facult� au Prestataire de suspendre l'execution des taches et/ou la r�siliation du pr�sent contrat.
                            </p>

                            <h3>2.6 S�lection et R�ception</h3>
                            <p>
                                La r�ception finale des Prestations est l'acceptation d�finitive par le Client de la Prestation remise par le Prestataire apr�s compl�te r�alisation de celle-ci.
                            </p>
                            <p>
                                Elle est constat�e par un �crit sign� et dat� par les parties (ci-apr�s <b>" R�ception "</b>). Les correspondances mail mentionnant l'acceptation d�finitive sont valables au titre de la r�ception.
                            </p>

                        </div>

                        <p class="newpage" data-pdf-endpage="8"></p>

                        <div class="payment">

                            <h2>ARTICLE 3 - PROPRIETE INTELLECTUELLE</h2>

                            <h3>3.1 Droit ant�rieurs</h3>
                            <p>
                                Le Prestataire et le Client restent chacun propri�taire de l'ensemble des droits de propri�t� intellectuelle qu'ils ont acquis avant la signature du pr�sent Contrat. Toutefois, lorsque l'exploitation de ces droits est n�cessaire pour exploiter les r�sultats dans les conditions ci-apr�s d�finies, le Prestatire consent une licence d'utilisation au Client de ces droits pendant la dur�e d�finie � l'article 3.2.1.
                            </p>

                            <h3>3.2 Droits d'auteur</h3>
                            <p>
                                Le Prestataire c�de, � titre exclusif et d�finitif, au CLient, l'ensemble des droits d'auteur aff�rents aux Prestations que le Client aura s�lectionn�es et r�ceptionn�es de mani�re d�finitive, conform�ment � l'article 2.6 du pr�sent Contrat (ci-apr�s � Cr�ations �). Cette cession sera effectu�e au fur et � mesure de la naissance desdits droits.
                            </p>
                            <p>
                                La cession est consentie pour la dur�e de protection l�gale des droits de propri�t� intellectuelle et pour le monde entier.
                            </p>
                            <p>
                                Les droits d'auteur ainsi c�d�s comprennent le droit exclusif d'exploitation des Cr�ations sous quelque forme et par quelque moyen que ce soit, � savoir notamment les droits de reproduction, d'utilisation, de repr�sentation et d'adaptation des Cr�ations tels que pr�cis�s ci-dessous et les pr�rogatives y aff�rentes et ce, dans le respect du droit moral de l'auteur sur son oeuvre. Cette cession comprend �galement les codes sources des d�veloppements informatiques. Elle inclut notamment :
                            </p>
                            <p>
                                - Le droit de reproduction et d'utilisation
                            </p>
                            <p>
                                Le droit de reproduction et d'utilisation c�d� comprend le droit de fixer ou faire fixer mat�riellement les Cr�ations, int�gralement ou partiellement, par tous proc�d�s qui permettent de les communiquer au public d'une mani�re indirecte, et ce pour tout type d'utilisation, y compris commerciale ou publicitaire.
                            </p>
                            <p>
                                - Le droit de repr�sentation
                            </p>
                            <p>
                                Le droit de repr�sentation c�d� comprend le droit de communiquer ou faire communiquer les Cr�ations au public, int�gralement ou partiellement, � titre gratuit ou on�reux, par tout proc�d� de repr�sentation connu ou inconnu � ce jour, par exposition, affichage, diffusion au moyen de la vid�o, la t�l�matique, le num�rique, la t�l�vision (hertzienne, par c�ble ou satellite), le cin�ma, l'informatique, le r�seau Internet, sans que cette liste soit limitative, et ce pour tout type d'utilisation, y compris publicitaire ou commerciale.
                            </p>
                            <p>
                                - Le droit d'adaptation
                            </p>
                            <p>
                                Le Client aura le droit d'adapter tout ou partie des Cr�ations. Le droit d'adaptation comprend le droit de modifier, retoucher, fragmenter les Cr�ations en tout ou en partie, sous toute forme et par tout moyen, les dissocier, les assembler avec ou les int�grer dans toute autre cr�ation artistique, proc�der � des substitutions de mat�riaux sous r�serve du droit moral du Prestataire.
                            </p>

                        </div>

                        <div class="payment">

                            <h2>ARTICLE 4 : CONDITIONS FINANCIERES</h2>

                            <h3>4.1. R�mun�ration</h3>
                            <p>
                                Le Client s'engage � verser au Prestataire la somme globale et forfaitaire pr�vue � la Commande accept�e conform�ment � l'article 2.
                            </p>
                            <p>
                                La r�mun�ration tient compte de toutes les suj�tions et difficult�s aff�rentes au travail projet� et comprennent toutes les d�penses, charges et al�as occasionn�s pour la r�alisation de la Commande.
                            </p>

                            <h3>4.2. Facturation et paiement</h3>
                            <p>
                                Les factures seront �mises dans les conditions pr�vues � la Commande. Elles sont payables par carte bancaire ou virement bancaire � compter de la date d'�mission de la facture.
                            </p>

                        </div>

                        <div class="confidentiality">

                            <h2>ARTICLE 5 : CONFIDENTIALITE</h2>

                            <h3>5.1 Definition de la confidentialite</h3>
                            <p>
                                Sont consid�r�es comme confidentielles au sens du pr�sent contrat les informations (ci-apr�s d�sign�es: "les Informations") divulgu�es par les parties soit sous forme �crite et portant explicitement la mention "confidentiel" soit oralement pour autant que leur nature confidentielle soit indiqu�e lors de la divulgation et confirm�e par �crit par le Client au Prestataire dans les 7 jours suivant leur communication.
                            </p>

                            <h3>5.2 Engagement du prestataire</h3>
                            <p>
                                Le Prestataire s'engage :
                                <ul>
                                    <li>
                                        � recevoir, � traiter et � conserver les Informations de fa�on strictement Confidentielle;
                                    </li>
                                    <li>
                                        � ne pas utiliser les Informations, directement ou indirectement, pour un autre but que celui indiqu� dans l'article "2.1 Commande de la Prestation";
                                    </li>
                                    <li>
                                        � limiter la divulgation des Informations aux membres de son personnel qui ont v�ritablement besoin de les conna�tre et qui sont li�s par une obligation de garder le secret par rapport aux Informations;
                                    </li>
                                    <li>
                                        � ne divulguer les Informations � aucune autre personne, organisation ou entit�, � moins d'en avoir re�u l'autorisation pr�alable �crite du Client.
                                    </li>
                                </ul>
                            </p>

                            <h3>5.2 Exceptions</h3>
                            <p>
                                Les obligations impos�es au Prestataire selon l'article "3.2 Engagement du prestataire" ne s'appliquent pas aux Informations qui:
                                <ul>
                                    <li>
                                        �taient dans le domaine public ou �taient accessibles au public au moment de leur transmission au Prestataire,
                                    </li>
                                    <li>
                                        ou qui sont par la suite tomb�es dans le domaine public ou sont devenues accessibles au public pour des raisons autres qu'une action ou une omission imputable au Prestataire,
                                    </li>
                                    <li>
                                        ou qui �taient en la possession du Prestataire � condition que les Informations ne fissent l'objet d'aucune limitation quant � leur divulgation au moment de leur transmission au Prestataire et � condition que cette possession ant�rieure puisse �tre prouv�e par des documents �crits,
                                    </li>
                                    <li>
                                        ou qui ont �t� obtenues de bonne foi par le Prestataire d'un tiers qui �tait autoris� � les transmettre.
                                    </li>
                                </ul>
                            </p>

                        </div>


                        <div class="cancellation">
                            <h2>ARTICLE 6 - DUREE</h2>
                            <p>
                                Le pr�sent contrat entre en vigueur au jour de la signature des pr�sentes.
                            </p>
                            <p>
                                Il est conclu pour une dur�e d'une (1) ann�e et est reconductible par tacite reconduction.
                            </p>
                            <p>
                                Chacune des Parties pourra y mettre fin, � tout moment, moyennant le respect d'un pr�avis �crit de trois (3) mois, notifi� � l'autre Partie par lettre recommand�e avec accus� de r�ception.
                            </p>
                        </div>
                        <div class="cancellation">
                            <h2>ARTICLE 7 - RESILIATION ANTICIPEE - CONSEQUENCES DE LA RUPTURE</h2>
                            <p>
                                7.1 Le pr�sent accord pourra �tre r�sili� par le Prestataire avec effet imm�diat sans indemnit�s dans les hypoth�ses suivantes:
                                <ul>
                                    <li>
                                        d�faillance du Client laquelle est d�finie comme l'inex�cution de ses obligations contractuelles, � condition que l'inex�cution reproch�e se poursuive plus de 7 jours � compter de la mise en demeure de s'ex�cuter adress�e par le Prestataire. En cas d'urgence  justifi�e, la rupture sera � effet imm�diat.<br/>
                                        La r�siliation aura lieu sans pr�judice de la facult� pour le Prestataire de demander le solde du Montant dut, le cas echeant, en accord avec le Calendrier.
                                    </li>
                                    <li>
                                        risque d'insolvabilit� et/ou risque s�rieux de d�faut d'ex�cution de ses obligations par le Client.
                                    </li>
                                </ul>
                            </p>
                            <p>
                                7.2 En cas de rupture anticip�e du Contrat pour quelque cause que ce soit, et si les Prestations n'ont pas encore �t� r�ceptionn�es par le CLient, le Prestataire notifiera au Client la date � laquelle il sera proc�d� � un constat contradictoire d'�tat des lieux et d'avancement des Prestations. Un d�compte de r�siliation sera alors effectu� entre les Parties au vu des r�sultats obtenus par le Prestataire au jour de la rupture. En l'absence d'un repr�sentant du Client � cette date, le constat sera r�put� contradictoire.
                            </p>
                            <p>
                                Il est entendu que, sauf rupture anticip�e imputable au Client, le Prestataire s'engage � remettre au Client les travaux dans leur �tat d'avancement au jour de la rupture. Le Client r�glera au prestataire les prestations d'ors et d�j� r�alis�es.
                            </p>

                        </div>

                        <div class="major">
                            <h2>ARTICLE 8 - FORCE MAJEURE</h2>

                            <p>
                                Dans un premier temps, le cas de force majeure suspendra les obligations r�sultant du pr�sent Contrat. Si le cas de force majeure a vocation � se poursuivre pendant plus de trente (30) jours, les Parties se rencontreront afin de trouver une solution. Si aucune solution n'a �t� trouv�e et si le cas de force majeure a vocation � se poursuivre pendant soixante (60) jours � l'issue de l'�coulement du premier d�lai de trente (30) jours, chaque Partie aura la facult� de mettre fin, sans indemnit�, � la r�alisation de la Prestation par lettre recommand�e avec avis de r�ception adress�e � l'autre Partie moyennant le respect d'un pr�avis de quarante-cinq (45) jours.
                            </p>
                            <p>
                                Sont consid�r�s comme cas de force majeure, ceux habituellement reconnus par les tribunaux.
                            </p>

                        </div>

                        <div class="general">
                            <h2>ARTICLE 9 - DISPOSITIONS GENERALES</h2>

                            <h3>9.1 Ind�pendance r�ciproque</h3>
                            <p>
                                Les Parties d�clarent express�ment qu'elles sont et demeureront, pendant toute la dur�e du pr�sent Contrat, des partenaires ind�pendants � tous �gards, assumant chacune les risques de sa propre activit�.
                            </p>

                            <p>
                                En cons�quence, le Prestataire assume toutes les charges occasionn�es par les Prestations, notamment : paiement des taxes, imp�ts, primes d'assurances..., la pr�sente �num�ration n'�tant pas limitative. Le Prestataire devra veiller, particuli�rement, � ce qu'aucune confusion ne puisse se faire sur sa qualit� d'ind�pendant.
                            </p>

                            <p>
                                Le Prestataire ne pourra en aucun cas �tre assimil� juridiquement � un salari� de VISUAL LINK, lequel ne pourra � aucun moment lui donner des consignes. En cons�quence, le Prestataire, dans ses rapports avec VISUAL LINK, ne saurait en aucun cas relever des dispositions du Code du Travail.
                            </p>

                            <h3>9.2 Loyaut� - Bonne foi</h3>
                            <p>
                                La bonne ex�cution du pr�sent Contrat suppose une coop�ration constante et sinc�re entre les Parties. Toute difficult� sera imm�diatement port�e � la connaissance de l'autre Partie pour que des solutions soient mises en oeuvre d'un commun accord.
                            </p>

                            <p>
                                Les Parties s'engagent � un devoir de loyaut� et d'information.
                            </p>

                            <p>
                                Les Parties s'engagent � ex�cuter de bonne foi les obligations qui leur incombent et s'abstiendront de prendre ou de faire prendre tout acte ou toute mesure, de conclure ou faire conclure tout accord qui aurait pour effet de faire obstacle � la bonne ex�cution du contrat ou de tout acte ou accord pass� en ex�cution dudit Contrat.
                            </p>

                            <p>
                                Les Parties conviennent de signer et de d�livrer tous les documents qui peuvent s'av�rer n�cessaires � l'application des dispositions du Contrat.
                            </p>

                            <h3>9.3 Divers</h3>
                            <p>
                                Le pr�sent Contrat et ses annexes expriment l'int�gralit� des obligations des Parties. Ils pr�valent sur toutes conditions g�n�rales d'achat ou de vente et tout autre accord ant�rieur convenu entre les Parties.
                            </p>

                            <p>
                                Toute modification du pr�sent Contrat fera l'objet d'un avenant dat� et sign� par les Parties.
                            </p>

                            <p>
                                Le fait, pour l'une des Parties, de ne pas se pr�valoir d'un manquement par l'autre Partie � l'une quelconque des obligations vis�es dans les pr�sentes, ne saurait �tre interpr�t� comme une renonciation � l'obligation en cause.
                            </p>

                            <p>
                                Si une ou plusieurs stipulations du Contrat sont d�clar�es non valides ou non �crites en application de la r�glementation en vigueur ou � la suite d'une d�cision d�finitive d'une juridiction comp�tente, les autres stipulations garderont toute leur force et port�e.
                            </p>

                        </div>

                        <div class="domicile">
                            <h2>ARTICLE 10 - ELECTION DE DOMICILE </h2>

                            <p>
                                Pour les besoins des pr�sentes, les Parties font �lection de domicile aux adresses indiqu�es en t�te des pr�sentes.
                            </p>

                            <p>
                                Toute modification devra �tre signifi�e par lettre recommand�e avec demande d'avis de r�ception � l'autre Partie, afin de lui �tre opposable.
                            </p>

                        </div>

                        <div class="juridiction">
                            <h2>ARTICLE 11 - DROIT APPLICABLE ET JURIDICTION COMPETENTE</h2>

                            <p>
                                Les dispositions du pr�sent Contrat sont r�gies par le droit <span class="item court">fran�ais</span>.
                            </p>

                            <p>
                                TOUT LITIGE EN RELATION AVEC LE PRESENT CONTRAT ET QUE LES PARTIES NE SAURAIENT RESOUDRE A L'AMIABLE SERA PORTE DEVANT LE TRIBUNAL AU CHOIX DU PRESTATAIRE.
                            </p>

                        </div>

                        <p class="newpage" data-pdf-endpage="2"></p>

                        <div class="signature">
                            <p>
                                Fait en 2 (deux) exemplaires.
                            </p>
                            <p>
                                A Erlangen
                            </p>
                            <p>
                                Le <span class="item date">date</span>
                            </p>
                            <div id="signatures" class="row">
                                <p>
                                    Pour <span class="item name">nom de l'entreprise</span>
                                </p>
                                <p>
                                    Pour <span class="item customername">nom de l'entreprise</span>
                                </p>
                            </div>
                        </div>


                    </div><!-- /#contract -->
                </div><!-- /.container -->
            </div>
        </div>
    </div>

    <a href="https://github.com/davask">
        <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png">
    </a>

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="//api.filestackapi.com/filestack.js"></script>
    <script type="text/javascript" src="vendor/Garlic/dist/garlic.min.js"></script>
    <script type="text/javascript" src="vendor/jsPDF/dist/jspdf.debug.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-76556627-1', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>