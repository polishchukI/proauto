@extends('inventory.layouts.app', ['page' => 'New Inventory Setting', 'pageSlug' => 'inventory_settings', 'section' => 'settings', 'search' => 'inventory_settings'])

@section('content')
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">New Inventory Setting</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('inventory_settings.index') }}" class="btn btn-sm btn-simple"><i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('inventory_settings.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">Setting information</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('option') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-option">Option</label>
                                    <input type="text" name="option" id="input-option" class="form-control form-control-alternative{{ $errors->has('option') ? ' is-invalid' : '' }}" placeholder="Name" value="{{ old('option') }}" required autofocus>
                                    @include('inventory.alerts.feedback', ['field' => 'option'])
                                </div>
                                <div class="form-group{{ $errors->has('value') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-value">Value</label>
                                    <input type="text" name="value" id="input-value" class="form-control form-control-alternative{{ $errors->has('value') ? ' is-invalid' : '' }}" placeholder="Name" value="{{ old('value') }}" required>
                                    @include('inventory.alerts.feedback', ['field' => 'value'])
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-sm btn-simple btn-success">{{ __('inventory.save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
