{!! Form::open(['route' => ['enfants.destroy', $enfant->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('enfants.show', [$enfant->id]) }}" class='btn btn-default btn-xs'  ><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('enfants.edit', [$enfant->id]) }}" class='btn btn-default btn-xs'  title="Modifier" ><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="/chambredata/{{$enfant->id}}/edith" class='btn btn-default btn-xs' title="Réunifier" ><i class="glyphicon glyphicon-save"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit','title'=>"Suprimer", 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez le vous vraiment suprimer cette information?')"]) !!}
                    </div>
                    {!! Form::close() !!}