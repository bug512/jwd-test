@extends('layouts.jobs')
@section('title', Lang::get('Jobs.add_job'))
@section('count_jobs', $count_jobs)
@section('content')
    <div class="row">
        @if(Session::has('success'))
            <div class="alert alert-info">
                {{Session::get('success')}}
            </div>
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>


        {!! Form::open(array('url' => 'jobs/add', 'class' => 'form')) !!}

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.company_name')) !!}
            {!! Form::text('company_name', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.company_name'))) !!}
        </div>
        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.company_href')) !!}
            {!! Form::text('company_href', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.company_href'))) !!}
        </div>

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.company_description')) !!}
            {!! Form::textarea('company_description', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.company_description'))) !!}
        </div>

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_name')) !!}
            {!! Form::text('job_name', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_name'))) !!}
        </div>
        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_salary')) !!}
            {!! Form::text('job_salary', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_salary'))) !!}
        </div>
        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_region')) !!}
            {!! Form::text('job_region', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_region'))) !!}
        </div>
        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_experience')) !!}
            {!! Form::text('job_experience', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_experience'))) !!}
        </div>

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.company_email')) !!}
            {!! Form::text('company_email', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.company_email'))) !!}
            <div id="invalid_email" class="alert alert-danger" style="display: none" role="alert">{{Lang::get('Jobs.error_company_email')}}</div>
        </div>

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_description')) !!}
            {!! Form::textarea('job_description', null,
            array('required',
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_description'))) !!}
        </div>


        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_minimal_req')) !!}
            {!! Form::textarea('job_minimal_req', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_minimal_req'))) !!}
        </div>

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_desirable_req')) !!}
            {!! Form::textarea('job_desirable_req', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_desirable_req'))) !!}
        </div>

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_duties')) !!}
            {!! Form::textarea('job_duties', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_duties'))) !!}
        </div>

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_add_description')) !!}
            {!! Form::textarea('job_add_description', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_add_description'))) !!}
        </div>

        <div class="form-group">
            {!! Form::label(Lang::get('Jobs.job_type_employment')) !!}
            {!! Form::text('job_type_employment', null,
            array(
            'class'=>'form-control',
            'placeholder'=>Lang::get('Jobs.job_type_employment'))) !!}
        </div>

        <div class="form-group">
            {!! Form::submit(Lang::get('Jobs.add_job'),
            array('class'=>'btn btn-primary')) !!}
        </div>
        {!! Form::close() !!}
    </div>
    {{--<div class="list-group">
        <div class="list-group-item">
            <div class="list-group-item-heading">Тестовая вакансия</div>
            <div class="list-group-item-text">Описание тестовой вакансии</div>
        </div>
    </div>--}}
@stop