<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/ropa.css">
    <script src="https://kit.fontawesome.com/6611670d58.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/bolsa.png" type="image/x-icon">
    <title> Jose Mataqque Pinares SAC</title>
</head>
<body>
    <section class="contenedor-navbar">
                <nav class="navbar navbar-expand-sm navbar-light bg-light">
                        <a class="navbar-brand" href="#"><img class="img-fluid" style="width:30px" src="img/bolsa.png" alt=""> Tiendas Virgen de la merced</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/oportunidad">Oportunidad</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Planes
                              </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Premiun</a>
                                <a class="dropdown-item" href="#">Medio</a>
                                <a class="dropdown-item" href="#">Básico</a>
                                <!-- <div class="dropdown-divider"></div> -->
                              </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Soporte</a>
                            </li>
                          </ul>
                         <div class="pr-3"><a class="btn btn-info pr-2" href="/tracker">Iniciar session <li class="fas fa-user"></li></a></div>
                         <a class="btn btn-danger" href="">Registro <li class="fas fa-sign-in-alt"></li></a>
                        </div>
                      </nav>
    </section>
    <section class="imagenes">
        <div>
            <img src="img/botones.jpg" alt="" class="d-none d-sm-block">
        </div>
    </section>
    <div class="contenedor_2">
    <section class="contenedor_left d-none d-sm-block">
            <div class="">
                    <div class="side-nav margin-bottom-60 uppercase hidden-xs">
                    <h4>Busqueda Avanzada</h4>                   
                    <form method="GET" action="buscar_av.php">
                    <input type="text" name="claveb" size="25" value="" class="form-control" placeholder="Código del Producto">
                    <input type="text" name="codigo" value="" class="form-control" placeholder="Número de Parte">
                    
                    <div class="fancy-form fancy-form-select">
                    <select class="form-control select2" name="fabricante" tabindex="-1" style="display: none;">
                    <option value="1000">Todas las Marcas</option>
                    
                    <option value="355">3nstar</option><option value="356">Acer</option><option value="357">Acteck</option><option value="358">Adata</option><option value="359">Aerocool</option><option value="360">Amd</option><option value="361">Anviz</option><option value="362">Aoc</option><option value="363">Apc</option><option value="364">Apple</option><option value="365">Aspel</option><option value="366">Asus</option><option value="367">Autodesk</option><option value="368">Belden</option><option value="369">Bematech</option><option value="370">Benq</option><option value="371">Biostar</option><option value="372">Bitdefender</option><option value="373">Black ecco</option><option value="374">Boxlight mimio</option><option value="375">Broadway</option><option value="376">Brother</option><option value="377">Cablofil</option><option value="378">Canon</option><option value="379">Casio</option><option value="380">Cdp</option><option value="381">Cisco</option><option value="382">Complet</option><option value="383">Condumex</option><option value="384">Condunet</option><option value="385">Cooler master</option><option value="386">Cyberpower</option><option value="387">D-link</option><option value="388">Dahua</option><option value="389">Dataproducts</option><option value="390">Dell</option><option value="391">Eagle warrior</option><option value="392">Eaton</option><option value="393">Ec line</option><option value="394">Ecs</option><option value="395">Energy sistem</option><option value="480">Engenius</option><option value="396">Epson</option><option value="397">Eset</option><option value="398">Fujitsu</option><option value="399">Genius</option><option value="400">Ghia</option><option value="401">Gigabyte</option><option value="402">Grandstream</option><option value="403">Gvs security</option><option value="404">Hikvision</option><option value="405">Hilook</option><option value="406">Honeywell</option><option value="407">Hp</option><option value="408">Huawei</option><option value="478">Huawei/consumo</option><option value="409">Ingressio</option><option value="410">Intel</option><option value="411">Intellinet</option><option value="412">Interlogix</option><option value="413">Kaspersky</option><option value="414">Kingston</option><option value="415">Kmex</option><option value="416">Koblenz</option><option value="417">Konica minolta</option><option value="418">Lenovo</option><option value="419">Lexmark</option><option value="420">Lg</option><option value="421">Linksys</option><option value="422">Logitech</option><option value="423">Manhattan</option><option value="424">Microsoft</option><option value="425">Msi</option><option value="426">Multimedia screens</option><option value="427">Mybusiness pos</option><option value="428">National soft</option><option value="429">Nec</option><option value="430">Newland</option><option value="431">North system</option><option value="432">Okidata</option><option value="433">Optoma</option><option value="434">Panasonic</option><option value="435">Paradox</option><option value="436">Peerless-av</option><option value="437">Perfect choice</option><option value="438">Phoenix contact</option><option value="439">Plantronics</option><option value="440">Pny</option><option value="441">Polycom</option><option value="442">Provision isr</option><option value="443">Quaroni</option><option value="444">Sabrent</option><option value="445">Samsung</option><option value="446">Samsung techwin</option><option value="447">Sandisk</option><option value="448">Seagate</option><option value="449">Sharp</option><option value="450">Silimex</option><option value="451">Smart board / smart kapp</option><option value="452">Smartbitt</option><option value="453">Sola basic isb</option><option value="454">Sony</option><option value="455">Sophos</option><option value="456">Stulz</option><option value="457">Symantec / norton</option><option value="458">Synology</option><option value="459">Tech zone</option><option value="460">Tenda</option><option value="461">Thermaltake</option><option value="462">Tomi</option><option value="463">Toshiba</option><option value="479">Toshiba-oem</option><option value="464">Tp link</option><option value="465">Transcend</option><option value="466">Trendnet</option><option value="467">Tripp-lite</option><option value="468">Varios</option><option value="469">Vica</option><option value="470">Viewsonic</option><option value="471">Vivotek</option><option value="472">Vmware</option><option value="473">Wam</option><option value="474">Wd - western digital</option><option value="475">Wejoin</option><option value="476">Yli</option><option value="477">Zk teco</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 263px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-fabricante-07-container"><span class="select2-selection__rendered" id="select2-fabricante-07-container" title="Todas las Marcas">Todas las Marcas</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <i class="fancy-arrow-double"></i>
                    </div>
                    
                    
                    <div class="fancy-form fancy-form-select">
                    <select class="form-control select2" name="grupo" tabindex="-1" style="display: none;">
                    <option value="1000">Todas las Categorías</option>
                    
                    <option value="1461138607">pc´s</option><option value="1461138613">portatiles</option><option value="1461138597">impresoras</option><option value="1461138605">multifuncionales</option><option value="1461138640">videoproyector</option><option value="1461138594">games</option><option value="1461138625">software</option><option value="1461138622">servidores</option><option value="1461138627">tabletas</option><option value="1461138633">televisor</option><option value="1461138575">bocinas</option><option value="1461138621">scanner</option><option value="1461138603">monitores</option><option value="1461138568">accesorios</option><option value="1461138570">alarmas</option><option value="1461138571">almacenamiento</option><option value="1461138572">antenas</option><option value="1461138573">audifonos y micro</option><option value="1461138574">back pack (mochila)</option><option value="1461138577">cables</option><option value="1461138578">cajon de dinero</option><option value="1461138579">camaras</option><option value="1461138580">conmutadores</option><option value="1461138581">consumibles</option><option value="1461138583">control de acceso y asis</option><option value="1461138586">discos duros</option><option value="1461138587">energia</option><option value="1461138592">gabinete de rack</option><option value="1461138593">gabinetes</option><option value="1461138595">herramientas</option><option value="1461138596">impresora de amplio form</option><option value="1461138599">lector de codigos</option><option value="1461138601">maletines</option><option value="1461138602">memorias</option><option value="1461138604">mouse</option><option value="1461138606">opticos</option><option value="1461138614">presentador</option><option value="1461138615">procesadores</option><option value="1461138616">productos de limpieza</option><option value="1461138617">redes</option><option value="1461138618">refacciones ghia / haier</option><option value="1461138619">relojes</option><option value="1461138620">reproductores</option><option value="1461138626">soportes y bases p/tv/ p</option><option value="1461138629">tarjeta madre</option><option value="1461138630">teclado y mouse</option><option value="1461138631">teclados</option><option value="1461138632">telefonia</option><option value="1461138634">terminal portatil / cole</option><option value="1461138635">terminal pos</option><option value="1461138636">ventiladores</option><option value="1461138637">video</option><option value="1461138639">videograbadores</option>
                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 263px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-grupo-e5-container"><span class="select2-selection__rendered" id="select2-grupo-e5-container" title="Todas las Categorías">Todas las Categorías</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    <i class="fancy-arrow-double"></i>
                    </div>
                    
                    <input type="text" name="libre" value="" class="form-control" placeholder="Búsqueda Libre"><p>
                    <input type="submit" value="Buscar" class="btn btn-primary">
                    </p></form>
                    
                    
                    
                    
                    
                    
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="side-nav margin-bottom-60 uppercase hidden-xs">
                    
                    
                    <h4>Categorías de Productos</h4>
                    
                    
                    
                    <ul class="list-group list-group-bordered list-group-noicon">
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="PC-S,1461138607">Pc´s</a>
                    
                    
                    
                    <ul>
                    <li><a href="ALL-IN-ONE,1461138825">All in one</a></li>
                    <li><a href="DESKTOP,1461138827">Desktop</a></li>
                    <li><a href="PC-WORKSTATION,1461138829">Pc workstation</a></li>
                    <li><a href="PUNTO-DE-VENTA,1461138830">Punto de venta</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="PORTATILES,1461138613">Portatiles</a>
                    
                    
                    
                    <ul>
                    <li><a href="GAMING,1461138972">Gaming</a></li>
                    <li><a href="NOTEBOOK,1461138837">Notebook</a></li>
                    <li><a href="2-EN-1,1461138834">2 en 1</a></li>
                    <li><a href="ULTRABOOK,1461138838">Ultrabook</a></li>
                    <li><a href="WORKSTATION,1461138839">Workstation</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="IMPRESORAS,1461138597">Impresoras</a>
                    
                    
                    
                    <ul>
                    <li><a href="INYECCION-DE-TINTA,1461138792">Inyeccion de tinta</a></li>
                    <li><a href="LASER-MONOCROMATICA,1461138794">Laser monocromatica</a></li>
                    <li><a href="LASER-A-COLOR,1461138793">Laser a color</a></li>
                    <li><a href="MATRIZ-DE-PUNTO,1461138797">Matriz de punto</a></li>
                    <li><a href="TANQUE-DE-TINTA,1461138800">Tanque de tinta</a></li>
                    <li><a href="ETIQUETAS,1461138791">Etiquetas</a></li>
                    <li><a href="PUNTO-DE-VENTA,1461138798">Punto de venta</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="MULTIFUNCIONALES,1461138605">Multifuncionales</a>
                    
                    
                    
                    <ul>
                    <li><a href="INYECCION-DE-TINTA,1461138819">Inyeccion de tinta</a></li>
                    <li><a href="LASER-A-COLOR,1461138820">Laser a color</a></li>
                    <li><a href="LASER-MONOCROMATICA,1461138821">Laser monocromatica</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="VIDEOPROYECTOR,1461138640">Videoproyector</a>
                    
                    
                    
                    <ul>
                    <li><a href="BASICO,1461138932">Basico</a></li>
                    <li><a href="PROFESIONAL,1461138933">Profesional</a></li>
                    <li><a href="TEATRO-EN-CASA,1461138934">Teatro en casa</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="GAMES,1461138594">Games</a>
                    
                    
                    
                    <ul>
                    <li><a href="ENTRETENIMIENTO,1461138787">Entretenimiento</a></li>
                    <li><a href="GAME-PAD,1461138788">Game pad</a></li>
                    <li><a href="JOYSTICK,1461138789">Joystick</a></li>
                    <li><a href="VOLANTE,1461138790">Volante</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="SOFTWARE,1461138625">Software</a>
                    
                    
                    
                    <ul>
                    <li><a href="LICENCIAMIENTO-CAJA,1461138887">Licenciamiento caja</a></li>
                    <li><a href="LICENCIAMIENTO-MICROSOFT-OEM,1461138890">Licenciamiento microsoft oem</a></li>
                    <li><a href="LICENCIAMIENTO-MICROSOFT-ROK,1461138892">Licenciamiento microsoft rok</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="SERVIDORES,1461138622">Servidores</a>
                    
                    
                    
                    <ul>
                    <li><a href="RACK-DL-,1461138885">Rack (dl)</a></li>
                    <li><a href="TORRE-ML-,1461138886">Torre (ml)</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="TABLETAS,1461138627">Tabletas</a>
                    
                    
                    
                    <ul>
                    <li><a href="ARM-DUAL-CORE,1461138898">Arm dual core</a></li>
                    <li><a href="ARM-OCTA-CORE,1461138899">Arm octa core</a></li>
                    <li><a href="ARM-QUAD-CORE,1461138900">Arm quad core</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="TELEVISOR,1461138633">Televisor</a>
                    
                    
                    
                    <ul>
                    <li><a href="LED,1461138921">Led</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="BOCINAS,1461138575">Bocinas</a>
                    
                    
                    
                    <ul>
                    <li><a href="BAFLE,1461138708">Bafle</a></li>
                    <li><a href="BARRA-DE-AUDIO,1461138709">Barra de audio</a></li>
                    <li><a href="BOCINA-BASICA,1461138710">Bocina basica</a></li>
                    <li><a href="BOCINA-CON-SUBWOOFER,1461138711">Bocina con subwoofer</a></li>
                    <li><a href="BOCINAS-BLUETOOTH,1461138713">Bocinas bluetooth</a></li>
                    <li><a href="HOME-THEATERS,1461138714">Home theaters</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="SCANNER,1461138621">Scanner</a>
                    
                    
                    
                    <ul>
                    <li><a href="SCANNER-DOCUMENTOS,1461138882">Scanner documentos</a></li>
                    <li><a href="SCANNER-FOTOGRAFIA,1461138883">Scanner fotografia</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="MONITORES,1461138603">Monitores</a>
                    
                    
                    
                    <ul>
                    <li><a href="LCD,1461138811">Lcd</a></li>
                    <li><a href="LED,1461138812">Led</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="ACCESORIOS,1461138568">Accesorios</a>
                    
                    
                    
                    <ul>
                    <li><a href="ADAPTADORES,1461138641">Adaptadores</a></li>
                    <li><a href="ALARMAS,1461138642">Alarmas</a></li>
                    <li><a href="ANTENA,1461138643">Antena</a></li>
                    <li><a href="BANDEJA-PARA-CAJON-DE-DINERO,1461138644">Bandeja para cajon de dinero</a></li>
                    <li><a href="CAMARAS,1461138645">Camaras</a></li>
                    <li><a href="CARGADOR-DE-PARED,1461138646">Cargador de pared</a></li>
                    <li><a href="CARGADOR-INALAMBRICO,1461138647">Cargador inalambrico</a></li>
                    <li><a href="CARGADOR-PARA-DISPOSITIVOS-MOVILES-PARA-AUTO,1461138648">Cargador para dispositivos moviles para auto</a></li>
                    <li><a href="CARGADOR-PARA-PILAS-RECARGABLES,1461138968">Cargador para pilas recargables</a></li>
                    <li><a href="CELULAR,1461138650">Celular</a></li>
                    <li><a href="CONECTIVIDAD,1461138652">Conectividad</a></li>
                    <li><a href="COPLE,1461138654">Cople</a></li>
                    <li><a href="GABINETE-DE-DISCOS-DUROS,1461138658">Gabinete de discos duros</a></li>
                    <li><a href="HUB-USB,1461138660">Hub usb</a></li>
                    <li><a href="INYECTOR-POE,1461138663">Inyector poe</a></li>
                    <li><a href="JACKS,1461138664">Jacks</a></li>
                    <li><a href="LECTORES-DE-MEMORIAS,1461138668">Lectores de memorias</a></li>
                    <li><a href="MOUSE-PAD,1461138672">Mouse pad</a></li>
                    <li><a href="MOVILIDAD,1461138673">Movilidad</a></li>
                    <li><a href="OFICINA,1461138674">Oficina</a></li>
                    <li><a href="PORTATIL,1461138682">Portatil</a></li>
                    <li><a href="POWER-BANK,1461138683">Power bank</a></li>
                    <li><a href="RACK,1461138686">Rack</a></li>
                    <li><a href="REDES,1461138687">Redes</a></li>
                    <li><a href="SEGURIDAD,1461138689">Seguridad</a></li>
                    <li><a href="TAPAS,1461138691">Tapas</a></li>
                    <li><a href="TARJETAS-DE-PUERTOS,1461138692">Tarjetas de puertos</a></li>
                    <li><a href="TELEFONIA,1461138693">Telefonia</a></li>
                    <li><a href="TRANSCEIVER,1461138695">Transceiver</a></li>
                    <li><a href="VIDEOPROYECTORES,1461138697">Videoproyectores</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="ALARMAS,1461138570">Alarmas</a>
                    
                    
                    
                    <ul>
                    <li><a href="PANEL-DE-ALARMA,1461138699">Panel de alarma</a></li>
                    <li><a href="SENSORES-PARA-ALARMAS,1461138700">Sensores para alarmas</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="ALMACENAMIENTO,1461138571">Almacenamiento</a>
                    
                    
                    
                    <ul>
                    <li><a href="SISTEMA-DE-ALMACENAMIENTO,1461138701">Sistema de almacenamiento</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="ANTENAS,1461138572">Antenas</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="AUDIFONOS-Y-MICRO,1461138573">Audifonos y micro</a>
                    
                    
                    
                    <ul>
                    <li><a href="AUDIFONO,1461138704">Audifono</a></li>
                    <li><a href="AUDIFONO-CON-MICROFONO,1461138705">Audifono con microfono</a></li>
                    <li><a href="GAMERS,1461138706">Gamers</a></li>
                    <li><a href="MICROFONO,1461138707">Microfono</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="BACK-PACK-MOCHILA-,1461138574">Back pack (mochila)</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="CABLES,1461138577">Cables</a>
                    
                    
                    
                    <ul>
                    <li><a href="CABLE-DE-AUDIO,1461138717">Cable de audio</a></li>
                    <li><a href="CABLE-DE-CORRIENTE,1461138718">Cable de corriente</a></li>
                    <li><a href="CABLE-DE-DATOS,1461138719">Cable de datos</a></li>
                    <li><a href="CABLE-DE-RED,1461138720">Cable de red</a></li>
                    <li><a href="CABLE-DE-VIDEO,1461138721">Cable de video</a></li>
                    <li><a href="CABLE-USB,1461138725">Cable usb</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="CAJON-DE-DINERO,1461138578">Cajon de dinero</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="CAMARAS,1461138579">Camaras</a>
                    
                    
                    
                    <ul>
                    <li><a href="CAMARA-DE-ACCION,1461138726">Camara de acciÓn</a></li>
                    <li><a href="CAMARA-DE-VIDEOVIGILANCIA,1461138728">Camara de videovigilancia</a></li>
                    <li><a href="CAMARA-DIGITAL,1461138729">Camara digital</a></li>
                    <li><a href="CAMARA-PARA-VIDEO-CONFERENCIA,1461138731">Camara para video conferencia</a></li>
                    <li><a href="CAMARA-WEB,1461138732">Camara web</a></li>
                    <li><a href="VIDEO-CAMARA,1461138733">Video camara</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="CONMUTADORES,1461138580">Conmutadores</a>
                    
                    
                    
                    <ul>
                    <li><a href="IP-PBX,1461138734">Ip pbx</a></li>
                    <li><a href="PBX,1461138735">Pbx</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="CONSUMIBLES,1461138581">Consumibles</a>
                    
                    
                    
                    <ul>
                    <li><a href="CABEZAL,1461138736">Cabezal</a></li>
                    <li><a href="CARTUCHO,1461138737">Cartucho</a></li>
                    <li><a href="CARTUCHO-DE-DISCO-EXTRAIBLE,1461138738">Cartucho de disco extraible</a></li>
                    <li><a href="CILINDRO,1461138739">Cilindro</a></li>
                    <li><a href="CINTA,1461138740">Cinta</a></li>
                    <li><a href="PAPEL,1461138746">Papel</a></li>
                    <li><a href="PASTA-TERMICA,1461138747">Pasta termica</a></li>
                    <li><a href="RECARGA-DE-TONER,1461138748">Recarga de toner</a></li>
                    <li><a href="TAMBOR,1461138751">Tambor</a></li>
                    <li><a href="TANQUE,1461138752">Tanque</a></li>
                    <li><a href="TINTA-CONTINUA,1461138938">Tinta continua</a></li>
                    <li><a href="TONER,1461138754">Toner</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="CONTROL-DE-ACCESO-Y-ASISTENCIA,1461138583">Control de acceso y asistencia</a>
                    
                    
                    
                    <ul>
                    <li><a href="ACCESORIOS-DE-CONTROL-DE-ACCESO-Y-ASISTENCIA,1461138755">Accesorios de control de acceso y asistencia</a></li>
                    <li><a href="LECTORES-DE-CONTROL-DE-ACCESO-Y-ASISTENCIA,1461138756">Lectores de control de acceso y asistencia</a></li>
                    <li><a href="SOFTWARE-DE-CONTROL-DE-ACCESO-Y-ASISTENCIA,1461138758">Software de control de acceso y asistencia</a></li>
                    <li><a href="VIDEOPORTEROS,1461138759">Videoporteros</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="DISCOS-DUROS,1461138586">Discos duros</a>
                    
                    
                    
                    <ul>
                    <li><a href="DISCO-DURO,1461138762">Disco duro</a></li>
                    <li><a href="UNIDAD-DE-ESTADO-SOLIDO,1461138763">Unidad de estado solido</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="ENERGIA,1461138587">Energia</a>
                    
                    
                    
                    <ul>
                    <li><a href="NO-BREAK,1461138769">No break</a></li>
                    <li><a href="REGULADOR,1461138771">Regulador</a></li>
                    <li><a href="FUENTES-DE-PODER,1461138767">Fuentes de poder</a></li>
                    <li><a href="SUPRESOR-DE-PICOS,1461138772">Supresor de picos</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="GABINETE-DE-RACK,1461138592">Gabinete de rack</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="GABINETES,1461138593">Gabinetes</a>
                    
                    
                    
                    <ul>
                    <li><a href="MEDIA-TORRE,1461138782">Media torre</a></li>
                    <li><a href="MINI-ITX,1461138783">Mini itx</a></li>
                    <li><a href="MINI-TORRE,1461138784">Mini torre</a></li>
                    <li><a href="SLIM-MICRO-ATX-MINI-ITX,1461138785">Slim micro atx/mini itx</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="HERRAMIENTAS,1461138595">Herramientas</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="IMPRESORA-DE-AMPLIO-FORMATO-PLOTTER-,1461138596">Impresora de amplio formato (plo</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="LECTOR-DE-CODIGOS,1461138599">Lector de codigos</a>
                    
                    
                    
                    <ul>
                    <li><a href="CCD,1461138802">Ccd</a></li>
                    <li><a href="IMAGER,1461138803">Imager</a></li>
                    <li><a href="LASER,1461138804">Laser</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="MALETINES,1461138601">Maletines</a>
                    
                    
                    
                    <ul>
                    <li><a href="MALETIN-CLASICO,1461138807">Maletin clasico</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="MEMORIAS,1461138602">Memorias</a>
                    
                    
                    
                    <ul>
                    <li><a href="MEMORIA-FLASH-CARD,1461138808">Memoria flash card</a></li>
                    <li><a href="MEMORIA-FLASH-USB,1461138809">Memoria flash usb</a></li>
                    <li><a href="MEMORIA-RAM,1461138810">Memoria ram</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="MOUSE,1461138604">Mouse</a>
                    
                    
                    
                    <ul>
                    <li><a href="BLUE,1461138814">Blue</a></li>
                    <li><a href="GAMERS,1461138815">Gamers</a></li>
                    <li><a href="LASER,1461138816">Laser</a></li>
                    <li><a href="OPTICO,1461138817">Optico</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="OPTICOS,1461138606">Opticos</a>
                    
                    
                    
                    <ul>
                    <li><a href="DVD-ROM,1461138823">Dvd rom</a></li>
                    <li><a href="DVD-RW,1461138824">Dvd rw</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="PRESENTADOR,1461138614">Presentador</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="PROCESADORES,1461138615">Procesadores</a>
                    
                    
                    
                    <ul>
                    <li><a href="AMD-APU-7THA-GEN,1461138961">Amd apu 7tha gen</a></li>
                    <li><a href="AMD-APU-A6,1461138949">Amd apu a6</a></li>
                    <li><a href="AMD-ATHLON,1461138842">Amd athlon</a></li>
                    <li><a href="AMD-RYZEN-3,1461138845">Amd ryzen 3</a></li>
                    <li><a href="AMD-RYZEN-5,1461138846">Amd ryzen 5</a></li>
                    <li><a href="AMD-RYZEN-7,1461138847">Amd ryzen 7</a></li>
                    <li><a href="INTEL-CELERON-DUAL-CORE,1461138849">Intel celeron dual core</a></li>
                    <li><a href="INTEL-CORE-I3,1461138944">Intel core i3</a></li>
                    <li><a href="INTEL-CORE-I3-COFFE-LAKE,1461138950">Intel core i3 coffe lake</a></li>
                    <li><a href="INTEL-CORE-I5,1461138851">Intel core i5</a></li>
                    <li><a href="INTEL-CORE-I7,1461138853">Intel core i7</a></li>
                    <li><a href="INTEL-CORE-I7-COFFE-LAKE,1461138854">Intel core i7 coffe lake</a></li>
                    <li><a href="INTEL-CORE-I9,1461138973">Intel core i9</a></li>
                    <li><a href="INTEL-PENTIUM,1461138856">Intel pentium</a></li>
                    <li><a href="INTEL-XEON,1461138857">Intel xeon</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="PRODUCTOS-DE-LIMPIEZA,1461138616">Productos de limpieza</a>
                    
                    
                    
                    <ul>
                    <li><a href="KITS,1461138858">Kits</a></li>
                    <li><a href="LIMPIADORES-DE-GABINETES-Y-CARCASAS,1461138859">Limpiadores de gabinetes y carcasas</a></li>
                    <li><a href="LIMPIADORES-DE-PANTALLAS,1461138860">Limpiadores de pantallas</a></li>
                    <li><a href="LIMPIADORES-DE-TARJETAS-ELECTRONICAS,1461138861">Limpiadores de tarjetas electronicas</a></li>
                    <li><a href="LIMPIEZA-DE-INYECTORES,1461138862">Limpieza de inyectores</a></li>
                    <li><a href="LUBRICANTES,1461138863">Lubricantes</a></li>
                    <li><a href="PASTAS-TERMICAS,1461138864">Pastas termicas</a></li>
                    <li><a href="REMOVEDOR-DE-POLVO,1461138865">Removedor de polvo</a></li>
                    <li><a href="TOALLAS,1461138866">Toallas</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="REDES,1461138617">Redes</a>
                    
                    
                    
                    <ul>
                    <li><a href="ACCESS-POINT,1461138867">Access point</a></li>
                    <li><a href="CONTROLADORA-DE-ACCESS-POINT,1461138868">Controladora de access point</a></li>
                    <li><a href="FIREWALL,1461138869">Firewall</a></li>
                    <li><a href="GPON,1461138936">Gpon</a></li>
                    <li><a href="PRINT-SERVER,1461138871">Print server</a></li>
                    <li><a href="REPETIDOR-WIRELESS,1461138872">Repetidor wireless</a></li>
                    <li><a href="ROUTER,1461138873">Router</a></li>
                    <li><a href="SWITCH,1461138874">Switch</a></li>
                    <li><a href="TARJETAS-DE-RED,1461138875">Tarjetas de red</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="REFACCIONES-GHIA-HAIER,1461138618">Refacciones ghia / haier</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="RELOJES,1461138619">Relojes</a>
                    
                    
                    
                    <ul>
                    <li><a href="SMARTBANDS,1461138876">Smartbands</a></li>
                    <li><a href="SMARTWATCH,1461138877">Smartwatch</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="REPRODUCTORES,1461138620">Reproductores</a>
                    
                    
                    
                    <ul>
                    <li><a href="MP3,1461138880">Mp3</a></li>
                    <li><a href="MP4,1461138881">Mp4</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="SOPORTES-Y-BASES-P-TV-PROYECTORES-DVD-CONSOLAS-BOCINAS-PANTALLAS,1461138626">Soportes y bases p/tv/ proyector</a>
                    
                    
                    
                    <ul>
                    <li><a href="SOPORTE-Y-BASE-PARA-PROYECTOR,1461138895">Soporte y base para proyector</a></li>
                    <li><a href="SOPORTE-Y-BASE-PARA-TV-PANTALLA,1461138897">Soporte y base para tv/pantalla</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="TARJETA-MADRE,1461138629">Tarjeta madre</a>
                    
                    
                    
                    <ul>
                    <li><a href="BUNDLE,1461138903">Bundle</a></li>
                    <li><a href="SOCKET-1151,1461138904">Socket 1151</a></li>
                    <li><a href="SOCKET-AM4,1461138907">Socket am4</a></li>
                    <li><a href="SOCKET-FM2-,1461138909">Socket fm2+</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a href="TECLADO-Y-MOUSE,1461138630">Teclado y mouse</a>
                    
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="TECLADOS,1461138631">Teclados</a>
                    
                    
                    
                    <ul>
                    <li><a href="BASICO,1461138910">Basico</a></li>
                    <li><a href="GAMERS,1461138911">Gamers</a></li>
                    <li><a href="INTERNET-MULTIMEDIA,1461138913">Internet / multimedia</a></li>
                    <li><a href="MULTIMEDIA,1461138914">Multimedia</a></li>
                    <li><a href="NUMERICO,1461138915">Numerico</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="TELEFONIA,1461138632">Telefonia</a>
                    
                    
                    
                    <ul>
                    <li><a href="TELEFONO-ANALOGO-UNILINIA-,1461138916">Telefono analogo (unilinia)</a></li>
                    <li><a href="TELEFONO-CELULAR,1461138917">Telefono celular</a></li>
                    <li><a href="TELEFONO-DIGITAL-MULTILINEA-,1461138918">Telefono digital (multilinea)</a></li>
                    <li><a href="TELEFONO-INALAMBRICO,1461138919">Telefono inalambrico</a></li>
                    <li><a href="TELEFONO-IP,1461138920">Telefono ip</a></li>
                    </ul>
                    </li>
                    <li class="list-group-item">
                    <a href="TERMINAL-PORTATIL-COLECTORA-DE-DATOS,1461138634">Terminal portatil / colectora de</a>
                    </li>
                    <li class="list-group-item">
                    <a href="TERMINAL-POS,1461138635">Terminal pos</a>
                    </li>
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="VENTILADORES,1461138636">Ventiladores</a>
                    <ul>
                    <li><a href="DISIPADOR,1461138923">Disipador</a></li>
                    <li><a href="PARA-GABINETE,1461138924">Para gabinete</a></li>
                    <li><a href="PARA-PROCESADOR,1461138925">Para procesador</a></li>
                    </ul>
                    </li>
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="VIDEO,1461138637">Video</a>
                    
                    
                    
                    <ul>
                    <li><a href="VIDEO,1461138929">Video</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    
                    <li class="list-group-item">
                    <a class="dropdown-toggle" href="VIDEOGRABADORES,1461138639">Videograbadores</a>
                    
                    
                    
                    <ul>
                    <li><a href="DVR,1461138930">Dvr</a></li>
                    <li><a href="NVR,1461138931">Nvr</a></li>
                    </ul>
                    
                    
                    </li>
                    
                    </ul>
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    
                    
                    
                    <div class="side-nav margin-bottom-60 uppercase hidden-xs">
                    <h4>Sitio Seguro</h4>
                    <div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center owl-theme owl-carousel-init" data-plugin-options="{&quot;singleItem&quot;: true, &quot;autoPlay&quot;: 4000, &quot;navigation&quot;: true, &quot;pagination&quot;: false, &quot;transitionStyle&quot;:&quot;goDown&quot;}" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 852px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px); transform-origin: 106.5px center; perspective-origin: 106.5px center;"><div class="owl-item" style="width: 213px;"><a href="https://safeweb.norton.com/report/show_mobile?url=www.equipodecomputo.com.mx" target="_blank">
                    <img class="img-responsive lazy" src="https://www.servervip.com.mx/assets/images/norton1.png" data-original="https://www.servervip.com.mx/assets/images/norton1.png" width="260" height="282" alt="" style="display: inline-block;">
                    </a></div><div class="owl-item" style="width: 213px;"><a href="https://safeweb.norton.com/report/show_mobile?url=www.equipodecomputo.com.mx" target="_blank">
                    <img class="img-responsive lazy" src="https://www.servervip.com.mx/assets/images/norton2.png" data-original="https://www.servervip.com.mx/assets/images/norton2.png" width="260" height="282" alt="" style="display: inline-block;">
                    </a></div></div></div>
                    
                    <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                    </div>
                    <div class="side-nav margin-bottom-60 uppercase hidden-xs">
                    <h4>Mapa de Sitio</h4>
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.5696368237277!2d-98.90289548529904!3d19.301072749875125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6a9154636316e234!2sEquipo+de+Computo!5e0!3m2!1ses-419!2smx!4v1471294180079" width="265" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe><br></p><p><br></p><p><br></p></div>
                    <div class="side-nav margin-bottom-60 uppercase hidden-xs">
                    <h4>Redes Sociales</h4>
            
                    <div class="clearfix">
                    
                    <a href="http://facebook.com/equi.de.computo/" target="_blank" class="social-icon social-icon-sm social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                    </a>
                    <a href="http://twitter.com/@equipodecomputo" target="_blank" class="social-icon social-icon-sm social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                    </a>
                    <a href="http://linkedin.com/in/https://mx.linkedin.com/in/equipo-de-computo-36471" target="_blank" class="social-icon social-icon-sm social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                    <i class="icon-linkedin"></i>
                    <i class="icon-linkedin"></i>
                    </a>
                    
                    
                    </div><hr></div>
                    
                    </div>
    </section>
    <section class="ropa container ">
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center">
                <div>
                    <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/polo1.jpg" alt=""></div>
                    <div class="texto"><h5 class="text-center">Polo Nigga pike</h5>
                        <div class="valor_monetario">
                            
                                <h5 class="text-center"><strong>Precio: 130 $</strong></h5>
                                <button class="btn btn-danger">Comprar</button>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div>

                    <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/polo2.jpg" alt=""></div>
                    <div class="texto"><h5 class="text-center">Polo Mango</h5>
                    <div class="valor_monetario">
                        <i></i>
                        <h5 class="text-center"><strong>Precio: 120 $</strong></h5>
                        <button class="btn btn-danger">Comprar</button>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div>

                    <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/polo3.jpg" alt=""></div>
                    <div class="texto"><h5 class="text-center">Polo Celeste Martina</h5>
                        <div class="valor_monetario">
                            <i></i>
                            <h5 class="text-center"><strong>Precio: 134 $</strong></h5>
                            <button class="btn btn-danger">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div>

                    <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/goku.jpg" alt=""></div>
                    <div class="texto"><h5 class="text-center">Polo goku</h5>
                        <div class="valor_monetario">
                        <i></i>
                        <h5 class="text-center"><strong>Precio: 120 $</strong></h5>
                        <button class="btn btn-danger">Comprar</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center">
                <div>
                    <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/chompa444.jpg" alt=""></div>
                    <div class="texto"><h5 class="text-center">Chompa nigga</h5>
                        <div class="valor_monetario">
                            <i></i>
                            <h5 class="text-center"><strong>Precio: 230 $</strong></h5>
                            <button class="btn btn-danger">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div>

                    <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/chompa222.jpg" alt=""></div>
                    <div class="texto"><h5 class="text-center">Chompa elegante</h5>
                    <div class="valor_monetario">
                        <i></i>
                        <h5 class="text-center"><strong>Precio: 240 $</strong></h5>
                        <button class="btn btn-danger">Comprar</button>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div>
                    
                    <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/chompa111.jpg" alt=""></div>
                    <div class="texto"><h5 class="text-center">Casaca jeam</h5>
                        <div class="valor_monetario">
                            <i></i>
                            <h5 class="text-center"><strong>Precio: 160 $</strong></h5>
                            <button class="btn btn-danger">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center">
                <div>
                    
                    <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/saitama.jpg" alt=""></div>
                    <div class="texto"><h5 class="text-center">Polo Saitama</h5>
                        <div class="valor_monetario">
                            <i></i>
                            <h5 class="text-center"><strong>Precio: 135 $</strong></h5>
                            <button class="btn btn-danger">Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/saitama1.jpg" alt=""></div>
                <div class="texto"><h5 class="text-center">Polo saitama2</h5>
                    <div class="valor_monetario">
                        <i></i>
                        <h5 class="text-center"><strong>Precio: S/.135.00 </strong></h5>
                        <button class="btn btn-danger">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/port.jpg" alt=""></div>
                <div class="texto"><h5 class="text-center">Chompa port</h5>
                    <div class="valor_monetario">
                        <i></i>
                        <h5 class="text-center"><strong>Precio: s/400.00</strong></h5>
                        <button class="btn btn-danger">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/hacker.jpg" alt=""></div>
                <div class="texto"><h5 class="text-center">Chompa anonimous</h5>
                    <div class="valor_monetario">
                        <i></i>
                        <h5 class="text-center"><strong>Precio: s/1000.00</strong></h5>
                        <button class="btn btn-danger">Comprar</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ropa"><img class="contenedor_ropa img-fluid" src="img/anonimous.jpg" alt=""></div>
                <div class="texto"><h5 class="text-center">Polo Anonimous</h5>
                    <div class="valor_monetario">
                        <i></i>
                        <h5 class="text-center"><strong>Precio: s/1230.00</strong></h5>
                        <button class="btn btn-danger">Comprar</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/7.5.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/6.2.0/firebase-auth.js"></script>
    <script src="js/config/configfirebase.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>