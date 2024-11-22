@extends('admin.layouts.app')

@section('title')
    Edit coupon
@endsection

@section('content')
    <div class="row">
        @include('admin.layouts.sidebar')
        <div class="col-md-9">
            <div class="card-header bg-white">
                <h3 class="mt-2">
                    Editar cupon
                </h3>
            </div>
            <hr>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <form action="{{route('admin.coupons.update',$coupon->id)}}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre*</label>
                                <input
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    id="name"
                                    value="{{$coupon->name,old('name')}}"
                                    aria-describedby="helpId"
                                    placeholder="Nombre*"
                                />
                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="discount" class="form-label">Descuento*</label>
                                <input
                                    type="number"
                                    class="form-control @error('discount') is-invalid @enderror"
                                    name="discount"
                                    id="discount"
                                    value="{{$coupon->discount,old('discount')}}"
                                    aria-describedby="helpId"
                                    placeholder="Descuento*"
                                />
                                @error('discount')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="valid_until" class="form-label">Validez*</label>
                                <input
                                    type="datetime-local"
                                    value="{{$coupon->valid_until}}"
                                    class="form-control @error('valid_until') is-invalid @enderror"
                                    name="valid_until"
                                    id="valid_until"
                                    aria-describedby="helpId"
                                    placeholder="Validez*"
                                />
                                @error('valid_until')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button
                                type="submit"
                                class="btn btn-sm btn-dark"
                            >
                                Guardar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
