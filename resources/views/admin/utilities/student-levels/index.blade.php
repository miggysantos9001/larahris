@extends('master')
@section('content')
    <div class="col-12">
        <div class="card planned_task">
            <div class="header">
                <h2>Student Level Page</h2>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="header">
                                <h2> New School Level</h2>
                            </div>
                            <div class="body">
                                <div class="col-12">
                                    <div class="form-group">
                                        {!! Form::label('School Level Name') !!}
                                        {!! Form::text('',null,['class'=>'form-control form-control-sm']) !!}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Entry</button>    
                                </div>        
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="table-responsive">
                            <div class="card">
                                <div class="header">
                                    <h2>School Level List</h2>
                                </div>
                                <div class="body">
                                    <table class="table table-condensed table-hover table-sm mb-0 c_list">
                                        <thead>
                                            <tr>
                                                <th>Name</th>                                    
                                                <th width="100">Action</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <p class="c_name">Elementary 
                                                    <span class="badge badge-default m-l-10 hidden-sm-down">Elem</span></p>
                                                </td>
                                                <td>                                            
                                                    <button type="button" class="btn btn-info btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" data-type="confirm" class="btn btn-danger btn-sm js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection