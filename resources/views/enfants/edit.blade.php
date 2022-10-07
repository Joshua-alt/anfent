@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Modifier Enfant
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($enfant, ['route' => ['enfants.update', $enfant->id], 'method' => 'patch']) !!}

                        @include('enfants.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection