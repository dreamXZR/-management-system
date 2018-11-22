@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>ProblemTable / Show #{{ $problem_table->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('problem_tables.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('problem_tables.edit', $problem_table->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Name</label>
<p>
	{{ $problem_table->name }}
</p> <label>Information_id</label>
<p>
	{{ $problem_table->information_id }}
</p> <label>Sex</label>
<p>
	{{ $problem_table->sex }}
</p> <label>Call_time</label>
<p>
	{{ $problem_table->call_time }}
</p> <label>Address</label>
<p>
	{{ $problem_table->address }}
</p> <label>Phone</label>
<p>
	{{ $problem_table->phone }}
</p> <label>Call_content</label>
<p>
	{{ $problem_table->call_content }}
</p> <label>Back_content</label>
<p>
	{{ $problem_table->back_content }}
</p> <label>Other</label>
<p>
	{{ $problem_table->other }}
</p> <label>Images</label>
<p>
	{{ $problem_table->images }}
</p> <label>Main</label>
<p>
	{{ $problem_table->main }}
</p> <label>Secondary</label>
<p>
	{{ $problem_table->secondary }}
</p> <label>Join</label>
<p>
	{{ $problem_table->join }}
</p> <label>Is_finish</label>
<p>
	{{ $problem_table->is_finish }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
