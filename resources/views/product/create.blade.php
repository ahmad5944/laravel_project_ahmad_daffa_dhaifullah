@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

  {{-- Breadcrumb dinamis --}}
  <x-breadcrumb :items="[
      'Produk' => route('products.index'),
      'Tambah Produk' => ''
  ]" />

  <!-- Basic Layout -->
  <div class="row">

    <!-- Tombol kembali -->
    <div class="mb-4">
      <a href="{{ url()->previous() }}" class="btn btn-secondary">
        <i class="bx bx-arrow-back"></i> Kembali
      </a>
    </div>

    <!-- Form Tambah Produk -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-body">

          <form>

            {{-- Foto --}}
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Foto</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input
                    type="file"
                    class="form-control @error('foto') is-invalid @enderror"
                    id="inputGroupFile04"
                    aria-describedby="inputGroupFileAddon04"
                    aria-label="Upload"
                  />
                </div>
              </div>
            </div>

            {{-- Nama --}}
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span class="input-group-text" id="icon-nama">
                    <i class="bx bx-package"></i>
                  </span>
                  <input
                    type="text"
                    class="form-control @error('nama') is-invalid @enderror"
                    placeholder="Silahkan isi nama produk"
                    aria-label="Nama produk"
                    aria-describedby="icon-nama"
                  />
                </div>
              </div>
            </div>

            {{-- Deskripsi --}}
            <div class="row mb-3">
              <label class="col-sm-2 form-label">Deskripsi</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span class="input-group-text" id="icon-deskripsi">
                    <i class="bx bx-comment-detail"></i>
                  </span>
                  <textarea
                    class="form-control @error('deskripsi') is-invalid @enderror"
                    placeholder="Silahkan isi deskripsi produk"
                    aria-label="Deskripsi produk"
                    aria-describedby="icon-deskripsi"
                  ></textarea>
                </div>
              </div>
            </div>

            {{-- Harga --}}
            <div class="row mb-3">
              <label class="col-sm-2 form-label">Harga</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span class="input-group-text" id="icon-harga">
                    <i class="bx bx-dollar-circle"></i>
                  </span>
                  <input
                    type="text"
                    class="form-control @error('harga') is-invalid @enderror"
                    placeholder="1,000,000"
                    aria-describedby="icon-harga"
                  />
                </div>
              </div>
            </div>

            {{-- Stok --}}
            <div class="row mb-3">
              <label class="col-sm-2 form-label">Stok</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <span class="input-group-text" id="icon-stok">
                    <i class="bx bx-package"></i>
                  </span>
                  <input
                    type="number"
                    class="form-control @error('stok') is-invalid @enderror"
                    placeholder="10"
                    aria-describedby="icon-stok"
                  />
                </div>
              </div>
            </div>

            {{-- Tombol submit --}}
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>

          </form>

        </div>
      </div>
    </div>

  </div>
</div>
@endsection
