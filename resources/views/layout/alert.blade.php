@if (session()->has('sukses'))
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success">
                Selamat berhasil menambah data
            </div>
        </div>
    </div>
</div>
@endif
@if (session()->has('gagal'))
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="alert alert-success">
                Selamat berhasil menambah data
            </div>
        </div>
    </div>
</div>
@endif
@if (session()->has('hapus'))
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-info">
                    Data Berhasil dihapus
                </div>
            </div>
        </div>
    </div>
@endif