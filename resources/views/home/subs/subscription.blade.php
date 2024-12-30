@extends('layouts.main')
@section('content')
<div class="container py-5">
    <h2 class="text-center mb-4">Choose Your Subscription Plan</h2>
    <div class="row justify-content-center">

        <!-- Basic Plan -->
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Basic</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">$10<span class="text-muted fs-6">/month</span></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>✔ 10 GB Storage</li>
                        <li>✔ Email Support</li>
                        <li>✔ Basic Analytics</li>
                    </ul>
                    <form method="POST" action="/subscribe">
                        @csrf
                        <input type="hidden" name="plan" value="basic">
                        <button type="submit" class="btn btn-primary">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Business Plan -->
        <div class="col-md-4">
            <div class="card text-center shadow-sm">
                <div class="card-header bg-success text-white">
                    <h4>Business</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title">$30<span class="text-muted fs-6">/month</span></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>✔ 100 GB Storage</li>
                        <li>✔ Priority Support</li>
                        <li>✔ Advanced Analytics</li>
                    </ul>
                    <form method="POST" action="/subscribe">
                        @csrf
                        <input type="hidden" name="plan" value="business">
                        <button type="submit" class="btn btn-success">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection