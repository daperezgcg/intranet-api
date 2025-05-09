<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientVinculationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'accionistas' => 'nullable|array',
            'corruptionDeclaration' => 'nullable|array',
            'corruptionDeclaration.acceptance' => 'nullable|in:0,1',
            'dataPolicy' => 'nullable|array',
            'dataPolicy.acceptance' => 'nullable|in:0,1',
            'declarationForm' => 'nullable|array',
            'declarationForm.acceptance' => 'nullable|in:0,1',
            'informacionEntidad' => 'nullable|array',
            'informacionEntidad.autorretenedor' => 'nullable|boolean',
            'informacionEntidad.ciudad' => 'nullable|string',
            'informacionEntidad.departamento' => 'nullable|string',
            'informacionEntidad.direccion' => 'nullable|string',
            'informacionEntidad.dv' => 'nullable|numeric',
            'informacionEntidad.fillingDate' => 'nullable|date',
            'informacionEntidad.granContribuyente' => 'nullable|boolean',
            'informacionEntidad.mailEntidad' => 'nullable|email',
            'informacionEntidad.movilEntidad' => 'nullable|regex:/^\d*$/',
            'informacionEntidad.nit' => 'nullable|numeric',
            'informacionEntidad.pais' => 'nullable|string',
            'informacionEntidad.razonSocial' => 'nullable|string',
            'informacionEntidad.regimenIva' => 'nullable|string',
            'informacionEntidad.sectorEconomico' => 'nullable|numeric',
            'informacionEntidad.sectorEconomicoOtro' => 'nullable|string',
            'informacionEntidad.siglas' => 'nullable|string',
            'informacionEntidad.telefonoEntidad' => 'nullable|regex:/^\d*$/',
            'informacionEntidad.tipoEmpresa' => 'nullable|numeric',
            'informacionEntidad.tipoEmpresaOtro' => 'nullable|string',
            'informacionEntidad.web' => 'nullable|string',
            'informacionFinanciera' => 'nullable|array',
            'informacionFinanciera.fechaCorte' => 'nullable|date',
            'informacionFinanciera.divisa' => 'nullable|string',
            'informacionFinanciera.ingresosMensuales' => 'nullable|numeric',
            'informacionFinanciera.otrosIngresos' => 'nullable|numeric',
            'informacionFinanciera.conceptoOtrosIngresos' => 'nullable|string',
            'informacionFinanciera.egresosMensuales' => 'nullable|numeric',
            'informacionFinanciera.otrosEgresos' => 'nullable|numeric',
            'informacionFinanciera.conceptoOtrosEgresos' => 'nullable|string',
            'informacionFinanciera.activos' => 'nullable|numeric',
            'informacionFinanciera.pasivos' => 'nullable|numeric',
            'informacionFinanciera.patrimonio' => 'nullable|numeric',
            'informacionFinanciera.cuentasMonedaExtranjera' => 'nullable|numeric',
            'informacionFinanciera.operacionesMonedaExtranjera' => 'nullable|numeric',
            'informacionFinanciera.pais' => 'nullable|string',
            'informacionFinanciera.moneda' => 'nullable|string',
            'informacionFinanciera.montoPromedio' => 'nullable|numeric',
            'laftInfo' => 'nullable|array',
            'laftInfo.obligadaLaft' => 'nullable|boolean',
            'laftInfo.archivosLaft' => 'nullable|file',
            'laftInfo.obligadaCst' => 'nullable|boolean',
            'laftInfo.contratosExtranjeros' => 'nullable|boolean',
            'representanteLegal' => 'nullable|array',
            'representanteLegal.nombresApellidos' => 'nullable|string',
            'representanteLegal.genero' => 'nullable|string',
            'representanteLegal.tipoIdentificacion' => 'nullable|numeric',
            'representanteLegal.numeroIdentificacion' => 'nullable|string',
            'representanteLegal.lugarExpedicion' => 'nullable|string',
            'representanteLegal.fechaExpedicion' => 'nullable|string',
            'representanteLegal.paisNacimiento' => 'nullable|string',
            'representanteLegal.nacionalidad' => 'nullable|string',
            'representanteLegal.paisResidencia' => 'nullable|string',
            'representanteLegal.departamentoResidencia' => 'nullable|string',
            'representanteLegal.ciudadResidencia' => 'nullable|string',
            'representanteLegal.telefonoMovil' => 'nullable|regex:/^\d{10}$/',
            'representanteLegal.correo' => 'nullable|email',
            'representanteLegal.pep' => 'nullable|boolean',
            'representanteLegal.cargoPep' => 'nullable|string',
            'representanteLegal.recursosPublicos' => 'nullable|boolean',
            'representanteLegal.recursosPublicosCargo' => 'nullable|string',
            'representanteLegal.poderPublico' => 'nullable|boolean',
            'representanteLegal.poderPublicoCargo' => 'nullable|string',
            'representanteLegal.vinculoCaracteristicas' => 'nullable|numeric',
            'representanteLegal.nombreVinculo' => 'nullable|string',
            'representanteLegal.cargoVinculo' => 'nullable|string',
            'signedDocument' => 'nullable|file',
            'vinculationFiles' => 'required|array',
            'vinculationFiles.*' => 'file|max:10240',
        ];

    }

    }

