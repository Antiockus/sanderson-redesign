@extends('layout.master')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="col-sm-10">
        <div class="row">
            <div class="col-md-12  banner">
                <span bgcolor="#004933" width="110" class="pull-left"><a href="http://www.uni-bell.org/"
                                                                         target="_blank"><img border="0"
                                                                                              src="img/MemberLOGO_UniBell.jpg"
                                                                                              width="108"
                                                                                              height="60"></a></span>
                <span style="font-size:36px;" class="center-block"><a href="http://www.watermainbreakclock.com"
                                                                      target="_blank">
                        <img src="img/wmbc.gif" alt="Watermain Break Clock gif" class="img-responsive center-block"></a></span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a href="{{ url('sanderson') }}"><img src="img/453x342.png" class="img-responsive center-block"
                                                      style="width: 500px;"
                                                      alt="sanderson
            location"></a>
                <span class="text-center">
                <p>### Enterprise West <br>
                Sanderson, Florida #####</p>

                <p>Sales: (###)###-#### / (###)###-#### <br>
                Fax: (###)###-####</p>

                   <p> Admin: (###)###-#### / Fax: (###)###-####</p>
            </span>
            </div>

            <div class="col-md-6">
                <a href="{{ url('clarksville') }}"><img src="img/453x342.png" class="img-responsive center-block"
                                                        style="width: 500px;" alt="clarksville
            location"></a>
                <span class="text-center">
                <p>### International Blvd <br>
                Clarksville, Tennessee #####</p>

                <p>Sales: (###)###-#### / (###)###-#### <br>
                Fax: (###)###-####</p>

                   <p> Admin: (###)###-#### / Fax: (###)###-####</p>
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