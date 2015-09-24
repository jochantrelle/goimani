@extends('app')

@section('content')

	<div class="row">

		<div class="col-xs-offset-1 col-xs-10" id="home">

			<div class="col-xs-12 col-md-3 base-transparent home-item">

				<div class="col-xs-12">
					<h1>PRESS PHOTOS</h1>
				</div>

				<div class="col-xs-12">
					<hr class="col-xs-12">
				</div>

				<ul class="col-xs-12 press-photos">

					<li class="col-xs-6">
						<a href="#">
							<img 
								class="img-responsive thumbnail" 
								src="{{ url('images/photoshoot/placeholder.gif') }}"
							>
						</a>
					</li>
					<li class="col-xs-6">
						<a href="#">
							<img 
								class="img-responsive thumbnail" 
								src="{{ url('images/photoshoot/placeholder.gif') }}"
							>
						</a>
					</li>
					<li class="col-xs-5">
						<a href="#">
							<img 
								class="img-responsive thumbnail" 
								src="{{ url('images/photoshoot/placeholder.gif') }}"
							>
						</a>
					</li>
					<li class="col-xs-7">
						<a href="#">
							<img 
								class="img-responsive thumbnail" 
								src="{{ url('images/photoshoot/placeholder.gif') }}"
							>
						</a>
					</li>

				</ul>

				<div class="controls col-xs-12">
					<button class="btn btn-primary" id="download-images"> Download Images </button>
				</div>

			</div>

			<div class="col-xs-12 col-md-offset-1 col-md-4 base-transparent home-item">

				<div class="col-xs-12">
					<h1>NEW SINGLE</h1>
				</div>

				<div class="col-xs-12">
					<hr class="col-xs-12">
				</div>

				<div class="col-xs-offset-1 col-xs-10">
					<img 
						class="img-responsive thumbnail" 
						src="{{ url('images/photoshoot/placeholder.gif') }}"
					>
				</div>
				<div class="col-xs-offset-1 col-xs-10">
					<h2>COUNTERFEIT</h2>
				</div>
				<div class="col-xs-offset-1 col-xs-10">
					<audio controls>
					  <source src="{{ url('audio/Counterfeit_Clean.mp3') }}" type="audio/mpeg">
					Your browser does not support the audio element.
					</audio>
				</div>
				<div class="col-xs-offset-1 col-xs-10">
					<p class="writers">I. Gordon/N. Johnson/T. Esmond</p>
				</div>

			</div>

			<div class="col-xs-12 col-md-offset-1 col-md-3 base-transparent home-item">
				<div class="col-xs-12">
					<h1>ONE SHEET</h1>
				</div>
				<div class="col-xs-12">
					<hr class="col-xs-12">
				</div>
				<ul class="col-xs-offset-1 col-xs-10 regular-list">
					<li>Miami's Most Loved</li>
					<li>Integral part of the club scene</li>
					<li>South Beach's 'The Fonz'</li>
					<li>Consumate performer</li>
					<li>The next BIG thing</li>
				</ul>
				<div class="col-xs-12">
					<h2>Biography Summary</h2>
				</div>
				<div class="col-xs-12">
					<p class="lead">
						Jamaican roots, Miami native.
Singer song-writer, performing Artist. The most magnetic personality you will have the pleasure of meeting /working with this year.
					</p>
				</div>
			</div>

		</div>

	</div>

@stop