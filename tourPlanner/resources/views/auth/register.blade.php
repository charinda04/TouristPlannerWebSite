@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                            <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>
                                    <div class="col-md-6">
                                    <select id="country" name="country" class="form-control select2" style="width: 100%;"  required>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                    </select>
                                </div>
                                </div>
                                  <script>
                                        $(function () {
                                            $("select").select2();
                                        });
                                
                                        $(document).ready(function() {
                                            $(".js-example-basic-multiple").select2();
                                        });
                                  </script>
                                  
                                


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
