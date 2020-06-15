@extends('BackOfficeAdmin.layout.layoutAdmin')

@section('linkcss')
<!-- <style>
    /* form starting stylings ------------------------------- */
    .group {
        position: relative;
        margin-bottom: 45px;
    }

    input {
        font-size: 18px;
        padding: 10px 10px 10px 5px;
        display: block;
        width: 300px;
        border: none;
        border-bottom: 1px solid #757575;
    }

    input:focus {
        outline: none;
    }

    /* LABEL ======================================= */
    label {
        color: #999;
        font-size: 18px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 10px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    /* active state */
    input:focus~label,
    input:valid~label {
        top: -20px;
        font-size: 14px;
        color: #5264AE;
    }

    /* BOTTOM BARS ================================= */
    .bar {
        position: relative;
        display: block;
        width: 300px;
    }

    .bar:before,
    .bar:after {
        content: '';
        height: 2px;
        width: 0;
        bottom: 1px;
        position: absolute;
        background: #5264AE;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .bar:before {
        left: 50%;
    }

    .bar:after {
        right: 50%;
    }

    /* active state */
    input:focus~.bar:before,
    input:focus~.bar:after {
        width: 50%;
    }

    /* HIGHLIGHTER ================================== */
    .highlight {
        position: absolute;
        height: 60%;
        width: 100px;
        top: 25%;
        left: 0;
        pointer-events: none;
        opacity: 0.5;
    }

    /* active state */
    input:focus~.highlight {
        -webkit-animation: inputHighlighter 0.3s ease;
        -moz-animation: inputHighlighter 0.3s ease;
        animation: inputHighlighter 0.3s ease;
    }

    /* ANIMATIONS ================ */
    @-webkit-keyframes inputHighlighter {
        from {
            background: #5264AE;
        }

        to {
            width: 0;
            background: transparent;
        }
    }

    @-moz-keyframes inputHighlighter {
        from {
            background: #5264AE;
        }

        to {
            width: 0;
            background: transparent;
        }
    }

    @keyframes inputHighlighter {
        from {
            background: #5264AE;
        }

        to {
            width: 0;
            background: transparent;
        }
    }
</style> -->
<style>
    /* Design Material */
    @import url(https://fonts.googleapis.com/css?family=Roboto);

    body,
    input,
    select,
    textarea,
    body * {
        font-family: 'Roboto', sans-serif;
        box-sizing: border-box;
    }

    body::after,
    body::before,
    input::after,
    input::before,
    select::after,
    select::before,
    textarea::after,
    textarea::before,
    body *::after,
    body *::before {
        box-sizing: border-box;
    }

    /* body {
        background-image: -webkit-linear-gradient(top, #f2f2f2, #e6e6e6);
        background-image: linear-gradient(top, #f2f2f2, #e6e6e6);
    } */

    h1 {
        font-size: 2rem;
        text-align: center;
        margin: 0 0 2em;
    }

    .container {
        position: relative;
        max-width: 40rem;
        margin: 5rem auto;
        background: #fff;
        width: 100%;
        padding: 3rem 5rem 0;
        border-radius: 1px;
    }

    .container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
        -webkit-transform: scale(0.98);
        transform: scale(0.98);
        -webkit-transition: -webkit-transform 0.28s ease-in-out;
        transition: -webkit-transform 0.28s ease-in-out;
        transition: transform 0.28s ease-in-out;
        transition: transform 0.28s ease-in-out, -webkit-transform 0.28s ease-in-out;
        z-index: -1;
    }

    .container:hover::before {
        -webkit-transform: scale(1);
        transform: scale(1);
    }

    .button-container {
        text-align: center;
    }

    fieldset {
        margin: 0 0 3rem;
        padding: 0;
        border: none;
    }

    .form-radio,
    .form-group {
        position: relative;
        margin-top: 2.25rem;
        margin-bottom: 2.25rem;
    }

    .form-inline>.form-group,
    .form-inline>.btn {
        display: inline-block;
        margin-bottom: 0;
    }

    .form-help {
        margin-top: 0.125rem;
        margin-left: 0.125rem;
        color: #b3b3b3;
        font-size: 0.8rem;
    }

    .checkbox .form-help,
    .form-radio .form-help,
    .form-group .form-help {
        position: absolute;
        width: 100%;
    }

    .checkbox .form-help {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-radio .form-help {
        padding-top: 0.25rem;
        margin-top: -1rem;
    }

    .form-group input {
        height: 1.9rem;
    }

    .form-group textarea {
        resize: none;
    }

    .form-group select {
        width: 100%;
        font-size: 1rem;
        height: 1.6rem;
        padding: 0.125rem 0.125rem 0.0625rem;
        background: none;
        border: none;
        line-height: 1.6;
        box-shadow: none;
    }

    .form-group .control-label {
        position: absolute;
        top: 0.25rem;
        pointer-events: none;
        padding-left: 0.125rem;
        z-index: 1;
        color: #b3b3b3;
        font-size: 1rem;
        font-weight: normal;
        -webkit-transition: all 0.28s ease;
        transition: all 0.28s ease;
    }

    .form-group .bar {
        position: relative;
        border-bottom: 0.0625rem solid #999;
        display: block;
    }

    .form-group .bar::before {
        content: '';
        height: 0.125rem;
        width: 0;
        left: 50%;
        bottom: -0.0625rem;
        position: absolute;
        background: #337ab7;
        -webkit-transition: left 0.28s ease, width 0.28s ease;
        transition: left 0.28s ease, width 0.28s ease;
        z-index: 2;
    }

    .form-group input,
    .form-group textarea {
        display: block;
        background: none;
        padding: 0.125rem 0.125rem 0.0625rem;
        font-size: 1rem;
        border-width: 0;
        border-color: transparent;
        line-height: 1.9;
        width: 100%;
        color: transparent;
        -webkit-transition: all 0.28s ease;
        transition: all 0.28s ease;
        box-shadow: none;
    }

    .form-group input[type="file"] {
        line-height: 1;
    }

    .form-group input[type="file"]~.bar {
        display: none;
    }

    .form-group select,
    .form-group input:focus,
    .form-group input:valid,
    .form-group input.form-file,
    .form-group input.has-value,
    .form-group textarea:focus,
    .form-group textarea:valid,
    .form-group textarea.form-file,
    .form-group textarea.has-value {
        color: #333;
    }

    .form-group select~.control-label,
    .form-group input:focus~.control-label,
    .form-group input:valid~.control-label,
    .form-group input.form-file~.control-label,
    .form-group input.has-value~.control-label,
    .form-group textarea:focus~.control-label,
    .form-group textarea:valid~.control-label,
    .form-group textarea.form-file~.control-label,
    .form-group textarea.has-value~.control-label {
        font-size: 0.8rem;
        color: gray;
        top: -1rem;
        left: 0;
    }

    .form-group select:focus,
    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
    }

    .form-group select:focus~.control-label,
    .form-group input:focus~.control-label,
    .form-group textarea:focus~.control-label {
        color: #337ab7;
    }

    .form-group select:focus~.bar::before,
    .form-group input:focus~.bar::before,
    .form-group textarea:focus~.bar::before {
        width: 100%;
        left: 0;
    }

    .checkbox label,
    .form-radio label {
        position: relative;
        cursor: pointer;
        padding-left: 2rem;
        text-align: left;
        color: #333;
        display: block;
    }

    .checkbox input,
    .form-radio input {
        width: auto;
        opacity: 0.00000001;
        position: absolute;
        left: 0;
    }

    .radio {
        margin-bottom: 1rem;
    }

    .radio .helper {
        position: absolute;
        top: -0.25rem;
        left: -0.25rem;
        cursor: pointer;
        display: block;
        font-size: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        color: #999;
    }

    .radio .helper::before,
    .radio .helper::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        margin: 0.25rem;
        width: 1rem;
        height: 1rem;
        -webkit-transition: -webkit-transform 0.28s ease;
        transition: -webkit-transform 0.28s ease;
        transition: transform 0.28s ease;
        transition: transform 0.28s ease, -webkit-transform 0.28s ease;
        border-radius: 50%;
        border: 0.125rem solid currentColor;
    }

    .radio .helper::after {
        -webkit-transform: scale(0);
        transform: scale(0);
        background-color: #337ab7;
        border-color: #337ab7;
    }

    .radio label:hover .helper {
        color: #337ab7;
    }

    .radio input:checked~.helper::after {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
    }

    .radio input:checked~.helper::before {
        color: #337ab7;
    }

    .checkbox {
        margin-top: 3rem;
        margin-bottom: 1rem;
    }

    .checkbox .helper {
        color: #999;
        position: absolute;
        top: 0;
        left: 0;
        width: 1rem;
        height: 1rem;
        z-index: 0;
        border: 0.125rem solid currentColor;
        border-radius: 0.0625rem;
        -webkit-transition: border-color 0.28s ease;
        transition: border-color 0.28s ease;
    }

    .checkbox .helper::before,
    .checkbox .helper::after {
        position: absolute;
        height: 0;
        width: 0.2rem;
        background-color: #337ab7;
        display: block;
        -webkit-transform-origin: left top;
        transform-origin: left top;
        border-radius: 0.25rem;
        content: '';
        -webkit-transition: opacity 0.28s ease, height 0s linear 0.28s;
        transition: opacity 0.28s ease, height 0s linear 0.28s;
        opacity: 0;
    }

    .checkbox .helper::before {
        top: 0.65rem;
        left: 0.38rem;
        -webkit-transform: rotate(-135deg);
        transform: rotate(-135deg);
        box-shadow: 0 0 0 0.0625rem #fff;
    }

    .checkbox .helper::after {
        top: 0.3rem;
        left: 0;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .checkbox label:hover .helper {
        color: #337ab7;
    }

    .checkbox input:checked~.helper {
        color: #337ab7;
    }

    .checkbox input:checked~.helper::after,
    .checkbox input:checked~.helper::before {
        opacity: 1;
        -webkit-transition: height 0.28s ease;
        transition: height 0.28s ease;
    }

    .checkbox input:checked~.helper::after {
        height: 0.5rem;
    }

    .checkbox input:checked~.helper::before {
        height: 1.2rem;
        -webkit-transition-delay: 0.28s;
        transition-delay: 0.28s;
    }

    .radio+.radio,
    .checkbox+.checkbox {
        margin-top: 1rem;
    }

    .has-error .legend.legend,
    .has-error.form-group .control-label.control-label {
        color: #d9534f;
    }

    .has-error.form-group .form-help,
    .has-error.form-group .helper,
    .has-error.checkbox .form-help,
    .has-error.checkbox .helper,
    .has-error.radio .form-help,
    .has-error.radio .helper,
    .has-error.form-radio .form-help,
    .has-error.form-radio .helper {
        color: #d9534f;
    }

    .has-error .bar::before {
        background: #d9534f;
        left: 0;
        width: 100%;
    }

    .button {
        position: relative;
        background: currentColor;
        border: 1px solid currentColor;
        font-size: 1.1rem;
        color: #4f93ce;
        margin: 3rem 0;
        padding: 0.75rem 3rem;
        cursor: pointer;
        -webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
        transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
        overflow: hidden;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
    }

    .button span {
        color: #fff;
        position: relative;
        z-index: 1;
    }

    .button::before {
        content: '';
        position: absolute;
        background: #071017;
        border: 50vh solid #1d4567;
        width: 30vh;
        height: 30vh;
        border-radius: 50%;
        display: block;
        top: 50%;
        left: 50%;
        z-index: 0;
        opacity: 1;
        -webkit-transform: translate(-50%, -50%) scale(0);
        transform: translate(-50%, -50%) scale(0);
    }

    .button:hover {
        color: #337ab7;
        box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
    }

    .button:active::before,
    .button:focus::before {
        -webkit-transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
        transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
        transition: transform 1.12s ease, opacity 0.28s ease 0.364s;
        transition: transform 1.12s ease, opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
        -webkit-transform: translate(-50%, -50%) scale(1);
        transform: translate(-50%, -50%) scale(1);
        opacity: 0;
    }

    .button:focus {
        outline: none;
    }

    /* input type file */
    label {
        cursor: pointer;
    }

    #upload-photo,
    #inpFile {
        opacity: 0;
        position: absolute;
        z-index: -1;
    }

    .image-preview {
        width: 300px;
        min-height: 100px;
        border: 2px solid #dddddd;
        margin-top: 15px;

        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #cccccc;
    }

    .image-preview__image {
        /* display: none; */
        width: 100%;
    }
