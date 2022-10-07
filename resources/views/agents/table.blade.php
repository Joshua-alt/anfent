<div class="table-responsive">
    <table class="table" id="agents-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Email</th>
        <th>Fonction</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Two Factor Secret</th>
        <th>Two Factor Recovery Codes</th>
        <th>Remember Token</th>
        <th>Current Team Id</th>
        <th>Profile Photo Path</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agents as $agent)
            <tr>
                <td>{{ $agent->name }}</td>
            <td>{{ $agent->email }}</td>
            <td>{{ $agent->fonction }}</td>
            <td>{{ $agent->email_verified_at }}</td>
            <td>{{ $agent->password }}</td>
            <td>{{ $agent->two_factor_secret }}</td>
            <td>{{ $agent->two_factor_recovery_codes }}</td>
            <td>{{ $agent->remember_token }}</td>
            <td>{{ $agent->current_team_id }}</td>
            <td>{{ $agent->profile_photo_path }}</td>
                <td>
                    {!! Form::open(['route' => ['agents.destroy', $agent->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agents.show', [$agent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('agents.edit', [$agent->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
