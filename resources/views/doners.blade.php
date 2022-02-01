<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="container">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/doners" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">All Blood Types</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="/A+" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">A+</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/A-" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">A-</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/B+" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">B+</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/B-" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">B-</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/AB+" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">AB+</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/AB-" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">AB-</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/O+" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">O+</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/O-" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">O-</span>
                            </a>
                        </li>
                        </ul>
                </div>
            </div>
            <div class="row pt-5 justify-content-center">
            <div class="card" style="width:50%">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{session()->get('success')}}
                </div>
            @endif
            @if(session()->has('addition'))
                <div class="alert alert-success">
                    {{session()->get('addition')}}
                </div>
            @endif
            @if(session()->has('deletion'))
                <div class="alert alert-danger">
                    {{session()->get('deletion')}}
                </div>
            @endif
            <div class="card-header text-center">
                <h1>All Doners</h1>
            </div>
            <div class="card-body">
                <table class="">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Mobile</th>
                        <th>Blood Type</th>
                        <th>Address</th>
                        <th>Last Doner</th>
                        @if (auth()->user()->isAdmin==1)
                        <th>Actions</th>
                        @endif
                    </tr>
                        @foreach ($doners as $doner)
                            <tr>
                                <td class='list-group-item text-muted d-flex justify-content-between'>
                                    {{ $doner->firstName }} {{ $doner->secondName }} {{ $doner->thirdName }} {{ $doner->lastName }}
                                </td>
                                <td>
                                    {{ $doner->age }}
                                </td>
                                <td>
                                    {{ $doner->mobile }}
                                </td>
                                <td>
                                    {{ $doner->bloodType }}
                                </td>
                                <td>
                                    {{ $doner->address }}
                                </td>
                                <td>
                                    {{ $doner->lastDonate }}
                                </td>
                                @if (auth()->user()->isAdmin==1)
                                <td>
                                    <form class="d-inline" action="{{ route('destroy', $doner->id) }}"
                                    method="PUT">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button class="btn btn-link p-0 m-0 mx-1 text-danger">
                                       <i class='fa-fa-trash-o'> Delete </i>
                                    </button>
                                    </form>
                                    <button><a href="{{ url('/doners/' . $doner->id . '/edit') }}" class="btn btn-success">Update</a></button>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                </table>
                <div class="text-center mt-4">
                    @if (auth()->user()->isAdmin==1)
                    <a href="{{ url('doners/create') }}" class="btn btn-info">
                        Add New Member
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>

