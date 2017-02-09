@extends('layout.master')

@section('title')
    Sanderson Division
@endsection


@section('styles')
    <style>

        .card {
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            border-bottom-style: none;
            border-left-width: 0px;
            border-right-width: 0px;
            border-top-width: 0px;
            border-bottom-width: 0px;

            background-color: #FFFFFF;
            align: center;
            vertical-align: top
        }

        .cardl {
            border-left-style: solid;
            border-right-style: none;
            border-top-style: solid;
            border-bottom-style: solid;
            border-left-width: 1px;
            border-right-width: 0px;
            border-top-width: 1px;
            border-bottom-width: 1px;

            background-color: #FFFFFF;
            align: center;
            vertical-align: top
        }

        .cellnone {
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            border-bottom-style: none;
            border-left-width: 0px;
            border-right-width: 0px;
            border-top-width: 0px;
            border-bottom-width: 0px;
        }

        .celltop {
            border-left-style: none;
            border-right-style: none;
            border-top-style: solid;
            border-bottom-style: none;
            border-left-width: 0px;
            border-right-width: 0px;
            border-top-width: 1px;
            border-bottom-width: 0px;
        }

        .cellrighttop {
            border-left-style: none;
            border-right-style: solid;
            border-top-style: solid;
            border-bottom-style: none;
            border-left-width: 0px;
            border-right-width: 1px;
            border-top-width: 1px;
            border-bottom-width: 0px;
        }

        .cellright {
            border-left-style: none;
            border-right-style: solid;
            border-top-style: none;
            border-bottom-style: none;
            border-left-width: 0px;
            border-right-width: 1px;
            border-top-width: 0px;
            border-bottom-width: 0px;
        }

        .cellinfo {
            border-left-style: solid;
            border-right-style: solid;
            border-top-style: solid;
            border-bottom-style: solid;
            border-left-width: 1px;
            border-right-width: 1px;
            border-top-width: 1px;
            border-bottom-width: 1px;
            font-family: Verdana;
            font-size: 9pt;
            color: #006600;
            text-align: center;
            font-weight: bold;
            background-color: #FFFFFF;
            vertical-align: middle;
        }

    </style>
@endsection

