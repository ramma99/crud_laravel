@extends('layouts.app')

@section('content')
<class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3 class="text-center">PERSONAL DATA</h3>
            <div class="card">
                <div class="card-header">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Name</label>
                        <input type="name" class="form-control" id="exampleFormControlInput2" placeholder="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Self Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-block text-right">
                        <button class="btn btn-primary" type="button">Tambah</button>
                    </div>
                </div>
                <div class="col-3"></div>

            </div>
        </div>
    </div>


    @endsection