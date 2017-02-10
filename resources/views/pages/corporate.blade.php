@extends('layout.master')

@section('title')
    Corporate Division
@endsection

@section('styles')
    <style>

        .card         { border-left-style: none;  border-right-style: none;  border-top-style: none;  border-bottom-style: none;
            border-left-width: 0px;   border-right-width: 0px;   border-top-width: 0px;   border-bottom-width: 0px;

            background-color: #FFFFFF; align:center; vertical-align:top }

        .cardl        { border-left-style: solid; border-right-style: none;  border-top-style: solid; border-bottom-style: solid;
            border-left-width: 1px;   border-right-width: 0px;   border-top-width: 1px;   border-bottom-width: 1px;

            background-color: #FFFFFF; align:center; vertical-align:top }

        .cellnone     { border-left-style: none;  border-right-style: none;  border-top-style: none;  border-bottom-style: none;
            border-left-width: 0px;   border-right-width: 0px;   border-top-width: 0px;   border-bottom-width: 0px; }

        .celltop      { border-left-style: none;  border-right-style: none;  border-top-style: solid; border-bottom-style: none;
            border-left-width: 0px;   border-right-width: 0px;   border-top-width: 1px;   border-bottom-width: 0px; }

        .cellrighttop { border-left-style: none;  border-right-style: solid; border-top-style: solid; border-bottom-style: none;
            border-left-width: 0px;   border-right-width: 1px;   border-top-width: 1px;   border-bottom-width: 0px; }

        .cellright    { border-left-style: none;  border-right-style: solid; border-top-style: none;  border-bottom-style: none;
            border-left-width: 0px;   border-right-width: 1px;   border-top-width: 0px;   border-bottom-width: 0px; }

        .cellinfo     { border-left-style: solid; border-right-style: solid; border-top-style: solid; border-bottom-style: solid;
            border-left-width: 1px;   border-right-width: 1px;   border-top-width: 1px;   border-bottom-width: 1px;
            font-family: Verdana; font-size: 9pt; color: #006600; text-align: center; font-weight: bold;
            background-color: #FFFFFF;
            vertical-align: middle;}


    </style>
@endsection


@section('content')
    <table cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border-width: 0;" border="1" bordercolor="#111111">

        <tr>

            <td height="125" colspan="10" rowspan="2" class="cellnone">&nbsp;</td>

            <td height="100" colspan="4" align="center" >
                <a href="mailto:eric-h@sandersonpipe.com?subject=Website"><img border="0" src="img/Corporate/Howard_Eric.jpg" width="100" height="100"></a>
            </td>

            <td height="125" colspan="10" rowspan="2" class="cellnone">&nbsp;</td>

        </tr>

        <tr>

            <td height="25" colspan="4" align="center" class="cellinfo">Eric Howard<br>
                <span style="font-size:7pt; font-weight:normal; ">President<br><a href="mailto:eric-h@sandersonpipe.com?subject=Website">e-mail</a></span>
            </td>

        </tr>

    <!--   <tr>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellright" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td height="100" colspan="4" align="center" >
     <a href="mailto:fstraina@sandersonpipe.com?subject=Website"><img border="0" src="images/03Frank.jpg" width="100" height="100"></a>
    </td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

    <td width="25" height="100" class="cellnone" >&nbsp;</td>

   </tr>

   <tr>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellright" >&nbsp;</td>

    <td width="25" height="25" class="celltop" >&nbsp;</td>

    <td width="25" height="25" class="celltop" >&nbsp;</td>

    <td width="25" height="25" class="celltop" >&nbsp;</td>

    <td width="25" height="25" class="celltop" >&nbsp;</td>

    <td height="25" colspan="4" align="center" class="cellinfo">Frank Traina<br>
     <span style="font-size:7pt; font-weight:normal; ">Executive VP<br><a href="mailto:fstraina@sandersonpipe.com?subject=Website">e-mail</a></span>
    </td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

    <td width="25" height="25" class="cellnone" >&nbsp;</td>

   </tr>

-->
        <tr>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellright" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

        </tr>

        <tr>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellright" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="cellrighttop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="celltop" >&nbsp;</td>

            <td width="25" height="25" class="cellrighttop" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

        </tr>

        <tr>

            <td height="125" colspan="4" rowspan="2" class="cellnone" >&nbsp;</td>

            <td height="100" colspan="4" align="center"><a href="mailto:ben-f@sandersonpipe.com?subject=Website"><img border="0" src="img/Corporate/bfreeman.gif" width="100" height="100"></a></a>
            </td>

            <td height="125" colspan="2" rowspan="2" class="cellnone">&nbsp;</td>

            <td height="100" colspan="4" align="center" >
                <a href="mailto:robin-b@sandersonpipe.com?subject=Website"><img border="0" src="img/Corporate/Byrd_Robin.jpg" width="100" height="100"></a>
            </td>

            <td height="125" colspan="2" rowspan="2" class="cellnone" >&nbsp;</td>

            <td height="100" colspan="4" align="center" >
                <a href="mailto:michelle-p@sandersonpipe.com?subject=Website"><img border="0" src="img/Corporate/5032.jpg" width="100" height="100"></a>
            </td>

            <td height="125" colspan="4" rowspan="2" class="cellnone" >&nbsp;</td>

        </tr>

        <tr>

            <td height="25" colspan="4" align="center" class="cellinfo">Ben Freeman<br>
                <span style="font-weight: 400; font-size: 7pt">VP of Sales<br><a href="mailto:ben-f@sandersonpipe.com?subject=Website">e-mail</a></span>
            </td>

            <td height="25" colspan="4" align="center" class="cellinfo">Robin Byrd<br>
                <span style="font-size:7pt; font-weight:normal; ">VP of Production<br><a href="mailto:robin-b@sandersonpipe.com?subject=Website">e-mail</a></span>
            </td>

            <td height="25" colspan="4" align="center" class="cellinfo">Michelle<br>Poindexter<br>
                <span style="font-size:7pt; font-weight:normal; ">Controller<br><a href="mailto:michelle-p@sandersonpipe.com?subject=Website">e-mail</a></span>
            </td>

        </tr>

        <tr>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellright" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellright" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellright" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

            <td width="25" height="25" class="cellnone" >&nbsp;</td>

        </tr>

        <tr>

            <td height="125" colspan="4" rowspan="2" class="cellnone" >&nbsp;</td>

            <td height="100" colspan="4" align="center"><a href="mailto:crystal-w@sandersonpipe.com?subject=Website"><img border="0" src="img/Corporate/Wilkerson_Crystal.gif" width="100" height="100"></a></a>
            </td>


            <td height="125" colspan="2" rowspan="2" class="cellnone" >&nbsp;</td>

            <td height="100" colspan="4" align="center" >
                <a href="mailto:james-l@sandersonpipe.com?subject=Website"><img border="0" src="img/Corporate/Lawerance-James.gif" width="100" height="100"></a>
            </td>

            <td height="125" colspan="2" rowspan="2" class="cellnone" >&nbsp;</td>

            <td height="100" colspan="4" align="center" >
                <a href="mailto:glenn-l@sandersonpipe.com?subject=Website"><img border="0" src="img/Corporate/Lilly_Glenn.gif" width="100" height="100"></a>
            </td>

            <td height="125" rowspan="4" class="cellnone" >&nbsp;</td>

        </tr>

        <tr>

            <td height="25" colspan="4" align="center" class="cellinfo">Crystal<br>Wilkerson<br>
                <span style="font-weight: 400; font-size: 7pt">Sales Mgr.<br><a href="mailto:crystal-w@sandersonpipe.com?subject=Website">e-mail</a></span>
            </td>

            <td height="25" colspan="4" align="center" class="cellinfo">James<br>Lawrence<br>
                <span style="font-weight: 400; font-size: 7pt">Corporate Safety<br>/ Environmental<br>Coordinator<br><a href="mailto:james-l@sandersonpipe.com?subject=Website">e-mail</a></span>
            </td>

            <td height="25" colspan="4" align="center" class="cellinfo">Glenn Lilly<br>
                <span style="font-size:7pt; font-weight:normal; ">I.T. Manager<br><a href="mailto:glenn-l@sandersonpipe.com?subject=Website">e-mail</a></span>
            </td>

        </tr>

    </table>
@endsection