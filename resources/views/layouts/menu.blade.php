
<li class="{{ Request::is('agents*') ? 'active' : '' }}">
    <a href="{{ route('agents.index') }}"><i class="fa fa-edit"></i><span>Agents</span></a>
</li>

<li class="{{ Request::is('enfants*') ? 'active' : '' }}">
    <a href="{{ route('enfants.index') }}"><i class="fa fa-edit"></i><span>Enfants</span></a>
</li>


<li class="{{ Request::is('listsParents*') ? 'active' : '' }}">
    <a href="{{ route('listsParents.index') }}"><i class="fa fa-edit"></i><span>Parents</span></a>
</li>

<li class="{{ Request::is('reunificcations*') ? 'active' : '' }}">
    <a href="{{ route('reunificcations.index') }}"><i class="fa fa-edit"></i><span>Reunifications</span></a>
</li>

