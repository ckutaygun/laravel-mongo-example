@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Ürün Düzenle</h4>
                    </div>

                    <p class="text-success">{{Session::get('message')}}</p>
                    <div class="card-body">
                        <!-- Modal -->

                        <form method="post" action="{{route('updateItem')}}">
                            @csrf
                            <div class="modal-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ürün İsmi</label>
                                    <input type="text" name="name" class="form-control" value="{{$singleItem->name}}"  placeholder="Ürün ismi giriniz.">
                                    <input type="hidden" name="id" class="form-control" value="{{$singleItem->id}}"  placeholder="Ürün ismi giriniz.">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ürün Tip</label>
                                    <input type="text" name="type" class="form-control" value="{{$singleItem->type}}"  placeholder="Ürün tip giriniz.">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ürün Adet</label>
                                    <input type="number" name="qty" class="form-control" value="{{$singleItem->qty}}"  placeholder="Ürün adet giriniz.">

                                </div>



                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
                                <button type="submit" class="btn btn-primary">Güncelle</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
