@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Reunification
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                <div id="imprimer">
                  @include('reunificcations.show_fields')
                </div>
                    <a href="{{ route('reunificcations.index') }}" class="btn btn-default">Back</a>

                    <a href="" onclick="impression()" class="btn btn-default " id="noshow">Print</a>
 
                </div>
            </div>
        </div>
    </div>
@endsection
