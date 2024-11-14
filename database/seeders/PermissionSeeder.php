<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
    
            //categorías
            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'eliminar-categoria',

            //Cliente
            'ver-cliente',
            'crear-cliente',
            'editar-cliente',
            'eliminar-cliente',

            //Compra
            'ver-compra',
            'crear-compra',
            'mostrar-compra',
            'eliminar-compra',

            //Marca
            'ver-marca',
            'crear-marca',
            'editar-marca',
            'eliminar-marca',

            //Presentacione
            'ver-presentacione',
            'crear-presentacione',
            'editar-presentacione',
            'eliminar-presentacione',

            //Producto
            'ver-producto',
            'crear-producto',
            'editar-producto',
            'eliminar-producto',

            //Proveedore
            'ver-proveedore',
            'crear-proveedore',
            'editar-proveedore',
            'eliminar-proveedore',

            //Venta
            'ver-venta',
            'crear-venta',
            'mostrar-venta',
            'eliminar-venta',

            //Roles
            'ver-role',
            'crear-role',
            'editar-role',
            'eliminar-role',

            //User
            'ver-user',
            'crear-user',
            'editar-user',
            'eliminar-user',

            //Perfil 
            'ver-perfil',
            'editar-perfil',
                // Plan de Cuentas
            'ver-cuenta',
            'crear-cuenta',
            'editar-cuenta',
            'eliminar-cuenta',

            // Balance General
            'ver-balance-general',

            // Estado de Resultados
            'ver-estado-resultados',
                    ];

        foreach($permisos as $permiso){
            Permission::updateOrCreate(['name' => $permiso], ['guard_name' => 'web']);
        }
    }
}
