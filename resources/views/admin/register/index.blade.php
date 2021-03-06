@extends("layouts.admin")

@section("content")
    <div class="row">
        <h2>Danh Sách Dăng Kí</h2>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Start</th>
                    <th>End</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($registers as $register)
                    <?php
                    $patient = $register->Patient;
                    $doctor = $register->Doctor;
                    ?>
                    <tr>
                        <td>{{ $register->id }}</td>
                        <td>{{ $patient->User->full_name() }}</td>
                        <td>{{ $doctor->User->full_name() }}</td>
                        <td>{{ $register->start }}</td>
                        <td>{{ $register->end }}</td>
                        <td>
                            <a href="{{ route('admin.register.show',$register->id) }}">Show</a> |
                            <a href="#"  onclick="$('#delete-{{ $register->id }}').submit()"  >Delete</a>
                            <form  method="post" id="delete-{{ $register->id }}" action="{{ route('admin.register.destroy',$register->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            {{ $registers->render() }}
        </div>
    </div>

@endsection