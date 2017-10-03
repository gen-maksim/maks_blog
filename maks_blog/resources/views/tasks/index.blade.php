<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <hea
    </head>
    <body>
    @foreach ($tasks as $task)
    	<li>
    		<a href="/tasks/{{ $task->id}}">
    		{{ $task->body }}
    		</a>
    	</li>
    @endforeach
    </body>
</html>
