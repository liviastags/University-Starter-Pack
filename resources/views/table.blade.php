@extends('layouts.template')

@section('content')

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header">
            <h3>Data Mahasiswa</h3>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-striped">
<thead>
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Kelas</td>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Chosooo</td>
        <td>B</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Seendi</td>
        <td>A</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Eming</td>
        <td>Z</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Achay</td>
        <td>Z</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Funny</td>
        <td>0</td>
    </tr>
</tbody>
</table>
        </div>
    </div>
</div>

@endsection