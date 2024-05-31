@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="content">
            <div class="head">
                <h5>Halaman Dashboard</h5>
            </div>
            <div class="card">
                <div class="table">
                    <table class="table" style="border: 5px">
                        <thead class="table-info">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Dokter</th>
                                <th class="text-center">Spesialis</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($dokter as $item)
                                <tr id="{{ $item->id }}">
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->spesialis }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>
                                        <div class="tombol" style="display: flex;">
                                            <a href="{{ route('edit.doctor', ['id' => $item->id]) }}" class="btn btn-sm btn-primary" style="margin-right: 0.5rem">
                                                <i class="fas fa-sm fa-cog"></i>
                                                <span>Edit</span>
                                            </a>
                                            <form action="{{ route('delete.doctor', ['id' => $item->id]) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this doctor?')">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="paginate">
                        {{ $dokter->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
