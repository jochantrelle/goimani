@extends('app')

@section('content')

	<div class="row">

		<div class="col-xs-12">

		<h1>CONTACT</h1>
		
		</div>

	</div>

	<div class="row page-content">

		<ul class="col-xs-offset-2 col-xs-8" id="contacts-index">

    		<li class="col-xs-offset-2 col-xs-8">

	    		<div class="panel panel-default rgg">

	    			<div class="panel-heading">
	    				<h1 class="panel-title">BOOKING</h1>
    				</div>

	    			<div class="panel-body">
	    				<ul class="col-xs-12">
	    					<li class="col-xs-3">
	    						<img class="img-responsive thumbnail" src="{{ url('') }}">
	    					</li>
	    				</ul>
	    			</div>

	    			<div class="panel-footer">
		    			<span class="glyphicon glyphicon-envelope"></span>
	    				<span>booking@goimani.com</span>
	    			</div>

				</div>

    		</li>

    		<li class="col-xs-offset-2 col-xs-8">

	    		<div class="panel panel-default rgg">

	    			<div class="panel-heading">
	    				<h1 class="panel-title">MANAGEMENT</h1>
    				</div>

	    			<div class="panel-body">
	    				<ul class="col-xs-12">
	    					<li class="col-xs-3">
	    						<img class="img-responsive thumbnail" src="{{ url('') }}">
	    					</li>
	    				</ul>
	    			</div>

	    			<div class="panel-footer">
		    			<span class="glyphicon glyphicon-envelope"></span>
	    				<span>manager@goimani.com</span>
	    			</div>

				</div>

    		</li>

    	</ul>
	</div>

	<div class="row">

		<div class="col-xs-offset-2 col-xs-8">

			<div class="col-xs-offset-2 col-xs-8">
				@include('partials._social')
			</div>

		</div>

	</div>
	
@stop