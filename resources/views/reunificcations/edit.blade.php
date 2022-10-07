@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
           Modifier l'enfant Reunifier
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reunificcation, ['route' => ['reunificcations.update', $reunificcation->id], 'method' => 'patch']) !!}

                        @include('reunificcations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection