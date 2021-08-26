@extends('company.company-layout.master')

@section('company-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="{{url('company/1/jobs/create')}}" class="btn btn-primary float-right">Post Job</a>
                <h4>All Jobs</h4>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Job Title</th>
                                <th>Job Aprrove</th>
                                <th>Job Type</th>
                                <th>Salary</th>
                                <th>Working Hour</th>
                                <th>Contact Information</th>
                                <th>Requirement</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                                <tr>
                                    <td>{{$job->title}}</td>
                                    <td>
                                        @if($job->approve_status == 0)
                                            <span class="badge badge-primary">Waiting Approve</span>
                                        @else
                                            <span class="badge badge-primary">Approved</span>
                                        @endif
                                    </td>
                                    <td>Job Type</td>
                                    <td>Salary</td>
                                    <td>Working Hour</td>
                                    <td>Contact Information</td>
                                    <td>Requirement</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf

                                            <a href="#" class="btn btn-warning">Edit</a>
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
