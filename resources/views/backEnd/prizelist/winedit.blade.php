@extends('backEnd.layout')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3><i class="material-icons">&#xe3c9;</i>Edit Winning Prize And Points</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ trans('backLang.home') }}</a> /
                    <a href="">{{ trans('backLang.settings') }}</a> /
                   
                </small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link" href="{{route("winprize")}}">
                            <i class="material-icons md-18">×</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                {{Form::open(['route'=>['winprizeUpdate',$prizelists->id],'method'=>'POST', 'files' => true])}}
				    <label for="User name"
                               class="col-sm-2 form-control-label">User Name</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <select name="user_name" id="user_name" required
                                        class="form-control c-select">
                                    <option value="">- -Select User - -</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id  }}" {!! ($user->id==$prizelists->user_id) ? "selected='selected'":"" !!}>{{ $user->first_name }} {{ $user->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                <div class="form-group row">
                    <label for="prize "
                           class="col-sm-2 form-control-label">Wining Prize 
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('prize',$prizelists->prize, array('placeholder' => '','class' => 'form-control','id'=>'prize', 'name'=>'prize','required'=>'')) !!}
                    </div>
                </div>
				

                <div class="form-group row">
                    <label for="points"
                           class="col-sm-2 form-control-label">Wining Points
                    </label>
                    <div class="col-sm-10">
                        {!! Form::text('point',$prizelists->point, array('placeholder' => '','class' => 'form-control','id'=>'points','required'=>'')) !!}
                    </div>
                </div>

               
               

                <div class="form-group row m-t-md">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> {!! trans('backLang.update') !!}</button>
                        <a href="{{route("winprize")}}"
                           class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> {!! trans('backLang.cancel') !!}</a>
                    </div>
                </div>

                {{Form::close()}}
            </div>
        </div>
    </div>

@endsection
