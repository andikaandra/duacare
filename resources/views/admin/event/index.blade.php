@extends('layouts.admin')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css" />
<style>
</style>    
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="{{ route('event.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus-square fa-sm text-white-50"></i> Tambahkan Acara</a>
        <h1 class="h3 mb-0 text-gray-800">Event Duacare</h1>
        <a href="{{ route('event.export') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export Database</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 border-bottom-primary">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Event</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $event->id }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{!! $event->description !!} </td>
                        <td class="align-middle text-center">
                            <button class="btn btn-warning btn-icon-split btn-sm edit" style="margin-bottom: 6px;" data-id="{{ $event->id }}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-info-circle"></i>
                                </span>
                                <span class="text">Edit</span>
                            </button> <br>
                            <button class="btn btn-danger btn-icon-split btn-sm delete" data-id="{{ $event->id }}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text">Delete</span>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="modalEdit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Edit Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('event.update') }}" enctype="multipart/form-data" id="edit-form">
                    {{ csrf_field() }}
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="description">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" id="title" placeholder="Masukkan judul" required name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        {{-- <textarea name="description" class="form-control" id="description" rows="10" required=></textarea> --}}
                        <div class="form-control" style="height: 300px;" class="mb-3" id="description"></div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<form method="post" id="deleteEvent" action="{{route('event.delete')}}">
    {{ csrf_field() }}
    <input name="_method" type="hidden" value="DELETE">
    <input type="hidden" name="id" id="idEvent" name="id">
</form> 

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $("#nav-event").addClass("active");

    const toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'],
        ['blockquote', 'code-block'],
        [{ 'list': 'ordered'}, { 'list': 'bullet' }],
        [{ 'script': 'sub'}, { 'script': 'super' }],
        ['clean']
    ];
    
    const quill2 = new Quill('#description', {
        theme: 'snow',
        modules: {
          toolbar: toolbarOptions
        },
        placeholder: 'Ubah Deskripsi disini',
      });

    $(document).on('click', ".edit", async function() {
        const dataId = $(this).attr('data-id');
        let newsData;
        try {
            newsData = await $.ajax({
                url: '{{url('admin/event/show')}}/' + dataId,
                dataType: 'json'
            });
        } catch (error) {
            alert('error');
            console.log(error);
            return;
        }
        $("#id").val(dataId)
        $("#title").val(newsData.title)
        // $("#description").val(newsData.description)
        quill2.root.innerHTML = newsData.description
        $("#modalEdit").modal('show');
    });

    $(document).on('click', ".delete", async function() {
        const dataId = $(this).attr('data-id');
        console.log(dataId)
        swal({
          title: "Are you sure?",
          text: "Data yang telah dihapus tidak dapat dikembalikan!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $('#idEvent').val(dataId);
            $('#deleteEvent').submit();
          } else {
            return false;
          }
        });
    });


    $("#edit-form").submit(function(e) {
        var editor = document.querySelector('#description')
        var html = editor.children[0].innerHTML
        if (!html.length) {
          alert("Cannot be empty!");
          e.preventDefault();
          return false;
        }
        $("input[name='description']").val(html);
      });
</script>
@endsection