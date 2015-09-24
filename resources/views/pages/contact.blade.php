@extends('app')

@section('content')
	<!-- Header -->
	<div class="row">

		<div class="col-xs-12 page-header">

		<h1>CONTACT</h1>
		
		</div>

	</div>
	<!-- Jumbotron -->
	<div class="jumbotron">

	  <div class="container-fluid">

		<div class="centered">

		    <h1>Ready when you're ready!</h1>

		    <p>Available for event booking, as well as song collaborations.</p>

	    </div>

	  </div>

	</div>
	<!-- Contact List -->
	<div class="row page-content">

		<ul class="col-xs-offset-1 col-xs-10" id="contact-index">

    		<li class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4 col-md-offset-0 col-md-4 quick-contact">
	    		<a href="#">
		    		<div class="panel panel-default base-gradient">
	
		    			<div class="panel-heading">
	    					<h1 class="panel-title constrain">
	    						<span class="glyphicon glyphicon-calendar"></span>
		    					BOOKING
	    					</h1>
	    				</div>
	
		    			<div class="panel-body">
		    				<ul class="col-xs-12 contact-icon">
		    					<li class="col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6">
		    						<img class="img-responsive" src="{{ url('images/icons/artists.png') }}">
		    					</li>
		    				</ul>
		    			</div>
	
		    			<div class="panel-footer">
			    			<span class="glyphicon glyphicon-envelope"></span>
		    				<span class="constrain">booking@goimani.com</span>
		    			</div>
	
					</div>
    			</a>
    		</li>

    		<li class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4 col-md-offset-0 col-md-4 quick-contact">
    			<a href="#">
		    		<div class="panel panel-default base-gradient">

		    			<div class="panel-heading">
		    				<h1 class="panel-title constrain">
		    					<span class="glyphicon glyphicon-user"></span>
		    					MANAGEMENT
	    					</h1>
	    				</div>

		    			<div class="panel-body">
		    				<ul class="col-xs-12 contact-icon">
		    					<li class="col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6">
		    						<img class="img-responsive centered" src="{{ url('images/icons/cems_logo.png') }}">
		    					</li>
		    				</ul>
		    			</div>

		    			<div class="panel-footer">
			    			<span class="glyphicon glyphicon-envelope"></span>
		    				<span class="constrain">manager@goimani.com</span>
		    			</div>

					</div>
				</a>
    		</li>

    		<li class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-sm-4 col-md-offset-0 col-md-4 quick-contact">
    			<a href="#">
		    		<div class="panel panel-default base-gradient">

		    			<div class="panel-heading">
		    				<h1 class="panel-title constrain">
		    					<span class="glyphicon glyphicon-user"></span>
		    					FAN CLUB
	    					</h1>
	    				</div>

		    			<div class="panel-body">
		    				<ul class="col-xs-12 contact-icon">
		    					<li class="col-xs-offset-1 col-xs-10 col-lg-offset-3 col-lg-6">
		    						<img class="img-responsive" src="{{ url('images/icons/labels.png') }}">
		    					</li>
		    				</ul>
		    			</div>

		    			<div class="panel-footer">
			    			<span class="glyphicon glyphicon-envelope"></span>
		    				<span class="constrain">fanclub@goimani.com</span>
		    			</div>

					</div>
				</a>
				<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>
    		</li>

    	</ul>
	</div>
	<!-- Social Media Links -->
	<div class="row">

		<div class="col-xs-offset-2 col-xs-8">

			@include('partials._social')

		</div>

	</div>
@stop