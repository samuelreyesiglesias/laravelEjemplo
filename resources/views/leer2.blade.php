Id Ejemplo get: {{$id}}
<br>
<table class='table'>
    <tr>
        <td>
            Task
        </td>
        <td>
            Responsable
        </td>
    </tr>
@foreach($test as $t)


    <tr>
        <td>
             {{$t->tarea}}
        </td>
        <td>
            {{$t->nombre}} 
        </td>
    </tr>

@endforeach

</table>

 