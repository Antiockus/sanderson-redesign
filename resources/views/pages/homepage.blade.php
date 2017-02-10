@extends('layout.master')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="col-md-10">
        <div class="row">
            <div class="col-md-12  banner">
                <span bgcolor="#004933" width="110" class="pull-left"><a href="http://www.uni-bell.org/" target="_blank"><img border="0" src="img/MemberLOGO_UniBell.jpg" width="108" height="60"></a></span>
                <span style="font-size:36px;" class="center-block"><a href="http://www.watermainbreakclock.com">
                        <img src="img/wmbc.gif" alt="Watermain Break Clock gif"></a></span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('sanderson') }}"><img src="img/01-Jan.jpg" class="img-responsive" alt="sanderson
            location"></a>
                <span class="text-center">
                <p>One Enterprise West <br>
                Sanderson, Florida 32087</p>

                <p>Sales: (904)275-3289 / (800)669-3553 <br>
                Fax: (904)275-3247</p>

                   <p> Admin: (904)275-2833 / Fax: (904)275-3054</p>
            </span>
            </div>

            <div class="col-md-6">
                <a href="{{ url('clarksville') }}"><img src="img/112.jpg" class="img-responsive" alt="clarksville
            location"></a>
                <span class="text-center">
                <p>875 International Blvd <br>
                Clarksville, Tennessee 37040</p>

                <p>Sales: (904)275-3289 / (800)669-3553 <br>
                Fax: (904)275-3247</p>

                   <p> Admin: (931)221-4800 / Fax: (931)221-4830</p>
            </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">
                    <a href="{{ url('corporate') }}">Corporate Division</a>
                </p>
            </div>
        </div>
    </div>
@endsection