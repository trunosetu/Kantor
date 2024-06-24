<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Daftar Pegawai</h1>
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('pegawai.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">TANGGAL LAHIR</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">JABATAN</th>
                                <th scope="col">STATUS</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($posts as $post)
                                <tr>
                                    <td class="text-center"> {{ $post->id }} </td>
                                    <td>{{ $post->nama }}</td>
                                    <td>{{ $post->tanggal }}</td>
                                    <td>{{ $post->alamat }}</td>
                                    <td>{!! $post->jabatan !!}</td>
                                    <td>{{ $post->status }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pegawai.destroy', $post->id) }}" method="POST">
                                            <a href="{{ route('pegawai.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

      <div class="section-body">
      </div>
    </section>
  </div>