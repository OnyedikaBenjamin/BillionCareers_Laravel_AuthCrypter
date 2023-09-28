@extends('header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1></h1>Job Posted Successfully </h1></div>
                <div class="card-body">
                    <p>Your job listing has been posted successfully!</p>
                    <a href="{{ url('/') }}" class="btn btn-primary">Go Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
</div>
