@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Blank Page') }}</h1>

    <!-- Main Content goes here -->


    <!-- START DATA -->

    <div class="my-3 p-3 bg-body rounded shadow-sm">
            <!-- FORM PENCARIAN -->
            <div class="pb-3">
              <form class="d-flex" action="" method="get">
                  <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Cari</button>
              </form>
            </div>

            <!-- TOMBOL TAMBAH DATA -->
            <div class="pb-3">
              <a href='{{ route('blank.create') }}' class="btn btn-primary">+ Tambah Data</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-3">Id Sekolah</th>
                        <th class="col-md-4">Nama Sekolah</th>
                        <th class="col-md-2">Tahun</th>
                        <th class="col-md-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($blank as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->Id_sekolah }}</td>
                        <td>{{ $b->sekolah }}</td>
                        <td>{{ $b->tahun }}</td>
                        <td>
                            <a href='{{ route('blank.edit', $b->Id_sekolah) }}' class="btn btn-warning btn-sm">Edit</a>
                            <a href='{{ route('blank.destroy', $b->Id_sekolah) }}' class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak Ada ada hehehe...</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

      </div>
      <!-- AKHIR DATA -->

    <!-- End of Main Content -->
@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
    <div class="alert alert-success border-left-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@endpush
