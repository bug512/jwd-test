@extends('layouts.jobs')
@section('title', Lang::get('Jobs.list_jobs'))
@section('count_jobs', $count_jobs)
@section('content')

    <div class="row">
        @foreach ($jobs as $job)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>{{$job->job_name}}</h3>

                        <p>{{$job->job_description}}</p>
                        <dl class="dl-horizontal">
                            @if ($job->job_salary )
                                <dt>{{Lang::get('Jobs.job_salary')}}</dt>
                                <dd>{{$job->job_salary}}</dd>
                            @endif
                            @if ($job->job_experience != "")
                                <dt>{{Lang::get('Jobs.job_experience')}}</dt>
                                <dd>{{$job->job_experience}}</dd>
                            @endif
                            @if ($job->company_name != "")
                                <dt>{{Lang::get('Jobs.company_name')}}</dt>
                                <dd>{{$job->company_name}}</dd>
                            @endif
                            @if ($job->company_href != "")
                                <dt>{{Lang::get('Jobs.company_href')}}</dt>
                                <dd>{{$job->company_href}}</dd>
                            @endif
                            @if ($job->job_region != "")
                                <dt>{{Lang::get('Jobs.job_region')}}</dt>
                                <dd>{{$job->job_region}}</dd>
                            @endif
                        </dl>
                        <p><a href="#" class="btn btn-primary" role="button">Отправить резюме</a></p>
                    </div>
                </div>
            </div>
        @endforeach


    </div>

    {{--<div class="list-group">
        <div class="list-group-item">
            <div class="list-group-item-heading">Тестовая вакансия</div>
            <div class="list-group-item-text">Описание тестовой вакансии</div>
        </div>
    </div>--}}
@stop