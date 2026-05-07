@extends('layouts.app')

@section('title', 'Audit Log')

@section('content')

<div class="page-header">
    <h3 class="fw-bold mb-3">
        Audit Log
    </h3>
</div>

<div class="card">

    <div class="card-body">

        <div class="table-responsive">

            <table
                id="tlogTable"
                class="display table table-striped table-hover"
            >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>

                <tbody>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection

@push('scripts')

<script>

async function loadTlog()
{
    try {

        const response = await api.get('/tlog');

        $('#tlogTable').DataTable({
            destroy: true,
            data: response.data,
            columns: [
                { data: 'id' },
                { data: 'tanggal' },
                { data: 'jam' },
                { data: 'keterangan' },
            ]
        });

    } catch (error) {

        logout();

    }
}

loadTlog();

</script>

@endpush
