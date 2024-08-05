<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

         Permission::create(['name' => 'voir_liste_etudiant']);
         Permission::create(['name' => 'voir_liste_enseignant']);


         Role::create(['name'=>'etudiant'])->givePermissionTo([
            'voir_liste_etudiant',

         ]);
         Role::create(['name'=>'enseignant'])->givePermissionTo([
            'voir_liste_etudiant',
            'voir_liste_enseignant'

         ]);
    }
}
