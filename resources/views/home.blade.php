@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Blogs Form </h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success"> Delete Blogs</a>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-success"> Edit Blogs</a>
                            </div>
                           
                            <div class="pull-right">
                                <a class="btn btn-success"> View Blogs</a>
                            </div>
                            
                            
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
