{!! Form::open(['route' => ['reunificcations.destroy', $reunificcation->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reunificcations.show', [$reunificcation->id]) }}" class='btn btn-default btn-xs' ><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('reunificcations.edit', [$reunificcation->id]) }}" class='btn btn-default btn-xs' title="Modifier"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="/chambredata/{{$reunificcation->id}}/edit" class='btn btn-default btn-xs' title="Modifier"><i class="glyphicon glyphicon-save"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit','title'=>'Suprimer' ,'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Voulez le vous vraiment suprimer cette information?')"]) !!}
                    </div>
{!! Form::close() !!}