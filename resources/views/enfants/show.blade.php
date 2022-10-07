@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Enfant
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    <div id="imprimer">
                    @include('enfants.show_fields')
                    </div>

                    <a href="{{ route('enfants.index') }}" class="btn btn-default">Retour</a>
                    <a href="" onclick="impression()" class="btn btn-default " id="noshow">Imprimer</a>
                
                </div>
            </div>
        </div>
    </div>
@endsection
