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
            <h1>DETAIL PEGAWAI</h1>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    {{ $Pegawai->nama }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Lahir:</strong>
                    {{ $Pegawai->tanggal }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Alamat:</strong>
                  {{ $Pegawai->alamat }}
              </div>
            </div>   
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Jabatan:</strong>
                  {{ $Pegawai->jabatan }}
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Status:</strong>
                  {{ $Pegawai->status }}
              </div>
            </div>               
            <div >
                <a class="btn btn-primary" href="{{ route('pegawai.index') }}"> Back</a>
            </div>
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

