@extends('layouts.master')

@section('title')

settings

@endsection

@section('body')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>

                    <div class="panel-body">
                        <h2>{{$married}}</h2>
                        <!--  <h1>
                            <?php
                                echo $married;
                            ?>
                        </h1> -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
