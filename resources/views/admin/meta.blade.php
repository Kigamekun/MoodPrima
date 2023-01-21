@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
@endsection



@section('menu')
    <div class="sidebar-menu-wrapper">
        <li class="listMenuName">
            <p>Admin Menu</p>
        </li>
        <li class="list-menu ">
            <div class="icon">
                <ion-icon name="grid"></ion-icon>
            </div>
            <a href="/admin" class="sidebar-menu">Dashboard Admin</a>
        </li>

    </div>
@endsection

@section('content')
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: 14px;
        }
    </style>
    <div class="contentMain">
        <h2 class="pageNameContent">Manage Meta</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Manage Meta</li>
        </ol>

        <div class="wrapperTable table-responsive">
<br>

            <table id="faqTable" class="table" style="width:100%">
                @php
                    $meta = DB::table('meta_landing')->first();
                @endphp
                <tr>
                    <td>Hero</td>
                    <td>: {{ $meta->hero }}</td>
                </tr>
                <tr>
                    <td>Heading Hero</td>
                    <td>: {{ $meta->heading_hero }}</td>
                </tr>
                <tr>
                    <td>About</td>
                    <td>: {{ $meta->about }}</td>
                </tr>
                <tr>
                    <td>Maps</td>
                    <td>: {{ $meta->maps }}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>: {{ $meta->email }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>: {{ $meta->address }}</td>
                </tr>
            </table>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateData"
                data-id="{{ $meta->id }}" data-heading_hero="{{ $meta->heading_hero }}" data-about="{{ $meta->about }}"
                data-maps="{{ $meta->maps }}" data-email="{{ $meta->email }}" data-address="{{ $meta->address }}"
                data-url="{{ route('meta.update', ['id' => $meta->id]) }}">
                Update
            </button>
        </div>
    </div>






    <!-- Modal -->
    <div class="modal fade" id="updateData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="updateDataLabel" aria-hidden="true">
        <div class="modal-dialog" id="updateDialog">
            <div id="modal-content" class="modal-content">
                <div class="modal-body">
                    Loading..
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="createData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="createDataLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div id="modal-content" class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create Meta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="hero" class="form-label">Hero</label>
                            <input type="file" class="form-control" id="hero" name="hero"
                                placeholder="isi hero ">
                        </div>

                        <div class="mb-3">
                            <label for="heading_hero" class="form-label">heading_hero</label>
                            <input type="text" class="form-control" id="heading_hero" name="heading_hero"
                                placeholder="isi heading_hero ">
                        </div>

                        <div class="mb-3">
                            <label for="about" class="form-label">about</label>
                            <textarea name="about" id="about" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="maps" class="form-label">maps</label>
                            <textarea name="maps" id="maps" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="isi heading_hero ">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.dropify').dropify();
    </script>





    <script>
        $('#updateData').on('shown.bs.modal', function(e) {
            var html = `
            <div class="modal-header">
                    <h5 class="modal-heading_hero" id="staticBackdropLabel">Edit Meta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="${$(e.relatedTarget).data('url')}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                            <label for="hero" class="form-label">Hero</label>
                            <input type="file" class="form-control" id="hero" name="hero"
                                placeholder="isi hero ">
                        </div>

                        <div class="mb-3">
                            <label for="heading_hero" class="form-label">heading_hero</label>
                            <input type="text" class="form-control" id="heading_hero" name="heading_hero"
                                placeholder="isi heading_hero " value="${$(e.relatedTarget).data('heading_hero')}">
                        </div>

                        <div class="mb-3">
                            <label for="about" class="form-label">about</label>
                            <textarea name="about" id="about" class="form-control" cols="30" rows="10">${$(e.relatedTarget).data('about')}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="maps" class="form-label">maps</label>
                            <textarea name="maps" id="maps" class="form-control" cols="30" rows="10">${$(e.relatedTarget).data('maps')}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="isi heading_hero " value="${$(e.relatedTarget).data('email')}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">address</label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="10">${$(e.relatedTarget).data('address')}</textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
`;

            $('#modal-content').html(html);
            $('.dropify').dropify();

        });
    </script>
@endsection
