<!-- Nomenf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NomEnf', 'Nome:') !!}
    {!! Form::text('NomEnf', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Postnomenf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PostnomEnf', 'Postnom:') !!}
    {!! Form::text('PostnomEnf', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Prenomenf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PrenomEnf', 'Prenom:') !!}
    {!! Form::text('PrenomEnf', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Sexeenf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('SexeEnf', 'Sexe:') !!}
    {!! Form::text('SexeEnf', null, ['class' => 'form-control','maxlength' => 1,'maxlength' => 1]) !!}
</div>

<!-- Lieunais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('LieuNais', 'Lieu de naissance:') !!}
    {!! Form::text('LieuNais', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Motifie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Motifie', 'Motifie:') !!}
    {!! Form::text('Motifie', null, ['class' => 'form-control','maxlength' => 151,'maxlength' => 151]) !!}
</div>

<!-- Datenais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DateNais', 'Date de naissance:') !!}
    {!! Form::text('DateNais', null, ['class' => 'form-control','id'=>'DateNais']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#DateNais').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Nomparent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomparent', 'Nom de parent:') !!}
    {!! Form::text('nomparent', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Idparent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idparent', 'Id parent:') !!}
    {!! Form::number('idparent', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistre', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('enfants.index') }}" class="btn btn-default">Annuler</a>
</div>
