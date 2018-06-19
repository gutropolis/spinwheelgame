@extends('backEnd.layout')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe02e;</i>New Prize</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ trans('backLang.home') }}</a> /
                    <a href="">{{ trans('backLang.settings') }}</a> /
                    <a href="">{{ trans('backLang.usersPermissions') }}</a>
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="{{route("prizelist")}}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                {{Form::open(['route'=>['prizeStore'],'method'=>'POST', 'files' => true ])}}

                <div class="form-group row">
                    <label for="prize"
                           class="col-sm-2 form-control-label">Prize Name
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('prize','', array('placeholder' => '','class' => 'form-control','id'=>'prize','required'=>'')) !!}
                    </div>
                </div>
				<div class="form-group row">
                    <label for="prize"
                           class="col-sm-2 form-control-label">Description
                    </label>
                    <div class="col-sm-10">
                        {!! Form::textarea('description','', array('placeholder' => '','class' => 'form-control','id'=>'description', 'rows' => 3, 'cols' => 40,'required'=>'')) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="points"
                           class="col-sm-2 form-control-label">Add Points
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('points','', array('placeholder' => '','class' => 'form-control','id'=>'points','required'=>'')) !!}
                    </div>
                </div>


                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> {!! trans('backLang.add') !!}</button>
                        <a href="{{route("users")}}"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> {!! trans('backLang.cancel') !!}</a>
                    </div>
                </div>

                {{Form::close()}}
            </div>
        </div>
    </div>

@endsection
