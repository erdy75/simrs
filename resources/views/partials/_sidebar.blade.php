
<h2>Administrasi</h2>
            <div class="panel-group">
                <div class="panel panel-success">          
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a href="{{ url('/home') }}">Dashboard</a>
                    </h4>
                  </div>
                </div>
            </div>

  <div class="panel-group" id="accordion">
    <div class="panel panel-info">

      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapsex">Master</a>
        </h4>
      </div>
      <div id="collapsex" class="panel-collapse collapse">
        <div class="panel-body">
          @permission('unit_kerja-list')
            <a class="list-group-item" href="{{ route('unit_kerja.index') }}">Unit Kerja</a>
          @endpermission

          @permission('jabatan-list')  
            <a class="list-group-item" href="{{ route('jabatan.index') }}">Jabatan</a>
          @endpermission

          @permission('karyawan-list')
            <a class="list-group-item" href="{{ route('karyawan.index') }}">Karyawan</a>
          @endpermission
        </div>
      </div>

      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Inventory</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
          @permission('item-list')
            <a class="list-group-item" href="{{ route('itemCRUD2.index') }}">Barang ATK</a>
          @endpermission
            <a class="list-group-item" href="#">Barang Alkes</a>
            <a class="list-group-item" href="#">Barang IT</a>
        </div>
      </div>
   
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Administasi</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          
          @permission('humas-list')
           <a class="list-group-item" href="{{ route('humas.index') }}">SK Karyawan</a>
          @endpermission

          @permission('complaint-list')
           <a class="list-group-item" href="{{ route('complaint.index') }}">Kritik Saran</a>
          @endpermission
          
          @permission('cuti-list')
           <a class="list-group-item" href="{{ route('cuti.index') }}">Cuti</a>
          @endpermission

        </div>
      </div>
   
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Laporan</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="list-group">

              @permission('humas-laporan')
                <a class="list-group-item" href="{{ route('humas.laporan') }}">Surat Keputusan</a>
              @endpermission

              @permission('complaint-laporan')
                <a class="list-group-item" href="{{ route('complaint.laporan') }}">Kritik Saran</a>
              @endpermission

                <a class="list-group-item" href="#">Barang ATK</a>
            </div>
        </div>
      </div>
      
      @permission('role-list')
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Manage user</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
            <div class="list-group">
                <a class="list-group-item" href="{{ route('users.index') }}">Users</a>
                <a class="list-group-item" href="{{ route('roles.index') }}">Roles</a>
            </div>
        </div>
      </div>
      @endpermission

    </div>
  </div> 