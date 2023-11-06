@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('sidebar')
            <div class="col-md-9">
                <h1>Create Asset</h1>

                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('create-asset') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Asset Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <br/>
                    <div class="form-group">
                        <label for="quantity">Asset Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" required>
                    </div>

                    <br/>
                    <div class="form-group">
                        <label for="unit">Asset Unit</label>
                        <input type="text" name="unit" id="unit" class="form-control" required>
                    </div>

                    <br/>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
