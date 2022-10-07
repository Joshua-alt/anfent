@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Modifier Parent
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($listsParents, ['route' => ['listsParents.update', $listsParents->id], 'method' => 'patch']) !!}

                        @include('lists_parents.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection