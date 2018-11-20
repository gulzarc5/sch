@extends('layouts.master')

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

                    <!-- Student new admission Details -->
                    <div class="card">
                        <div class="card-header">
                            <strong>New Admission</strong>
                        </div>
                        
                        <div class="card-body card-block">

                            <div class="row form-group">
                                <div class="col-md-3">
                                    {{ Form::label('select_medium', 'Select medium', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::select('select_medium', array('L' => 'Large', 'S' => 'Small'), null, ['class'=>'form-control', 'placeholder' => 'Select a Medium']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    {{ Form::label('select_class', 'Select Class', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::select('select_class', array('L' => 'Large', 'S' => 'Small'), null, ['class'=>'form-control', 'placeholder' => 'Select a class']) }}
                                </div>
                            </div>
                                           
                            <div class="row form-group">
                                <div class="col-md-3">
                                    {{ Form::label('subjects', 'Subjects for this student', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('subjects', null, [ 'class'=>'form-control', 'disabled' => 'disabled']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    {{ Form::label('student_id', 'Student Number', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                     {{ Form::text('student_id', null, [ 'class'=>'form-control', 'disabled' => 'disabled']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    {{ Form::label('monthly_tution_fee', 'Monthly Tution Fee', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('monthly_tution_fee', null, [ 'class'=>'form-control', 'disabled' => 'disabled']) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student admission fee details -->

                    <div class="card">
                        <div class="card-header">
                            <strong>Fees</strong>  ( These fees will charge only at admission time )
                        </div>
                        
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('tution_fee', 'Tution Fee', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('tution_fee', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('admission_fee', 'Admission Fee', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('admission_fee', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('annual_funds', 'Annual Funds', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('annual_funds', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('practical_charges', 'Practical Charges', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('practical_charges', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('test_session_fee', 'Test Session Fee', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('test_session_fee', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                        </div>                        
                    </div>

                    <!-- Student Personal Details -->

                     <div class="card">
                        <div class="card-header">
                            <strong>Student </strong>  Personal Details
                        </div>
                        
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('student_name', 'Student Name', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('student_name', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('father_name', 'Father Name', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('father_name', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('mother_name', 'Mother Name', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('mother_name', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('student_date_of_birth', 'Date of Birth', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::date('student_date_of_birth', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                             <div class="row form-group">
                                <div class="col-md-3">
                                    <label class=" form-control-label">Gender</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-check-inline form-check">
                                        <label for="inline-radio1" class="form-check-label ">
                                            <input type="radio" id="inline-radio1" name="inline-radios" value="option1" class="form-check-input"> Male
                                        </label>
                                        <label for="inline-radio2" class="form-check-label ">
                                            <input type="radio" id="inline-radio2" name="inline-radios" value="option2" class="form-check-input"> Female 
                                        </label>                                    
                                    </div>
                                 </div>
                             </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    {{ Form::label('select_student_caste', 'Select Category', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::select('select_student_caste', array('L' => 'Large', 'S' => 'Small'), null, ['class'=>'form-control', 'placeholder' => 'Select a Category']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    {{ Form::label('student_blood_group', 'Select Blood Group', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::select('student_blood_group', array('L' => 'Large', 'S' => 'Small'), null, ['class'=>'form-control', 'placeholder' => 'Select a Category']) }}
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-3">
                                     {{ Form::label('student_birth_place', 'Birth Place', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::text('student_birth_place', null, [ 'class'=>'form-control']) }}
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-3">
                                    {{ Form::label('student_religion', 'Religion', ['class' => 'form-control-label']) }}
                                </div>
                                <div class="col-md-9">
                                    {{ Form::select('student_religion', array('L' => 'Large', 'S' => 'Small'), null, ['class'=>'form-control', 'placeholder' => 'Select a Category']) }}
                                </div>
                            </div>

                        </div>                        
                    </div>

                {{ Form::close() }}
            </div> 

        </div>
@endsection
