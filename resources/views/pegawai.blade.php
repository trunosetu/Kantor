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
      @include('content.data')
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