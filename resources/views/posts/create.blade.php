<!DOCTYPE html>
<html lang="en">
@include('bar.head')

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div><!-- dibawah ini navbar -->
      @include('bar.navbar')
      @include('bar.sidebar')

      <!-- halaman utama -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Menambah karyawan</h1>
          </div>
          <div class="card">
            <form action="{{ route('pegawai.store') }}" method="POST">
                @csrf
              <div class="card-header">
                <h4>Default Validation</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>nama</label>
                  <input type="text" class="form-control" name="nama" required="">
                </div>
                <div class="form-group">
                  <label>tanggal (ex:2022-02-02)</label>
                  <input type="date" class="form-control"name="tanggal" required="">
                </div>
                <div class="form-group">
                  <label>alamat</label>
                  <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group mb-0">
                  <label>jabatan</label>
                  <textarea class="form-control" name="jabatan" required=""></textarea>
                </div>
                <div class="form-group">
                    <label>status</label>
                    <input type="text" class="form-control" name="status" required="">
                  </div>
              </div>
              <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <div class="section-body">
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

@include('script.script')
</body>
</html>