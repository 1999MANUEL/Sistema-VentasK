<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cuenta;

class CuentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cuentas = [
            ['codigo' => '111101', 'nombre' => 'Efectivo', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '111102', 'nombre' => 'Transferencia de liquidez', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '111200', 'nombre' => 'Fondo fijo', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '111301', 'nombre' => 'Banco', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '111302', 'nombre' => 'Cuenta transitoria', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '111303', 'nombre' => 'Recibos pendientes', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '111304', 'nombre' => 'Pagos pendientes', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '111400', 'nombre' => 'Inversiones Temporales', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '112100', 'nombre' => 'Cuentas por Cobrar Comerciales', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '112110', 'nombre' => 'Cuentas por Cobrar Comerciales - PoS', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '112200', 'nombre' => 'Otras Cuentas por Cobrar', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '112300', 'nombre' => 'Cuentas por Cobrar a Empresas Relacionadas', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '112400', 'nombre' => 'Anticipo a Proveedores', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '112500', 'nombre' => 'Provisión para Cuentas Incobrables', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '113100', 'nombre' => 'Inventarios de Productos Terminados', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '113200', 'nombre' => 'Inventarios de Productos en Proceso', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '113300', 'nombre' => 'Inventarios de Materia Prima', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '113410', 'nombre' => 'Inventario en Tránsito Entrante', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '113420', 'nombre' => 'Inventario en Tránsito Saliente', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '113500', 'nombre' => 'Inventario - Provisión para Obsolescencias', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '114100', 'nombre' => 'Crédito Fiscal IVA', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '114200', 'nombre' => 'Impuestos por Recuperar', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '114300', 'nombre' => 'Pagos Anticipados', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '114400', 'nombre' => 'Otros Activos Corrientes', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '121100', 'nombre' => 'Cuentas por Cobrar Comerciales - Largo Plazo', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '121200', 'nombre' => 'Otras Cuentas por Cobrar - Largo Plazo', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '121300', 'nombre' => 'Cuentas por Cobrar Empresas Relacionadas y/o Vinculadas Largo Plazo', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '122100', 'nombre' => 'Inventarios de Repuestos', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '122200', 'nombre' => 'Otros Inventarios', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123100', 'nombre' => 'Terrenos', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123200', 'nombre' => 'Edificios', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123210', 'nombre' => 'Depreciación Acumulada Edificios', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123300', 'nombre' => 'Maquinaria', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123310', 'nombre' => 'Depreciación Acumulada Maquinaria', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123400', 'nombre' => 'Vehículos', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123410', 'nombre' => 'Depreciación Acumulada Vehículos', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123500', 'nombre' => 'Muebles y Enseres', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123510', 'nombre' => 'Depreciación Acumulada Muebles y Enseres', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123600', 'nombre' => 'Equipos de Computación', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '123610', 'nombre' => 'Depreciación Acumulada Equipos de Computación', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '124000', 'nombre' => 'Propriedades de Inversión', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '125100', 'nombre' => 'Patentes y Marcas', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '125110', 'nombre' => 'Amortización Acumulada Patentes y Marcas', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '125200', 'nombre' => 'Derechos de Llave', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '125210', 'nombre' => 'Amortización Acumulada Derechos de Llave', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '126000', 'nombre' => 'Inversiones Permanentes', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '127000', 'nombre' => 'Otros Activos No Corrientes', 'tipo' => 'activo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '211100', 'nombre' => 'Préstamos Bancarios', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '211200', 'nombre' => 'Otros Pasivos Financieros', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '211300', 'nombre' => 'Intereses por Pagar', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '212100', 'nombre' => 'Cuentas por Pagar Comerciales', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '212200', 'nombre' => 'Documentos por Pagar Corto Plazo', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '212300', 'nombre' => 'Cuentas por Pagar a Empresas Relacionadas', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213100', 'nombre' => 'Aportes y Retenciones a Corto Plazo', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213200', 'nombre' => 'Sueldos por Pagar', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213300', 'nombre' => 'Beneficios Sociales por Pagar', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213400', 'nombre' => 'Cargos Sociales', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213500', 'nombre' => 'Débito Fiscal IVA', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213600', 'nombre' => 'Impuesto a las Transacciones por Pagar', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213700', 'nombre' => 'Retenciones IT por Pagar', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213800', 'nombre' => 'Retenciones IUE por Pagar', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '213900', 'nombre' => 'Otros Impuestos por Pagar', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '214000', 'nombre' => 'Provisiones', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '215000', 'nombre' => 'Ingresos Diferidos', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '216000', 'nombre' => 'Otros Pasivos Corrientes', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '221100', 'nombre' => 'Préstamos Bancarios a Largo Plazo', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '221200', 'nombre' => 'Otros Pasivos Financieros a Largo Plazo', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '222100', 'nombre' => 'Documentos por Pagar a Largo Plazo', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '222200', 'nombre' => 'Cuentas por Pagar a Empresas Relacionadas a Largo Plazo', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '223000', 'nombre' => 'Provisión para Beneficios Sociales (Indemnizaciones al Personal)', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '224000', 'nombre' => 'Otros Pasivos No Corrientes', 'tipo' => 'pasivo', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '310100', 'nombre' => 'Capital Social Pagado', 'tipo' => 'patrimonio', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '310200', 'nombre' => 'Aportes por Capitalizar', 'tipo' => 'patrimonio', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '310300', 'nombre' => 'Ajuste de Capital', 'tipo' => 'patrimonio', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '320100', 'nombre' => 'Reserva Legal', 'tipo' => 'patrimonio', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '320200', 'nombre' => 'Otras Reservas', 'tipo' => 'patrimonio', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '320300', 'nombre' => 'Ajuste de Reservas Patrimoniales', 'tipo' => 'patrimonio', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '331000', 'nombre' => 'Resultados Acumulados', 'tipo' => 'patrimonio', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '332000', 'nombre' => 'Resultados de la Gestión', 'tipo' => 'patrimonio', 'saldo_inicial' => 0, 'estado' => true],
            ['codigo' => '410100', 'nombre' => 'Ventas', 'tipo' => 'ingreso', 'saldo_inicial' => 0, 'estado' => true],

        ];

        foreach ($cuentas as $cuenta) {
            Cuenta::updateOrCreate(
                ['codigo' => $cuenta['codigo']],
                $cuenta
            );
        }
    }
}