@section('content')
    <div class="col-md-10">
        <p class="text-center">Sanderson Division</p>
        <table cellpadding="0" cellspacing="0" width="750" style="border-collapse: collapse; border-width: 0;"
               border="1" bordercolor="#111111">

            <tr>

                <td height="125" colspan="10" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="100" colspan="4" align="center">
                    <a href="mailto:steve-s@sandersonpipe.com?subject=Website"><img border="0" src="img/Sanderson Division/shumate.jpg"
                                                                                    width="100" height="100"></a>
                </td>

                <td height="125" colspan="11" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="100" colspan="4" align="center">
                    <a href="mailto:darla@sandersonpipe.com?subject=Website"><img border="0" src="img/Sanderson Division/03darla4.jpg"
                                                                                  width="100" height="100"></a>
                </td>

                <td height="125" rowspan="2" class="cellnone">&nbsp;</td>

            </tr>

            <tr>

                <td height="25" colspan="4" align="center" class="cellinfo">Steve<br>Shumate<br>
                    <span style="font-size:7pt; font-weight:normal; ">Plant Mgr.<br><a
                                href="mailto:steve-s@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>

                <td height="25" colspan="4" align="center" class="cellinfo">Darla Fogarty<br>
                    <span style="font-size:7pt; font-weight:normal;">Human Resources<br>Mgr.<br><a
                                href="mailto:darla@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>

            </tr>

            <tr>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellright">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
            </tr>
            <tr>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellright">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="cellrighttop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="cellrighttop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="cellrighttop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="cellrighttop">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
            </tr>

            <tr>

                <td height="125" colspan="1" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="100" colspan="4" align="center">
                    <a href="mailto:Mose-D@sandersonpipe.com?subject=Website"><img border="0"
                                                                                   src="img/Sanderson Division/Danial-Mose.gif"
                                                                                   width="100" height="100"></a>
                </td>

                <td height="125" colspan="2" rowspan="2" class="cellnone">&nbsp;</td>
                <td height="100" colspan="4" align="center">
                    <a href="mailto:robert-w@sandersonpipe.com?subject=Website"><img border="0"
                                                                                     src="img/Sanderson Division/White_Robert.gif"
                                                                                     width="100" height="100"></a>
                </td>

                <td height="125" colspan="1" rowspan="2" class="cellright">&nbsp;</td>

                <td height="125" colspan="1" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="100" colspan="4" align="center">
                    <a href="mailto:james-g@sandersonpipe.com?subject=Website"><img border="0"
                                                                                    src="img/Sanderson Division/Green_James.gif"
                                                                                    width="100" height="100">
                </td>

                <td height="125" colspan="2" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="100" colspan="4" align="center">
                    <a href="mailto:chrism@sandersonpipe.com?subject=Website">
                        <img border="0" src="img/Sanderson Division/Chris_Minorics.jpg" width="100" height="100"></a>
                </td>

                <td height="125" colspan="7" rowspan="2" class="cellnone">&nbsp;</td>

            </tr>

            <tr>

                <td height="25" colspan="4" align="center" class="cellinfo">Mose Daniel<br>
                    <span style="font-size:7pt; font-weight:normal; ">Production Mgr.<br><a
                                href="mailto:mose-d@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>

                <td height="25" colspan="4" align="center" class="cellinfo">Robert White<br>
                    <span style="font-size:7pt; font-weight:normal; ">Maintenance Mgr.<br><a
                                href="mailto:robert-w@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>

                <td height="25" colspan="4" align="center" class="cellinfo">James Green<br>
                    <span style="font-size:7pt; font-weight:normal; ">Quality Control<br>Mgr.<br><a
                                href="mailto:james-g@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>

                <td height="25" colspan="4" align="center" class="cellinfo">Chris Minorics<br>
                    <span style="font-size:7pt; font-weight:normal; ">Tool & Die Mgr.<br><a
                                href="mailto:chrism@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>
            </tr>

            <tr>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellright">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
            </tr>
            <tr>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellright">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="cellrighttop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="celltop">&nbsp;</td>
                <td width="25" height="25" class="cellrighttop">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
                <td width="25" height="25" class="cellnone">&nbsp;</td>
            </tr>
            <tr>

                <td height="125" colspan="4" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="100" colspan="4" align="center">
                    <a href="mailto:bob-j@sandersonpipe.com?subject=Website"><img border="0"
                                                                                  src="img/Sanderson Division/Jones_Bobby.jpg"
                                                                                  width="100" height="100"></a>
                </td>

                <td height="125" colspan="2" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="100" colspan="4" align="center">
                    <a href="mailto:wendell-a@sandersonpipe.com?subject=Website"><img border="0"
                                                                                      src="img/Sanderson Division/Ash-Wendell.gif"
                                                                                      width="100" height="100"></a>
                </td>

                <td height="125" colspan="2" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="100" colspan="4" align="center">
                    <a href="mailto:eddy-s@sandersonpipe.com?subject=Website"><img border="0"
                                                                                   src="img/Sanderson Division/Sanders-Eddy.gif"
                                                                                   width="100" height="100">
                </td>

                <td height="125" colspan="2" rowspan="2" class="cellnone">&nbsp;</td>

                <td height="125" colspan="8" rowspan="2" class="cellnone">&nbsp;</td>

            </tr>

            <tr>

                <td height="25" colspan="4" align="center" class="cellinfo">Bob Jones<br>
                    <span style="font-size:7pt; font-weight:normal; ">Purchasing Mgr.<br><a
                                href="mailto:bob-j@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>

                <td height="25" colspan="4" align="center" class="cellinfo">Wendell Ash<br>
                    <span style="font-size:7pt; font-weight:normal; ">Grinding / Wood<br>Cutting Mgr.<br><a
                                href="mailto:wendell-a@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>

                <td height="25" colspan="4" align="center" class="cellinfo">Eddy Sanders<br>
                    <span style="font-size:7pt; font-weight:normal; ">Blending Mgr.<br><a
                                href="mailto:eddy-s@sandersonpipe.com?subject=Website">e-mail</a></span>
                </td>

            </tr>

        </table>
    </div>
@endsection