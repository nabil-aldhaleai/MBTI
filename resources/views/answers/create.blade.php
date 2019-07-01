@extends('layout')

    @section('style')
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
                margin-bottom: 50px;
            }
            .section {
                margin-left: 199px;
                margin-top: 30px;
                margin-bottom: 40px;
            }

            .section-header {
                color:#2E4B77;
            }
        </style>

    @endsection

    @section('content')

    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
            <div class="container.">
                <section class="section">
                    <h5 class="section-header">Discover your perspective.</h5>
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

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p>Your Email</p>
                                    <input type="email" class="form-control" name="email" placeholder="you@example.com" required />
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary submit-button submit-btn">Save & Continue</button>
                    </div>
                </form>
            </div>

    @endsection