</style>
@endsection


@section('body')

<div id="content" class="p-4 p-md-5 pt-5">
    <!-- <form class="needs-validation" novalidate>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Last name</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                <div class="invalid-feedback">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
    </form> -->
    <!-- <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script> -->

    <div class="">
        <form>
            <h1>Ajout d'un nouveau produit.</h1>
            <br>
            <h3>Informations de base.</h3>
            <div class="row">
                <div class="form-group col" style="padding-left: 0px">
                    <input type="text" required="required" />
                    <label for="input" class="control-label">Libellé du produit</label><i class="bar"></i>
                </div>
                <div class="form-group col" style="padding-left: 0px">
                    <select>
                        <option>Mora</option>
                        <option>Pelee 2</option>
                    </select>
                    <label for="select" class="control-label">Marque</label><i class="bar"></i>
                </div>
                <div class="form-group col" style="padding-left: 0px">
                    <select>

                    </select>
                    <label for="select" class="control-label">Type</label><i class="bar"></i>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm" style="padding-left: 0px">
                    <input type="number" required="required" />
                    <label for="input" class="control-label">Quantité en stock</label><i class="bar"></i>
                </div>
                <div class="form-group col-sm" style="padding-left: 0px">
                    <input type="number" required="required" />
                    <label for="input" class="control-label">Seuil min </label><i class="bar"></i>
                </div>
                <div class="form-group col-sm" style="padding-left: 0px">
                    <input type="number" required="required" />
                    <label for="input" class="control-label">Seuil max </label><i class="bar"></i>
                </div>
                <div class="form-group col-sm">
                    <input type="color" required="required" />
                    <label for="input" class="control-label">Couleurs disponibles</label><i class="bar"></i>
                </div>
            </div>
            <hr>
            <h3>Photos (Maximum 5).</h3>
            <div class="row">
                <div class="col-sm" id="prvImage" style="background-size: 100% 100%;margin: 0px 10px;height: 200px;width: 200px;background-color: lightgray;border-radius: 20px;">

                    <div id="toolsImage1" style="visibility: hidden;">
                        <div style="cursor: pointer;margin-left: 93%;margin-top: -3%;color: white;background: red;width: 24px;height: 24px;border-radius: 50px;text-align: center;">
                            <i class="far fa-trash-alt" style="color: white;"></i>
                        </div>
                        <div style="cursor: pointer;margin-left: 93%;margin-top: 3%;color: white;background: dodgerblue ;width: 24px;height: 24px;border-radius: 50px;text-align: center;">
                            <i class="fas fa-pen" style="color: white;"></i>
                        </div>
                    </div>

                    <div id="toolInput1" >
                        <label for="inpFile">
                            <img src="{{ url('img/imageProduit.png') }}" style="height: 120px;margin-left: 30%;">
                        </label>
                        <input type="file" name="inpFile" id="inpFile" />
                    </div>
                </div>

                <div class="col-sm" style="margin: 0px 10px;height: 200px;width: 200px;background-color: lightgray;border-radius: 20px;">
                    <div style="margin-left: 93%;margin-top: -3%;color: white;background: red;width: 24px;height: 24px;border-radius: 50px;text-align: center;">
                        <i class="far fa-trash-alt" style="color: white;"></i>
                    </div>
                </div>
                <div class="col-sm" style="margin: 0px 10px;height: 200px;width: 200px;background-color: lightgray;border-radius: 20px;">
                    <div style="margin-left: 93%;margin-top: -3%;color: white;background: red;width: 24px;height: 24px;border-radius: 50px;text-align: center;">
                        <i class="far fa-trash-alt" style="color: white;"></i>
                    </div>
                </div>
                <div class="col-sm" style="margin: 0px 10px;height: 200px;width: 200px;background-color: lightgray;border-radius: 20px;">
                    <div style="margin-left: 93%;margin-top: -3%;color: white;background: red;width: 24px;height: 24px;border-radius: 50px;text-align: center;">
                        <i class="far fa-trash-alt" style="color: white;"></i>
                    </div>

                </div>
                <div class="col-sm" style="margin: 0px 10px;height: 200px;width: 200px;background-color: lightgray;border-radius: 20px;">
                    <div style="margin-left: 93%;margin-top: -3%;color: white;background: red;width: 24px;height: 24px;border-radius: 50px;text-align: center;">
                        <i class="far fa-trash-alt" style="color: white;"></i>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <textarea required="required"></textarea>
                    <label for="textarea" class="control-label">Textarea</label><i class="bar"></i>
                </div>  -->
                <!-- <div class="checkbox">
                <label>
                    <input type="checkbox" /><i class="helper"></i>I'm the label from a checkbox
                </label>
            </div> -->
                <!-- <div class="form-radio">
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" checked="checked" /><i class="helper"></i>I'm the label from a radio button
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="radio" /><i class="helper"></i>I'm the label from a radio button
                    </label>
                </div>
            </div> -->
        </form>
    </div>
    <div class="button-container">
        <button type="button" class="button"><span>Submit</span></button>
    </div>
</div>
@endsection
@section('scripts')

<script src="{{ url('js/scriptInputFile.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#homeSubmenu').removeClass();
        $('#homeSubmenu').addClass('list-unstyled collapse show');
        $('#linkNouveauProd').addClass('activeLink');
    });
</script>
@endsection