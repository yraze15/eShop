@extends('layout.master')

@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h1 class="page-name">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">my account</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="user-dashboard page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('user._link')
                    <div class="dashboard-wrapper user-dashboard">
                        <div class="media">
                            <div class="pull-left">
                                <img class="media-object user-img" src="{{ asset('images/avater.jpg') }}" alt="Image">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading">Welcome Adam Smith</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure, est. Sit mollitia
                                    est maxime! Eos
                                    cupiditate tempore, tempora omnis. Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit. Enim, nihil. </p>
                            </div>
                        </div>
                        <div class="total-order mt-20">
                            <h4>Total Orders</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Items</th>
                                            <th>Total Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#!">#252125</a></td>
                                            <td>Mar 25, 2016</td>
                                            <td>2</td>
                                            <td>$ 99.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#!">#252125</a></td>
                                            <td>Mar 25, 2016</td>
                                            <td>2</td>
                                            <td>$ 99.00</td>
                                        </tr>
                                        <tr>
                                            <td><a href="#!">#252125</a></td>
                                            <td>Mar 25, 2016</td>
                                            <td>2</td>
                                            <td>$ 99.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
