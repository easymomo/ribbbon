{{-- UPLOAD FILES FORM --}}
<div><strong>Upload files</strong></div><br>
<div>
	<div class="dynamic-form">
		{{ Form::open(array('action' => 'FilesController@store', 'method' => 'post', 'files' => true)) }}
			<input class="form-control" type="text" name="name" placeholder="File Name">
     		<input type="hidden" name="project_id" value="{{ $project->id }}">
     		<br>
     		<div class="col-xs-4 no-padding-left">
                <div class="fileUpload btn btn-primary btn-wide">
                    <span>Choose file</span>
                    <input type="file" name="file" class="upload" />
                </div>
     		</div>
     		<div class="col-xs-8 no-padding-right">
         		<button type="submit" class="btn btn-default btn-wide">
	                 <i class="fa fa-cloud-upload fa-lg"></i> Upload File
	            </button>
     		</div>
     		<div class="clearfix"></div>
		{{ Form::close() }}
	</div>
</div>
{{-- UPLOAD FILES FORM --}}
<hr>
{{-- FILE LISTINGS --}}
<div><strong>Download files</strong></div><br>
<div>
    <ul class="list-group">
        @foreach( $project->uploads as $upload)
            <li class="list-group-item">
                <p class="pull-left">
                    {{ $upload->name }}<br>
                    <span class="dimmed no-margin-left">
                        <i class="fa fa-clock-o"></i> uploaded on {{ $upload->updated_at->toFormattedDateString() }}
                    </span>
                </p>
                <div class="pull-right">
                    <a href="{{ URL::to('/') }}/{{ $upload->path }}" class="btn btn-standout" target="_blank">
                        <i class="fa fa-cloud-download"></i>
                    </a>
                </div>
                <div class="clearfix"></div>
            </li>
        @endforeach
    </ul>
</div>
{{-- FILE LISTINGS --}}
