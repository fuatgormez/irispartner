<!--==============================
Footer Area
============================== -->
<footer id="footer" class="footer-texts-more-lighten">
    <div class="container">
        <div class="row py-4 my-5">
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <ul class="list list-unstyled">
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span>
                        <?php echo nl2br($setting['footer_address']); ?>
                    </li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <ul class="list list-unstyled">
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
                        <a href="tel:<?php echo nl2br($setting['footer_phone']); ?>"><?php echo nl2br($setting['footer_phone']); ?></a>
                    </li>
                    <li class="pb-1 mb-2">
                        <span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
                        <a href="mailto:<?php echo nl2br($setting['footer_email']); ?>"><?php echo nl2br($setting['footer_email']); ?></a>
                    </li>

                </ul>
            </div>

            <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
            <?php echo $this->lang->line("footer_social_title"); ?>
                <ul class="social-icons social-icons-clean-with-border social-icons-medium">
                    <?php foreach ($social as $row_social) : ?>
                        <?php if ($row_social['social_url'] != '') : ?>
                            <li class="social-icons-<?php echo strtolower($row_social['social_name']); ?>">
                                <a href="<?php echo $row_social['social_url']; ?>" class="no-footer-css" target="_blank"><i class="fab fa-<?php echo $row_social['social_icon']; ?>"></i></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
            <div class="row align-items-center justify-content-md-between">
                <div class="col-12 col-md-auto text-center text-md-start mb-2 mb-md-0">
                    <p class="mb-0"><?php echo $this->lang->line('footer_copyright'); ?> | <?php echo $setting['footer_copyright']; ?></p>
                </div>
                <div class="col-12 col-md-auto">
                    <div class="payment-cc justify-content-center justify-content-md-end">
                        <nav id="sub-menu">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>datenschutz"><?php echo $this->lang->line("footer_menu_datenschutz"); ?></a></li>
                                <li><a href="<?php echo base_url(); ?>impressum"><?php echo $this->lang->line("footer_menu_impressum"); ?></a></li>
                                <li><a href="<?php echo base_url(); ?>agb"><?php echo $this->lang->line("footer_menu_agb"); ?></a></li>
                                <li><a href="<?php echo base_url(); ?>widerruf"><?php echo $this->lang->line("footer_menu_widerruf"); ?></a></li>
                                <li><a href="<?php echo base_url(); ?>faq"><?php echo $this->lang->line("footer_menu_faq"); ?></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- Body End -->

<!-- Vendor -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/lazysizes/lazysizes.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/vide/jquery.vide.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/vivus/vivus.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/jquery.countdown/jquery.countdown.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/views/view.shop.js"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/theme.init.js"></script>

<!-- Examples -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/examples/examples.gallery.js"></script>	

<script src="<?php echo base_url(); ?>public/layout/assets/js/shop.js?v=<?php echo uniqid(); ?>"></script>


<?php if (base_url(uri_string()) === base_url('shop') ) : ?>
<!-- Examples -->
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/vendor/particles/particles.min.js"></script>
<script src="<?php echo base_url(); ?>public/layout/<?php echo $theme; ?>/js/examples/examples.particles.js"></script>
<?php endif; ?>


