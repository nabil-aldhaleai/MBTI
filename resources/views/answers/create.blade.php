<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            .error-message{
                color: red;
            }

            .agree {
                color: green;
                padding-left: 18px;
            }

            .disagree {
                color: red;
                padding-right: 30px;
            }

            .submit-button {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
            <div class="container">
                <section>
                <p>Discover your perspective.</p>
                <p>Complete the 7 min test and get a detailed report of yoru lenses on the world.</p>
                </section >

                <form action="/answers/" method="POST">
                @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>You find it takes effort to introduce yourself to other people.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFirstQuestion} name="first_question" value="1" required />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFirstQuestion} name="first_question" value="2"/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFirstQuestion} name="first_question" value="3"/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFirstQuestion} name="first_question" value="4"/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFirstQuestion} name="first_question" value="5"/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFirstQuestion} name="first_question" value="6"/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFirstQuestion} name="first_question" value="7"/>
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.firstQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>You consider yourself more practical than creative.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSecondQuestion} name="second_question" value="1" required/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSecondQuestion} name="second_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSecondQuestion} name="second_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSecondQuestion} name="second_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSecondQuestion} name="second_question" value="5"/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSecondQuestion} name="second_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSecondQuestion} name="second_question" value="7" />
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.secondQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>Winning a debate matters less to you than making sure no one gets upset.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleThirdQuestion} name="third_question" value="1" required/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleThirdQuestion} name="third_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleThirdQuestion} name="third_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleThirdQuestion} name="third_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleThirdQuestion} name="third_question" value="5" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleThirdQuestion} name="third_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleThirdQuestion} name="third_question" value="7" />
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.thirdQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>You get energized going to social events that involve many interactions.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFourthQuestion} name="fourth_question" value="1" required />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFourthQuestion} name="fourth_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFourthQuestion} name="fourth_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFourthQuestion} name="fourth_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFourthQuestion} name="fourth_question" value="5" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFourthQuestion} name="fourth_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFourthQuestion} name="fourth_question" value="7" />
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.fourthQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>You often spend time exploring unrealistic and impractical yet intriguing ideas.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFifthQuestion} name="fifth_question" value="1" required/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFifthQuestion} name="fifth_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFifthQuestion} name="fifth_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFifthQuestion} name="fifth_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFifthQuestion} name="fifth_question" value="5" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFifthQuestion} name="fifth_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleFifthQuestion} name="fifth_question" value="7" />
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.fifthQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>Deadlines seem to you to be of relative rather than absolute importance.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSixthQuestion} name="sixth_question" value="1" required/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSixthQuestion} name="sixth_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSixthQuestion} name="sixth_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSixthQuestion} name="sixth_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSixthQuestion} name="sixth_question" value="5" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSixthQuestion} name="sixth_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSixthQuestion} name="sixth_question" value="7"/>
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.sixthQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>Logic is usually more important than heart when it comes to making important decisions.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSeventhQuestion} name="seventh_question" value="1" required/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSeventhQuestion} name="seventh_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSeventhQuestion} name="seventh_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSeventhQuestion} name="seventh_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSeventhQuestion} name="seventh_question" value="5" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSeventhQuestion} name="seventh_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleSeventhQuestion} name="seventh_question" value="7" />
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.seventhQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>Your home and work environments are quite tidy.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleEighthQuestion} name="eighth_question" value="1" required />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleEighthQuestion} name="eighth_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleEighthQuestion} name="eighth_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleEighthQuestion} name="eighth_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleEighthQuestion} name="eighth_question" value="5" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleEighthQuestion} name="eighth_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleEighthQuestion} name="eighth_question" value="7" />
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.eightQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>You do not mind being at the center of attention.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleNinthQuestion} name="ninth_question" value="1" required/>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleNinthQuestion} name="ninth_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleNinthQuestion} name="ninth_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleNinthQuestion} name="ninth_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleNinthQuestion} name="ninth_question" value="5" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleNinthQuestion} name="ninth_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" onChange={this.handleNinthQuestion} name="ninth_question" value="7" />
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.ninthQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>Keeping your options open is more important than having a to-do list.</p>

                                    <label class="disagree" >Disagree</label>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tenth_question" value="1" required />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tenth_question" value="2" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tenth_question" value="3" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tenth_question" value="4" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tenth_question" value="5" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tenth_question" value="6" />
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tenth_question" value="7" />
                                    </div>

                                    <label class="agree" >Agree</label>

                                    {{-- <p class="error-message">{this.state.tenthQuestionError}</p> --}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>Your Email</p>
                                    <input type="email" class="form-control" placeholder="you@example.com" />
                                    {{-- <p class="error-message">{this.state.emailError}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary submit-button">Save & Continue</button>
                    </div>
                </form>
            </div>

{{-- 
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}

    </body>
</html>
