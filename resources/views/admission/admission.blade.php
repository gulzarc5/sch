@extends('layouts.mainlayout')

@section('content')
    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admission</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">New Admission</li>
                        </ol>
                    </div>
                </div>
            </div>
    </div>

        <div class="row" style="margin: 0px; padding: 0px;">
            <div class="col-sm-12 col-xs-12">
                {{ Form::open(['url' => 'foo/bar', 'method' => 'post', 'files' => true] ,[ 'class' => 'form-horizontal']) }}
                <!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                    <div class="card">
                        <div class="card-header">
                            <strong>New Admission</strong>
                        </div>
                        
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    {{ Form::label('select_medium', 'Select medium', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::select('select_medium', array('L' => 'Large', 'S' => 'Small'), null, ['class'=>'form-control', 'placeholder' => 'Select a Medium']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    {{ Form::label('select_class', 'Select Class', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::select('select_class', array('L' => 'Large', 'S' => 'Small'), null, ['class'=>'form-control', 'placeholder' => 'Select a class']) }}
                                </div>
                            </div>
                                           
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    {{ Form::label('subjects', 'Subjects for this student', ['class' => 'form-control-label']) }}
                                    <!-- <label class=" form-control-label">Subjects for this student</label> -->
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::text('subjects', null, [ 'class'=>'form-control', 'disabled' => 'disabled']) }}
                                    <!-- <p class="form-control-static">English , Bengali, Hindi ,</p> -->
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    {{ Form::label('student_id', 'Student Number', ['class' => 'form-control-label']) }}
                                    <!-- <label for="text-input" class=" form-control-label">Student Number</label> -->
                                </div>
                                <div class="col-12 col-md-9">
                                     {{ Form::text('student_id', null, [ 'class'=>'form-control', 'disabled' => 'disabled']) }}
                                    <!-- <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"> -->
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    {{ Form::label('monthly_tution_fee', 'Monthly Tution Fee', ['class' => 'form-control-label']) }}
                                    <!-- <label for="text-input" class=" form-control-label">Monthly Tution Fee</label> -->
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::text('monthly_tution_fee', null, [ 'class'=>'form-control', 'disabled' => 'disabled']) }}
                                    <!-- <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong>Fees</strong>  ( These fees will charge only at admission time )
                        </div>
                        
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                     {{ Form::label('tution_fee', 'Tution Fee', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::text('tution_fee', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                     {{ Form::label('admission_fee', 'Admission Fee', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::text('admission_fee', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                     {{ Form::label('annual_funds', 'Annual Funds', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::text('annual_funds', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                     {{ Form::label('practical_charges', 'Practical Charges', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::text('practical_charges', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                     {{ Form::label('test_session_fee', 'Test Session Fee', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-12 col-md-9">
                                    {{ Form::text('test_session_fee', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                        </div>
                    </div>
                {{ Form::close() }}
                <!-- </form> -->
            </div> 
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
        </div>
        <!-- <div class="content mt-3">



        </div> --> <!-- .content -->
@endsection
