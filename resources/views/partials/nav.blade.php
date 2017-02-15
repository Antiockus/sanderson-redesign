<nav class="col-sm-2 navbar" id="nav">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav nav-stacked">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('corporate') }}">Contact Us</a></li>
            <li><a href="{{ url('pdf/test-document-pdf.pdf') }}" download>Brochure</a></li>
            <li><a href="{{ url('loading-chart') }}">Loading Chart</a></li>
            <li><a href="{{ url('pdf/test-document-pdf.pdf') }}" download>PVC Pipe SDS</a></li>
            <li><a href="{{ url('pdf/test-document-pdf.pdf') }}" download>Joint
                    Deflection</a></li>
            <li><a href="{{ url('block-pricing') }}">Block Pricing</a></li>
            <li><a href="{{ url('pdf/test-document-pdf.pdf') }}" download>Credit Application</a></li>
            <li><a href="{{ url('pdf/test-document-pdf.pdf') }}" download>American Recovery & Reinvestment Act of 2009</a></li>
            <li><a href="{{ url('pdf/test-document-pdf.pdf') }}" download>C900 Assembly Instructions</a></li>
        </ul>
    </div>
</nav>