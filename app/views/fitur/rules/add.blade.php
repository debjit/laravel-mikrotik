@extends('layout.bootstrapadmin.index')
@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            @if (Session::has('message'))
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <h1 class="page-header">Manajemen Rules</h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-pencil">
                        <strong> Add Rules</strong>
                    </i>
                </div>
                <div class="panel-body">

                </div>

                <!--{{ HTML::ul($errors->all()) }}-->

                <form class="form-horizontal" 
                      method="post" 
                      action="{{ URL::to('/rules/store/') }}">

                    <div class="form-group">
                        <label for="chain" 
                               class="col-lg-4 control-label">
                            Chain</label>
                        <div class="col-lg-4">
                            <input type="text" name="chain" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="action" 
                               class="col-lg-4 control-label">
                            Action</label>
                        <div class="col-lg-4">
                            <input type="text" name="action" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="protocol" 
                               class="col-lg-4 control-label">
                            Protocol</label>
                        <div class="col-lg-4">
                            <input type="text" name="protocol" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="addresslist" 
                               class="col-lg-4 control-label">
                            Address List</label>
                        <div class="col-lg-4">
                            <input type="text" name="addresslist" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="addresslisttimeout" 
                               class="col-lg-4 control-label">
                            Address List Timeout</label>
                        <div class="col-lg-4">
                            <input type="text" name="addresslisttimeout" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="disable" 
                               class="col-lg-4 control-label">
                            Disable</label>
                        <div class="col-lg-4">
                            <input type="text" name="disable" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="comment" 
                               class="col-lg-4 control-label">
                            Comment</label>
                        <div class="col-lg-4">
                            <input type="text" name="comment" 
                                   class="form-control input-sm">
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="col-lg-offset-4 col-lg-10">
                            <button type="submit" 
                                    class="btn btn-info">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop