
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="tema/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="tema/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="tema/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="tema/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="tema/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="tema/gentelella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="tema/gentelella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="tema/gentelella/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="tema/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<!-- Ion.RangeSlider -->
    <link href="tema/gentelella/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="tema/gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="tema/gentelella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="tema/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
            <!-- sidebar menu -->
            <?php include 'menu.php'; ?>
            <!-- /sidebar menu -->
        
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cadastrar Cliente </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask">

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="nome" placeholder="Nome da Mãe">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  
					  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="nome" placeholder="Nome do Pai">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

					  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="endereco" placeholder="Endereço">
                        <span class="fa fa-home form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  
                      

					  <div class="col-md-6 col-xs-6 col-sm-12" id="dadosMae">
						<div class="x_panel">
							<div class="x_title">
								<h2> Dados da Mãe</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" id="email" placeholder="Email">
									<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control" id="telefone" placeholder="Telefone Fixo">
									<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" id="celular" placeholder="Telefone Celular">
									<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control" id="whatsapp" placeholder="Whatsapp">
									<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" id="dataNascimento" placeholder="data de nascimento">
									<span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
								</div>
							</div>
						</div>
					</div>
					  
					  
					  <div class="col-md-6 col-xs-6 col-sm-12" id="dadosPai">
						  <div class="x_panel">
							<div class="x_title">
								<h2 class="control-label"> Dados do Pai</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
							  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" id="email" placeholder="Email">
								<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
							  </div>
							  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control" id="telefone" placeholder="Telefone Fixo">
								<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
							  </div>
							  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" id="celular" placeholder="Telefone Celular">
								<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
							  </div>
							  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control" id="whatsapp" placeholder="Whatsapp">
								<span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
							  </div>
							  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" id="dataNascimento" placeholder="data de nascimento">
								<span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
							  </div>
						  </div>
						  </div>
					  </div>
					  <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="dataCasamento" placeholder="data de casamento">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>
					  
					  
					  <div class="x_panel" id="dadosCriancas">
						<div class="x_title">
							<h2> Dados das Crianças</h2>
							<p class="nav navbar-right panel_toolbox">
							  <button type="button" class="btn btn-info btn-sm">Adicionar <i class="fa fa-plus"></i></button>
							</p>
							<div class="clearfix"></div>
						</div>
						
						<div class="x_content form-group has-feedback">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-9 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" id="nomeCrianca_1" placeholder="Nome">
									<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-7 form-group has-feedback">
									<input type="text" class="form-control" id="dataNascimentoCrianca_1" placeholder="Data de Nascimento">
									<span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-5 form-group has-feedback">
									<p>
										M: <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
										F: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
									</p>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-9 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" id="nomeCrianca_1" placeholder="Nome">
									<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-7 form-group has-feedback">
									<input type="text" class="form-control" id="dataNascimentoCrianca_1" placeholder="Data de Nascimento">
									<span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-5 form-group has-feedback">
									<p>
										M: <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
										F: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
									</p>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-9 form-group has-feedback">
									<input type="text" class="form-control has-feedback-left" id="nomeCrianca_1" placeholder="Nome">
									<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-7 form-group has-feedback">
									<input type="text" class="form-control" id="dataNascimentoCrianca_1" placeholder="Data de Nascimento">
									<span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-5 form-group has-feedback">
									<p>
										M: <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
										F: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
									</p>
								</div>
							</div>
					  </div>
					  </div>
					  
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>


              </div>

            </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="tema/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="tema/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="tema/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="tema/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="tema/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="tema/gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="tema/gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="tema/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="tema/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="tema/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="tema/gentelella/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="tema/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="tema/gentelella/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="tema/gentelella/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="tema/gentelella/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="tema/gentelella/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="tema/gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="tema/gentelella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="tema/gentelella/build/js/custom.min.js"></script>

    
    <!-- bootstrap-wysiwyg -->
    <script>
      $(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        window.prettyPrint;
        prettyPrint();
      });
    </script>
    <!-- /bootstrap-wysiwyg -->

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

    <!-- Parsley -->
    <script>
      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form .btn').on('click', function() {
          $('#demo-form').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });

      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#demo-form2 .btn').on('click', function() {
          $('#demo-form2').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#demo-form2').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });
      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>
    <!-- /Parsley -->

    <!-- Autosize -->
    <script>
      $(document).ready(function() {
        autosize($('.resizable_textarea'));
      });
    </script>
    <!-- /Autosize -->

    <!-- jQuery autocomplete -->
    <script>
      $(document).ready(function() {
        var countries = { AD:"Andorra",A2:"Andorra Test",AE:"United Arab Emirates",AF:"Afghanistan",AG:"Antigua and Barbuda",AI:"Anguilla",AL:"Albania",AM:"Armenia",AN:"Netherlands Antilles",AO:"Angola",AQ:"Antarctica",AR:"Argentina",AS:"American Samoa",AT:"Austria",AU:"Australia",AW:"Aruba",AX:"Åland Islands",AZ:"Azerbaijan",BA:"Bosnia and Herzegovina",BB:"Barbados",BD:"Bangladesh",BE:"Belgium",BF:"Burkina Faso",BG:"Bulgaria",BH:"Bahrain",BI:"Burundi",BJ:"Benin",BL:"Saint Barthélemy",BM:"Bermuda",BN:"Brunei",BO:"Bolivia",BQ:"British Antarctic Territory",BR:"Brazil",BS:"Bahamas",BT:"Bhutan",BV:"Bouvet Island",BW:"Botswana",BY:"Belarus",BZ:"Belize",CA:"Canada",CC:"Cocos [Keeling] Islands",CD:"Congo - Kinshasa",CF:"Central African Republic",CG:"Congo - Brazzaville",CH:"Switzerland",CI:"Côte d’Ivoire",CK:"Cook Islands",CL:"Chile",CM:"Cameroon",CN:"China",CO:"Colombia",CR:"Costa Rica",CS:"Serbia and Montenegro",CT:"Canton and Enderbury Islands",CU:"Cuba",CV:"Cape Verde",CX:"Christmas Island",CY:"Cyprus",CZ:"Czech Republic",DD:"East Germany",DE:"Germany",DJ:"Djibouti",DK:"Denmark",DM:"Dominica",DO:"Dominican Republic",DZ:"Algeria",EC:"Ecuador",EE:"Estonia",EG:"Egypt",EH:"Western Sahara",ER:"Eritrea",ES:"Spain",ET:"Ethiopia",FI:"Finland",FJ:"Fiji",FK:"Falkland Islands",FM:"Micronesia",FO:"Faroe Islands",FQ:"French Southern and Antarctic Territories",FR:"France",FX:"Metropolitan France",GA:"Gabon",GB:"United Kingdom",GD:"Grenada",GE:"Georgia",GF:"French Guiana",GG:"Guernsey",GH:"Ghana",GI:"Gibraltar",GL:"Greenland",GM:"Gambia",GN:"Guinea",GP:"Guadeloupe",GQ:"Equatorial Guinea",GR:"Greece",GS:"South Georgia and the South Sandwich Islands",GT:"Guatemala",GU:"Guam",GW:"Guinea-Bissau",GY:"Guyana",HK:"Hong Kong SAR China",HM:"Heard Island and McDonald Islands",HN:"Honduras",HR:"Croatia",HT:"Haiti",HU:"Hungary",ID:"Indonesia",IE:"Ireland",IL:"Israel",IM:"Isle of Man",IN:"India",IO:"British Indian Ocean Territory",IQ:"Iraq",IR:"Iran",IS:"Iceland",IT:"Italy",JE:"Jersey",JM:"Jamaica",JO:"Jordan",JP:"Japan",JT:"Johnston Island",KE:"Kenya",KG:"Kyrgyzstan",KH:"Cambodia",KI:"Kiribati",KM:"Comoros",KN:"Saint Kitts and Nevis",KP:"North Korea",KR:"South Korea",KW:"Kuwait",KY:"Cayman Islands",KZ:"Kazakhstan",LA:"Laos",LB:"Lebanon",LC:"Saint Lucia",LI:"Liechtenstein",LK:"Sri Lanka",LR:"Liberia",LS:"Lesotho",LT:"Lithuania",LU:"Luxembourg",LV:"Latvia",LY:"Libya",MA:"Morocco",MC:"Monaco",MD:"Moldova",ME:"Montenegro",MF:"Saint Martin",MG:"Madagascar",MH:"Marshall Islands",MI:"Midway Islands",MK:"Macedonia",ML:"Mali",MM:"Myanmar [Burma]",MN:"Mongolia",MO:"Macau SAR China",MP:"Northern Mariana Islands",MQ:"Martinique",MR:"Mauritania",MS:"Montserrat",MT:"Malta",MU:"Mauritius",MV:"Maldives",MW:"Malawi",MX:"Mexico",MY:"Malaysia",MZ:"Mozambique",NA:"Namibia",NC:"New Caledonia",NE:"Niger",NF:"Norfolk Island",NG:"Nigeria",NI:"Nicaragua",NL:"Netherlands",NO:"Norway",NP:"Nepal",NQ:"Dronning Maud Land",NR:"Nauru",NT:"Neutral Zone",NU:"Niue",NZ:"New Zealand",OM:"Oman",PA:"Panama",PC:"Pacific Islands Trust Territory",PE:"Peru",PF:"French Polynesia",PG:"Papua New Guinea",PH:"Philippines",PK:"Pakistan",PL:"Poland",PM:"Saint Pierre and Miquelon",PN:"Pitcairn Islands",PR:"Puerto Rico",PS:"Palestinian Territories",PT:"Portugal",PU:"U.S. Miscellaneous Pacific Islands",PW:"Palau",PY:"Paraguay",PZ:"Panama Canal Zone",QA:"Qatar",RE:"Réunion",RO:"Romania",RS:"Serbia",RU:"Russia",RW:"Rwanda",SA:"Saudi Arabia",SB:"Solomon Islands",SC:"Seychelles",SD:"Sudan",SE:"Sweden",SG:"Singapore",SH:"Saint Helena",SI:"Slovenia",SJ:"Svalbard and Jan Mayen",SK:"Slovakia",SL:"Sierra Leone",SM:"San Marino",SN:"Senegal",SO:"Somalia",SR:"Suriname",ST:"São Tomé and Príncipe",SU:"Union of Soviet Socialist Republics",SV:"El Salvador",SY:"Syria",SZ:"Swaziland",TC:"Turks and Caicos Islands",TD:"Chad",TF:"French Southern Territories",TG:"Togo",TH:"Thailand",TJ:"Tajikistan",TK:"Tokelau",TL:"Timor-Leste",TM:"Turkmenistan",TN:"Tunisia",TO:"Tonga",TR:"Turkey",TT:"Trinidad and Tobago",TV:"Tuvalu",TW:"Taiwan",TZ:"Tanzania",UA:"Ukraine",UG:"Uganda",UM:"U.S. Minor Outlying Islands",US:"United States",UY:"Uruguay",UZ:"Uzbekistan",VA:"Vatican City",VC:"Saint Vincent and the Grenadines",VD:"North Vietnam",VE:"Venezuela",VG:"British Virgin Islands",VI:"U.S. Virgin Islands",VN:"Vietnam",VU:"Vanuatu",WF:"Wallis and Futuna",WK:"Wake Island",WS:"Samoa",YD:"People's Democratic Republic of Yemen",YE:"Yemen",YT:"Mayotte",ZA:"South Africa",ZM:"Zambia",ZW:"Zimbabwe",ZZ:"Unknown or Invalid Region" };

        var countriesArray = $.map(countries, function(value, key) {
          return {
            value: value,
            data: key
          };
        });

        // initialize autocomplete with custom appendTo
        $('#autocomplete-custom-append').autocomplete({
          lookup: countriesArray
        });
      });
    </script>
    <!-- /jQuery autocomplete -->

    <!-- Ion.RangeSlider -->
    <script>
      $(document).ready(function() {
        $("#range").ionRangeSlider({
          hide_min_max: true,
          keyboard: true,
          min: 0,
          max: 15,
          from: 3,
          to: 10,
          type: 'double',
          step: 1,
        });
      });
    </script>
    <!-- /Ion.RangeSlider -->
  </body>
</html>
