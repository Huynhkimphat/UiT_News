@extends('layouts.app')

@section('content')
<a href="../MainPage/index.html" class="btn btn-warning">Back</a>

        <div class="row mt-4">
            <div class="col-md-4 col-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Customer's email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">Search</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Email</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Returning</th>
                            <th scope="col">Send Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>kimphat.devcs@gmail.com</td>
                            <td>100</td>
                            <td>10</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Send
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>kimphat.devcs@gmail.com</td>
                            <td>100</td>
                            <td>10</td>

                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Send
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>kimphat.devcs@gmail.com</td>
                            <td>100</td>
                            <td>10</td>

                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Send
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>kimphat.devcs@gmail.com</td>
                            <td>100</td>
                            <td>10</td>

                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Send
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">To kimphat.devcs@gmail.com</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
@endsection
