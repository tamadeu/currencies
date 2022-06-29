<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Currency Converter</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="js/currencies.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav">
                        <a class="d-flex" href="#">
                            <div class="sidebar-brand-icon rotate-n-15">
                                <i class="fas fa-laugh-wink"></i>
                            </div>
                            <div class="sidebar-brand-text mx-3">Currency Converter</div>
                        </a>
                        
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Dólar Today -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Dollar Today</div>
                                            <?php include('config/dollar_today.php'); ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Euro Today -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Euro Today</div>
                                            <?php include('config/euro_today.php'); ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Dollar Conversion -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Currency Conversion</div>
                                            <div class="h5 font-weight-bold text-gray-800">
                                                <select class="form-select" aria-label="Default select example" id="currFrom" onchange="getFrom(this.value)">
                                                    <option value="" selected>From</option>
                                                    <option value="AFN">Afghan afghani</option>
                                                    <option value="ALL">Albanian lek</option>
                                                    <option value="DZD">Algerian dinar</option>
                                                    <option value="AOA">Angolan kwanza</option>
                                                    <option value="ARS">Argentine peso</option>
                                                    <option value="AMD">Armenian dram</option>
                                                    <option value="AWG">Aruban florin</option>
                                                    <option value="AUD">Australian dollar</option>
                                                    <option value="AZN">Azerbaijani manat</option>
                                                    <option value="BSD">Bahamian dollar</option>
                                                    <option value="BHD">Bahraini dinar</option>
                                                    <option value="BDT">Bangladeshi taka</option>
                                                    <option value="BBD">Barbadian dollar</option>
                                                    <option value="BYN">Belarusian ruble</option>
                                                    <option value="BZD">Belize dollar</option>
                                                    <option value="BMD">Bermudian dollar</option>
                                                    <option value="BTN">Bhutanese ngultrum</option>
                                                    <option value="BOB">Bolivian boliviano</option>
                                                    <option value="BAM">Bosnia and Herzegovina convertible mark</option>
                                                    <option value="BWP">Botswana pula</option>
                                                    <option value="BRL">Brazilian real</option>
                                                    <option value="BND">Brunei dollar</option>
                                                    <option value="BGN">Bulgarian lev</option>
                                                    <option value="MMK">Burmese kyat</option>
                                                    <option value="BIF">Burundian franc</option>
                                                    <option value="KHR">Cambodian riel</option>
                                                    <option value="CAD">Canadian dollar</option>
                                                    <option value="CVE">Cape Verdean escudo</option>
                                                    <option value="KYD">Cayman Islands dollar</option>
                                                    <option value="XAF">Central African CFA franc</option>
                                                    <option value="XPF">CFP franc</option>
                                                    <option value="CLP">Chilean peso</option>
                                                    <option value="COP">Colombian peso</option>
                                                    <option value="KMF">Comorian franc</option>
                                                    <option value="CDF">Congolese franc</option>
                                                    <option value="CRC">Costa Rican colón</option>
                                                    <option value="HRK">Croatian kuna</option>
                                                    <option value="CUC">Cuban convertible peso</option>
                                                    <option value="CUP">Cuban peso</option>
                                                    <option value="CZK">Czech koruna</option>
                                                    <option value="DKK">Danish krone</option>
                                                    <option value="DJF">Djiboutian franc</option>
                                                    <option value="DOP">Dominican peso</option>
                                                    <option value="XCD">Eastern Caribbean dollar</option>
                                                    <option value="EGP">Egyptian pound</option>
                                                    <option value="ERN">Eritrean nakfa</option>
                                                    <option value="ETB">Ethiopian birr</option>
                                                    <option value="EUR">Euro</option>
                                                    <option value="FKP">Falkland Islands pound</option>
                                                    <option value="FJD">Fijian dollar</option>
                                                    <option value="GMD">Gambian dalasi</option>
                                                    <option value="GEL">Georgian lari</option>
                                                    <option value="GHS">Ghanaian cedi</option>
                                                    <option value="GIP">Gibraltar pound</option>
                                                    <option value="XAU">Gold (troy ounce)</option>
                                                    <option value="GTQ">Guatemalan quetzal</option>
                                                    <option value="GGP">Guernsey pound</option>
                                                    <option value="GNF">Guinean franc</option>
                                                    <option value="GYD">Guyanese dollar</option>
                                                    <option value="HTG">Haitian gourde</option>
                                                    <option value="HNL">Honduran lempira</option>
                                                    <option value="HKD">Hong Kong dollar</option>
                                                    <option value="HUF">Hungarian forint</option>
                                                    <option value="ISK">Icelandic króna</option>
                                                    <option value="INR">Indian rupee</option>
                                                    <option value="IDR">Indonesian rupiah</option>
                                                    <option value="IRR">Iranian rial</option>
                                                    <option value="IQD">Iraqi dinar</option>
                                                    <option value="ILS">Israeli new shekel</option>
                                                    <option value="JMD">Jamaican dollar</option>
                                                    <option value="JPY">Japanese yen</option>
                                                    <option value="JEP">Jersey pound</option>
                                                    <option value="JOD">Jordanian dinar</option>
                                                    <option value="KZT">Kazakhstani tenge</option>
                                                    <option value="KES">Kenyan shilling</option>
                                                    <option value="KWD">Kuwaiti dinar</option>
                                                    <option value="KGS">Kyrgyzstani som</option>
                                                    <option value="LAK">Lao kip</option>
                                                    <option value="LBP">Lebanese pound</option>
                                                    <option value="LSL">Lesotho loti</option>
                                                    <option value="LRD">Liberian dollar</option>
                                                    <option value="LYD">Libyan dinar</option>
                                                    <option value="MOP">Macanese pataca</option>
                                                    <option value="MKD">Macedonian denar</option>
                                                    <option value="MGA">Malagasy ariary</option>
                                                    <option value="MWK">Malawian kwacha</option>
                                                    <option value="MYR">Malaysian ringgit</option>
                                                    <option value="MVR">Maldivian rufiyaa</option>
                                                    <option value="IMP">Manx pound</option>
                                                    <option value="MRU">Mauritanian ouguiya</option>
                                                    <option value="MUR">Mauritian rupee</option>
                                                    <option value="MXN">Mexican peso</option>
                                                    <option value="MDL">Moldovan leu</option>
                                                    <option value="MNT">Mongolian tögrög</option>
                                                    <option value="MAD">Moroccan dirham</option>
                                                    <option value="MZN">Mozambican metical</option>
                                                    <option value="NAD">Namibian dollar</option>
                                                    <option value="NPR">Nepalese rupee</option>
                                                    <option value="ANG">Netherlands Antillean guilder</option>
                                                    <option value="TWD">New Taiwan dollar</option>
                                                    <option value="NZD">New Zealand dollar</option>
                                                    <option value="NIO">Nicaraguan córdoba</option>
                                                    <option value="NGN">Nigerian naira</option>
                                                    <option value="NOK">Norwegian krone</option>
                                                    <option value="OMR">Omani rial</option>
                                                    <option value="PKR">Pakistani rupee</option>
                                                    <option value="PAB">Panamanian balboa</option>
                                                    <option value="PGK">Papua New Guinean kina</option>
                                                    <option value="PYG">Paraguayan guaraní</option>
                                                    <option value="PEN">Peruvian sol</option>
                                                    <option value="PHP">Philippine peso</option>
                                                    <option value="PLN">Polish złoty</option>
                                                    <option value="GBP">Pound sterling</option>
                                                    <option value="QAR">Qatari riyal</option>
                                                    <option value="CNY">Renminbi</option>
                                                    <option value="RON">Romanian leu</option>
                                                    <option value="RUB">Russian ruble</option>
                                                    <option value="RWF">Rwandan franc</option>
                                                    <option value="SHP">Saint Helena pound</option>
                                                    <option value="SVC">Salvadoran colón</option>
                                                    <option value="WST">Samoan tālā</option>
                                                    <option value="STN">São Tomé and Príncipe dobra</option>
                                                    <option value="SAR">Saudi riyal</option>
                                                    <option value="RSD">Serbian dinar</option>
                                                    <option value="SCR">Seychellois rupee</option>
                                                    <option value="SLL">Sierra Leonean leone</option>
                                                    <option value="XAG">Silver (troy ounce)</option>
                                                    <option value="SGD">Singapore dollar</option>
                                                    <option value="SBD">Solomon Islands dollar</option>
                                                    <option value="SOS">Somali shilling</option>
                                                    <option value="ZAR">South African rand</option>
                                                    <option value="KRW">South Korean won</option>
                                                    <option value="SSP">South Sudanese pound</option>
                                                    <option value="XDR">Special drawing rights</option>
                                                    <option value="LKR">Sri Lankan rupee</option>
                                                    <option value="SDG">Sudanese pound</option>
                                                    <option value="SRD">Surinamese dollar</option>
                                                    <option value="SZL">Swazi lilangeni</option>
                                                    <option value="SEK">Swedish krona</option>
                                                    <option value="CHF">Swiss franc</option>
                                                    <option value="SYP">Syrian pound</option>
                                                    <option value="TJS">Tajikistani somoni</option>
                                                    <option value="TZS">Tanzanian shilling</option>
                                                    <option value="THB">Thai baht</option>
                                                    <option value="TOP">Tongan paʻanga</option>
                                                    <option value="TTD">Trinidad and Tobago dollar</option>
                                                    <option value="TND">Tunisian dinar</option>
                                                    <option value="TRY">Turkish lira</option>
                                                    <option value="TMT">Turkmenistan manat</option>
                                                    <option value="UGX">Ugandan shilling</option>
                                                    <option value="UAH">Ukrainian hryvnia</option>
                                                    <option value="AED">United Arab Emirates dirham</option>
                                                    <option value="USD">United States dollar</option>
                                                    <option value="UYU">Uruguayan peso</option>
                                                    <option value="UZS">Uzbekistani soʻm</option>
                                                    <option value="VUV">Vanuatu vatu</option>
                                                    <option value="VES">Venezuelan bolívar</option>
                                                    <option value="VND">Vietnamese đồng</option>
                                                    <option value="XOF">West African CFA franc</option>
                                                    <option value="YER">Yemeni rial</option>
                                                    <option value="ZMW">Zambian kwacha</option>
                                                    <option value="ZWL">Zimbabwean dollar</option>
                                                </select>
                                            </div>
                                            <div class="h5 font-weight-bold text-gray-800">
                                                <select class="form-select" aria-label="Default select example" id="currTo" onchange="getTo(this.value)">
                                                    <option value="" selected>To</option>
                                                    <option value="AFN">Afghan afghani</option>
                                                    <option value="ALL">Albanian lek</option>
                                                    <option value="DZD">Algerian dinar</option>
                                                    <option value="AOA">Angolan kwanza</option>
                                                    <option value="ARS">Argentine peso</option>
                                                    <option value="AMD">Armenian dram</option>
                                                    <option value="AWG">Aruban florin</option>
                                                    <option value="AUD">Australian dollar</option>
                                                    <option value="AZN">Azerbaijani manat</option>
                                                    <option value="BSD">Bahamian dollar</option>
                                                    <option value="BHD">Bahraini dinar</option>
                                                    <option value="BDT">Bangladeshi taka</option>
                                                    <option value="BBD">Barbadian dollar</option>
                                                    <option value="BYN">Belarusian ruble</option>
                                                    <option value="BZD">Belize dollar</option>
                                                    <option value="BMD">Bermudian dollar</option>
                                                    <option value="BTN">Bhutanese ngultrum</option>
                                                    <option value="BOB">Bolivian boliviano</option>
                                                    <option value="BAM">Bosnia and Herzegovina convertible mark</option>
                                                    <option value="BWP">Botswana pula</option>
                                                    <option value="BRL">Brazilian real</option>
                                                    <option value="BND">Brunei dollar</option>
                                                    <option value="BGN">Bulgarian lev</option>
                                                    <option value="MMK">Burmese kyat</option>
                                                    <option value="BIF">Burundian franc</option>
                                                    <option value="KHR">Cambodian riel</option>
                                                    <option value="CAD">Canadian dollar</option>
                                                    <option value="CVE">Cape Verdean escudo</option>
                                                    <option value="KYD">Cayman Islands dollar</option>
                                                    <option value="XAF">Central African CFA franc</option>
                                                    <option value="XPF">CFP franc</option>
                                                    <option value="CLP">Chilean peso</option>
                                                    <option value="COP">Colombian peso</option>
                                                    <option value="KMF">Comorian franc</option>
                                                    <option value="CDF">Congolese franc</option>
                                                    <option value="CRC">Costa Rican colón</option>
                                                    <option value="HRK">Croatian kuna</option>
                                                    <option value="CUC">Cuban convertible peso</option>
                                                    <option value="CUP">Cuban peso</option>
                                                    <option value="CZK">Czech koruna</option>
                                                    <option value="DKK">Danish krone</option>
                                                    <option value="DJF">Djiboutian franc</option>
                                                    <option value="DOP">Dominican peso</option>
                                                    <option value="XCD">Eastern Caribbean dollar</option>
                                                    <option value="EGP">Egyptian pound</option>
                                                    <option value="ERN">Eritrean nakfa</option>
                                                    <option value="ETB">Ethiopian birr</option>
                                                    <option value="EUR">Euro</option>
                                                    <option value="FKP">Falkland Islands pound</option>
                                                    <option value="FJD">Fijian dollar</option>
                                                    <option value="GMD">Gambian dalasi</option>
                                                    <option value="GEL">Georgian lari</option>
                                                    <option value="GHS">Ghanaian cedi</option>
                                                    <option value="GIP">Gibraltar pound</option>
                                                    <option value="XAU">Gold (troy ounce)</option>
                                                    <option value="GTQ">Guatemalan quetzal</option>
                                                    <option value="GGP">Guernsey pound</option>
                                                    <option value="GNF">Guinean franc</option>
                                                    <option value="GYD">Guyanese dollar</option>
                                                    <option value="HTG">Haitian gourde</option>
                                                    <option value="HNL">Honduran lempira</option>
                                                    <option value="HKD">Hong Kong dollar</option>
                                                    <option value="HUF">Hungarian forint</option>
                                                    <option value="ISK">Icelandic króna</option>
                                                    <option value="INR">Indian rupee</option>
                                                    <option value="IDR">Indonesian rupiah</option>
                                                    <option value="IRR">Iranian rial</option>
                                                    <option value="IQD">Iraqi dinar</option>
                                                    <option value="ILS">Israeli new shekel</option>
                                                    <option value="JMD">Jamaican dollar</option>
                                                    <option value="JPY">Japanese yen</option>
                                                    <option value="JEP">Jersey pound</option>
                                                    <option value="JOD">Jordanian dinar</option>
                                                    <option value="KZT">Kazakhstani tenge</option>
                                                    <option value="KES">Kenyan shilling</option>
                                                    <option value="KWD">Kuwaiti dinar</option>
                                                    <option value="KGS">Kyrgyzstani som</option>
                                                    <option value="LAK">Lao kip</option>
                                                    <option value="LBP">Lebanese pound</option>
                                                    <option value="LSL">Lesotho loti</option>
                                                    <option value="LRD">Liberian dollar</option>
                                                    <option value="LYD">Libyan dinar</option>
                                                    <option value="MOP">Macanese pataca</option>
                                                    <option value="MKD">Macedonian denar</option>
                                                    <option value="MGA">Malagasy ariary</option>
                                                    <option value="MWK">Malawian kwacha</option>
                                                    <option value="MYR">Malaysian ringgit</option>
                                                    <option value="MVR">Maldivian rufiyaa</option>
                                                    <option value="IMP">Manx pound</option>
                                                    <option value="MRU">Mauritanian ouguiya</option>
                                                    <option value="MUR">Mauritian rupee</option>
                                                    <option value="MXN">Mexican peso</option>
                                                    <option value="MDL">Moldovan leu</option>
                                                    <option value="MNT">Mongolian tögrög</option>
                                                    <option value="MAD">Moroccan dirham</option>
                                                    <option value="MZN">Mozambican metical</option>
                                                    <option value="NAD">Namibian dollar</option>
                                                    <option value="NPR">Nepalese rupee</option>
                                                    <option value="ANG">Netherlands Antillean guilder</option>
                                                    <option value="TWD">New Taiwan dollar</option>
                                                    <option value="NZD">New Zealand dollar</option>
                                                    <option value="NIO">Nicaraguan córdoba</option>
                                                    <option value="NGN">Nigerian naira</option>
                                                    <option value="NOK">Norwegian krone</option>
                                                    <option value="OMR">Omani rial</option>
                                                    <option value="PKR">Pakistani rupee</option>
                                                    <option value="PAB">Panamanian balboa</option>
                                                    <option value="PGK">Papua New Guinean kina</option>
                                                    <option value="PYG">Paraguayan guaraní</option>
                                                    <option value="PEN">Peruvian sol</option>
                                                    <option value="PHP">Philippine peso</option>
                                                    <option value="PLN">Polish złoty</option>
                                                    <option value="GBP">Pound sterling</option>
                                                    <option value="QAR">Qatari riyal</option>
                                                    <option value="CNY">Renminbi</option>
                                                    <option value="RON">Romanian leu</option>
                                                    <option value="RUB">Russian ruble</option>
                                                    <option value="RWF">Rwandan franc</option>
                                                    <option value="SHP">Saint Helena pound</option>
                                                    <option value="SVC">Salvadoran colón</option>
                                                    <option value="WST">Samoan tālā</option>
                                                    <option value="STN">São Tomé and Príncipe dobra</option>
                                                    <option value="SAR">Saudi riyal</option>
                                                    <option value="RSD">Serbian dinar</option>
                                                    <option value="SCR">Seychellois rupee</option>
                                                    <option value="SLL">Sierra Leonean leone</option>
                                                    <option value="XAG">Silver (troy ounce)</option>
                                                    <option value="SGD">Singapore dollar</option>
                                                    <option value="SBD">Solomon Islands dollar</option>
                                                    <option value="SOS">Somali shilling</option>
                                                    <option value="ZAR">South African rand</option>
                                                    <option value="KRW">South Korean won</option>
                                                    <option value="SSP">South Sudanese pound</option>
                                                    <option value="XDR">Special drawing rights</option>
                                                    <option value="LKR">Sri Lankan rupee</option>
                                                    <option value="SDG">Sudanese pound</option>
                                                    <option value="SRD">Surinamese dollar</option>
                                                    <option value="SZL">Swazi lilangeni</option>
                                                    <option value="SEK">Swedish krona</option>
                                                    <option value="CHF">Swiss franc</option>
                                                    <option value="SYP">Syrian pound</option>
                                                    <option value="TJS">Tajikistani somoni</option>
                                                    <option value="TZS">Tanzanian shilling</option>
                                                    <option value="THB">Thai baht</option>
                                                    <option value="TOP">Tongan paʻanga</option>
                                                    <option value="TTD">Trinidad and Tobago dollar</option>
                                                    <option value="TND">Tunisian dinar</option>
                                                    <option value="TRY">Turkish lira</option>
                                                    <option value="TMT">Turkmenistan manat</option>
                                                    <option value="UGX">Ugandan shilling</option>
                                                    <option value="UAH">Ukrainian hryvnia</option>
                                                    <option value="AED">United Arab Emirates dirham</option>
                                                    <option value="USD">United States dollar</option>
                                                    <option value="UYU">Uruguayan peso</option>
                                                    <option value="UZS">Uzbekistani soʻm</option>
                                                    <option value="VUV">Vanuatu vatu</option>
                                                    <option value="VES">Venezuelan bolívar</option>
                                                    <option value="VND">Vietnamese đồng</option>
                                                    <option value="XOF">West African CFA franc</option>
                                                    <option value="YER">Yemeni rial</option>
                                                    <option value="ZMW">Zambian kwacha</option>
                                                    <option value="ZWL">Zimbabwean dollar</option>
                                                </select>
                                            </div>
                                         
                                          <a href="#" onclick="getCurr()" class="btn btn-success btn-icon-split">
                                              <span class="icon text-white-50">
                                                  <i class="fas fa-check"></i>
                                              </span>
                                              <span class="text">Convert!</span>
                                          </a>

                                        </div>
                                        <div class="col-auto">
                                            <p id="from_to_text"></p>
                                            <div class="h3 mb-0 font-weight-bold text-gray-800" id="value"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->

                    <div class="row">

                        <!-- Dólar -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Dollar -> BRL</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->

                                <?php 
                                    
                                    include('config/usd.php');
                                ?>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="variacao"></canvas>
                                    </div>
                                </div>
                                
                                <script>
                                  // === include 'setup' then 'config' above ===
                                  const labels_cc = <?php echo json_encode($dia) ?>;
                                  const data_cc = {
                                    labels: labels_cc,
                                    datasets: [{
                                      label: 'Variação',
                                      data: <?php echo json_encode($valor) ?>,
                                      borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
                                      ],
                                      borderWidth: 1
                                    }]
                                  };
                                
                                  const config = {
                                    type: 'line',
                                    data: data_cc,
                                    options: {
                                      scales: {
                                        y: {
                                          beginAtZero: false
                                        },
                                        x: {
                                          reverse: true
                                        }
                                      },
                                    interaction: {
                                          intersect: false,
                                          mode: 'index',
                                        }
                                    },
                                  };
                                
                                  var variacao = new Chart(
                                    document.getElementById('variacao'),
                                    config
                                  );
                                </script>

                            </div>
                        </div>

                        <!-- Euro -->
                        <div class="col-xl-6">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Euro -> BRL</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->

                                <?php 
                                    
                                    include('config/eur.php');
                                ?>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="variacao_euro"></canvas>
                                    </div>
                                </div>
                                
                                <script>
                                  // === include 'setup' then 'config' above ===
                                  const labels_euro = <?php echo json_encode($dia_euro) ?>;
                                  const data_euro = {
                                    labels: labels_euro,
                                    datasets: [{
                                      label: 'Variação',
                                      data: <?php echo json_encode($valor_euro) ?>,
                                      borderColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(255, 159, 64)',
                                        'rgb(255, 205, 86)',
                                        'rgb(75, 192, 192)',
                                        'rgb(54, 162, 235)',
                                        'rgb(153, 102, 255)',
                                        'rgb(201, 203, 207)'
                                      ],
                                      borderWidth: 1
                                    }]
                                  };
                                
                                  const config_euro = {
                                    type: 'line',
                                    data: data_euro,
                                    options: {
                                      scales: {
                                        y: {
                                          beginAtZero: false
                                        },
                                        x: {
                                          reverse: true
                                        }
                                      },
                                    interaction: {
                                          intersect: false,
                                          mode: 'index',
                                        }
                                    },
                                  };
                                
                                  var variacao_euro = new Chart(
                                    document.getElementById('variacao_euro'),
                                    config_euro
                                  );
                                </script>

                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Talles Amadeu 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>