@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Verifer votre Email Adresse</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">Le lien de verification est envoyé dans
                                votre email adresse
                            </div>
                        @endif
                        <p> Sinon,</p>
                        <a href="{{ route('verification.resend') }}">click ici pour Renvoyer '</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection