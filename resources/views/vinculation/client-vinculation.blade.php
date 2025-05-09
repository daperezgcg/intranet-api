<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <title>Document</title> -->
    </head>

    <body>
        <div class="container">

            <div class="header-container">
                <table cellpadding="5" cellspacing="0">
                    <thead>

                    </thead>
                    <tbody>
                        <tr>
                            <td  class="w-50">
                                <img style="width: 250px;" src="{{ Storage::path('public/images/logo-hz.png') }} " alt="">
                            </td>
                            <td style="text-align: right;"  class="w-50">
                            <h4 style="font-size: 9pt; text-align: right;"><span style="font-weight: 400;">Fecha: </span>{{ $data['informacionEntidad']['fillingDate'] }}</h4>
                            <h4 style="font-size: 9pt; text-align: right;"><span style="font-weight: 400;">Código: </span>Código: RC-F-02</h4>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <h1 class="form-title  ">Formulario de vinculación persona jurídica entidad cliente</h1>

                <div class="divisor-container">
                    <h1>Información general persona jurídica</h1>
                </div>


                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Razón social</th>
                            <th class="w-50">Siglas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['informacionEntidad']['razonSocial'] }}</td>
                            <td class="w-50">{{ $data['informacionEntidad']['siglas'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">NIT / RUC / RNC</th>
                            <th class="w-50">Dígito de verificación</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['informacionEntidad']['nit'] }}</td>
                            <td class="w-50">{{ $data['informacionEntidad']['dv'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Dirección Principal</th>
                            <th class="w-50">País</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td class="w-50">{{ $data['informacionEntidad']['direccion'] }}</td>
                            <td class="w-50">{{ $data['informacionEntidad']['pais'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Departamento</th>
                            <th class="w-50">Ciudad</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['informacionEntidad']['departamento'] }}</td>
                            <td class="w-50">{{ $data['informacionEntidad']['ciudad'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Tipo de empresa</th>
                            <th class="w-50">Otro</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td class="w-50">{{
                                $data['informacionEntidad']['tipoEmpresa'] == 1 ? 'Pública' :
                                ($data['informacionEntidad']['tipoEmpresa'] == 2 ? 'Privada' :
                                ($data['informacionEntidad']['tipoEmpresa'] == 3 ? 'Mixta' :
                                ($data['informacionEntidad']['tipoEmpresa'] == 4 ? 'Otro' : 'Desconocido')))
                            }}</td>
                            <td>{{$data['informacionEntidad']['tipoEmpresaOtro'] ?? 'N/A'}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Página web</th>
                            <th class="w-50">Correo Electrónico</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['informacionEntidad']['web'] }}</td>
                            <td class="w-50">{{ $data['informacionEntidad']['mailEntidad'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Teléfono entidad</th>
                            <th class="w-50">Movil Entidad</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['informacionEntidad']['telefonoEntidad'] }}</td>
                            <td class="w-50">{{ $data['informacionEntidad']['movilEntidad'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Sector económico</th>
                            <th class="w-50">Otro</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{
                                $data['informacionEntidad']['sectorEconomico'] == 1 ? 'Financiero' :
                                ($data['informacionEntidad']['sectorEconomico'] == 2 ? 'Seguros' :
                                ($data['informacionEntidad']['sectorEconomico'] == 3 ? 'Real' :
                                ($data['informacionEntidad']['sectorEconomico'] == 4 ? 'Solidario' :
                                ($data['informacionEntidad']['sectorEconomico'] == 5 ? 'Valores' :
                                ($data['informacionEntidad']['sectorEconomico'] == 6 ? 'Otro' : 'Desconocido')))))
                            }}</td>
                            <td class="w-50">{{ $data['informacionEntidad']['sectorEconomicoOtro'] ?? 'N/A' }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Gran Contribuyente</th>
                            <th class="w-50">Autorretenedor</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['informacionEntidad']['granContribuyente'] == 1 ? 'Si' : 'No'}}</td>
                            <td class="w-50">{{ $data['informacionEntidad']['autorretenedor'] == 1 ? 'Si' : 'No' }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Régimen de IVA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $data['informacionEntidad']['regimenIva'] }}</td>

                        </tr>
                    </tbody>
                </table>

                <div class="divisor-container">
                    <h1>Representante legal</h1>
                </div>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Nombres y apellidos</th>
                            <th class="w-50">Genero</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['nombresApellidos'] }}</td>
                            <td class="w-50">{{ $data['representanteLegal']['genero'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Tipo de identificación</th>
                            <th class="w-50">Número de identificación</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">
                            {{ $data['representanteLegal']['tipoIdentificacion'] == 1 ? 'C.C':
                            ($data['representanteLegal']['tipoIdentificacion'] == 2 ? 'C.E' :
                            ($data['representanteLegal']['tipoIdentificacion'] == 3 ? 'PP' :
                            ($data['representanteLegal']['tipoIdentificacion'] == 4 ? 'Tarjeta de extranjería' : 'Desconocido')))
                            }}</td>
                            <td class="w-50">{{ $data['representanteLegal']['numeroIdentificacion'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content"   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Fecha de expedición</th>
                            <th class="w-50">Lugar de expedición</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['fechaExpedicion'] }}</td>
                            <td class="w-50">{{ $data['representanteLegal']['lugarExpedicion'] }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Pais de nacimiento</th>
                            <th class="w-50">Nacionalidad</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['paisNacimiento'] }}</td>
                            <td class="w-50">{{ $data['representanteLegal']['nacionalidad'] }}</td>
                        </tr>
                    </tbody>
                </table>

                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">País de residencia</th>
                            <th class="w-50">Departamento de residencia</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['paisResidencia'] }}</td>
                            <td class="w-50">{{ $data['representanteLegal']['departamentoResidencia'] }}</td>
                        </tr>
                    </tbody>
                </table>

                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Ciudad de residencia</th>
                            <th class="w-50">Teléfono / móvil</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['ciudadResidencia'] }}</td>
                            <td class="w-50">{{ $data['representanteLegal']['telefonoMovil'] }}</td>
                        </tr>
                    </tbody>
                </table>

                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Correo electrónico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['correo'] }}</td>
                        </tr>
                    </tbody>
                </table>

                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">¿Es usted un PEP? (Persona Expuesta Políticamente)</th>
                            <th class="w-50">Cargo</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['pep'] == 1 ? 'Si' : 'No' }}</td>
                            <td class="w-50">{{ $data['representanteLegal']['cargoPep'] ?? 'N/A' }}</td>
                        </tr>
                    </tbody>
                </table>

                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">¿Por su cargo o actividad maneja recursos publicos?</th>
                            <th class="w-50">Cargo</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['recursosPublicos'] == 1 ? 'Si' : 'No'}}</td>
                            <td class="w-50">{{ $data['representanteLegal']['recursosPublicosCargo'] ?? 'N/A'}}</td>
                        </tr>
                    </tbody>
                </table>

                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">¿Por su cargo o actividad ejerce algún grado de poder público?</th>
                            <th class="w-50">Cargo</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['recursosPublicos'] == 1 ? 'Si' : 'No'}}</td>
                            <td class="w-50">{{ $data['representanteLegal']['recursosPublicosCargo'] ?? 'N/A'}}</td>
                        </tr>
                    </tbody>
                </table>

                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">¿Tiene algún vínculo familiar con alguna persona que cumpla con las características anteriores?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['vinculoCaracteristicas'] == 1 ? 'Si' : 'No'}}</td>
                        </tr>
                    </tbody>
                </table>

                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Nombre</th>
                            <th class="w-50">Cargo</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['representanteLegal']['nombreVinculo'] ?? 'N/A'}}</td>
                            <td class="w-50">{{ $data['representanteLegal']['cargoVinculo'] ?? 'N/A'}}</td>
                        </tr>
                    </tbody>
                </table>


                <div class="divisor-container">
                    <h1>información accionistas con más del 5% del capital social, aporte o participación</h1>
                </div>



                @if(empty($data['accionistas']))
                        <h4 class="mt-7">No se agregó información de accionistas.</h4>
                @else
                                       <table class="table-content-shareholders  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nombres y apellidos / Razón social</th>
                            <th>Tipo de ID</th>
                            <th>Nº. de identificacion</th>
                            <th>% Participación</th>
                            <th>¿Persona Expuesta Políticamente?</th>
                        </tr>
                    </thead>
                   <tbody>


                        @foreach ($data['accionistas'] as $accionista)
                            <tr>
                                <td>{{ $accionista['nombresyApellidos'] }}</td>
                                <td>{{ $accionista['tipoIdentificacion'] ?? '' }}</td>
                                <td>{{ $accionista['ndeIdentificacion'] }}</td>
                                <td>{{ $accionista['participacion'] }}</td>
                                <td>{{ $accionista['pep'] }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                @endif


                <div class="divisor-container">
                    <h1>INFORMACIÓN FINANCIERA (Mes y Año de corte de la información financiera suministrada)</h1>
                </div>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Fecha de corte</th>
                            <th class="w-50">Divisa</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{$data['informacionFinanciera']['fechaCorte'] ?? 'N/A'}}</td>
                            <td class="w-50">{{
                                $data['informacionFinanciera']['divisa'] == 1 ? 'Dólar estadounidense (USD)' :
                                ($data['informacionFinanciera']['divisa'] == 2 ? 'Pesos Colombianos (COP)' :
                                ($data['informacionFinanciera']['divisa'] == 3 ? 'Pesos dominicanos (DOP)' :
                                ($data['informacionFinanciera']['divisa'] == 4 ? 'Sol (PEN)' :
                                ($data['informacionFinanciera']['divisa'] == 5 ? 'Balboa (PAB)' : 'N/A'))))
                            }}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Ingresos mensuales</th>
                            <th class="w-50">Otros ingresos mensuales</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td class="w-50">{{ '$' . number_format($data['informacionFinanciera']['ingresosMensuales'], 2, ',', '.' ?? 'N/A') }}</td>
                            <td class="w-50">{{ '$' . number_format($data['informacionFinanciera']['otrosIngresos'], 2, ',', '.' ?? 'N/A')}}</td>
                        </tr>
                    </tbody>
                </table>


                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Concepto Otros Ingresos</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['informacionFinanciera']['conceptoOtrosIngresos'] ?? 'N/A'}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content"   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Egresos mensuales</th>
                            <th class="w-50">Otros Egresos mensuales</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{'$' . number_format($data['informacionFinanciera']['egresosMensuales'], 2, ',', '.' ?? 'N/A')}}</td>
                            <td class="w-50">{{'$' . number_format($data['informacionFinanciera']['otrosEgresos'], 2, ',', '.' ?? 'N/A')}}</td>
                        </tr>
                    </tbody>
                </table>


                <table class="table-content"   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Concepto Otros Egresos</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{$data['informacionFinanciera']['conceptoOtrosEgresos'] ?? 'N/A'}}</td>
                        </tr>
                    </tbody>
                </table>



                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Activos</th>
                            <th class="w-50">Pasivos</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{'$' . number_format($data['informacionFinanciera']['activos'], 2, ',', '.' ?? 'N/A')}}</td>
                            <td class="w-50">{{'$' . number_format($data['informacionFinanciera']['pasivos'], 2, ',', '.' ?? 'N/A')}}</td>
                        </tr>
                    </tbody>
                </table>

                      <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Patrimonio</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{'$' . number_format($data['informacionFinanciera']['patrimonio'], 2, ',', '.' ?? 'N/A')}}</td>
                        </tr>
                    </tbody>
                </table>


                 <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">¿Maneja Cuentas en Moneda Extranjera?</th>
                            <th class="w-50">¿Realiza Operaciones en Moneda Extranjera?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td class="w-50">{{ $data['informacionFinanciera']['cuentasMonedaExtranjera'] == 1 ? 'Si' : 'No' }}</td>
                            <td class="w-50">{{ $data['informacionFinanciera']['operacionesMonedaExtranjera'] == 1 ? 'Si' : 'No'}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Pais</th>
                            <th class="w-50">Moneda</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td class="w-50">{{ $data['informacionFinanciera']['pais'] ?? 'N/A' }}</td>
                            <td class="w-50">{{ $data['informacionFinanciera']['moneda'] ?? 'N/A'}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content"   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">Monto promedio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td class="w-50">{{'$' . number_format($data['informacionFinanciera']['montoPromedio'] ?? 'N/A') }}</td>
                        </tr>
                    </tbody>
                </table>


                   <div class="divisor-container">
                    <h1>DECLARACIÓN  DE CUMPLIMIENTO DE NORMATIVIDAD LAFT/FPADM Y PTEE</h1>
                </div>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">¿La compañía está obligada a la implementación del sistema de LA FT / FPADM?</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['laftInfo']['obligadaLaft'] == 1 ? 'Si' : 'No'}}</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">¿La compañía está obligada a la implementación del sistema de administración de riesgos para la prevención y el control de los riesgos de Corrupción y Soborno Transnacional (C/ST)?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['laftInfo']['obligadaCst'] == 1 ? 'Si' : 'No'}}</td>
                        </tr>
                    </tbody>
                </table>


                <table class="table-content  "   cellpadding="5" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-50">¿Tiene relaciones contractuales con entidades públicas fuera de Colombia?</th>
                            </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w-50">{{ $data['laftInfo']['contratosExtranjeros'] == 1 ? 'Si' : 'No'}}</td>
                        </tr>
                    </tbody>
                </table>




                <div class="divisor-container">
                    <h1>INFORMACIÓN FINANCIERA (Mes y Año de corte de la información financiera suministrada)</h1>
                </div>

                <p class="text text-sm">
                    Por medio de este instrumento, autorizo (amos) a
                    <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong> a reportar,
                    actualizar, solicitar, compartir y divulgar a las Centrales de
                    información
                    <strong>TRANSUNION, DATACRÉDITO - EXPERIAN, PROCREDITO, APC,
                        EQUIFAX,</strong>
                    y/o a cualquier otra entidad que maneje o administre bases de datos
                    con los mismos fines, toda la información suministrada en este
                    documento y la demás referente al comportamiento crediticio.
                </p>

                <p class="text mt-7 text-sm">
                    Autorizo (amos) a
                    <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong> a que conozca,
                    actualice, conserve, custodie (servidores propios o en la nube),
                    rectifique y utilice todos los datos personales suministrados o que
                    sean actualizados o recolectados mediante gestión directa o
                    indirecta con la entidad, sus empleados o las bases de datos
                    públicas, de acuerdo con las leyes de protección de datos
                    <strong>(Habeas Data)</strong> en:
                </p>

                <ul class="list-disc text text-sm mt-7 text-slate-100">
                    <li>
                        <strong> Colombia:</strong> Ley 1266 de 2008, Ley 1581 de 2012,
                        Decreto reglamentario 1377 de 2013 y las demás normas que lo
                        modifiquen o complementen.
                    </li>
                    <li>
                        <strong> Ecuador:</strong> Artículos 81 y 94 de la Constitución
                        Nacional, Ley 24 de 2004 y las demás normas que lo modifiquen o
                        complementen.
                    </li>
                    <li>
                        <strong> Panamá:</strong> Artículos 42 y 44 de la Constitución
                        Nacional y las demás normas que lo modifiquen o complementen.
                    </li>
                    <li>
                        <strong> República Dominicana:</strong> Artículos 44 y 70 de la
                        Constitución Nacional y las demás normas que lo modifiquen o
                        complementen.
                    </li>
                    <li>
                        <strong> Perú:</strong> Artículos 2 y 200 de la Constitución
                        Nacional, Ley 29733 de 2011 y las demás normas que lo modifiquen
                        o complementen.
                    </li>
                </ul>

                <h3 class="card-subtitle mt-7">Aviso de privacidad</h3>

                <p class="text text-sm mt-3">
                    <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong>, domiciliada en
                    la ciudad de Medellín, Colombia, en la Calle 11 A # 31 A – 89 Int
                    601 Ed. Bosko, y responsable del manejo de sus datos personales, le
                    informa que éstos serán incluidos en una base de datos y
                    posteriormente utilizados para las siguientes finalidades:
                </p>

                <ol class="list-decimal text text-sm mt-7 text-slate-100">
                    <li>Realizar la gestión comercial.</li>
                    <li>
                        Informar sobre los servicios y promociones que tenga GARANTÍAS
                        COMUNITARIAS GRUPO S.A.
                    </li>
                    <li>
                        Dar cumplimiento a obligaciones contraídas con las entidades que
                        otorgan créditos, deudores garantizados, proveedores,
                        contratantes, accionistas y empleados.
                    </li>
                    <li>
                        Remitir comunicaciones y documentos contables y financieros.
                    </li>
                    <li>Evaluar la calidad de nuestros servicios.</li>
                    <li>Realizar procesamiento y minería de datos.</li>
                </ol>

                <p class="text text-sm mt-7">
                    <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong>, comunica a los
                    titulares de la información que pueden consultar el Manual Interno
                    de Políticas y Procedimientos de Datos Personales, el cual contiene
                    las políticas para el tratamiento de la información obtenida, así
                    como los procedimientos de consulta y reclamación que le permitirán
                    hacer efectivos sus derechos al acceso, consulta, rectificación,
                    actualización y supresión de los datos.
                </p>

                <p class="text text-sm mt-7">
                    Para ejercer estos derechos y visualizar las políticas, podrá
                    ingresar a nuestra página web:
                    <a class="text-blue-500"
                        href="http://www.garantiascomunitarias.com">www.garantiascomunitarias.com</a>
                </p>

                <p class="text text-sm mt-7">
                    O comunicarse a los teléfonos:
                    <a class="text-blue-500"
                        mailto="info@garantiascomunitarias.com">info&#64;garantiascomunitarias.com</a>
                </p>

                <p class="text text-sm mt-7">
                    También puede escribirnos al correo electrónico:
                    <strong>018000180149 – (4) 604 45 95 – (4) 444 57 50.</strong>
                </p>


                <div class="divisor-container">
                    <h1>INFORMACIÓN FINANCIERA (Mes y Año de corte de la información financiera suministrada)</h1>
                </div>

                <h3 class="card-subtitle mt-7">Declaro expresamente que:</h3>

                <ol class="list-decimal text text-sm mt-2 text-slate-100 mt-7">
                    <li>
                        La actividad, profesión u oficio personal y de la compañía es
                        lícita y se ejerce dentro del marco legal, y los recursos que
                        poseo no provienen de actividades ilícitas contempladas en el
                        Código Penal Colombiano.
                    </li>

                    <li>
                        La información que he suministrado en esta solicitud es veraz y
                        verificable, y me obligo a confirmar los datos suministrados
                        anualmente y a actualizarlos conforme a los procedimientos que
                        para tal efecto tenga establecidos
                        <strong>Garantías Comunitarias Grupo S.A</strong>. El
                        incumplimiento de esta obligación faculta a
                        <strong>GCG</strong>
                        para revocar y/o rescindir unilateralmente el contrato.
                    </li>

                    <li>
                        Los recursos que se deriven del desarrollo de este contrato no se
                        destinarán a la financiación del terrorismo, grupos terroristas o
                        actividades terroristas, ni a la financiación y/o proliferación
                        de armas de destrucción masiva.
                    </li>

                    <li>
                        Las declaraciones contenidas en este documento son exactas,
                        completas y verídicas en la forma en que aparecen escritas.
                    </li>

                    <li>
                        Manifiesto que no he sido declarado responsable judicialmente por
                        la comisión de:

                        <ul class="text text-sm list-disc pt-1 p-4 text-slate-100">
                            <li>Delitos fuentes de lavado de activos.</li>
                            <li>
                                Delitos contra la Administración Pública cuya pena sea
                                privativa de la libertad o que afecten el patrimonio del
                                Estado.
                            </li>
                            <li>
                                Delitos relacionados con la pertenencia, promoción o
                                financiación de grupos ilegales.
                            </li>
                            <li>
                                Delitos de lesa humanidad, narcotráfico en Colombia o en el
                                exterior, o soborno transnacional.
                            </li>
                        </ul>
                    </li>

                    <li>
                        Los recursos que poseo como persona natural y los recursos de la
                        persona jurídica a la cual represento, provienen de la actividad
                        económica que refiere la parte inicial de este formulario.
                    </li>
                </ol>

                <div class="divisor-container">
                    <h1>INFORMACIÓN FINANCIERA (Mes y Año de corte de la información financiera suministrada)</h1>
                </div>

                <p class="text text-slate-100 text-sm mt-7">
                    Declaro expresamente reconocer las políticas de
                    <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong>, las cuales son
                    vinculantes y, por ende, me obligo principalmente a:
                </p>

                <ol class="list-decimal text text-sm mt-7 text-slate-100">
                    <li>
                        Cumplir con las disposiciones previstas en la Política
                        Anticorrupción y Antisoborno.
                    </li>

                    <li>
                        Dar a conocer a los empleados y contratistas de la compañía la
                        Política de Prevención de Corrupción y Soborno Transnacional y la
                        Política de Conflictos de Interés de GARANTÍAS COMUNITARIAS GRUPO
                        S.A., así como su carácter vinculante.
                    </li>

                    <li>
                        No ofrecer ni dar sobornos o dádivas, ni ningún otro tipo de
                        halago, a ningún servidor público o privado, nacional o
                        extranjero.
                    </li>

                    <li>
                        Informar de inmediato, a través del canal de transparencia de
                        GARANTÍAS COMUNITARIAS GRUPO S.A., cualquier conducta, acto u
                        omisión que constituya una práctica corrupta y que pueda afectar
                        directa o indirectamente a la compañía.
                    </li>
                </ol>

                <p class="text mt-2 text-slate-100 text-sm">
                    Puede reportar sus denuncias a través del canal de transparencia
                    habilitado en la página web:
                    <a class="text-blue-500"
                        href="https://www.garantiascomunitarias.com/canal-de-transparencia/">https://www.garantiascomunitarias.com/canal-de-transparencia/</a>
                </p>

                <p class="text mt-2 text-slate-100 text-sm">
                    o mediante el correo electrónico:<a class="text-blue-500"
                        mailto="transparencia@garantiascomunitarias.com">transparencia&#64;garantiascomunitarias.com</a>
                </p>

                <h3 class="card-subtitle mt-7">
                    Declaración bajo gravedad de juramento
                </h3>
                <p class="text mt-2 text-slate-100 text-sm mt-3">
                    Declaro que, para establecer la relación comercial o contractual con
                    la compañía, no ofrecí ni entregué ningún tipo de dádivas,
                    beneficios o incentivos económicos a ningún empleado, asesor,
                    contratista, subcontratista, u otro vinculado a la compañía.
                </p>

                <p class="text mt-2 text-slate-100 text-sm">
                    Así mismo, reconozco que el incumplimiento de lo aquí dispuesto, o
                    de lo contenido en la Política de Prevención de Corrupción y Soborno
                    Transnacional y la Política de Conflictos de Interés, facultará a
                    <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong> para dar por
                    terminado automáticamente cualquier relación comercial o contractual
                    existente entre las partes.
                </p>

                <p class="text mt-2 text-slate-100 text-sm">
                    Lo anterior se realizará sin necesidad de requerimiento judicial o
                    extrajudicial y sin necesidad de constitución en mora, derechos a
                    los cuales expresamente renuncio.
                </p>

                <h3 class="card-subtitle mt-7">
                    Programa de Transparencia y Ética Empresarial – PTEE
                </h3>

                <p class="text mt-2 text-slate-100 text-sm mt-3">
                    En concordancia con el PTEE de GARANTÍAS COMUNITARIAS GRUPO S.A.,
                    adicionalmente declaro reconocer que sus políticas requieren que el
                    PROVEEDOR/CLIENTE/COLABORADOR actúe siempre conforme a las leyes
                    respectivas y a los más altos estándares éticos.
                </p>

                <p class="text mt-2 text-slate-100 text-sm font-semibold">
                    Por lo tanto, me comprometo a:
                </p>

                <ol class="list-decimal text text-sm mt-7 text-slate-100">
                    <li>
                        Garantizar el cumplimiento absoluto de las leyes colombianas, el
                        Programa de Transparencia y Ética Empresarial – PTEE, la Política
                        de Prevención de Corrupción y Soborno Transnacional y la Política
                        de Conflictos de Interés de
                        <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong>
                    </li>
                    <li>
                        Abstenerme de hacer ofertas, promesas, pagos, acuerdos de pago o
                        sobornos, así como cualquier otro tipo de beneficio o ventaja
                        indebida. No entregaré objetos de valor pecuniario a funcionarios
                        públicos, personas, entidades u otros terceros a cambio de
                        ventajas indebidas, ya sean directas o indirectas.
                    </li>
                    <li>
                        No realizar pagos directos o indirectos, en dinero o en especie,
                        a ninguna dependencia gubernamental, partido político, candidato,
                        servidor público, etc., con el propósito de desarrollar alguna
                        influencia o impulsar una situación de negocios que pueda:

                        <ul class="text text-sm list-disc pt-1 p-4 text-slate-100">
                            <li>
                                Constituir una violación a la ley colombiana o de otro país
                                en materia de corrupción o soborno transnacional.
                            </li>
                            <li>
                                Resultar en un perjuicio a la reputación, imagen o nombre
                                de <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong> , sus
                                gerentes, directores o empleados.
                            </li>
                        </ul>
                    </li>
                </ol>

                <p class="card-subtitle mt-7">Consultas en Listas de Riesgo</p>

                <p class="text mt-2 text-slate-100 text-sm">
                    Reconozco que GARANTÍAS COMUNITARIAS GRUPO S.A., en aplicación del
                    literal b del artículo 2 de la Ley 1581 de 2012, podrá consultar mi
                    información en listas de riesgos nacionales e internacionales.
                    Asimismo, declaro que no me encuentro incurso en ninguna causal de
                    inhabilidad, incompatibilidad o conflicto de intereses. En caso de
                    que se evidencie alguna situación relacionada dentro de la relación
                    contractual, actuaré conforme a las políticas de
                    <strong>GARANTÍAS COMUNITARIAS GRUPO S.A.</strong>
                </p>




                <div class="divisor-container" style="margin-bottom: 40px;">
                    <h1>Firma y huella</h1>
                </div>




<table cellpadding="5" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <!-- Firma -->
            <td width="83%">
                <h4>Firma:</h4>
                <table style="border-collapse: collapse; margin-top: 20px; width: 50%;">
                    <tr>
                        <td style="border-bottom: 1px solid #969696; height: 130px;"></td>
                    </tr>
                </table>
            </td>

            <!-- Huella -->
            <td width="17%" align="right">
                <h4>Huella:</h4>
                <table style="border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <td style="border: 1px solid #969696; width: 20%; height: 130px;"></td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>



            </div>



        </div>

    <htmlpagefooter name="html_footer">
        <div style="text-align: center; font-size: 10px;">
            Página {PAGENO} de {nbpg}
        </div>
    </htmlpagefooter>
    </body>

</html>
