<ul class="social-media-list row">

    <li class="col-xs-3 panel panel-default contacts">
        <a href="{{ url('contact') }}">
            <div class="panel-heading plain">
                <span>
                    <img src="{{ url('images/social/email_logo.png') }}" class="img-responsive img-rounded">
                </span>
            </div>
            @if(!isset($about))
            <div class="panel-body">
                <span class="centered constrain"><strong>email</strong></span>
            </div>
            <div class="panel-footer">
                <span class="caption centered constrain">communication is key</span>
            </div>
            @endif
        </a>
    </li>

    <li class="col-xs-3 panel panel-default contacts">

        <a href="{{ url('https://www.facebook.com/Rallyrallyreelivecom-715312431872620')}}" target="_blank"> 
            
            <div class="panel-heading plain">
                <span>
                    <img src="{{ url('images/social/Facebook_logo.png') }}" class="img-responsive img-rounded">
                </span>
            </div>
            @if(!isset($about))
            <div class="panel-body">
                <span class="centered constrain"><strong>facebook</strong></span>
            </div>
            <div class="panel-footer">
                <span class="caption centered constrain">let us know you like us</span>
            </div>
            @endif
        </a>

    </li>

    <li class="col-xs-3 panel panel-default contacts">
        <a href="{{ url('https://twitter.com/rallyrallyree')}}" target="_blank">
            <div class="panel-heading plain">
                <span>
                    <img src="{{ url('images/social/twitter_logo.png') }}" class="img-responsive img-rounded">
                </span>
            </div>
            @if(!isset($about))
            <div class="panel-body">    
                <span class="centered constrain"><strong>twitter</strong></span>
            </div>
            <div class="panel-footer">
                <span class="caption centered constrain">join the conversation</span>
            </div>
            @endif
        </a>
        <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>
    </li>

    <li class="col-xs-3 panel panel-default contacts">
        <a href="{{ url('https://instagram.com/rallyrallyree/')}}" target="_blank">
            <div class="panel-heading plain">
                <span>
                    <img src="{{ url('images/social/Instagram_logo.png') }}" class="img-responsive img-rounded">
                </span>
            </div>
            @if(!isset($about))
            <div class="panel-body">
                <span class="centered constrain"><strong>instagram</strong></span>
            </div>
            <div class="panel-footer">
                <span class="caption centered constrain">see what we see</span>
            </div>
            @endif
        </a>
    </li>

</ul>