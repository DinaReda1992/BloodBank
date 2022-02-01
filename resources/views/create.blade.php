<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="container">
    <div class="row pt-5 justify-content-center">
    <div class="card" style= "width:50%">
        <div class="card-header text-center">
            <h1>Add New Donner</h1>
        </div>
        <div class="card-body">
           <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="form-group row">
                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('firstName') }}</label>
                <div class="col-md-6">
                    <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>
                    @error('firstName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
                <div class="form-group row">
                    <label for="secondName" class="col-md-4 col-form-label text-md-right">{{ __('secondName') }}</label>
                    <div class="col-md-6">
                        <input id="secondName" type="text" class="form-control @error('secondName') is-invalid @enderror" name="secondName" value="{{ old('secondName') }}" required autocomplete="secondName" autofocus>
                        @error('secondName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                        <label for="thirdName" class="col-md-4 col-form-label text-md-right">{{ __('thirdName') }}</label>
                        <div class="col-md-6">
                            <input id="thirdName" type="text" class="form-control @error('thirdName') is-invalid @enderror" name="thirdName" value="{{ old('thirdName') }}" required autocomplete="thirdName" autofocus>
                            @error('thirdName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
            <div class="form-group row">
                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('lastName') }}</label>
                <div class="col-md-6">
                    <input id="lastName" type="text" class="form-control" name="lastName" value="{{ old('lastName') }}" autocomplete="lastName" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('age') }}</label>
                <div class="col-md-6">
                    <input id="age" type="numeric" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="age" autofocus>
                    @error('age')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('mobile') }}</label>
                <div class="col-md-6">
                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>
                    @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Blood Type') }}</label>
                <div class="col-md-6">
                    <select name="bloodType" id="bloodType">
                        <option value="A+" @if (old('bloodType')=='A+') selected @endif >A+</option>
                        <option value="A-" @if (old('bloodType')=='A-') selected @endif>A-</option>
                        <option value="B+" @if (old('bloodType')=='B+') selected @endif>B+</option>
                        <option value="B-" @if (old('bloodType')=='B-') selected @endif>B-</option>
                        <option value="O+" @if (old('bloodType')=='O+') selected @endif>O+</option>
                        <option value="O-" @if (old('bloodType')=='O-') selected @endif>O-</option>
                        <option value="AB+" @if (old('bloodType')=='AB+') selected @endif>AB+</option>
                        <option value="AB-" @if (old('bloodType')=='AB-') selected @endif>AB-</option>
                      </select>
                    @error('bloodType')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>
                <div class="col-md-6">
                    <select name="address" id="address">
                        <option value="inside" @if (old('address')=='inside') selected @endif>داخل القرية</option>
                        <option value="outside" @if (old('address')=='outside') selected @endif>خارج القرية</option>
                      </select>
                    {{-- <input id="address" type="text" class="form-control" value="{{ old('mobile') }}" autocomplete="mobile" autofocus> --}}
                </div>
            </div>
            <div class="form-group row">
                <label for="lastDonate" class="col-md-4 col-form-label text-md-right">{{ __('lastDonate') }}</label>
                <div class="col-md-6">
                    <input id="lastDonate" type="date" class="form-control @error('lastDonate') is-invalid @enderror" name="lastDonate" value="{{ old('lastDonate') }}" autocomplete="lastDonate" autofocus>
                    @error('lastDonate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Save') }}
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
</x-app-layout>

