@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Enregistrement de Reunification
            
        </h1> 
                <div class="col=lg-12">
                     @if(!empty($reunificcation->id))
                        {!! Form::open(['route' => ['enfants.destroy', $reunificcation->id ?? ''], 'method'=>'POST']) !!}
                           {!!Form::hidden('_method','DELETE')!!}
                                        {!! Form::button('Click ici pour Suprimer cet enfant parmit les  enfants disponible', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs','id'=>'anfent', 'onclick' => "return confirm('Are you sure?')"]) !!}
                             {!!Form::close()!!}
                     
                     @endif 
                    </div>
                   
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                
                    {!! Form::model($reunificcation ?? '', ['route' => 'reunificcations.store',$reunificcation->id ?? '']) !!}

                        @include('reunificcations.fields')

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
@endsection
