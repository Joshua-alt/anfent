{!! Form::open(['route' => ['listsParents.destroy', $listsParents->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('listsParents.show', [$listsParents->id]) }}" class='btn btn-default btn-xs' ><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('listsParents.edit', [$listsParents->id]) }}" title="Modifier" class='btn btn-default btn-xs' title="Modifier"><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs','title'=>'Suprimer', 'onclick' => "return confirm('Voulez le vous vraiment suprimer cette information?')"]) !!}
                    </div>
                    {!! Form::close() !!}