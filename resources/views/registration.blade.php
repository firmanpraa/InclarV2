@extends('app')
@section('body')
<div style = "height: 60px;" ></div>
<section class="subscribe-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1>SUBSCRIBE</h1>
                <p>Please subscribe to our newsletter so you can learn the updates for new
                    products before anyone else. Also we will spam your mailbox.</p>
                <hr class="divider">
                    <form action="" role="form">
                        <label for="subscribe1">First name:</label>
                        <input
                            type="text"
                            placeholder="Enter your email address"
                            name="subscribe1"
                            id="subscribe-input"
                            class="form-control input-lg"
                            style="margin-bottom: 20px;">
                            <label for="subscribe2">First name:</label>
                            <input
                                type="text"
                                placeholder="Enter your email address"
                                name="subscribe2"
                                id="subscribe-input"
                                class="form-control input-lg">
                                <label for="subscribe3">First name:</label>
                                <input
                                    type="text"
                                    placeholder="Enter your email address"
                                    name="subscribe3t"
                                    id="subscribe-input"
                                    class="form-control input-lg">
                                    <label for="subscribe4">First name:</label>
                                    <input
                                        type="text"
                                        placeholder="Enter your email address"
                                        name="subscribe4"
                                        id="subscribe-input"
                                        class="form-control input-lg">
                                        <button
                                            class="btn-warning btn btn-lg"
                                            style="position: relative; float: right; background-color:#F2B705; margin-top: 32px;">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    
                    @endsection