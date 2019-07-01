<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
       <style>
            .tble-style {
                margin-top:80px;
            }
        </style>
    </head>

    <body>
        <div class="container">
           <table class="table table-striped tble-style">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Question 1</th>
                    <th scope="col">Question 2</th>
                    <th scope="col">Question 3</th>
                    <th scope="col">Question 4</th>
                    <th scope="col">Question 5</th>
                    <th scope="col">Question 6</th>
                    <th scope="col">Question 7</th>
                    <th scope="col">Question 8</th>
                    <th scope="col">Question 9</th>
                    <th scope="col">Question 10</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($answers as $answer)
                    <tr>
                        <td><a href="/answers/results/{{$answer->id}}">{{$answer->email}}</a></td>
                        <td>{{$answer->first_question}}</td>
                        <td>{{$answer->second_question}}</td>
                        <td>{{$answer->third_question}}</td>
                        <td>{{$answer->fourth_question}}</td>
                        <td>{{$answer->fifth_question}}</td>
                        <td>{{$answer->sixth_question}}</td>
                        <td>{{$answer->seventh_question}}</td>
                        <td>{{$answer->eighth_question}}</td>
                        <td>{{$answer->ninth_question}}</td>
                        <td>{{$answer->tenth_question}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </body>
</html>

