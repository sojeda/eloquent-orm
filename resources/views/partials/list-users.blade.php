@foreach($users as $user)
<tr>
    <td>
        {{ $user->id }}
    </td>
    <td>
        {{ $user->name }}
    </td>
    <td>
        {{ $user->email }}
    </td>
    <td>
        {{ $user->gender }}
    </td>
    <td>
        {{ $user->biography }}
    </td>
    <td>
        {!! Form::open(['route'=>['delete', $user->id], 'method' => 'delete']) !!} 
        <button class="btn btn-danger" title="Eliminar">
            Eliminar
        </button>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
