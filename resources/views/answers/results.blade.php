@extends('layout')

    @section('style')
       <style>
            .border{
                hight: 10px;
            }

            .purple {
                background-color: purple;
            }

            .perceive-panel {
                margin-top: 5%;
                padding-left: 3%;
            }

            .chart-panel {
                margin-top: 1%;
            }

            .cel-width {
                width: 25%;
                hight: 20%;
            }

            .perspective-header {
                color: #2c3e50  ;
            }
        </style>

    @endsection

    @section('content')

        <div class="container">
            <div class="row border">
                <div class="col-md-5 perceive-panel">
                    <h3 class="perspective-header">Your Perspective</h3>
                    <h6>Your Perspective Type is {{ $data['mbit'] }} </h6>
                </div>
                <div class="col-md-7 chart-panel">
                    <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td class="cel-width">Introversion (I)</td>
                            {{-- <td class="cel-width {{ $data['EI direction'] ==  '1' ? 'purple' : ''  }}"></td>
                            <td class="cel-width {{ $data['EI direction'] ==  '-1' ? 'purple' : ''  }}"></td> --}}
                            <td>
                                <div class="col-md-6"></div>
                                <div class="col-md-6"></div>
                            </td>
                            <td class="cel-width">Extraversion (E)</td>
                        </tr>
                        <tr>
                            <td>Sensing (S)</td>
                            <td class="cel-width {{ $data['SN direction'] ==  '1' ? 'purple' : ''  }}"></td>
                            <td class="cel-width {{ $data['SN direction'] ==  '-1' ? 'purple' : ''  }}"></td>
                            <td>Intuition (N)</td>
                        </tr>
                        <tr>
                            <td>Thinking (T)</td>
                            <td class="cel-width {{ $data['TF direction'] ==  '1' ? 'purple' : ''  }}"></td>
                            <td class="cel-width {{ $data['TF direction'] ==  '-1' ? 'purple' : ''  }}"></td>
                            <td>Feeling (F)</td>
                        </tr>
                        <tr>
                            <td>Judging (J)</td>
                            <td class="cel-width {{ $data['JP direction'] ==  '1' ? 'purple' : ''  }}"></td>
                            <td class="cel-width {{ $data['JP direction'] ==  '-1' ? 'purple' : ''  }}"></td>
                            <td>Perceiving (P)</td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
