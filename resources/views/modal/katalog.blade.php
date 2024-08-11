<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahModalLabel">Tambah Katalog</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('simpankatalog')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="course_name">Nama Paket</label>
            <input type="text" class="form-control" id="course_name" name="nama_paket" required>
          </div>
          <div class="form-group">
            <label for="biaya">Biaya</label>
            <input type="text" class="form-control" id="biaya" name="biaya" required>
          </div>
          <div class="form-group">
            <label for="isi_katalog">Isi Katalog</label>
            <textarea class="form-control" id="isi_katalog" name="isi_katalog" rows="5" required></textarea>
          </div>
          <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
