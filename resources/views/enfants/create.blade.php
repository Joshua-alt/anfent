@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Enregistrement d'Enfant
        </h1>
    </section>

        <div class="col=lg-12">
        @if(!empty($enfant->id))
            {!! Form::open(['route' => ['reunificcations.destroy', $enfant->id ?? ''], 'method'=>'POST']) !!}
                           {!!Form::hidden('_method','DELETE')!!}
                           {!! Form::button('Click ici pour Suprimer cet enfant parmit les  enfants absents', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs','id'=>'anfent', 'onclick' => "return confirm('Are you sure?')"]) !!}
            {!!Form::close()!!}
        
           @endif        
                    </div>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                {!! Form::model($enfant ?? '', ['route' => 'enfants.store',$enfant->id ?? '']) !!}

                        @include('enfants.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
