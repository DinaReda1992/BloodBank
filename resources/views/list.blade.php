<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
    <div class="row pt-5 justify-content-center">
    <div class="card" style= "width:50%">
        <div class="card-header text-center">
            <h1>All Doners</h1>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($doners as $doner)
                <li class='list-group-item text-muted d-flex justify-content-between'>
                    <label>{{$doner->firstName}} {{$doner->lastName}}</label>
                    <label class="float-right">
                        <a class="mx-1 text-primary" href="{{ url('doners/'.$doner->id.'/edit') }}">
                            <i class="far fa-edit"></i>
                        </a>
                        <form class="d-inline" action="{{ route('destroy/', $doner->id) }}" method="POST">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button class="btn btn-link p-0 m-0 mx-1 text-danger">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        <a class="mx-1 text-info" href="{{ url('doners/'.$doner->id) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                    </label>
                </li>
                @endforeach
            </ul>
            <div class="text-center mt-4">
                <a href="{{ url('/create') }}" class="btn btn-info">
                    Create
                </a>
            </div>
        </div>
    </div>
    </div>
</div>
</x-app-layout>
