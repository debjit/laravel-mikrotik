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
            <h1 class="page-header">Manajemen Mikrotik</h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="glyphicon glyphicon-pencil">
                        <strong>    Add Mikrotik </strong>
                    </i>
                </div>
                <div class="panel-body">

                </div>

                <!--{{ HTML::ul($errors->all()) }}-->

                <form class="form-horizontal" 
                      method="post" 
                      action="{{ URL::to('/mikrotik/store') }}">

                    <div class="form-group">
                        <label for="connect" 
                               class="col-lg-4 control-label">
                            Connect</label>
                        <div class="col-lg-4">
                            <input type="text" name="connect" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" 
                               class="col-lg-4 control-label">
                            Username</label>
                        <div class="col-lg-4">
                            <input type="text" name="username" 
                                   class="form-control input-sm">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" 
                               class="col-lg-4 control-label">
                            Password</label>
                        <div class="col-lg-4">
                            <input type="text" name="password" 
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