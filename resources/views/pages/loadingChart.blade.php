@extends('layout.master')

@section('title')
    Loading Chart
@endsection

@section('styles')
    <link rel="stylesheet" href="css/loadingChart.css">
@endsection

@section('content')
    <div class="col-md-10">
        <p align="center">
        <table class="table-responsive" border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse; border-width: 0"
               bordercolor="#111111" width="850">
            <tr>
                <td class="pagehead" colspan="3">LOADING CHART</td>
            </tr>
            <tr>
                <td class="pagehead2" colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td width="500" valign="top">
                    <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse; border-width: 0"
                           bordercolor="#111111" width="420">
                        <tr>
                            <td width="220" class="colhead">SCH 40 BELL END</td>
                            <td width="90" class="colhead">PALLET<br>QTY</td>
                            <td width="90" class="colhead">% OF<br>TRUCK</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1/2&quot; x 20' SCH 40</td>
                            <td class="coldatab">9000'</td>
                            <td class="coldatab">3.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3/4&quot; x 20' SCH 40</td>
                            <td class="coldatab">8800'</td>
                            <td class="coldatab">4.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1&quot; x 20' SCH 40</td>
                            <td class="coldatab">5600'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/4&quot; x 20' SCH 40</td>
                            <td class="coldatab">3300'</td>
                            <td class="coldatab">3.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 20' SCH 40</td>
                            <td class="coldatab">4420'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' SCH 40</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2 1/2&quot; x 20' SCH 40</td>
                            <td class="coldatab">1920'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' SCH 40</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' SCH 40</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' SCH 40</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' SCH 40</td>
                            <td class="coldatab">300'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' SCH 40</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' SCH 40</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">14&quot; x 20' SCH 40</td>
                            <td class="coldatab">120'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">16&quot; x 20' SCH 40</td>
                            <td class="coldatab">120'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">18&quot; x 20' SCH 40</td>
                            <td class="coldatab">40'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">SCH 40 WELL CASING</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' SCH 40 W/C</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' SCH 40 W/C</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' SCH 40 W/C</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">5&quot; x 20' SCH 40 W/C</td>
                            <td class="coldatab">480'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' SCH 40 W/C</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' SCH 40 W/C</td>
                            <td class="coldatab">300'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">SCH 40 FOAM CORE</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 20' FOAM CORE</td>
                            <td class="coldatab">4420'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' FOAM CORE</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' FOAM CORE</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' FOAM CORE</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' FOAM CORE</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">SCH 40 FOAM CORE 10'</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 10' FOAM CORE</td>
                            <td class="coldatab">2210'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 10' FOAM CORE</td>
                            <td class="coldatab">1330'</td>
                            <td class="coldatab">2.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 10' FOAM CORE</td>
                            <td class="coldatab">630'</td>
                            <td class="coldatab">2.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 10' FOAM CORE</td>
                            <td class="coldatab">380'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 10' FOAM CORE</td>
                            <td class="coldatab">330'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 100 BE</td>
                            <td width="90" class="colhead">&nbsp;</td>
                            <td width="90" class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' PR 100 BE</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' PR 100 BE</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">5&quot; x 20' PR 100 BE</td>
                            <td class="coldatab">480'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' PR 100 BE</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' PR 100 BE</td>
                            <td class="coldatab">400'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' PR 100 BE</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' PR 100 BE</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 125 BE</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' PR 125 BE</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' PR 125 BE</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' PR 125 BE</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">5&quot; x 20' PR 125 BE</td>
                            <td class="coldatab">480'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' PR 125 BE</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' PR 125 BE</td>
                            <td class="coldatab">400'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' PR 125 BE</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' PR 125 BE</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 160 BE</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/4&quot; x 20' PR 160 BE</td>
                            <td class="coldatab">3300'</td>
                            <td class="coldatab">2.8%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 20' PR 160 BE</td>
                            <td class="coldatab">4420'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' PR 160 BE</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' PR 160 BE</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' PR 160 BE</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' PR 160 BE</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 200 BE</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1/2&quot; x 20' PR 315 BE</td>
                            <td class="coldatab">9000'</td>
                            <td class="coldatab">2.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3/4&quot; x 20' PR 200 BE</td>
                            <td class="coldatab">8800'</td>
                            <td class="coldatab">3.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1&quot; x 20' PR 200 BE</td>
                            <td class="coldatab">5600'</td>
                            <td class="coldatab">3.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/4&quot; x 20' PR 200 BE</td>
                            <td class="coldatab">3300'</td>
                            <td class="coldatab">2.8%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 20' PR 200 BE</td>
                            <td class="coldatab">4420'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' PR 200 BE</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2 1/2&quot; x 20' PR 200 BE</td>
                            <td class="coldatab">1920'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' PR 200 BE</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' PR 200 BE</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 160 GASKET</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' PR 160 GSK</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' PR 160 GSK</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' PR 160 GSK</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' PR 160 GSK</td>
                            <td class="coldatab">300'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' PR 160 GSK</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' PR 160 GSK</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 200 GASKET</td>
                            <td width="90" class="colhead">&nbsp;</td>
                            <td width="90" class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' PR 200 GSK</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2 1/2&quot; x 20' PR 200 GSK</td>
                            <td class="coldatab">1920'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' PR 200 GSK</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' PR 200 GSK</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' PR 200 GSK</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' PR 200 GSK</td>
                            <td class="coldatab">300'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' PR 200 GSK</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' PR 200 GSK</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 200 GASKET PURPLE</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' GSK PURPLE</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2 1/2&quot; x 20' GSK PURPLE</td>
                            <td class="coldatab">1920'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' GSK PURPLE</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' GSK PURPLE</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' GSK PURPLE</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' GSK PURPLE</td>
                            <td class="coldatab">300'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' GSK PURPLE</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' GSK PURPLE</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                    </table>
                </td>
                <td width="10">&nbsp;</td>
                <td width="500" valign="top">
                    <table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse; border-width: 0"
                           bordercolor="#111111" width="420">
                        <tr>
                            <td width="220" class="colhead">SCH 40 DWV PLAIN END</td>
                            <td width="90" class="colhead">PALLET<br>QTY</td>
                            <td width="90" class="colhead">% OF<br>TRUCK</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1&QUOT; x 20' DWV</td>
                            <td class="coldatab">5600'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/4&QUOT; x 20' DWV</td>
                            <td class="coldatab">3300'</td>
                            <td class="coldatab">3.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 20' DWV</td>
                            <td class="coldatab">4420'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' DWV</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2 1/2&quot; x 20' DWV</td>
                            <td class="coldatab">1920'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' DWV</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' DWV</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' DWV</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' DWV</td>
                            <td class="coldatab">300'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' DWV</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' DWV</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">SCH 40 DWV PLAIN END 10'</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 10' DWV</td>
                            <td class="coldatab">2210'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 10' DWV</td>
                            <td class="coldatab">1330'</td>
                            <td class="coldatab">2.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 10' DWV</td>
                            <td class="coldatab">630'</td>
                            <td class="coldatab">2.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 10' DWV</td>
                            <td class="coldatab">380'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 10' DWV</td>
                            <td class="coldatab">330'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">SCH 80 PLAIN END</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1/2&quot; x 20' SCH 80</td>
                            <td class="coldatab">9000'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3/4&quot; x 20' SCH 80</td>
                            <td class="coldatab">8800'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1&quot; x 20' SCH 80</td>
                            <td class="coldatab">5600'</td>
                            <td class="coldatab">5.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/4&quot; x 20' SCH 80</td>
                            <td class="coldatab">3300'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 20' SCH 80</td>
                            <td class="coldatab">4420'</td>
                            <td class="coldatab">7.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' SCH 80</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2 1/2&quot; x 20' SCH 80</td>
                            <td class="coldatab">1920'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' SCH 80</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' SCH 80</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' SCH 80</td>
                            <td class="coldatab">400'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' SCH 80</td>
                            <td class="coldatab">300'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">SCH 80 THREADED</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1&quot; x 20' SCH 80 THREADED</td>
                            <td class="coldatab">5600'</td>
                            <td class="coldatab">5.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/4&quot; x 20' SCH 80 THREADED</td>
                            <td class="coldatab">3300'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' SCH 80 THREADED</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 200 BE PURPLE</td>
                            <td width="90" class="colhead">&nbsp;</td>
                            <td width="90" class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1/2&quot; x 20' PR 315 PURPLE</td>
                            <td class="coldatab">9000'</td>
                            <td class="coldatab">2.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3/4&quot; x 20' PR 200 PURPLE</td>
                            <td class="coldatab">8800'</td>
                            <td class="coldatab">3.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1&quot; x 20' PR 200 PURPLE</td>
                            <td class="coldatab">5600'</td>
                            <td class="coldatab">3.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/4&quot; x 20' PR 200 PURPLE</td>
                            <td class="coldatab">3300'</td>
                            <td class="coldatab">2.8%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">1 1/2&quot; x 20' PR 200 PURPLE</td>
                            <td class="coldatab">4420'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2&quot; x 20' PR 200 PURPLE</td>
                            <td class="coldatab">2660'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">2 1/2&quot; x 20' PR 200 PURPLE</td>
                            <td class="coldatab">1920'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 20' PR 200 PURPLE</td>
                            <td class="coldatab">1260'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' PR 200 PURPLE</td>
                            <td class="coldatab">760'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">SDR 35 3034 BE</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' 3034 SDR 35</td>
                            <td class="coldatab">1060'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 10' 3034 SDR 35</td>
                            <td class="coldatab">530'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' 3034 SDR 35</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 10' 3034 SDR 35</td>
                            <td class="coldatab">330'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">2729 SOLID &amp; PERF</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 10' 2729 SOLID</td>
                            <td class="coldatab">840'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">3&quot; x 10' 2729 PERF</td>
                            <td class="coldatab">840'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 10' 2729 SOLID</td>
                            <td class="coldatab">530'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 10' 2729 PERF</td>
                            <td class="coldatab">530'</td>
                            <td class="coldatab">2.5%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 10' 2729 SOLID</td>
                            <td class="coldatab">330'</td>
                            <td class="coldatab">4.1%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 10' 2729 PERF</td>
                            <td class="coldatab">330'</td>
                            <td class="coldatab">4.1%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 100 GASKET</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' PR 100 GSK</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' PR 100 GSK</td>
                            <td class="coldatab">400'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' PR 100 GSK</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' PR 100 GSK</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">PR 125 GASKET</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' PR 125 GSK</td>
                            <td class="coldatab">660'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' PR 125 GSK</td>
                            <td class="coldatab">400'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' PR 125 GSK</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' PR 125 GSK</td>
                            <td class="coldatab">60'</td>
                            <td class="coldatab">3.6%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">SDR 35 GASKET</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 14' SDR 35 GSK</td>
                            <td class="coldatab">742'</td>
                            <td class="coldatab">3.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 14' SDR 35 GSK</td>
                            <td class="coldatab">462'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 14' SDR 35 GSK</td>
                            <td class="coldatab">280'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 14' SDR 35 GSK</td>
                            <td class="coldatab">112'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 14' SDR 35 GSK</td>
                            <td class="coldatab">112'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">15&quot; x 14' SDR 35 GSK</td>
                            <td class="coldatab">84'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">18&quot; x 14' SDR 35 GSK</td>
                            <td class="coldatab">28'</td>
                            <td class="coldatab">3.3%</td>
                        </tr>
                        <tr>
                            <td class="colhead">SDR 26 GSK HEAVY WALL</td>
                            <td width="90" class="colhead">&nbsp;</td>
                            <td width="90" class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 14' SDR 26 GSK HW</td>
                            <td class="coldatab">742'</td>
                            <td class="coldatab">3.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 14' SDR 26 GSK HW</td>
                            <td class="coldatab">462'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 14' SDR 26 GSK HW</td>
                            <td class="coldatab">280'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 14' SDR 26 GSK HW</td>
                            <td class="coldatab">112'</td>
                            <td class="coldatab">4.2%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 14' SDR 26 GSK HW</td>
                            <td class="coldatab">112'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">15&quot; x 14' SDR 26 GSK HW</td>
                            <td class="coldatab">84'</td>
                            <td class="coldatab">5.6%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">18&quot; x 14' SDR 26 GSK HW</td>
                            <td class="coldatab">28'</td>
                            <td class="coldatab">3.3%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">C 900 DR 14 GSK - Class 200</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' DR 14 GSK</td>
                            <td class="coldatab">1000'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' DR 14 GSK</td>
                            <td class="coldatab">560'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' DR 14 GSK</td>
                            <td class="coldatab">200'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' DR 14 GSK</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' DR 14 GSK 6pc Pallet</td>
                            <td class="coldatab">120'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' DR 14 GSK 8pc Pallet</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">11.1%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">C 900 DR 18 GSK - Class 150</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' DR 18 GSK</td>
                            <td class="coldatab">1200'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' DR 18 GSK</td>
                            <td class="coldatab">560'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' DR 18 GSK</td>
                            <td class="coldatab">200'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' DR 18 GSK</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' DR 18 GSK 6pc Pallet</td>
                            <td class="coldatab">120'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' DR 18 GSK 8pc Pallet</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">11.1%</td>
                        </tr>
                        <tr>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                            <td class="coldata">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="colhead">C 900 DR 25 GSK - Class 100</td>
                            <td class="colhead">&nbsp;</td>
                            <td class="colhead">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="coldatab">4&quot; x 20' DR 25 GSK</td>
                            <td class="coldatab">1200'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">6&quot; x 20' DR 25 GSK</td>
                            <td class="coldatab">560'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">8&quot; x 20' DR 25 GSK</td>
                            <td class="coldatab">200'</td>
                            <td class="coldatab">5.0%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">10&quot; x 20' DR 25 GSK</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">6.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' DR 25 GSK 6pc Pallet</td>
                            <td class="coldatab">120'</td>
                            <td class="coldatab">8.3%</td>
                        </tr>
                        <tr>
                            <td class="coldatab">12&quot; x 20' DR 25 GSK 8pc Pallet</td>
                            <td class="coldatab">160'</td>
                            <td class="coldatab">11.1%</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
@endsection