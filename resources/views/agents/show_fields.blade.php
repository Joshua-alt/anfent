<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $agent->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $agent->email }}</p>
</div>

<!-- Fonction Field -->
<div class="form-group">
    {!! Form::label('fonction', 'Fonction:') !!}
    <p>{{ $agent->fonction }}</p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $agent->email_verified_at }}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $agent->password }}</p>
</div>

<!-- Two Factor Secret Field -->
<div class="form-group">
    {!! Form::label('two_factor_secret', 'Two Factor Secret:') !!}
    <p>{{ $agent->two_factor_secret }}</p>
</div>

<!-- Two Factor Recovery Codes Field -->
<div class="form-group">
    {!! Form::label('two_factor_recovery_codes', 'Two Factor Recovery Codes:') !!}
    <p>{{ $agent->two_factor_recovery_codes }}</p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $agent->remember_token }}</p>
</div>

<!-- Current Team Id Field -->
<div class="form-group">
    {!! Form::label('current_team_id', 'Current Team Id:') !!}
    <p>{{ $agent->current_team_id }}</p>
</div>

<!-- Profile Photo Path Field -->
<div class="form-group">
    {!! Form::label('profile_photo_path', 'Profile Photo Path:') !!}
    <p>{{ $agent->profile_photo_path }}</p>
</div>

