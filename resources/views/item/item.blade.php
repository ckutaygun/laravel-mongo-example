@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-primary btn-right">Yeni Ürün</button>
                    </div>

                        @if(session('success_message'))
            <div class="alert alert-success">
                {{sesion('success_message')}}
            </div>
                            @endif
                <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">İsim</th>
                                <th scope="col">Tip</th>
                                <th scope="col">Adet</th>
                                <th scope="col">Aksiyon</th>

                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                           @foreach($allItem as $item)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$item->name}}</td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->qty}}</td>
                                <td>
                                    <a href="{{route('editItem',['id'=>$item->id])}}" class="btn btn-primary btn-success btn-sm">Düzenle</a>
                                    <a  href="{{route('deleteItem',['id'=>$item->id])}}" class="delete-confirm btn btn-warning btn-sm">Sil</a>
                                </td>
                            </tr>
                           @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yeni Ürün Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route('saveItem')}}">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Ürün İsmi</label>
                            <input type="text" name="name" class="form-control"  placeholder="Ürün ismi giriniz.">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ürün Tip</label>
                            <input type="text" name="type" class="form-control"  placeholder="Ürün tip giriniz.">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ürün Adet</label>
                            <input type="number" name="qty" class="form-control"  placeholder="Ürün adet giriniz.">

                         </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
