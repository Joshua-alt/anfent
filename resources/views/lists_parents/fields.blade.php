<!-- Nompar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NomPar', 'Nompar:') !!}
    {!! Form::text('NomPar', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Postnompar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PostnomPar', 'Postnompar:') !!}
    {!! Form::text('PostnomPar', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>

<!-- Prenompar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PrenomPar', 'Prenompar:') !!}
    {!! Form::text('PrenomPar', null, ['class' => 'form-control','maxlength' => 15,'maxlength' => 15]) !!}
</div>

<!-- Adressepar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AdressePar', 'Adressepar:') !!}
    {!! Form::text('AdressePar', null, ['class' => 'form-control','maxlength' => 151,'maxlength' => 151]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistre', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('listsParents.index') }}" class="btn btn-default">Annuler</a>
</div>
