@extends('layouts.app')

@section('content')
    <div class="container">
        @include('layouts.flash-messages')
        <div class="row">
            <div class="col-sm-5">
                <h3>ご注文内容:</h3>
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-header" style="background-color: #D9E5FF;">予約内容</div>
                    <div class="card-body">
                        <p class="card-text">チェックイン:<br>チェックアウト:</p>
                    </div>
                    <div class="card-footer bg-transparent border-primary">選択中の部屋タイプ：<br>{{ $room_type_name ?? '' }}</div>
                </div>
            </div>
            <div class="col-sm-7">
                {!! Form::open([
                    'route' => ['bookings.store', $room],
                    'method' => 'post',
                ]) !!}
                {{ csrf_field() }}
                    <h3>宿泊者の情報を入力してください</h3>
                    <div class="col-md-12">
                        <div class="form-group row">
                            {!! Form::label('first_name', __('validation.attributes.first_name'), ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('first_name', null, [
                                        'class' => 'form-control'.($errors->has('first_name') ? ' is-invalid' : ''),
                                        'placeholder' => __('validation.attributes.first_name'),
                                ]) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('last_name', __('validation.attributes.last_name'), ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('last_name', null, [
                                        'class' => 'form-control'.($errors->has('first_name') ? ' is-invalid' : ''),
                                        'placeholder' => __('validation.attributes.last_name'),
                                ]) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('email', __('validation.attributes.email'), ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('email', null, [
                                        'class' => 'form-control'.($errors->has('email') ? ' is-invalid' : ''),
                                        'placeholder' => __('validation.attributes.email'),
                                ]) !!}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">予約を確定する</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
