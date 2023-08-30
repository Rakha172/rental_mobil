@extends('components.main')
@include('layouts.navbar')
<div class="container mt-5">
    <div class="card">
        <h3 class="text-center mt-5">DATA ORDER</h3>
        <div class="card-body">
            <div class="shadow p-3 mb-5 bg-body rounded">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">No</th>
                            <th scope="col">Name User</th>
                            <th scope="col">Vehicle Package</th>
                            <th scope="col">Rental Date</th>
                            <th scope="col">Return Date</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="col">1</td>
                            <td scope="col">Ahmad</td>
                            <td scope="col">Rp.300.000|3 Day</td>
                            <td scope="col">12/10/2023</td>
                            <td scope="col">15/10/2023</td>
                            <td scope="col">Gopay</td>
                            <td scope="col">10/10/2023|12:40:59</td>
                            <td scope="col"> <button class="btn btn-primary">Approved</button></td>
                            <td scope="col">
                                <input name="_metdod" type="hidden" value="DELETE">
                                <button type="submit"
                                    class="btn btn-xs btn-danger btn-flatshow-alert-delete-box btn-sm"
                                    data-toggle="tooltip" title='Delete'><ion-icon name="trash"
                                        style="font-size: 25px"></ ion-icon></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