</body>
</html>
<!--==============================
Cookie
============================== -->
<?php if (!$this->input->cookie('required_cookie')) : ?>

    <style>
        /* Cookie Agreement */
        #cookie__agreement__wrapper {
            /* 
        width: 100vw;
        height: 100vh;
        top: 0;
        left: 0;*/
            position: fixed;
            bottom: 0;
            z-index: 1000000;
        }

        #cookie__agreement,
        #cookie__agreement__details {
            background: #FFF;
            position: fixed;
            bottom: 0;
            z-index: 9999;
            color: #707070;
            line-height: 30px;
            text-align: center;
            left: 0;
            right: 0;
            margin: auto;
            padding-top: 10px;
        }

        #cookie__agreement p {
            margin: 0;
        }

        #cookie__agreement #cookie__agreement__content {
            max-width: 85%;
            margin-left: auto;
            margin-right: auto;
        }

        #cookie__agreement #cookie__agreement__content a {
            color: white;
        }


        #cookie__agreement__details {
            max-height: 50vh;
            overflow-y: scroll;
            scrollbar-width: thin;
            /* top: 20vh; */
            text-align: left;
            position: relative;
            padding-top: 0;
            padding-bottom: 0;
        }

        #cookie__agreement__details::-webkit-scrollbar {
            width: 5px;
        }

        #cookie__agreement__details::-webkit-scrollbar-thumb {
            background: rgba(0, 0, 0, 0.2);
        }

        #cookie__agreement__details::-webkit-scrollbar-track {
            background: #ffffff25;
        }

        #cookie__agreement__details .cookie--section {
            padding: 15px;
        }

        #cookie__agreement__details .cookie--section h2 {
            font-size: 30px;
            color: #000;
        }

        #cookie__agreement__details .cookie--section h2 img {
            margin-bottom: -2px;
        }

        #cookie__agreement__details .cookie--section p a {
            color: #B02E60;
            font-weight: 600;
            text-decoration: none;
        }

        .cookie--buttons {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <script>
        $(document).on('click', '.cookie__global__agreement__close', function(e) {
            e.preventDefault();

            $('#cookie__agreement__details').hide();
            $('#cookie__agreement').show();
        });

        $(document).on('click', '#cookie__agreement__manage__link', function(e) {
            e.preventDefault();
            $('#cookie__agreement__details').show();
            $('#cookie__agreement').hide();
        });
    </script>
    <?php echo form_open_multipart(base_url() . 'cookie/ed8b172ad0e4433f9868511b6c91a76726702082', array('class' => 'form-horizontal')); ?>
    <div id="cookie__agreement__wrapper">
        <div id="cookie__agreement">
            <div id="cookie__agreement__content" class="colored--container">
                <?php echo $this->lang->line('footer_cookie_content1');?>
            </div>

            <div class="row m-2 ">
                <div class="col-md-6">
                    <a class="btn w-100 btn-primary m-1" id="cookie__agreement__link" href="<?php echo base_url('cookie/ed8b172ad0e4433f9868511b6c91a76726702082'); ?>"><?php echo $this->lang->line('footer_cookie_button_agreement');?></a>
                </div>
                <div class="col-md-6">
                    <button class="btn w-100 btn-secondary m-1" id="cookie__agreement__manage__link"><?php echo $this->lang->line('footer_cookie_button_manage_cookie_settings');?></button>
                </div>
            </div>
        </div>

        <div id="cookie__agreement__details" style="display: none;">
            <div class="cookie--section">
                <h2>
                    <input type="checkbox" name="required_cookie" value="1" id="required_cookie" disabled checked><label for="required_cookie">Notwendige Cookies</label>
                </h2>
                <p>
                </p>
                <p>Diese Technologien sind erforderlich, um die Kernfunktionalit??t unserer Website zu aktivieren.</p>
                <p>(1) Bei der blo?? informatorischen Nutzung der Website, also wenn Sie sich nicht zur Nutzung der Website anmelden, registrieren oder uns sonst Informationen ??bermitteln, erheben wir keine personenbezogenen Daten, mit Ausnahme der unter 4. erw??hnten Daten, die Ihr Browser ??bermittelt, um Ihnen den Besuch der Website technisch zu erm??glichen.</p>
                <p>(2) Bei der Nutzung der Website werden sogenannte Cookies auf Ihrem Rechner gespeichert. Bei Cookies handelt es sich um kleine Textdateien, die auf Ihrer Festplatte dem von Ihnen verwendeten Browser zugeordnet gespeichert werden und durch welche der Stelle, die den Cookie setzt (in diesem Fall also uns), bestimmte Informationen zuflie??en. Cookies k??nnen keine Programme ausf??hren oder Viren auf Ihren Computer ??bertragen. Sie dienen hier nur dazu, das Internetangebot insgesamt nutzerfreundlicher und effektiver zu machen. <br>Wir setzen z.B. Cookies dazu ein, um Sie f??r Folgebesuche identifizieren zu k??nnen, falls Sie ??ber einen Account bei uns verf??gen. Andernfalls m??ssten Sie sich f??r jeden Besuch erneut einloggen. Ebenso nutzen wir Cookies f??r die Bereitstellung folgender Dienste:</p>
                <ul>
                    <li>Gewinnspiele/Gamification auf unserer Website</li>
                    <li>Erstellung und Nutzung von Gutscheinen</li>
                    <li>Nutzung von Formularen</li>
                    <li>Application Health Management</li>
                    <li>Bereitstellung von Diensten wie SMS-Warteschlangen (Priorityline) und ??hnliche</li>
                </ul>
                <p>a) Diese Website nutzt Cookies in folgendem Umfang:</p>
                <ul>
                    <li>Transiente Cookies (tempor??rer Einsatz)</li>
                    <li>Persistente Cookies (zeitlich beschr??nkter Einsatz)</li>
                    <li>Third-Party Cookies (von Drittanbietern)</li>
                    <li>Flash-Cookies (dauerhafter Einsatz)</li>
                </ul>
                <p>b) Transiente Cookies werden automatisiert gel??scht, wenn Sie den Browser schlie??en. Dazu z??hlen insbesondere die Session-Cookies. Diese speichern eine sogenannte Session-ID, mit welcher sich verschiedene Anfragen Ihres Browsers der gemeinsamen Sitzung zuordnen lassen. Dadurch kann Ihr Rechner wiedererkannt werden, wenn Sie auf die Website zur??ckkehren. Die Session-Cookies werden gel??scht, wenn Sie sich ausloggen oder Sie den Browser schlie??en.</p>
                <p>c) Persistente Cookies werden automatisiert nach einer vorgegebenen Dauer gel??scht, die sich je nach Cookie unterscheiden kann. Sie k??nnen die Cookies in den Sicherheitseinstellungen Ihres Browsers jederzeit l??schen.</p>
                <p>d) Sie k??nnen Ihre Browser-Einstellung entsprechend Ihren W??nschen konfigurieren und z.B. die Annahme von Third-Party-Cookies oder allen Cookies ablehnen. Wir weisen Sie jedoch darauf hin, dass Sie dann eventuell nicht alle Funktionen dieser Website nutzen k??nnen.</p>
                <p>e) Die genutzten Flash-Cookies werden nicht durch Ihren Browser erfasst, sondern durch Ihr Flash-Plug-in. Diese speichern die notwendigen Daten unabh??ngig von Ihrem verwendeten Browser und haben kein automatisches Ablaufdatum.</p>
                <p>Rechtsgrundlage f??r diese Datenverarbeitung ist Art. 6 Abs. 1 S. 1 f) DSGVO. Unser berechtigtes Interesse besteht darin, dass wir durch die Datenverarbeitung statistische Auswertungen betreffend die Nutzung unserer Website vornehmen und unsere Internetangebote f??r die Nutzer optimieren k??nnen.</p>
                <p>f) Im Zuge des Bewerbungseingangs befinden sich Ihre personenbezogenen Daten tempor??r bei unserem, nach Art. 28 EU-DSGVO verpflichteten Auftragnehmer, die Jobacademy Personaldienstleistungen (EU) (Inh. Theo Papadopoulos). Die Verarbeitung Ihrer Bewerbungsunterlagen findet durch die irisshot Photostudios GmbH und die Jobacademy Personaldienstleistungen (EU) statt.</p>
                <p class="empty"> </p>
                <p>(3) Bei jedem Zugriff auf unseren Internetauftritt werden Zugriffsdaten in einer Protokolldatei auf dem Server unseres Providers gespeichert.</p>
                <p>(4) Dieser Datensatz besteht z.B. aus Ihrer IP-Adresse, Datum und Uhrzeit der Anforderung, dem Namen der angeforderten Datei, der ??bertragenen Dateimenge und dem Zugriffsstatus, einer Beschreibung des verwendeten Webbrowsers und Betriebssystems sowie dem Namen Ihres Internet Service Providers.</p>
                <p>(5) Diese Daten werden aus technischen Gr??nden erhoben. Eine Auswertung findet ausschlie??lich zu statistischen Zwecken und ohne Personenbezug (Besucherzahlen und Seitenpopularit??t) statt. Eine L??schung erfolgt automatisch nach sp??testens 14 Tagen.</p>
                <p class="empty"> </p>
                <p><strong><span style="text-decoration: underline;">Kontaktformular</span> </strong><br>Bei eingesetzten Kontaktformularen gilt der Grundsatz der Speicherbegrenzung. Der Art. 5 Abs. 1 DSGVO stellt zudem bestimmte Grunds??tze f??r die Verarbeitung personenbezogener Daten auf, die auch bei der Datenerhebung und ??? Verarbeitung durch Kontaktformulare zu beachten sind. Insbesondere fordert Art. 5 Abs. 1 DSGVO, dass personenbezogene Daten dem Zweck angemessen und nur solange gespeichert werden, wie es der Zweck erfordert (Speicherbegrenzung). ???Personenbezogene Daten m??ssen so lange gespeichert werden, wie es f??r die Zwecke, f??r die sie verarbeitet werden, erforderlich ist??? (Art. 5 Abs 1 e DSGVO)</p>
                <p><span style="text-decoration: underline;"><strong>Google Web Fonts</strong></span> <br>Diese Seite nutzt zur einheitlichen Darstellung von Schriftarten so genannte Web Fonts, die von Google bereitgestellt werden. Beim Aufruf einer Seite l??dt Ihr Browser die ben??tigten Web Fonts in ihren Browsercache, um Texte und Schriftarten korrekt anzuzeigen. <br>Zu diesem Zweck muss der von Ihnen verwendete Browser Verbindung zu den Servern von Google aufnehmen. Hierdurch erlangt Google Kenntnis dar??ber, dass ??ber Ihre IP-Adresse unsere Website aufgerufen wurde. Die Nutzung von Google Web Fonts erfolgt im Interesse einer einheitlichen und ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 Buchstabe f DSGVO dar. Wenn Ihr Browser Web Fonts nicht unterst??tzt, wird eine Standardschrift von Ihrem Computer genutzt. <br>Weitere Informationen zu Google Web Fonts finden Sie unter <a href="https://developers.google.com/fonts/faq">https://developers.google.com/fonts/faq</a> und in der Datenschutzerkl??rung von Google: <a href="https://www.google.com/policies/privacy/">https://www.google.com/policies/privacy/</a>.</p>
                <p><span style="text-decoration: underline;"><strong>Digital Ocean</strong></span><br>Digital Ocean ist ein Hosting-Anbieter mit Cloud Infrastruktur, der unter anderem Webserver-Infrastruktur f??r Softwarentwicklung anbietet. Auf den Servern von Digital Ocean werden die Personen bezogenen Daten, die auf der Website erhoben werden, gespeichert. Newsletter-Anmeldungen, Wertgutschein-Bestellungen, Bestellungen von Aktions-Produkten und Job-Bewerber Daten. Erfasst und gelagert werden Daten wie Anrede, Vorname, Nachname, Adresse, Geburtsdatum, E-Mail-Adresse, Berufsw??nsche und PDFs, die z.B. Anschreiben, Lebensl??ufe, Arbeitsproben und Zeugnisse erhalten k??nnen. Auf diese Daten haben ausschlie??lich Mitarbeiter der Firma irisshot (irisshot Photostudios GmbH, Maria-Merian-Str. 7, 24145 Kiel, Tel.: 0431 7053580, E-Mail: kontakt@irisshot.de) Zugriffsrechte.</p>
                <p><strong><span style="text-decoration: underline;">Tchibo Kooperation</span></strong><br>Wenn Sie uns Ihre ausdr??ckliche Einwilligung erteilt haben, indem Sie Sie einen entsprechend hierf??r vorgesehenen Button geklickt haben, setzen wir innerhalb unseres Internetauftritts <a href="http://www.irisshot.de/tchibo">www.irisshot.de/tchibo</a> einen sog. Tracking-Pixel ein. Durch dieses Verfahren werden die Seitenaufrufe getrackt und Metadaten wie z.B. Timestamp und Hostadressen ??bertragen. Die Daten werden via Exactag an das Unternehmen Tchibo GmbH weitergegeben und k??nnen durch Tchibo- und Exactag-Mitarbeiter eingesehen werden. Die erhobenen Daten sind f??r uns anonym, bieten uns also keine R??ckschl??sse auf die Identit??t der Nutzer. Das Tracking dient der Optimierung der Werbema??nahmen und den Abgleich von Verk??ufen der gemeinsamen Aktion.</p>
                <p class="empty"> </p>
                <p>Bei Ihrer Kontaktaufnahme mit dem Diensteanbieter per E-Mail oder ??ber das Kontaktformular wird Ihre E-Mail-Adresse und, falls Sie dies angeben, Ihr Name und Ihre Telefonnummer von uns gespeichert, um Ihre Fragen zu beantworten.</p>
                <p></p>
            </div>

            <div class="cookie--section">
                <h2>
                    <input type="checkbox" name="google_analytics_term" value="1" id="google_analytics_term" <?php echo $this->input->cookie('google_analytics_term') ? 'checked' : '' ?>><label for="google_analytics_term">Google Cookies</label>
                </h2>
                <p>
                </p>
                <p>(3) <strong><span style="text-decoration: underline;">Google Analytics</span></strong><br>Diese Website nutzt Funktionen des Webanalysedienstes Google Analytics. Anbieter ist die Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA. Google Analytics verwendet so genannte ???Cookies???. Das sind Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie erm??glichen. Die durch den Cookie erzeugten Informationen ??ber Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA ??bertragen und dort gespeichert.<br>Die Speicherung von Google-Analytics-Cookies erfolgt auf Grundlage von Art. 6 Abs. 1 lit. f DSGVO. Der Websitebetreiber hat ein berechtigtes Interesse an der Analyse des Nutzerverhaltens, um sowohl sein Webangebot als auch seine Werbung zu optimieren. <br>IP Anonymisierung<br>Wir haben auf dieser Website die Funktion IP-Anonymisierung aktiviert. Dadurch wird Ihre IP-Adresse von Google innerhalb von Mitgliedstaaten der Europ??ischen Union oder in anderen Vertragsstaaten des Abkommens ??ber den Europ??ischen Wirtschaftsraum vor der ??bermittlung in die USA gek??rzt. Nur in Ausnahmef??llen wird die volle IP-Adresse an einen Server von Google in den USA ??bertragen und dort gek??rzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports ??ber die Websiteaktivit??ten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegen??ber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser ??bermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengef??hrt.</p>
                <p><span style="text-decoration: underline;">Browser Plugin</span> <br>Sie k??nnen die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht s??mtliche Funktionen dieser Website vollumf??nglich werden nutzen k??nnen. Sie k??nnen dar??ber hinaus die Erfassung der durch den Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie das unter dem folgenden Link verf??gbare Browser-Plugin herunterladen und installieren: <a href="https://tools.google.com/dlpage/gaoptout?hl=de" data-anchor="?hl=de">https://tools.google.com/dlpage/gaoptout?hl=de</a>.</p>
                <p><span style="text-decoration: underline;">Widerspruch gegen Datenerfassung</span> <br>Sie k??nnen die Erfassung Ihrer Daten durch Google Analytics verhindern, indem Sie auf folgenden Link klicken. Es wird ein Opt-Out-Cookie gesetzt, der die Erfassung Ihrer Daten bei zuk??nftigen Besuchen dieser Website verhindert: Google Analytics deaktivieren. <br>Mehr Informationen zum Umgang mit Nutzerdaten bei Google Analytics finden Sie in der Datenschutzerkl??rung von Google: <a href="https://support.google.com/analytics/answer/6004245?hl=de" data-anchor="?hl=de">https://support.google.com/analytics/answer/6004245?hl=de</a>.</p>
                <p><span style="text-decoration: underline;">Auftragsdatenverarbeitung</span> <br>Wir haben mit Google einen Vertrag zur Auftragsdatenverarbeitung abgeschlossen und setzen die strengen Vorgaben der deutschen Datenschutzbeh??rden bei der Nutzung von Google Analytics vollst??ndig um. <br>Demografische Merkmale bei Google Analytics <br>Diese Website nutzt die Funktion ???demografische Merkmale??? von Google Analytics. <br>Dadurch k??nnen Berichte erstellt werden, die Aussagen zu Alter, Geschlecht und Interessen der Seitenbesucher enthalten. Diese Daten stammen aus interessenbezogener Werbung von Google sowie aus Besucherdaten von Drittanbietern. Diese Daten k??nnen keiner bestimmten Person zugeordnet werden. Sie k??nnen diese Funktion jederzeit ??ber die Anzeigeneinstellungen in Ihrem Google-Konto deaktivieren oder die Erfassung Ihrer Daten durch Google Analytics wie im Punkt ???Widerspruch gegen Datenerfassung??? dargestellt generell untersagen.</p>
                <p>(4) <strong><span style="text-decoration: underline;">Google Ads</span></strong><br>Wir nutzen auf unserem Internetauftritt das Online-Werbeprogramm ???Google AdWords??? und im Rahmen von Google AdWords das Conversion-Tracking. Das Cookie f??r Conversion-Tracking wird beim Nutzer gesetzt, wenn dieser auf eine von Google geschaltete Anzeige klickt. Bei Cookies handelt es sich um kleine Textdateien, die auf Ihrem Computersystem abgelegt werden. Diese Cookies verlieren nach 30 Tagen ihre G??ltigkeit und dienen nicht der pers??nlichen Identifizierung. Besucht der Nutzer bestimmte Seiten dieser Website und das Cookie ist noch nicht abgelaufen, k??nnen Google und wir erkennen, dass der Nutzer auf die Anzeige geklickt hat und zu dieser Seite weitergeleitet wurde. Jeder Google AdWords-Kunde erh??lt ein anderes Cookie. Cookies k??nnen somit nicht ??ber die Websites von AdWords-Kunden nachverfolgt werden. Die mithilfe des Conversion-Cookies eingeholten Informationen dienen dazu, Conversion-Statistiken f??r AdWords-Kunden zu erstellen, die sich f??r Conversion-Tracking entschieden haben. Die Kunden erfahren die Gesamtanzahl der Nutzer, die auf ihre Anzeige geklickt haben und zu einer mit einem Conversion-Tracking-Tag versehenen Seite weitergeleitet wurden. Sie erhalten jedoch keine Informationen, mit denen sich Nutzer pers??nlich identifizieren lassen. Wenn Sie nicht am Tracking teilnehmen m??chten, k??nnen Sie dieser Nutzung widersprechen, indem Sie das Cookie des Google Conversion-Trackings ??ber ihren Internet-Browser unter Nutzereinstellungen leicht deaktivieren. Sie werden sodann nicht in die Conversion-Tracking Statistiken aufgenommen. Unter der nachstehenden Internetadresse erhalten Sie weitere Informationen ??ber die Datenschutzbestimmungen von Google: <a href="http://www.google.de/policies/privacy/">http://www.google.de/policies/privacy/</a></p>
                <p class="empty"> </p>
                <p></p>
            </div>

            <div class="cookie--section">
                <h2>
                    <input type="checkbox" name="facebook_tracking_term" value="1" id="facebook_tracking_term" disabled <?php echo $this->input->cookie('facebook_tracking_term') ? 'checked' : 'checked' ?>><label for="facebook_tracking_term">Facebook Cookies</label>
                </h2>
                <p>
                </p>
                <p><strong><span style="text-decoration: underline;">Facebook</span></strong><br>Wir verwenden auf unserer Seite auch Social Plugins (???Plugins???) des sozialen Netzwerkes facebook.com, welches von der Facebook Inc., 1601 S. California Ave, Palo Alto, CA 94304, USA betrieben wird (???Facebook???). Die Plugins sind an einem der Facebook Logos erkennbar oder sind mit dem Zusatz ???Facebook Social Plugin??? gekennzeichnet. Die Liste und das Aussehen der Facebook Social Plugins kann hier eingesehen werden: <a href="https://developers.facebook.com/docs/plugins/">https://developers.facebook.com/docs/plugins/</a>. Wenn Sie unsere Seite aufrufen und w??hrenddessen bei Facebook eingeloggt sind, erkennt Facebook durch die von der Komponente gesammelte Information, welche konkrete Seite Sie besuchen und ordnet diese Informationen Ihrem pers??nlichen Account auf facebook zu. Klicken Sie z.B. den ???Gef??llt mir???-Button an oder geben Sie entsprechende Kommentare ab, werden diese Informationen an Ihr pers??nliches Benutzerkonto auf Facebook ??bermittelt und dort gespeichert. Dar??ber hinaus wird die Information, dass Sie unsere Seite besucht haben, an Facebook weitergegeben. Dies geschieht unabh??ngig davon, ob Sie die Komponente anklicken oder nicht. Wenn Sie diese ??bermittlung und Speicherung von Daten ??ber Sie und Ihr Verhalten auf unserer Webseite durch Facebook unterbinden wollen, m??ssen Sie sich bei Facebook ausloggen und zwar bevor Sie unsere Seite besuchen. Die Datenschutzhinweise von Facebook geben hierzu n??here Informationen, insbesondere zur Erhebung und Nutzung der Daten durch Facebook, zu Ihren diesbez??glichen Rechten sowie zu den Einstellungsm??glichkeiten zum Schutz Ihrer Privatsph??re: <a href="https://de-de.facebook.com/about/privacy/">https://de-de.facebook.com/about/privacy/</a> Zudem sind am Markt externe Tools erh??ltlich, mit denen Facebook-Social-Plugins mit Add-ons f??r alle g??ngigen Browser blockiert werden k??nnen <a href="http://webgraph.com/resources/facebookblocker/">http://webgraph.com/resources/facebookblocker/</a> Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Facebook sowie die diesbez??glichen Rechte und Einstellungsm??glichkeiten zum Schutz der Privatsph??re, k??nnen Sie den Datenschutzhinweisen von Facebook entnehmen: <a href="https://www.facebook.com/about/privacy/">https://www.facebook.com/about/privacy/</a>. Diese Website verwendet die Remarketing-Funktion ???Custom Audiences??? der Facebook Inc. (???Facebook???). Diese Funktion dient dazu, Besuchern dieser Webseite im Rahmen des Besuchs des sozialen Netzwerkes Facebook interessenbezogene Werbeanzeigen (???Facebook-Ads???) zu pr??sentieren. Hierzu wurde auf dieser Website das Remarketing-Tag von Facebook implementiert. ??ber dieses Tag wird beim Besuch der Webseite eine direkte Verbindung zu den Facebook-Servern hergestellt. Dabei wird an den Facebook-Server ??bermittelt, dass Sie diese Website besucht haben und Facebook ordnet diese Information Ihrem pers??nlichen Facebook-Benutzerkonto zu. N??here Informationen zur Erhebung und Nutzung der Daten durch Facebook sowie ??ber Ihre diesbez??glichen Rechte und M??glichkeiten zum Schutz Ihrer Privatsph??re finden Sie in den Datenschutzhinweisen von Facebook unter <a href="https://www.facebook.com/about/privacy/">https://www.facebook.com/about/privacy/</a>. Alternativ k??nnen Sie die Remarketing-Funktion ???Custom Audiences??? unter <a href="https://www.facebook.com/settings/?tab=ads#_=_">https://www.facebook.com/settings/?tab=ads#_=_</a> deaktivieren. Hierf??r m??ssen Sie bei Facebook angemeldet sein.</p>
                <p><span style="text-decoration: underline;">Instagram Plugin</span> <br>Auf unseren Seiten sind Funktionen des Dienstes Instagram eingebunden. Diese Funktionen werden angeboten durch die Instagram Inc., 1601 Willow Road, Menlo Park, CA 94025, USA integriert. Wenn Sie in Ihrem Instagram-Account eingeloggt sind, k??nnen Sie durch Anklicken des Instagram-Buttons die Inhalte unserer Seiten mit Ihrem Instagram-Profil verlinken. Dadurch kann Instagram den Besuch unserer Seiten Ihrem Benutzerkonto zuordnen. Wir weisen darauf hin, dass wir als Anbieter der Seiten keine Kenntnis vom Inhalt der ??bermittelten Daten sowie deren Nutzung durch Instagram erhalten. Die Nutzung erfolgt im Interesse einer ansprechenden Darstellung unserer Online-Angebote. Dies stellt ein berechtigtes Interesse im Sinne von Art. 6 Abs. 1 lit. f DSGVO dar. Weitere Informationen hierzu finden Sie in der Datenschutzerkl??rung von Instagram: <a href="https://instagram.com/about/legal/privacy/">https://instagram.com/about/legal/privacy/</a></p>
                <p></p>
            </div>

            <div class="cookie--section">
                <h2>
                    <input type="checkbox" name="affiliate_marketing_term" value="1" id="affiliate_marketing_term" <?php echo $this->input->cookie('affiliate_marketing_term') ? 'checked' : '' ?>><label for="affiliate_marketing_term">Affiliate Marketing Cookies</label>
                </h2>
                <p>
                </p>
                <p><span style="text-decoration: underline;"><strong>Affiliate-Marketing</strong></span><br>Nutzen von Affiliate-Marketing F??r die optimierte Ausspielung relevanter Werbemittel und Werbekampagnen sammelt die advanced store GmbH, Alte Jakobstr. 79/80, 10179 Berlin, mittels ad4mat-Technologie auf dieser Seite pseudonyme Informationen und Daten ??ber das Surfverhalten von Usern. Dies erfolgt durch Cookies (kleine Textdateien), die auf Ihrem Computer gespeichert werden. Mithilfe einer auf einem besonderen Algorithmus basierenden Analyse des Surfverhaltens kann advanced store GmbH auf dieser und auf anderen Webseiten gezielt relevante, d.h. Ihrem Interesse entsprechende Produkte und Angebote durch Werbebanner empfehlen. Die Verwendung der Cookies dient dabei einzig der Optimierung der empfohlenen Werbeinhalte, eine pers??nliche Identifizierung des Webseitennutzers erfolgt nicht. advanced store GmbH hat sich dem europ??ischen Branchenstandard f??r Online Behavioral Advertising, der EDAA, verpflichtet. Weitere Informationen dazu sowie ein Pr??ferenzmanagement erhalten Sie hier <a href="http://www.youronlinechoices.com/de/">http://www.youronlinechoices.com/de/</a>. Die Dienste der advanced store GmbH erfolgen auf der Grundlage von Art. 6 Abs. 1 lit f DSGVO. Sollten Sie der Verwendung pseudonymer Cookie-IDs und der entsprechenden Analyse Ihres Surfverhaltens widersprechen wollen, so haben Sie hier die M??glichkeit dazu. Ebenso finden Sie hier weitere Informationen sowie die Datenschutzerkl??rung von advanced store GmbH.</p>
                <p></p>
            </div>

            <div class="cookie--section">
                <h2>
                    <input type="checkbox" name="youtube_term" value="1" id="youtube_term" <?php echo $this->input->cookie('youtube_term') ? 'checked' : 'checked' ?>><label for="youtube_term">Youtube Cookies</label>
                </h2>
                <p>
                </p>
                <p><strong><span style="text-decoration: underline;">Nutzung von YOUTUBE</span></strong> <br>Unsere Webseite nutzt Plugins der von Google betriebenen Seite ???YouTube???. Betreiber der Seiten ist die YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA. Wenn Sie eine unserer mit einem YouTube-Plugin ausgestatteten Seiten besuchen, wird eine Verbindung zu den Servern von YouTube hergestellt. Dabei wird dem Youtube-Server mitgeteilt, welche unserer Seiten Sie besucht haben. Wenn Sie in Ihrem YouTube- Account eingeloggt sind erm??glichen Sie YouTube, Ihr Surfverhalten direkt Ihrem pers??nlichen Profil zuzuordnen. Dies k??nnen Sie verhindern, indem Sie sich aus Ihrem YouTube-Account ausloggen. Weitere Informationen zum Umgang von Nutzerdaten finden Sie in der Datenschutzerkl??rung von YouTube unter: <a href="https://www.google.de/intl/de/policies/privacy">https://www.google.de/intl/de/policies/privacy</a></p>
                <p>&nbsp;</p>
            </div>

            <div class="row m-2 cookie--buttons">
                <div class="col-md-6">
                    <button type="submit" class="btn w-100 btn-primary m-1" name="form1" id="cookie__global__agreement__link"><?php echo $this->lang->line('footer_cookie_button_save');?></button>
                </div>
                <div class="col-md-6">
                    <button class="btn w-100 btn-danger m-1 cookie__global__agreement__close"><?php echo $this->lang->line('footer_cookie_button_close');?></button>
                </div>
            </div>

        </div>
    </div>
    <?php echo form_close(); ?>
<?php endif; ?>
<!--==============================
Cookie end
============================== -->
<?php if ($setting['footer_zoho_live_chat_display'] === "Show") : ?>
    <script type="text/javascript" id="zsiqchat">
        var $zoho = $zoho || {};
        $zoho.salesiq = $zoho.salesiq || {
            widgetcode: "<?php echo $setting['footer_zoho_live_chat']; ?>",
            values: {},
            ready: function() {}
        };
        var d = document;
        s = d.createElement("script");
        s.type = "text/javascript";
        s.id = "zsiqscript";
        s.defer = true;
        s.src = "https://salesiq.zoho.eu/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);
    </script>
<?php endif; ?>
<!--==============================
Tiktok Start
============================== -->
<script>
		!function (w, d, t) {
		  w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++
)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createElement("script");n.type="text/javascript",n.async=!0,n.src=i+"?sdkid="+e+"&lib="+t;e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(n,e)};
		
		  ttq.load('<?php echo $setting['tiktok_load_code'];?>');
		  ttq.page();
		}(window, document, 'ttq');
</script>
<!--==============================
Tiktok End
============================== -->
</body>
</html>