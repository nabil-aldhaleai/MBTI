@extends('layout')

    @section('style')
       <style>
            .perceive-panel {
                margin-top: 2%;
                padding-left: 3%;
            }

            .chart-panel {
                margin-top: 1%;
                margin-bottom: 1%;
                
            }

            .cel-width {
                width: 25%;
            }

            .perspective-header {
                color: #2c3e50  ;
            }
            
            .bar-chart {
                background-color: #A920CB;
                border-color: grey;
                border-width: 0.7px; 
                border-radius:10px;
            }
            
            table {
                color: #878787;
                border-collapse: unset;
            }

            .row-margin {
                margin-top: 3%;
                border: solid  #878787 1px;
            }

            .indicator-cel {
                background-color: #A920CB;
            }

            .trans-cel {
                background-color: #E9ECEF;
            }

            tr {
                line-height: 14px;
            }

            td { 
                width:150px; 
                margin:5px;
                padding-top:5px;
            }
            
            .left-spacing {
                margin-left: 20px;
            }

        </style>

    @endsection

    @section('content')

        <div class="container">
            <div class="row row-margin">
                <div class="col-md-5 perceive-panel">
                    <h3 class="perspective-header">Your Perspective</h3>
                    <h6>Your Perspective Type is {{ $data['mbit'] }} </h6>
                </div>
                <div class="col-md-7 chart-panel">
                    <table class="">
                    <tbody>
                        <tr>
                            <td class="cel-width">Introversion (I)</td>
                            <td class="cel-width {{ $data['EI direction'] ==  '1' ? 'indicator-cel' : 'trans-cel'  }}"></td>
                            <td class="cel-width {{ $data['EI direction'] ==  '-1' ? 'indicator-cel' : 'trans-cel'  }}"></td>
                            </td>
                            <td class="cel-width "> Extraversion (E)</td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td>Sensing (S)</td>
                            <td class="cel-width {{ $data['SN direction'] ==  '-1' ? 'indicator-cel' : 'trans-cel'  }}"></td>
                            <td class="cel-width {{ $data['SN direction'] ==  '1' ? 'indicator-cel' : 'trans-cel'  }}"></td>
                            <td class=""> Intuition (N)</td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td>Thinking (T)</td>
                            <td class="cel-width {{ $data['TF direction'] ==  '-1' ? 'indicator-cel' : 'trans-cel'  }}"></td>
                            <td class="cel-width {{ $data['TF direction'] ==  '1' ? 'indicator-cel' : 'trans-cel'  }}"></td>
                            <td class=""> Feeling (F)</td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td>Judging (J)</td>
                            <td class="cel-width {{ $data['JP direction'] ==  '-1' ? 'indicator-cel' : 'trans-cel'  }}"></td>
                            <td class="cel-width {{ $data['JP direction'] ==  '1' ? 'indicator-cel' : 'trans-cel'  }}"></td>
                            <td class=""> Perceiving (P)</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
