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
                <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="card">
                        <div class="card-header">
                            <strong>New Admission</strong>
                        </div>
                        
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="select" class=" form-control-label">Select Class</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="select" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                </div>
                            </div>
                                           
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Subjects for this student</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">English , Bengali, Hindi ,</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Student Number</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Monthly Tution Fee</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
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
                                    <label for="select" class=" form-control-label">Select Class</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="select" id="select" class="form-control">
                                        <option value="0">Please select</option>
                                        <option value="1">Option #1</option>
                                        <option value="2">Option #2</option>
                                        <option value="3">Option #3</option>
                                    </select>
                                </div>
                            </div>
                                           
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Subjects for this student</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">English , Bengali, Hindi ,</p>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Student Number</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Monthly Tution Fee</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
