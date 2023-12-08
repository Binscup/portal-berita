@extends('layouts.app')

@section('content')
<!-- modal -->
<div class="modal" tabindex="-1" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" name="category_delete" id="category_id">
        <p>Are you sure want to delete this category with all this posts. ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->


    <div class="container my-4">
        <div id="alert">
            @include('components.alert')
        </div>
        <div class="mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="fw-bold my-auto">Tambah Kategori</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('kategori.perform')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="namaJudul" class="form-label">Nama Kategori</label>
                            <input type="text" name="nama_kategori" class="form-control" id="namaJudul">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="fw-bold my-auto">Manajemen Kategori</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive small">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allKategori as $item)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$item->nama_kategori}}</td>
                                <td>
                                    <a href="{{route('kategori.edit',$item->id)}}" class="btn btn-sm btn-success">edit</a>
                                    <form class="d-inline" onsubmit="return confirm('sure to delete this data')"
                                            action="{{ route('kategori.delete', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button  class="btn btn-sm btn-danger mb-0 deleteCategoryBtn" >delete</button>
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('.deleteCategoryBtn').click(function (e) {
            e.preventDefault();
            var category_id = $(this).val();

            $('#category_id').val(category_id);
            $('#deleteModal').modal('show');
        });
    });
</script>
@endsection

