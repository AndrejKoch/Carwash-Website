@extends('layouts.dashboard')
@section('content')

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    <form action="{{ url('/settings', [$settings->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Tittle</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                               name="title" value="{{ $settings->title }}">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">

                        <div class="file_input_div">
                            <div class="file_input">
                                <label
                                    class="image_input_button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored">
                                    Upload Logo
                                    <i class="material-icons">file_upload</i>
                                    <input id="file_input_file" class="none" type="file" name="image"/>
                                </label>
                            </div>
                            <div id="file_input_text_div"
                                 class="mdl-textfield mdl-js-textfield textfield-demo">
                                <input class="file_input_text mdl-textfield__input" type="text" disabled
                                       readonly
                                       id="file_input_text"/>
                                <label class="mdl-textfield__label" for="file_input_text"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Main URL</label>
                        <input type="text" class="form-control @error('mainurl') is-invalid @enderror"
                               name="mainurl" value="{{ $settings->mainurl }}">
                        @error('mainurl')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mainurl') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">E-mail</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ $settings->email }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Link</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror"
                               name="link" value="{{ $settings->link }}">
                        @error('link')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('link') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Address</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                               name="address" value="{{ $settings->address }}">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                               name="phone" value="{{ $settings->phone }}">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Mobile phone</label>
                        <input type="text"
                               class="form-control @error('mobilephone') is-invalid @enderror"
                               name="mobilephone" value="{{ $settings->mobilephone }}">
                        @error('mobilephone')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mobilephone') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content tittle 1</label>
                        <input type="text" class="form-control @error('ctitle1') is-invalid @enderror"
                               name="ctitle1" value="{{ $settings->ctitle1 }}">
                        @error('ctitle1')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ctitle1') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content alternative title 1</label>
                        <input type="text"
                               class="form-control @error('calttitle1') is-invalid @enderror"
                               name="calttitle1" value="{{ $settings->calttitle1 }}">
                        @error('calttitle1')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('calttitle1') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content tittle 2</label>
                        <input type="text" class="form-control @error('ctitle2') is-invalid @enderror"
                               name="ctitle2" value="{{ $settings->ctitle2 }}">
                        @error('ctitle2')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ctitle2') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content alternative title 2</label>
                        <input type="text"
                               class="form-control @error('calttitle2') is-invalid @enderror"
                               name="calttitle2" value="{{ $settings->calttitle2 }}">
                        @error('calttitle2')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('calttitle2') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content tittle 3</label>
                        <input type="text" class="form-control @error('ctitle3') is-invalid @enderror"
                               name="ctitle3" value="{{ $settings->ctitle3 }}">
                        @error('ctitle3')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ctitle3') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content alternative title 3</label>
                        <input type="text"
                               class="form-control @error('calttitle3') is-invalid @enderror"
                               name="calttitle3" value="{{ $settings->calttitle3 }}">
                        @error('calttitle3')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('calttitle3') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content tittle 4</label>
                        <input type="text" class="form-control @error('ctitle4') is-invalid @enderror"
                               name="ctitle4" value="{{ $settings->ctitle4 }}">
                        @error('ctitle4')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ctitle4') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content alternative title 4</label>
                        <input type="text"
                               class="form-control @error('calttitle4') is-invalid @enderror"
                               name="calttitle4" value="{{ $settings->calttitle4 }}">
                        @error('calttitle4')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('calttitle4') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content tittle 5</label>
                        <input type="text" class="form-control @error('ctitle5') is-invalid @enderror"
                               name="ctitle5" value="{{ $settings->ctitle5 }}">
                        @error('ctitle5')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ctitle5') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content alternative title 5</label>
                        <input type="text"
                               class="form-control @error('calttitle5') is-invalid @enderror"
                               name="calttitle5" value="{{ $settings->calttitle5 }}">
                        @error('calttitle5')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('calttitle5') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content tittle 6</label>
                        <input type="text" class="form-control @error('ctitle6') is-invalid @enderror"
                               name="ctitle6" value="{{ $settings->ctitle6 }}">
                        @error('ctitle6')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('ctitle6') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Content alternative title 6</label>
                        <input type="text"
                               class="form-control @error('calttitle6') is-invalid @enderror"
                               name="calttitle6" value="{{ $settings->calttitle6 }}">
                        @error('calttitle6')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('calttitle6') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Facebook</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                               name="facebook" value="{{ $settings->facebook }}">
                        @error('facebook')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('facebook') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Longitude</label>
                        <input type="text" class="form-control @error('lng') is-invalid @enderror"
                               name="lng" value="{{ $settings->lng }}">
                        @error('lng')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lng') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group bmd-form-group">
                        <label class="bmd-label-floating">Latitude</label>
                        <input type="text" class="form-control @error('lat') is-invalid @enderror"
                               name="lat" value="{{ $settings->lat }}">
                        @error('lat')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lat') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>


            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group bmd-form-group">

                            <textarea type="text" class="form-control @error('description') is-invalid @enderror"
                                      name="description" id="description">{{ $settings->description }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update settings</button>
        </div>
        </div>
    </form>


@endsection


@section('scripts')
    <script>

        var fileInputTextDiv = document.getElementById('file_input_text_div');
        var fileInput = document.getElementById('file_input_file');
        var fileInputText = document.getElementById('file_input_text');

        fileInput.addEventListener('change', changeInputText);
        fileInput.addEventListener('change', changeState);

        function changeInputText() {
            var str = fileInput.value;
            var i;
            if (str.lastIndexOf('\\')) {
                i = str.lastIndexOf('\\') + 1;
            } else if (str.lastIndexOf('/')) {
                i = str.lastIndexOf('/') + 1;
            }
            fileInputText.value = str.slice(i, str.length);
        }

        function changeState() {
            if (fileInputText.value.length != 0) {
                if (!fileInputTextDiv.classList.contains("is-focused")) {
                    fileInputTextDiv.classList.add('is-focused');
                }
            } else {
                if (fileInputTextDiv.classList.contains("is-focused")) {
                    fileInputTextDiv.classList.remove('is-focused');
                }
            }
        }
    </script>

    <script>
        CKEDITOR.replace('description');

        var fileInputTextDiv = document.getElementById('file_input_text_div');
        var fileInput = document.getElementById('file_input_file');
        var fileInputText = document.getElementById('file_input_text');

        fileInput.addEventListener('change', changeInputText);
        fileInput.addEventListener('change', changeState);

        function changeInputText() {
            var str = fileInput.value;
            var i;
            if (str.lastIndexOf('\\')) {
                i = str.lastIndexOf('\\') + 1;
            } else if (str.lastIndexOf('/')) {
                i = str.lastIndexOf('/') + 1;
            }
            fileInputText.value = str.slice(i, str.length);
        }

        function changeState() {
            if (fileInputText.value.length != 0) {
                if (!fileInputTextDiv.classList.contains("is-focused")) {
                    fileInputTextDiv.classList.add('is-focused');
                }
            } else {
                if (fileInputTextDiv.classList.contains("is-focused")) {
                    fileInputTextDiv.classList.remove('is-focused');
                }
            }
        }
    </script>
@endsection
