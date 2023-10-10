<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Karyawan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <tr>
                <th>NIK</th>
                <td>:</td>
                <td>{{ $item->NIK }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>:</td>
                <td>{{ $item->nama }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td>{{ $item->user->email }}</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>:</td>
                <td>{{ $item->jabatan->nama }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>{{ $item->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>{{ $item->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>:</td>
                <td>{{ $item->provinsi }}</td>
            </tr>
            <tr>
                <th>Kota</th>
                <td>:</td>
                <td>{{ $item->kota }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>{{ $item->alamat }}</td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>