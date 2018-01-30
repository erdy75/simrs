<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $permission = [

        	/*[

                //permission role

        		'name' => 'role-list',

        		'display_name' => 'Display Role Listing',

        		'description' => 'See only Listing Of Role'

        	],

        	[

        		'name' => 'role-create',

        		'display_name' => 'Create Role',

        		'description' => 'Create New Role'

        	],

        	[

        		'name' => 'role-edit',

        		'display_name' => 'Edit Role',

        		'description' => 'Edit Role'

        	],

        	[

        		'name' => 'role-delete',

        		'display_name' => 'Delete Role',

        		'description' => 'Delete Role'

        	],

            //permission item

        	[

        		'name' => 'item-list',

        		'display_name' => 'Display Item Listing',

        		'description' => 'See only Listing Of Item'

        	],

        	[

        		'name' => 'item-create',

        		'display_name' => 'Create Item',

        		'description' => 'Create New Item'

        	],

        	[

        		'name' => 'item-edit',

        		'display_name' => 'Edit Item',

        		'description' => 'Edit Item'

        	],

        	[

        		'name' => 'item-delete',

        		'display_name' => 'Delete Item',

        		'description' => 'Delete Item'

        	],

            //permission humas
            [

                'name' => 'humas-list',

                'display_name' => 'Display Humas Listing',

                'description' => 'See only Listing Of Humas'

            ],

            [

                'name' => 'humas-create',

                'display_name' => 'Create Humas',

                'description' => 'Create New Humas'

            ],

            [

                'name' => 'humas-edit',

                'display_name' => 'Edit Humas',

                'description' => 'Edit Humas'

            ],

            [

                'name' => 'humas-delete',

                'display_name' => 'Delete Humas',

                'description' => 'Delete Humas'

            ],

             //permission unit kerja
            [

                'name' => 'unit_kerja-list',

                'display_name' => 'Display Unit Kerja Listing',

                'description' => 'See only Listing Of Unit Kerja'

            ],

            [

                'name' => 'unit_kerja-create',

                'display_name' => 'Create Unit Kerja',

                'description' => 'Create New Unit Kerja'

            ],

            [

                'name' => 'unit_kerja-edit',

                'display_name' => 'Edit Unit Kerja',

                'description' => 'Edit Unit Kerja'

            ],

            [

                'name' => 'unit_kerja-delete',

                'display_name' => 'Delete Unit Kerja',

                'description' => 'Delete Unit Kerja'

            ],

            //role jabatan
              [

                'name' => 'jabatan-list',

                'display_name' => 'Display Jabatan Listing',

                'description' => 'See only Listing Of Jabatan'

            ],

            [

                'name' => 'jabatan-create',

                'display_name' => 'Create Jabatan',

                'description' => 'Create New Jabatan'

            ],

            [

                'name' => 'jabatan-edit',

                'display_name' => 'Edit Jabatan',

                'description' => 'Edit Jabatan'

            ],

            [

                'name' => 'jabatan-delete',

                'display_name' => 'Delete Jabatan',

                'description' => 'Delete Jabatan'

            ],

            //data auth complaint
            [

                'name' => 'complaint-list',

                'display_name' => 'Display Complaint Listing',

                'description' => 'See only Listing Of Complaint'

            ],

            [

                'name' => 'complaint-create',

                'display_name' => 'Create Complaint',

                'description' => 'Create New Complaint'

            ],

            [

                'name' => 'complaint-edit',

                'display_name' => 'Edit Complaint',

                'description' => 'Edit Complaint'

            ],

            [

                'name' => 'complaint-delete',

                'display_name' => 'Delete Complaint',

                'description' => 'Delete Complaint'

            ],

            //data auth karyawan
            [

                'name' => 'karyawan-list',

                'display_name' => 'Display Karyawan Listing',

                'description' => 'See only Listing Of Karyawan'

            ],

            [

                'name' => 'karyawan-create',

                'display_name' => 'Create Karyawan',

                'description' => 'Create New Karyawan'

            ],

            [

                'name' => 'karyawan-edit',

                'display_name' => 'Edit Karyawan',

                'description' => 'Edit Karyawan'

            ],

            [

                'name' => 'karyawan-delete',

                'display_name' => 'Delete Karyawan',

                'description' => 'Delete Karyawan'

            ],

            [

                'name' => 'humas-download',

                'display_name' => 'Download Humas',

                'description' => 'Download Humas'

            ],

            [

                'name' => 'humas-laporan',

                'display_name' => 'Laporan Humas',

                'description' => 'Laporan Humas'

            ],

             [

                'name' => 'complaint-download',

                'display_name' => 'Download Complaint',

                'description' => 'Download Complaint'

            ],

            [

                'name' => 'complaint-laporan',

                'display_name' => 'Laporan Complaint',

                'description' => 'Laporan Complaint'

            ],*/

            //data auth cuti 
            [

                'name' => 'cuti-list',

                'display_name' => 'Display Cuti Listing',

                'description' => 'See only Listing Of Cuti'

            ],

            [

                'name' => 'cuti-create',

                'display_name' => 'Create Cuti',

                'description' => 'Create New Cuti'

            ],

            [

                'name' => 'cuti-edit',

                'display_name' => 'Edit Cuti',

                'description' => 'Edit Cuti'

            ],

            [

                'name' => 'cuti-delete',

                'display_name' => 'Delete Cuti',

                'description' => 'Delete Cuti'

            ],
        ];


        foreach ($permission as $key => $value) {

        	Permission::create($value);

        }
    }
}
