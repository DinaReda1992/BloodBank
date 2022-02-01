<!DOCTYPE html>
<html lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <div class="container">
            <div class="row pt-5 justify-content-center">
            <div class="card" style="width:50%">
            <div class="card-header text-center">
                <h1>O-</h1>
            </div>
            <div class="card-body">
                <table class="">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Last Doner</th>
                    </tr>
                        @foreach ($doners as $doner)
                        @if($doner->bloodType=='O-')
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
                                    {{ $doner->address }}
                                </td>
                                <td>
                                    {{ $doner->lastDonate }}
                                </td>
                             @endif
                        @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
